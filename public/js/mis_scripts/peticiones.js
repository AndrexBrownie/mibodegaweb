//document.getElementById("btnbuscar").addEventListener("click", getdocumento,)
function getdocumento(event) {
    
    event.preventDefault()
    let inputdocumento = document.getElementById("documento").value
    let nombres = document.getElementById("nombres")
    let apellidos = document.getElementById("apellidos")
    let telefono = document.getElementById("telefono")
    let email = document.getElementById("email")
    let nacimiento = document.getElementById("nacimiento")
   
    let url = "/client/get"
    let formData = new FormData()
    formData.append("documento", inputdocumento)

    fetch(url, {
        method: "POST",
        body: formData,
        mode: "cors"
    }).then(response => response.json())
        .then(data => {
            nombres.value = data.nombres
            apellidos.value = data.apellidos
            email.value = data.email
            telefono.value = data.telefono
            nacimiento.value = data.nacimiento
        
    }).catch(err => console.log(err))
}