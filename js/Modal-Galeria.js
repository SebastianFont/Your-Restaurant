var imagenes = document.querySelectorAll('.gallery--img');
var modal= document.querySelector('#modal');
var img = document.querySelector('#modal--img');
var boton = document.querySelector('#modal--boton');

for(var i=0;i<imagenes.length;i++){
    imagenes[i].addEventListener('click',function(e){
        modal.classList.toggle("modal--open");
        var src = e.target.src;
        img.setAttribute("src", src);
    })
}

boton.addEventListener('click',function(){
    modal.classList.toggle("modal--open");
});