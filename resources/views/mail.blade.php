<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    {!! $bodyemail !!}
    {{-- <img src="https://images.unsplash.com/photo-1673359193906-b6694fdc0139?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=389&q=80"> --}}
    <img src="{{ $message->embed($filename) }}">
</body>
</html>


