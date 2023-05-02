@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
             <div class="me-auto py-5">
               <h1> {{$event->title}}
                @if ($event->category)
                <button type="button" class="btn btn-primary">
                   <span class="badge badge-light"> {{ $event->category->name }}</span>
                  </button>
                 @endif
               <p>{{$event->slug}}</p>
             </div>
             <div class="d-flex">
                <a class="btn btn-s btn-secondary" href="{{route('events.edit', $event)}}">Modifica</a>
                @if($event->trashed())
                    <form action="{{route('events.restore', $event->slug) }}" method="POST">
                 @csrf
                         <input class="btn btn-sm btn-success" type="submit" value="Ripristina">
                    </form>
                @endif
             </div>
        </div>
    </div>
    <div class="container">
        <p>{{$event->description}}</p>
    </div>
@endsection