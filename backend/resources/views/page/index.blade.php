<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DemoApp</title>
    </head>
    <body>
        <form method="POST" action="/page">
          @csrf
          <ul>
@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
@endforeach
</ul>
          TITLE:  <input type="text" name="title" value="{{old('title')}}"><br>
          BODY:   <input type="text" name="body" value="{{old('body')}}">
          <input type="submit" value="送信ボタン">
        </form>
    </body>
</html>