let boton = document.getElementById("botonIngreso");
let funEnviar = () => {
  let usuario = document.getElementById("lblUsuario").value;
  let password = parseInt(document.getElementById("lblPassword").value);
  console.log(usuario);
  if (usuario == "Alejo" && password == 12345) {
    window.open("/regstro.html", "_self");
  } else {
    Swal.fire({
      title: "Error datos invalidos",
      text: "Do you want to continue",
      icon: "error",
      confirmButtonText: "Cool",
    });
  }
};

boton.addEventListener("click", funEnviar);
