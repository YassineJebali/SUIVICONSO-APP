<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Laravel 10</title>
</head>
<body style="background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(240,240,240,1) 50%, rgba(255,255,255,0) 100%) background-color: #f9f9f9;
opacity: 0.8;
background-image: radial-gradient(#a7a7a8 0.5px, #f9f9f9 0.5px);
background-size: 10px 10px;>
<x-navbar/>
<div class="max-w-6xl mx-auto">
    {{$slot}}
</div>
</body>
</html>