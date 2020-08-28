+@extends ('layouts/master')

@section('content')


    <h1>Formulaire de création</h1>
  

<form action="{{route('events.store')}}" method="POST">
    {{csrf_field()}}

   @include('/events/_form', ['submitButtonText' => "Créer l'evenement"])
    
</form>
<br>
<a class="alert alert-danger" role="alert" href="{{ route('home') }}"><i class="fas fa-plus-square"></i>Annuler</a>

@stop