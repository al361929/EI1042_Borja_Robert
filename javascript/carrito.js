window.onload = creaCarrito();
function creaCarrito(){
    //alert('carrito creado')
    var carrito = [];
    carrito.push("arandelas")
    carrito.push("tornillos")
    localStorage.setItem("carrito", JSON.stringify(carrito));
  
}

function cargaCarrito(){
  let carrito = JSON.parse(localStorage.getItem('carrito'))
  alert(carrito)
  carrito.forEach(articulo => cargaArticulo(articulo))
}

function cargaArticulo(articulo){
  let nodo = document.createElement('li')
  let span = document.createElement('span')
  span.classList.add('articulo') // añadimos una nueva clase al atributo 'class'

  if (articulo) 
      span.textContent = articulo
  else /*si el contenido es vacio return */
      span.textContent = document.getElementById('articulo').value
  
  nodo.appendChild(span)

  let boton = document.createElement('button')
  boton.textContent = 'Eliminar'
  nodo.appendChild(boton)
  boton.onclick = eliminarArticulo()
  boton.classList.add('boton')

  document.getElementById('list').appendChild(nodo)
}

function anyadeArticulo(articulo){
  var articulos = JSON.parse(localStorage.getItem("carrito"));
  alert(articulo.value)
  articulos.push(articulo)
  localStorage.setItem("carrito", JSON.stringify(articulos))
}

function eliminarArticulo(){
  //this.parentNode.remove()
}



// VENTANA FLOTANTE SUBIR CARRITO
var ventanaCarrito = document.getElementById("ventanaCarrito");
var btnCarrito = document.getElementById("btnCarrito");
var spanCarrito = document.getElementsByClassName("close")[0];

// Para abrir la ventana
btnCarrito.onclick = function() {
  ventanaCarrito.style.display = "block";
  cargaCarrito();
}

// Para cerrar la ventana desde la cruz
spanCarrito.onclick = function() {
  ventanaCarrito.style.display = "none";
}

// Para cerrar la ventana haciendo click fuera de la ventana
window.onclick = function(event) {
  if (event.target == ventanaCarrito) {
    ventanaCarrito.style.display = "none";
  }
}