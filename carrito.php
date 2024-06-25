<?php
$mensaje = "";


if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){
        case 'Agregar':
            $idTicket = $_POST['idTicket'];

            $quer1= "SELECT * FROM ticket t INNER JOIN partido_zona pz ON t.id_partido_zona = pz.id WHERE t.id =".$idTicket;
            $sentencia1 = $pdo->prepare($quer1);
            $sentencia1->execute();
            $listaTicket = $sentencia1 ->fetchAll(PDO::FETCH_ASSOC);  
                        
            $quer2= "SELECT nombre FROM zona WHERE id =".$listaTicket[0]['id_zona'];
            $sentencia2 = $pdo->prepare($quer2);
            $sentencia2->execute();
            $listaZona = $sentencia2->fetchAll(PDO::FETCH_ASSOC);  
            
            $quer3= "SELECT fecha_hora, nombre FROM partido p INNER JOIN estadio e ON p.id_estadio = e.id WHERE p.id =".$listaTicket[0]['id_partido'];
            $sentencia3 = $pdo->prepare($quer3);
            $sentencia3->execute();
            $listaPartido = $sentencia3->fetchAll(PDO::FETCH_ASSOC);
            
            $quer4= "SELECT nombre FROM equipo_partido ep INNER JOIN equipo e ON ep.id_equipo = e.id  WHERE id_partido =".$listaTicket[0]['id_partido'];
            $sentencia4 = $pdo->prepare($quer4);
            $sentencia4->execute();
            $listaEquipos = $sentencia4->fetchAll(PDO::FETCH_ASSOC);
            
            
            if(!isset($_SESSION['CARRITO'])){
                $producto = array(
                     'idTicket' => $listaTicket[0]['id'],
                     'asiento' => $listaTicket[0]['asiento'],
                     'fila' => $listaTicket[0]['fila'],
                     'puerta' => $listaTicket[0]['puerta'],
                     'sector' => $listaTicket[0]['sector'],
                     'precio' => $listaTicket[0]['precio'],
                     'zona' => $listaZona[0]['nombre'],
                     'fecha_hora' => $listaPartido[0]['fecha_hora'],
                     'estadio' => $listaPartido[0]['nombre'],
                     'equipo1' => $listaEquipos[0]['nombre'],
                     'equipo2' => $listaEquipos[1]['nombre']                    
                );
                $_SESSION['CARRITO'][0] = $producto;
            }else{
                $NumeroProductos = count($_SESSION['CARRITO']);
                $producto = array(
                    'idTicket' => $listaTicket[0]['id'],
                    'asiento' => $listaTicket[0]['asiento'],
                    'fila' => $listaTicket[0]['fila'],
                    'puerta' => $listaTicket[0]['puerta'],
                    'sector' => $listaTicket[0]['sector'],
                    'precio' => $listaTicket[0]['precio'],
                    'zona' => $listaZona[0]['nombre'],
                    'fecha_hora' => $listaPartido[0]['fecha_hora'],
                    'estadio' => $listaPartido[0]['nombre'],
                    'equipo1' => $listaEquipos[0]['nombre'],
                    'equipo2' => $listaEquipos[1]['nombre']                    
               );
               $_SESSION['CARRITO'][$NumeroProductos] = $producto;
            }

            $sentencia6 = $pdo -> prepare("UPDATE ticket SET estado = 'apartado' WHERE (id = :idTicket);");
            $sentencia6->bindParam(":idTicket",$idTicket);
            $sentencia6->execute();
           
            $mensaje = print_r($_SESSION,true);

        break;
        case 'Eliminar':
            $idTicket = $_POST['id'];
            foreach($_SESSION['CARRITO'] as $indice => $producto){
                if($producto['idTicket'] == $idTicket){
                    unset($_SESSION['CARRITO'][$indice]);
                    
                }
            }

            $sentencia6 = $pdo -> prepare("UPDATE ticket SET estado = 'disponible' WHERE (id = :idTicket);");
            $sentencia6->bindParam(":idTicket",$idTicket);
            $sentencia6->execute();


        break;
        case 'Pagar':
            $total = 0;
            $usuario = $_SESSION['ID_USUARIO'];
            foreach($_SESSION['CARRITO'] as $indice => $producto){
                $total = $total + $producto['precio'];
            }
            $sentencia = $pdo -> prepare("INSERT INTO factura (total, id_usuario) VALUES (:Total, :idUsuario);");
            $sentencia->bindParam(":Total",$total);
            $sentencia->bindParam(":idUsuario",$usuario);
            $sentencia->execute();
            $idFactura = $pdo->lastInsertId();
            

            foreach($_SESSION['CARRITO'] as $indice => $producto){
                $sentencia7 = $pdo -> prepare("INSERT INTO detalle_factura (id_factura, id_ticket) VALUES (:idFactura, :idTicket);");
                $sentencia7->bindParam(":idFactura",$idFactura);
                $sentencia7->bindParam(":idTicket",$producto['idTicket']);
                
                $sentencia7->execute();
            }
            unset($_SESSION['CARRITO']);
            echo "<script>alert('Su compra ha sido realizada con éxito.')</script>";

        break;

            
    }
}


?>