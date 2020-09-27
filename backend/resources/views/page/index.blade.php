<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DemoApp</title>
    </head>
    <body>
        <h1>Page : index</h1>{{$str}}<br>
        <br>
        <b>Request：</b><br>
        <pre>{{$request}}</pre>
        <b>Response：</b><br>
        <pre>{{$response}}</pre>
      <form method="POST" action="/page">
{{csrf_field()}}
TITLE:  <input type="text" name="title"><br>
BODY:   <input type="text" name="body">
<input type="submit">
</form>
    </body>
</html>