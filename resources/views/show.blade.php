@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>

    <div>
      <p>{{ $shop->category->name }}</p>
      <p>{{ $shop->address }}</p>
    </div>
    <div>
        <a href="{{route('shop.edit',['id' => $shop->id])}}">編　集</a>｜
        <a href="{{route('shop.list')}}">一覧に戻る</a>
    </div>
@endsection

