const Nuevo= document.getElementById("nuevo");
const pass = document.getElementById("password");
const contr = document.getElementById("contraseña");

Nuevo.addEventListener("submit", function (e) {
  e.preventDefault();
  const formulario = new FormData(Nuevo);
  
  if(pass.value == contr.value){
    fetch("php/create.php", {
      method: 'POST',
      body: formulario,
    })
      .then((response) => response.text())
      .then((data) => {
        alert("persona creada correctamente");
        Nuevo.reset();
      })
      .catch((error) => {
        console.log("error en la creacion", error);
        alert("error al crear la persona");
      });
  }else{
    alert("Las contraseñas no coinciden");
  }

  
});
