//Variables del cronómetro impreso, el tiempo total en milisegundos y el número de aciertos (son necesarios 10)

const cronometro = document.getElementById("timer");
const botonCero = document.getElementById("boton0");
const botonUno = document.getElementById("boton1");
let tiempoAcumuladoMilisegundos = 0;
let numeroAciertos = 0;
let botonAleatorio = 0;

//Oculta el botón de play e inicia el cronometro
function iniciarJuego() {
  document.getElementById("divBotonJugar").style.display = "none";
  document.getElementById("divZonaJuego").style.display = "flex";

  elegirBotonAleatorio();

  intervaloContador = setInterval(sumarTiempo, 10);
}

//Genera un número aleatorio entre 0 y 1 para determinar que botón será el bueno y el malo
function elegirBotonAleatorio() {
  botonAleatorio = Math.floor(Math.random() * 2);

  if (botonAleatorio == 0) {
    botonCero.classList.replace(botonCero.className, "bueno");
    botonUno.classList.replace(botonUno.className, "malo");
  } else {
    botonCero.classList.replace(botonCero.className, "malo");
    botonUno.classList.replace(botonUno.className, "bueno");
  }
}

//Cronómetro y puntuación

//Va sumando diez milisegundos, que es lo que tarda el intervalo, además de imprimir en pantalla y formateado el tiempo
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

//Funcion para que cuando acierte 10 se acaba la partida, si falla suma 1.500 segundos

function botonPresionado(id_boton) {
  let botonClickado = document.getElementById(id_boton);

  if (botonClickado.className == "bueno") {
    numeroAciertos++;
    if (numeroAciertos == 10) {
      clearInterval(intervaloContador);
      botonCero.classList.replace(botonCero.className, "neutra");
      botonUno.classList.replace(botonUno.className, "neutra");
      document.getElementById("puntuacionOculta").value =
        tiempoAcumuladoMilisegundos;
      document.getElementById("puntuacionOcultaImpresa").value =
        cronometro.innerHTML;
      document.getElementById("formularioOculto").style.display = "flex";
      return;
    }
    elegirBotonAleatorio();
  } else if (botonClickado.className == "malo") {
    tiempoAcumuladoMilisegundos += 1500;
    elegirBotonAleatorio();
  }
}
