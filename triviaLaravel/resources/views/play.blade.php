@extends('welcome') @section('title') Jugar @endsection @section('content')

@section('style')
  <link rel="stylesheet" href="/css/estilo-jugar.css">
@endsection
<div class="mx-3 mt-3 justify-content-center">
<div class="__container container mx-auto">
  <div class="row">
    <div class="mx-auto justify-content-center mb-3 block-center col-lg-6" id="cajita" style="border-radius: 30px; background-color: #000">
      <div class="col-12 p-1 my-2 d-flex justify-content-center">
        <img class=" border border-dark" src="/img/7a0.png" alt="" style="width: 70%; height: 35%; border-radius: 20%; border: 1px solid black;">
      </div>
    <div>
      <h5 class="col-12 question text-center" style="color:#fff!important; font-size: 18px;">

        //aca ver mix controler play preguntaAResponder(unaPregunta)
            @foreach ($listadoPreguntas as $pregunta)
                      <p>mi pregunta {{ $pregunta->question }}</p>

                   @endforeach


      </h5>

        <div class="my-3 mx-3 progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0"
          aria-valuemax="100" style="width: 75%"></div>
        </div>


        <div class="col-12 botones mx-auto btn-group-vertical d-block" id="botones">
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="__btn btn btn-outline-warning btn-md col-12 mb-4">{{ $pregunta->option_1 }}</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="__btn btn btn-outline-success btn-md col-12 mb-4">{{ $pregunta->option_2 }}</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="__btn btn btn-outline-danger btn-md col-12 mb-4">{{ $pregunta->option_3 }}</button>
          <button type="button" style="border-radius: 30px; font-size: 14px;" class="__btn btn btn-outline-primary btn-md col-12 mb-4">{{ $pregunta->option_4 }}</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
