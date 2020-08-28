@extends ('layouts/master')

@section('content')


<h1>Edition de l'evenement {{ $event->id }}</h1>

<form action="{{route('events.update',$event->slug)}}" method="POST">
    {{ csrf_field() }}
{{ method_field('PUT') }}

@include('/events/_form', ['submitButtonText' => "Modifier l'evenement"])


</form>



@stop 