<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventBrote</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
   @include('layouts/partials/_nav') 

   <div class="container">

    @if (session()->has('notification.message'))
   <div class="alert alert-{{session()->get('notification.type')}}">
        {{ session()->get('notification.message') }}
    </div>
    @endif

    @yield('content')
    
   </div>
   <script src="//code.jquery.com/jquery.js"></script>
   @include('flashy::message')
</body>
</html>
