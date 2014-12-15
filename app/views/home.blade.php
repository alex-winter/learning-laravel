@extends('layouts.main')

@section('content')
  <h1>Your Items</h1>

  <ul>
	  @foreach ($items as $item)
	  	<li>
	  		{{ Form::open() }}
	  			<input type="checkbox" name="item" value="{{ $item->id }}">
	  			{{ $item->name }}
	  		{{ Form::close() }}
	  	</li>
	  @endforeach
  </ul>
@stop