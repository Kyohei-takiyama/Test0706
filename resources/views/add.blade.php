@extends('layouts.Test')

@section('title', 'add.blade.php')


@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/add" method="post">
    @csrf
    <p>氏名
    <br>
      <input type="text" name="name" value="{{old('name')}}">
    <br>
      メールアドレス
    <br>
      <input type="text" name="mail" value="{{old('mail')}}">
    </p>
  <button>送信する</button>
</form>
<form action="/find">
  <p>検索は下記検索ボタンをクリック</p>
  <button>検索</button>
</form>
@endsection