//Variables del cronómetro y la puntuación

var tiempoAcumuladoMilisegundos = 0;
const cronometro = document.getElementById("timer");
//Oculta el botón de play e inicia el cronometro
function iniciarJuego() {
  document.getElementById("divBotonJugar").style.display = "none";
  document.getElementById("divZonaJuego").style.display = "flex";

  intervaloContador = setInterval(sumarTiempo, 10);
}

//Cronómetro y puntuación

function sumarTiempo() {
  tiempoAcumuladoMilisegundos += 10;
  cronometro.innerHTML = imprimirTiempo(tiempoAcumuladoMilisegundos);
}

function imprimirTiempo(milisegundos) {
  let segundos = Math.floor(milisegundos / 1000);
  let minutos = Math.floor(segundos / 60);

  let imprimirMilisegundos = (milisegundos % 1000).toString().padStart(3, "0");
  let imprimirSegundos = (segundos % 60).toString().padStart(2, "0");
  let imprimirMinutos = minutos.toString().padStart(2, "0");

  let tiempo = imprimirMinutos.concat(
    ":",
    imprimirSegundos,
    ".",
    imprimirMilisegundos
  );

  return tiempo;
}

//Función que recoge la pulsación de los botones. Cuando acierte 10 se acaba la partida, si falla suma 1.500 segundos

/*let numeroAciertos = 0;

function botonPresionado(id_boton) {
  let botonClickado = document.getElementById(id_boton);

  if (botonClickado.className == "bueno") {
    numeroAciertos++;
    if (numeroAciertos == 10) {
      clearInterval(contador);
    }
  } else if (botonClickado.className == "malo") {
  }
}*/
