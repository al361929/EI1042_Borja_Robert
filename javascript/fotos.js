function handleFiles(e)	{
  let ctx	=	document.getElementById('canvas').getContext('2d');
  let cnv = document.getElementById('canvas');
  let img	=	new	Image;
  cnv.style.display = "block";
  img.src	=	URL.createObjectURL(e.target.files[0]);
  img.onload	=	function()	{
                  ctx.drawImage(img,0,0);
  }
}

function cargaDatos(){
  document.getElementById('nombre').value = localStorage.getItem('name').replace('"','').replace('"','')
  document.getElementById('precio').value = localStorage.getItem('price').replace('"','').replace('"','')
  localStorage.removeItem('name')
  localStorage.removeItem('price')
}

function guardaDatos(){
  let name = document.getElementById('nombre').value;
  let price = document.getElementById('precio').value;
  localStorage.setItem('name', JSON.stringify(name));
  localStorage.setItem('price', JSON.stringify(price));
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