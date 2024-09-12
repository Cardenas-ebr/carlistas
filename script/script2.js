const formulario = document.getElementById("iniciosesion");

formulario.addEventListener('submit', function (e) {
    e.preventDefault();

    const sesion = new FormData(formulario);


    fetch('./php/inicio-sesion.php', {
        method: 'POST',
        body: sesion
    })
        .then(response => response.text())
        .then(data => {
            if (data == "iniciar sesion") {
                alert("inicio de sesion correcto")
            } else if (data == "Contraseña incorrecta") {
                alert("Contraseña incorrecta")
            } else if (data == "usuario no existe") {
                alert("usuario no existe")
            }
        })
        .catch(e => {
            alert("Error al iniciar sesion", e)
        })
})