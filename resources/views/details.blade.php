@extends('layout.main')

@section('content')

    <div class="container my-5">

        <div class="row">

            <div class="col">

                <ul class="custom-wrapper p-3">
                    <h2 class="fw-bold">MOVIES COLLECTION</h2>

                    <li>
                        <h5>
                            <a href="{{route('movie-details', $movie->id)}}">{{$movie->title}}:</a>
                        </h5>
                        <h4>{{$movie->original_title}}</h4>
                        <p>Nazionalità: {{$movie->nationality}}</p>
                        <p>Data di uscita: {{$movie->date}}</p>
                        <p>Voto: {{$movie->vote}}</p>
                    </li>
                </ul>

            </div>

        </div>

    </div>

@endsection

@section('title')
   | Dettagli Film
@endsection
