//Comprueba que el usuario esté iniciado: Si lo está ofrece las opciones para jugar, si no lo está lleva a login.php
function cambiarDisplay(usuarioIniciado) {
  if (usuarioIniciado) {
    document.getElementById("selectorDificultad").style.display = "flex";
  } else {
    window.location.replace("vistas/login.php");
  }
}

function displayNone() {
  document.getElementById("selectorDificultad").style.display = "none";
}
