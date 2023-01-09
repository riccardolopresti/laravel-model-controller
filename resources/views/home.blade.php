@extends('layout.main')

@section('content')
    <div class="container my-5">

        <div class="row">

            <div class="col">

                <ul class="custom-wrapper p-3">
                    <h2 class="fw-bold">MOVIES COLLECTION</h2>

                    @foreach ($movies as $movie)

                        <li>
                            <h5>
                                <a href="{{route('movie-details', $movie->id)}}">{{$movie->title}}:</a>
                            </h5>
                            <p>Nazionalità: {{$movie->nationality}}</p>
                            <p>Voto: {{$movie->vote}}</p>
                        </li>

                    @endforeach
                </ul>

            </div>

        </div>

    </div>
@endsection
