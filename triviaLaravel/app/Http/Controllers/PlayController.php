<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\QuestionsController;

class PlayController extends QuestionsController
{
  public  function inicializarPuntaje() {
  //verificar funcion
      $unosPuntos = 0;
    return $unosPuntos;
  }



  public  function jugar3() {
      $listadoPreguntas = $this->listQuestion2();
    
      $puntos=0;
      $id=0;
      $vac = compact('pregunta', 'puntos', 'id');
    return view('play', $vac );
  }

  public  function jugar() {
      $listadoPreguntas = $this->listQuestion2();
      $puntos=0;
      $id=0;

    return view('play',   $listadoPreguntas );
  }

  public  function dameListadoDePreguntas() {
  //verificar funcion
      $listadoPreguntas = $this->listQuestion2();
    return  $listadoPreguntas;
  }



  public  function hayPreguntas($listadoPreguntas) {
  //verificar funcion

    return ($listadoPreguntas.length>0);
  }


  public  function verificarRespuesta($unaPreguntas,$unaRespuesta) {
  //verificar funcion

  $unosPuntos = 55;
  return $unosPuntos;
    return view('play', $unosPuntos);
 //return ($unaPreguntas.option_1==$unaRespuesta);


  //return view('play', $listadoPreguntas);
  }

  public  function preguntaAResponder($listadoPreguntas) {
  //verificar funcion
  if (hayPreguntas($listadoPreguntas))  {

   return (array_pop($listadoPreguntas));
    }

     }





//armando borrador del jugar


/* pasar código
jugar(unJugador) ó jugar()
inicializarPuntaje(unPuntaje) ó inicializarPuntaje(unPuntaje,unJugador)
dameListadoDePreguntas(unasPreguntas)>>function listQuestion2()
iniciarJuego(unJugador,unasPreguntas)
  {
while (hayPreguntas(unasPreguntas)and (estoyGanando()and(tiempoOk())  ) >>sigue jugando mientras hay preguntas para responder, sigue acertando y con "vidas de juego" y dentro del tiempo permitido
  {
     preguntaAResponder(unaPregunta)>>Me Devuelve una pregunta y la quita lista
     if verificarRespuesta(unaPreguntas,unaRespuesta) verifica si elige respuesta correcta
        {
        actualizarPuntajeGanador(unPuntaje) o (unPuntaje,unJugador)
        preguntaAResponder(unaPregunta)>>Me Devuelve una pregunta y la quita lista
      }else {
       actualizarPuntajePerdedor(unPuntaje) o (unPuntaje,unJugador)
       finDeJuego() o (unPuntaje,unJugador)
      }
}

ActualizarRanking(unPuntaje,unJugador)>>actualiza puntaje del jugador con lo obtenido en el juego
}
  return >> una vez finalizado retorna




  }*/
}
