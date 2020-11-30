if(document.getElementById('visor') != null){
    document.getElementById('visor').onload = cargaDatos();
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

function anañadeItem(lista){
    console.log('ETNTRO AL METODO')
    let long = lista.length
    for(var i = 0; i<long; i++){
        console.log(lista[i])
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
    }    

}