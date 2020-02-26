@extends('layouts.master')
@section('content')    

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar Rellotge
         </div>
         <div class="card-body" style="padding:30px">

            <form action="#" method="POST">

            	{{ method_field('PUT') }}
	            {{ csrf_field() }}

	            <div class="form-group">
	               <label for="title">Modificar Rellotge</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="year">Any</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="color">Color</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="imagen">Link Imatge</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="synopsis">Resum</label>
	               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 80px;margin-top:25px;">
	                   Modificar Rellotge!
	               </button>
	            </div>
            </form>
         </div>
      </div>
   </div>
</div>

@stop
