@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
    <h1>mis mensajes</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link">home</a></li>
           
        </ul>
    </nav>
    
</div>

<div class="row">
<!--    {!!Form::open(['url'=>'message','method'=>'POST'])!!}-->
    <form  role="form" method="POST" action="{{ url('/message/create') }}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="message" class="form-control" placeholder="que estas pensando">
            
            @if ($errors->any())
                 @foreach($errors->get('message') as $error)
                  <div class="alert-danger">{{$error}}</div>
                 @endforeach
           @endif
        </div>
        
        
  </form>
<!--       {!!Form::close()!!} -->
</div>
  




<div class="row">
    
    @forelse($messages as $message)
      <div class="col-6">
        <img class="img-thumbnail" src="{{$message->image}}">
        <p class="card-text">
            {{$message->content}}
<!--            <li><a href="{{ url('/messages/{{$message->id') }}">Login</a></li>-->
          
            <a href="{{ url('/message',$message->id) }}">leer mas</a>
        </p>
    </div>
    @empty
    <p>No hay mensajes destacados</p>
    @endforelse
    
    
</div>
@endsection

