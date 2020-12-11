// Cargamos los datos cuando se cargue el visor
if(document.getElementById('visor') != null){
    document.getElementById('visor').onload = cargaDatos();
} 

//Declaramos la variable global

var articulos = {}


function cargaCompra(){
    let lista = document.getElementById('lista').childNodes
    let producs = []
    for (var i = 0; i < lista.length; ++i) {
        if (lista[i].nodeName == 'ONS-LIST-ITEM'){
            producs.push(lista[i].id)
        }
    }
    fetch('./compras.php?productos=' + producs, {
        method: 'POST',
        headers: { 'Accept': 'application/json', 
                   'Content-Type': 'application/json' },
    })
    .then(response => {
        if (response.ok)
            return response.json()
        else
            throw response.statusText
    })
    .then(json => respuesta(json))
    .catch(err => console.log('Fetch Error :', err))
}

function cargaPrecios(){
    fetch('./precios.php?min=' + document.getElementById('min').value + '&max=' + document.getElementById('max').value, {
        method: 'POST',
        headers: { 'Accept': 'application/json', 
                   'Content-Type': 'application/json' },
    })
    .then(response => {
        if (response.ok)
            return response.json()
        else
            throw response.statusText
    })
    .then(json => anañadeItem(json))
    .catch(err => console.log('Fetch Error :', err))
}

function cargaDatos(){
    fetch('./datos.php', {
    method: 'POST',
    headers: { 'Accept': 'application/json', 
               'Content-Type': 'application/json' },
})
.then(response => {
    if (response.ok)
        return response.json()
    else
        throw response.statusText
})
.then(json => anañadeItem(json))
.catch(err => console.log('Fetch Error :', err))
}

// Añadimos los artículos al visor y al dataList
function anañadeItem(lista){
    let visor = document.getElementById('visor')
    console.log(lista)
    visor.innerHTML = ""
    let long = lista.length
    for(var i = 0; i<long; i++){

        //Para agregar los elementos al visor
        let item = document.createElement('div')
        item.classList.add('item')
        item.id = lista[i].id

        let img = document.createElement('img')
        img.src = "../image/" + lista[i].url
        img.width = 100
        img.height = 100
        item.appendChild(img)

        let p = document.createElement('p')
        p.innerHTML = lista[i].nombre + " " + lista[i].precio + "€"
        item.appendChild(p)

        let boton = document.createElement('button')
        boton.textContent = 'Añadir al carrito'
        boton.onclick = anyadeArticulo2.bind(lista[i])
        boton.classList.add('boton')
        item.appendChild(boton)

        document.getElementById('visor').appendChild(item)

        // Para agregar los elementos al buscador

        let option = document.createElement('option')
        option.value = lista[i].nombre
        document.getElementById('articulos').appendChild(option)

        // Añadimos los elementos a la variable global

        articulos[lista[i].nombre] = lista[i].id
    }        
    if(!visor.hasChildNodes()){
        let mensaje = document.createElement('h2')
        mensaje.classList.add('msg')
        mensaje.innerHTML = "No hay articulos entre esos precios!"
        visor.appendChild(mensaje)
    }

}

function muestraBusqueda(){
    let articulo = document.getElementById('buscador')
    let id = articulos[articulo.value]
    console.log(id)
    document.getElementById(id).scrollIntoView()
}



// ####### FUNCIONES PARA LA VERSIÓN DE ONSEN ########

function cargaDatosOnsen(){
    fetch('./datos.php', {
    method: 'POST',
    headers: { 'Accept': 'application/json', 
               'Content-Type': 'application/json' },
})
.then(response => {
    if (response.ok)
        return response.json()
    else
        throw response.statusText
})
.then(json => addItem(json))
.catch(err => console.log('Fetch Error :', err))
}