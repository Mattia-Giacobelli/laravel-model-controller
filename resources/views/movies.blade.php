@extends('layouts/default');


@section('title')
    Movies
@endsection

@section('main')
    
    <div class="container">

        <div class="row row-cols-3">

            {{-- @dd($movies) --}}

            {{-- "id" => 1
        "title" => "Il Padrino"
        "original_title" => "The Godfather"
        "nationality" => "american"
        "date" => "1972-03-24"
        "vote" --}}

            @foreach ($movies as $movie)
                
            <div class="col">

                <x-movie-card>
                        <x-slot:title> {{$movie['title']}} </x-slot:title>
                        <x-slot:original_title>{{$movie['original_title']}}</x-slot:original_title>
                        <x-slot:nationality>{{$movie['nationality']}}</x-slot:nationality>
                        <x-slot:date>{{$movie['date']}}</x-slot:date>
                        <x-slot:vote>{{$movie['vote']}}</x-slot:vote>
                </x-movie-card>

            </div>

            @endforeach

        </div>

    </div>

@endsection