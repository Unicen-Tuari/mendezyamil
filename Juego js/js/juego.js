"use strict";
let resultado = ['vacio','vacio','vacio','vacio','vacio'];
let contadorAcierto = 0;
let contadorError = 0;
let comienzo = document.getElementById('btncomienzo');
comienzo.addEventListener('click', function(e){
  for (let i = 0; i < 5; i++) {
    let carta = document.getElementById(i);
    let resultadoRandom=aleatorio(0.5); //aca se considera el 100% entre la marca y el error
    if (resultadoRandom===1){ //en caso de que sea error va al else y vuelve a considerar un 100% entre el error y la bomba
      carta.src = "image/marca.png";
      resultado[i] = 'marca';
    }
    else{
      resultadoRandom=aleatorio(0.2);
      if (resultadoRandom===1){
        carta.src = "image/bomba.png";
        resultado[i] = 'bomba';
      }
    }
  }

  setTimeout(function(){
    let cartas = document.getElementsByTagName('img'); //contiene arreglo de todas las cartas
    for (let i = 0; i < cartas.length; i++) {
      cartas[i].src = "image/dorso.png"; //reemplazo las cartas por el dorso y volver a darlas vueltas
    }
  }, 1000);

  //recorrer resultado y contar con contador cuantas "marcas" hay

  // let tablero = document.getElementsByTagName('main');
  // if (tablero.style.visibility === "hidden") {
  //     tablero.style.visibility = "visible";
  // } else {
  //     tablero.style.visibility = "hidden";
  // }
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

let eleccion = document.getElementById('seleccion');
eleccion.addEventListener('change', function(e){
  if(eleccion.value != ""){
    let carta = document.getElementById(eleccion.value); //trae el valor de la eleccion en el select, guardar en una variable
    let valorCarta = resultado[eleccion.value]; // tiene numero de la carta
    carta.src = "image/"+valorCarta+".png";
    let contadorAcierto = 0;
    let contadorError = 0;
    contadorFinal(valorCarta);
  }
});

function contadorFinal(valor){
  if(valor==='marca'){
    contadorAcierto += 1;
    let txtAcierto = document.getElementById('acierto');
    txtAcierto.innerHTML = "Acierto: " + contadorAcierto;
  }
  else{
    if(valor==='vacio'){
      contadorError += 1;
      let txtError = document.getElementById('error');
      txtError.innerHTML = "Errores: " + contadorError;
    }
    else {
      if(valor==='bomba'){
        let resultado = ['vacio','vacio','vacio','vacio','vacio'];
        let contadorAcierto = 0;
        let contadorError = 0;

        let txtResultado = document.getElementById('resultado');
        txtResultado.innerHTML = "PERDISTE";
      }
    }
  }
}

//QUEDA SABER CUANDO GANAS Y CUANDO PERDES, LUEGO REINICIAR TODOS LOS VALORES PARA QUE COMIENCE DE CERO
//contador con cantidad de marcas q hay (recorriendo resultado) = intentos
// el juego termina cuando:
//    caca = bomba
//    cada vez que llamas a change intento--, si intentos == 0 chau.. si adivinaste todas,ganaste.. si  al finalizar intentos
//    tenes un error, perdiste (no tenes q tener errores luego de terminar intentos) si tengo 3 marcas, tengo 3 intentos
//    y solo se corta si encuentro una bomba..

//cuando termina el juego llamo a funcion q resetea cartas en 'dorso.png' y reetea resultados[] y lo pone en 'vacio'
