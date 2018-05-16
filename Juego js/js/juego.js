"use strict";
let resultado = ['vacio','vacio','vacio','vacio','vacio'];
let contadorAcierto = 0;
let contadorVacio = 0;
let contadorBomba = 0;
let comienzoJuego = false;
let cantidadMarcas = 0;
let cantidadVacio = 5;
let cantPartidas = 0;
let row = 0;

let comienzo = document.getElementById('btncomienzo');
//Asigno evento al boton comienzo
comienzo.addEventListener('click', function(e){
  //si el juego no empezo
  if (!comienzoJuego){
    comienzoJuego = true;
    cantPartidas ++;
    //verificar modo de juego
    let modoJuego = document.getElementById('modoJuegoSl').value;
    //recorro todas las cartas para marcarlas o no
    for (let i = 0; i < 5; i++) {
      //agarro la carta en la posicion i
      let carta = document.getElementById(i);
      //marca fija (opcional)
      if (modoJuego=='Opcional' && i===0) {
        carta.src = "image/marca.png";
        resultado[i] = 'marca';
        cantidadMarcas++;
        cantidadVacio--;
      }
      else{
        let resultadoRandom=aleatorio(0.5);
        if (resultadoRandom===1){ //en caso de que sea error va al else y vuelve a considerar un 100% entre el error y la bomba. Si retorna 0 va al else
          carta.src = "image/marca.png";
          resultado[i] = 'marca';
          cantidadMarcas++;
          cantidadVacio--;
        }
        else{
          resultadoRandom=aleatorio(0.2); //aca se considera el 100% entre la marca y el error. Si retorna 0 va vacio
          if (resultadoRandom===1){
            carta.src = "image/bomba.png";
            resultado[i] = 'bomba';
            cantidadVacio--;
          }
        }
      }
    }
    //agarro el valor del input
    let milisegundos = document.getElementById('tiempo').value;
    setTimeout(function(){
      let cartas = document.getElementsByTagName('img'); //contiene arreglo de todas las cartas
      for (let i = 0; i < cartas.length; i++) {
        cartas[i].src = "image/dorso.png"; //reemplazo las cartas por el dorso y volver a darlas vueltas
      }
    }, milisegundos);
  }
});

function aleatorio(chance){
  let num=Math.random();
  if (num<=chance){
    return 1;
  }
  else{
    return 0;
  }
}

//traigo el valor del select
let eleccion = document.getElementById('seleccion');
//si ese valor cambio ejecuto la funcion
eleccion.addEventListener('change', function(e){
  if(eleccion.value != "" && comienzoJuego){
    let carta = document.getElementById(eleccion.value); //trae el valor de la eleccion en el select, guardar en una variable
    let valorCarta = resultado[eleccion.value]; // saco el nombre de la carta desde el arreglo
    carta.src = "image/"+valorCarta+".png";
    contadorResultado(valorCarta);
  }
});

function contadorResultado(valor){
  let partidaFinalizada = false;
  if(valor==='marca'){
    contadorAcierto += 1;
    let txtAcierto = document.getElementById('acierto');
    txtAcierto.innerHTML = "Acierto: " + contadorAcierto;
    if(contadorAcierto===cantidadMarcas){
      let txtResultado = document.getElementById('resultado');
      txtResultado.innerHTML = "GANASTE";
      //para volver a ejectuar el boton comienzo
      partidaFinalizada = true;
    }
  }
  else{
    if(valor==='vacio'){
      contadorVacio++;
      //suma la bomba a cantidad de errores
      let sumaErrores = contadorBomba+contadorVacio;
      let txtError = document.getElementById('error');
      txtError.innerHTML = "Errores: " + sumaErrores;
      if(contadorVacio===cantidadVacio){
        let txtResultado = document.getElementById('resultado');
        txtResultado.innerHTML = "PERDISTE";
        partidaFinalizada = true;
      }
    }
    else {
      if(valor==='bomba'){
        contadorBomba++;
        let sumaErrores = contadorBomba+contadorVacio;
        let txtError = document.getElementById('error');
        txtError.innerHTML = "Errores: " + sumaErrores;
        let txtResultado = document.getElementById('resultado');
        txtResultado.innerHTML = "PERDISTE";
        partidaFinalizada = true;
      }
    }
  }
  if (partidaFinalizada){
    calcularResutladoPartidas();
    setTimeout(function(){
      reiniciar();
    }, 2000);
  }
}

function reiniciar(){
  comienzoJuego = false;
  resultado = ['vacio','vacio','vacio','vacio','vacio'];
  contadorAcierto = 0;
  contadorVacio = 0;
  contadorBomba = 0;
  cantidadMarcas = 0;
  cantidadVacio = 5;
  for (let i = 0; i < 5; i++) {
    let carta = document.getElementById(i);
    carta.src = "image/dorso.png";
  }
  //pone el select en el campo vacio
  let reinicioSelect = document.getElementById('seleccion').value = "";
  let txtResultado = document.getElementById('resultado');
  txtResultado.innerHTML = " ";
  let txtAcierto = document.getElementById('acierto');
  txtAcierto.innerHTML = "Acierto: ";
  let txtError = document.getElementById('error');
  txtError.innerHTML = "Errores: ";
}

function calcularResutladoPartidas(){
  let sumaErrores = contadorBomba+contadorVacio;
  //chupo el tbody
  let tabla = document.getElementById("resultadoPartida");
  //inserto una fila en la posicion 0 (en el primer caso, por ejemplo)
  let fila = tabla.insertRow(row);
  //inserto columnas
  let cell1 = fila.insertCell(0);
  let cell2 = fila.insertCell(1);
  cell1.innerHTML = cantPartidas;
  cell2.innerHTML = contadorAcierto + "/" + sumaErrores;
  row++;
}
