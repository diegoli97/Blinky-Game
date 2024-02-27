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

//Comprueba que el usuario esté iniciado: Si lo está cierra la sesión al pulsar el botón.

function displayBoton($usuarioIniciado) {
  if ($usuarioIniciado) {
    window.location.replace("vistas/logout.php");
  } else {
    alert("Sesión no iniciada");
  }
}

//Comprueba que el usuario esté iniciado: Si lo está cierra muestra el nombre de usuario
window.onload = function mostrarUsuario() {
  if (botonDesplegado) {
    document.getElementById("nombreUsuario").style.visibility = "visible";
  }
};
