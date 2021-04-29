const verCat = document.querySelector('.ver-menu');
const despliegue = document.querySelector('.contenedor_categorias')
let contador =1;
verCat.addEventListener('click',()=>{
    
    if(contador==1){
        despliegue.style.setProperty("display", "block");
        contador=2
    }else {
        despliegue.style.setProperty("display", "none");
        contador=1;
       
    }
    console.log(contador)
    
})