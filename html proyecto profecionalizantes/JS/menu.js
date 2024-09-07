// menu
const logo = document.querySelector('.logo');
const menuDesplegable = document.querySelector('.menu_desplegable');


logo.addEventListener('click', ()=>{
    logo.classList.toggle("active");
    menuDesplegable.classList.toggle("click");
})
// despliege hacia abajo <p>


const pregu = document.querySelector('.pregu');
const infoPreg = document.querySelector('.info_preg');
// const preguDesplega= document.querySelector ('pregunta_deslisable');



    pregu.addEventListener('click', ()=>{
        infoPreg.classList.toggle("desple");

        // let height = 0;
        // let menu= infoPreg;
        // console.log (menu.scrollHeight)
        // if (menu.clienHeight == '0' ){
        //     height=menu.scrollHeight;
        // }
        
        // menu.style.height = `${height}px`;
    })
