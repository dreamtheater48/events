@extends ('layouts/master')

@section('content')


<h2> Evenement {{ $event->title }}</h2>
<p> {{$event->description}} </p>



<a class="btn btn-primary" href="{{ route('events.edit',$event->slug)}}">Modifier l'evenement</a>

<form action="{{ route('events.destroy',$event->slug)}}" method="POST" onsubmit=" return confirm('Etes vous sure de vouloir supprimer?');" class="inline-block">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="submit" value="supprimer" class="btn btn-danger">
</form>
<p><a href="{{ route('home') }}">Tous les evenements</a><br><br></p>
@stop