function handleFiles(e)	{
  let cnv = document.getElementById('canvas');
  let ctx	=	cnv.getContext('2d');
  ctx.canvas.width = window.innerWidth/4;
  ctx.canvas.height = window.innerHeight/3.5;
  let img	=	new	Image;
  cnv.style.display = "block";
  img.src	=	URL.createObjectURL(e.target.files[0]);
  img.onload	=	function()	{
                  ctx.drawImage(img,0,0, window.innerWidth/4, window.innerHeight/3.5);
  }
}


//Para que al subir la foto, cargue los datos del formulario introducidos previamente
document.getElementById('formArticulo').onload=cargaDatos();

function cargaDatos(){
  try {
    document.getElementById('nombre').value = localStorage.getItem('name').replace('"','').replace('"','')
    document.getElementById('precio').value = localStorage.getItem('price').replace('"','').replace('"','')
    document.getElementById('foto_url').value = localStorage.getItem('url').replace('"','').replace('"','')
    localStorage.removeItem('name')
    localStorage.removeItem('price')
    localStorage.removeItem('url')
  } catch (error) {
  } 
}

// Comprobamos el tamaño del fichero
function compruebaTamaño(){
  try {
    let form = document.getElementById('form-foto')
    let file = document.getElementById('file');
    form.onsubmit = function(){
      if(file.files.item(0).size > 2000000){ // SOn bytes
        alert("La imagen no puede superar los 2MB")
        return false
      }
    }
  } catch (error) {
    alert(error)
  }

}

function guardaDatos(){
  let name = document.getElementById('nombre').value;
  let price = document.getElementById('precio').value;
  let url = document.getElementById('file').value;
  url = url.split("\\")[2];
  localStorage.setItem('name', JSON.stringify(name));
  localStorage.setItem('price', JSON.stringify(price));
  localStorage.setItem('url', JSON.stringify(url));

}


// VENTANA FLOTANTE SUBIR FOTOS
var ventana = document.getElementById("ventanaFlotante");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

// Para abrir la ventana
btn.onclick = function() {
  ventana.style.display = "block";
}

// Para cerrar la ventana desde la cruz
span.onclick = function() {
  ventana.style.display = "none";
}

// Para cerrar la ventana haciendo click fuera de la ventana
window.onclick = function(event) {
  if (event.target == ventana) {
    ventana.style.display = "none";
  }
}