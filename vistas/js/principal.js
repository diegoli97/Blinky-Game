//Comprueba que el usuario esté iniciado: Si lo está ofrece las opciones para jugar, si no lo está lleva a login.php
function cambiarDisplay(usuarioIniciado) {
  if (usuarioIniciado) {
    document.getElementById("selectorDificultad").style.display = "flex";
  } else {
    window.location.replace("controladores/ControladorLogin.php");
  }
}

function displayNone() {
  document.getElementById("selectorDificultad").style.display = "none";
}

//Comprueba que el usuario esté iniciado: Si lo está cierra la sesión al pulsar el botón. Si no lo está lleva al login

function displayBoton($usuarioIniciado) {
  if ($usuarioIniciado) {
    window.location.replace("vistas/logout.php");
  } else {
    window.location.replace("controladores/ControladorLogin.php");
  }
}

//Comprueba que el usuario esté iniciado: Si lo está muestra el nombre de usuario y deshabilita el botón
//si no, muestra el botón de registrarse y el botón de cerrar sesión muestra Iniciar sesión
window.onload = function mostrarUsuario() {
  if (botonDesplegado) {
    document.getElementById("loginLogout").innerHTML = "Cerrar sesión";
    document.getElementById("nombreUsuario").style.cursor = "default";
    document.getElementById("nombreUsuario").disabled = true;
  }
};

//Si el usuario no está iniciado habilita el botón para que lleve a la página de registro
function irRegistro($usuarioIniciado) {
  if (!$usuarioIniciado) {
    window.location.href = "../controladores/ControladorRegistro.php";
  }
}
