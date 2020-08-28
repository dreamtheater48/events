@extends ('layouts/master')

@section('content')


<h1>{{$events->count()}} Evenements</h1>



    @if (!$events->isEmpty()) 
<ul>
        @foreach ($events as $event) 
<li><a href="{{route('events.show',$event->slug)}}">{{ $event->title }}</a></li>
        @endforeach
    @else 
    <p>Aucun Evenement</p>
    @endif
</ul>
<h1>Kiw</h1>
{{ $events->links()}}








@stop