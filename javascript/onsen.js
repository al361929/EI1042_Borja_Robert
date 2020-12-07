/* Funciones para mover el carrusel */
var prev = function() {
    var carousel = document.getElementById('carousel');
    carousel.prev();
  };

  var next = function() {
    var carousel = document.getElementById('carousel');
    carousel.next();
  };

  /* Función para añadir un elemento al carrusel */
  function addItem(lista){
    let long = lista.length
    for(var i = 0; i<long; i++){

        let nodo = document.createElement('ons-carousel-item')
        nodo.classList.add('onsenItem')
        nodo.style.backgroundColor = "grey"
        nodo.innerHTML = `<div class="itemName">${lista[i].nombre}</div>`

        let item = document.createElement('div')
        item.id = lista[i].id
        item.classList.add('imageCont')

        let img = document.createElement('img')
        img.src = "./image/" + lista[i].url
        img.width = 100
        img.height = 100
        img.classList.add('itemImage')
        item.appendChild(img)
        
        let contBoton = document.createElement('div')
        contBoton.classList.add('itemButton')
        
        let boton = document.createElement('ons-button')
        boton.textContent = 'Añadir al carrito'
        boton.onclick = anyadeArticuloOnsen.bind(lista[i])
        contBoton.appendChild(boton)
        
        nodo.appendChild(item)
        nodo.appendChild(contBoton)
        document.getElementById('carousel').appendChild(nodo)
    }        
    
  }

  /* Ejemplo para añadir elementos al carrusel cuando se carga una página */
  document.addEventListener("init", function(event) {
        var page = event.target;
        if( page.matches('#page1') ) { 
           cargaDatosOnsen()
        }
  })



  function anyadeArticuloOnsen(){
    var articulos = JSON.parse(localStorage.getItem("carrito"));
    let newArticulo = [this.id, this.nombre];
    articulos.push(newArticulo);
    localStorage.setItem("carrito", JSON.stringify(articulos));
  }