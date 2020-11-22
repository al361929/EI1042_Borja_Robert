// Creamos el carrito
if(localStorage.getItem('carrito')==null){
  var carrito = []
  localStorage.setItem('carrito', JSON.stringify(carrito))
}

function cargaCarrito(){
  let carrito = JSON.parse(localStorage.getItem('carrito'))
  if (document.getElementById('list').hasChildNodes()) { // De esta manera evitamos que cada vez que le damos a carrito, se dupliquen los artículos
    var lista = document.getElementById('list');
    while (lista.firstChild) {
      lista.removeChild(lista.firstChild);
    }
  }
  carrito.forEach(articulo => cargaArticulo(articulo[0], articulo[1]))
}

function cargaArticulo(id, articulo){
  let nodo = document.createElement('li')
  let span = document.createElement('span')
  span.classList.add('articulo') // añadimos una nueva clase al atributo 'class'

  if (articulo) {
      span.textContent = articulo
  }else{ /*si el contenido es vacio return */
      span.textContent = document.getElementById('articulo').value
  }

  nodo.appendChild(span)

  let boton = document.createElement('button')
  boton.textContent = 'Eliminar'
  boton.value = id
  nodo.appendChild(boton)
  boton.onclick = borrarArticulo
  boton.classList.add('boton')

  document.getElementById('list').appendChild(nodo)
}

function anyadeArticulo(id_articulo, articulo){
  var articulos = JSON.parse(localStorage.getItem("carrito"));
  let newArticulo = [id_articulo, articulo];
  articulos.push(newArticulo);
  localStorage.setItem("carrito", JSON.stringify(articulos));
}


function borrarArticulo(){
  var carrito = JSON.parse(localStorage.getItem('carrito'))
  var carritoL = carrito.length
  for(i=0; i<carritoL; i++){
    if(carrito[i][0]==this.value){//Cuando encuentra el artículo que se desea eliminar, se elimina
      carrito.splice(i,1) // A partir del índice i borra 1 elemento
      break;
    }
      
  }
  localStorage.setItem('carrito', JSON.stringify(carrito))
  cargaCarrito()
}

function realizaCompra(){
  var carrito = JSON.parse(localStorage.getItem('carrito'))
  var srtCompra = ""
  carrito.forEach(x => {srtCompra = srtCompra.concat(x[0]), srtCompra = srtCompra.concat(",")})
  srtCompra = srtCompra.slice(0,-1)
  document.getElementById('inputArticulos').value=srtCompra
  carrito = []
  localStorage.setItem('carrito', JSON.stringify(carrito))
}



// VENTANA FLOTANTE SUBIR CARRITO
var ventanaCarrito = document.getElementById("ventanaCarrito");
var btnCarrito = document.getElementById("btnCarrito");
var spanCarrito = document.getElementsByClassName("closeCarrito")[0];

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