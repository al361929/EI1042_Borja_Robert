window.onload = cargaDatos();
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
.then(json => console.log(JSON.stringify(json)))
.catch(err => console.log('Fetch Error :', err))
}