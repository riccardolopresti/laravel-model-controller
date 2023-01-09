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
                                <a href="#">{{$movie->title}}:</a>
                            </h5>
                            <p>Voto: {{$movie->vote}}</p>
                            <p>Nazionalità: {{$movie->nationality}}</p>
                        </li>

                    @endforeach
                </ul>

            </div>

        </div>

    </div>
@endsection
