@extends('layout')

@section('content')
    <body>
    <h1>お店一覧</h1>

    @foreach ($shops as $shop)
        <p>
        {{ $shop->category->name }},
        {{ $shop->name }},
        {{ $shop->address }}
        </p>
    @endforeach
    </body>
@endsection

