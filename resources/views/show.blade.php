@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>

    <div>
      <p>{{ $shop->category->name }}</p>
      <p>{{ $shop->address }}</p>
    </div>

    <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBoVWxeSi6-7Wa7BcKsNM4_82n73fooNTo&amp;q={{ $shop->address }}'
      width='640'
      height='640'
      frameborder='0'>
    </iframe>
    <div>
        <a href="{{route('shop.edit',['id' => $shop->id])}}">編　集</a>｜
        <a href="{{route('shop.list')}}">一覧に戻る</a>
        {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
          {{ Form::submit('削除') }}
        {{ Form::close() }}
    </div>
@endsection

