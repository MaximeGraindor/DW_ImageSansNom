const imgResponsive = document.querySelector('.img__responsive')
const menuElt = document.querySelector('.header__menu')
const closeMenu = document.querySelector('.close-menu')

imgResponsive.addEventListener('click', () =>{
    menuElt.classList.toggle('responsive-menu')
})

closeMenu.addEventListener('click', ()=>{
    menuElt.classList.remove('responsive-menu')
})

function resizeForMenu(){
    window.requestAnimationFrame(resizeForMenu)

    if(window.innerWidth > 980){
        menuElt.classList.remove('responsive-menu')
    }

}

resizeForMenu()