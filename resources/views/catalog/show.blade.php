@extends('layouts.master')
@section('content')    

<div class="row">
	<div class="col-sm-4">
		<img src="{{$id['imagen']}}" style="height:200px"/>
	</div>
	<div class="col-sm-8">
		<h4 style="min-height:45px;margin:5px 0 10px 0;font-weight: bold;">                {{$id['title']}} ~ {{$id['year']}}
			</h4>
		<p><b>Color:</b> {{$id['color']}}</p>
		<p><b>Descripció:</b></p>
		<p style="margin-left:20px">{{$id['synopsis']}}</p>
		<p><b>Estat:</b>

			@if ($id['rented'])

				Rellotge disponible!</p><br/><p>
				<button type="button" class="btn btn-primary">Llogar rellotge</button>
			@else

				Rellotge actualment llogat!</p><br/><p>
				<button type="button" class="btn btn-danger">Retornar rellotge</button>

			@endif
			
			<button type="button" class="btn btn-warning">Editar Rellotge</button>
			<button type="button" class="btn btn-light">Tornar al llistat</button>
			</p>
	</div>
</div>

@stop
