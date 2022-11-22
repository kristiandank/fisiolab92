const icomenu = document.querySelector('.icomenu')
const menu = document.querySelector('.menu-navegacion')


icomenu.addEventListener('click', ()=>{
    menu.classList.toggle("spread")
})

window.addEventListener('click', e =>{
    if(menu.classList.contains('spread') 
        && e.target != menu && e.target != icomenu){
        console.log('cerrar')
        menu.classList.toggle("spread")
    }
})