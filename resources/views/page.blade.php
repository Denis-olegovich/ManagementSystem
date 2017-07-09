@extends('layouts.app')

@section('content')
<div class='content_parametr'>
	@foreach ($params as $parametr)
	  <p>
	  	{{$parametr->name}} : {{$parametr->value}}
	  </p>
	@endforeach
</div>
@endsection