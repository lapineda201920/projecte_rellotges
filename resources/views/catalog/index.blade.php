@extends('layouts.master')
@section('content')    

<div class="row">
	@foreach( $la_meva_llista_de_rellotges as $key => $rellotge )
	<div class="col-xs-6 col-sm-4 col-md-3 text-center">
		<a href="{{ url('/catalog/show/' . $rellotge['id'] ) }}">
			<img src="{{$rellotge['imagen']}}" style="height:200px"/>
			<h4 style="min-height:45px;margin:5px 0 10px 0">                {{$rellotge['title']}}
			</h4>
		</a>
	</div>
	@endforeach
</div>

@stop
