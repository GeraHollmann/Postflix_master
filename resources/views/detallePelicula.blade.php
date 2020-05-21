@extends('layouts.app')
@section('content')
<main id="detailCountry">
    <div class="container">

        <a href="/" style="display: block; margin-bottom: 10px">< Perfil</a>
        <div id="visteo" style="background-color:white;" class="row d-flex align-items-center">
            <div class="col-6">
                <img class="image" src="{{ $posteo->image }}" alt="{{ $posteo->title_movie }}">
            </div>
            <div class="col-6">
                <div class="country-detail">
                    <h2>{{ $posteo->title_post }}</h2>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                              <!--  <li><strong>Titulo del Posteo:</strong></li>
                                --><li><strong>Titulo de la Pelicula:</strong> {{ $posteo->title_movie }}</li>
                                <li><strong>Descripcion:</strong> {{ $posteo->description }}</li>
                                <li><strong>Rating:</strong> {{ $posteo->rating }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="float:right;">
                  <a href="/perfil/editarPosteo/{{$posteo->id}}" type="button" class="btn btn-primary btn-sm">Editar posteo</a>
                  <form class="" action="/borrarPelicula" method="post">
                    {{csrf_field()}}
                    <input type="hidden" class="btn btn-sm btn-outline-success" name="id" value="{{$posteo->id}}">
                    <input class="btn btn-primary btn-sm" type="submit" name="" value="Borrar posteo">
                  </form>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
