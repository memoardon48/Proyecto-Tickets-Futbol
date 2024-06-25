const faqTag = document.querySelectorAll('.faq');


const hideTag = () =>{
    faqTag.forEach(item =>{
        item.classList.remove('open')
        item.children[1].innerHTML = '&#43;'
    })
}


faqTag.forEach(item =>{  
    item.addEventListener('click', e =>{
        if (e.target.className == 'btn') {
            hideTag()
            e.target.parentElement.classList.toggle('open');
            e.target.innerHTML = '&#8722;';
        }
    }) 
})