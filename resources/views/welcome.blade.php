<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کلینیک زیبایی</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/Custom.css')}}">
</head>
<body data-spy="scroll" data-target=".nav" data-offset="50" >
<div id="app">

</div>

{{-- Script File --}}
<script>
    var BASE_URL = '{{ URL::to('/')}}'
</script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/fontawesome.js')}}"></script>

{{-- End Script File --}}
</body>
</html>
