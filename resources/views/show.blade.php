@extends('layouts.standard')

@section('pageTitle')
    Show Comic
@endsection

@section('showPage')

    <div class="show-wrapper">
        <a href="{{ route('comics.index') }}">
            <div class="buttonBack">
                Indietro
            </div>
        </a>
        <div class="img-wrapper">
            <img src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="description-wrapper">
            <h1>
                {{ $comic->title }}
            </h1>
            <h4>
                {{ $comic->series }}
            </h4>
            <p>
                {{ $comic->description }}
            </p>
            <div>
                {{ $comic->price }}
                <span>
                    €
                </span>
            </div>
        </div>
    </div>

@endsection

@section('createBtn')
    @include('partials.createBtn')
@endsection