const containeringresados = document.getElementById("container-ingresados");
function cargaringresados() {
    fetch('./php/lista-ingresados.php')
        .then(response => response.json())
        .then(data => {
            console.log(data.ingresados);
            data.ingresados.forEach(element => {
                const div = document.createElement('div');
                div.className = 'ingreso';
                div.innerHTML = `
                    <h3>nombre:${element.primer_nombre}</h3>
                    <p>grado:${element.grado}</p>
                `;
                containeringresados.appendChild(div);
            });

        })
        .catch(e => console.log("Error", e))
}

cargaringresados();