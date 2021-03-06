

@extends('layouts.admin')

@section('titleContent')
<h2>Crear <strong>Jugadores</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Jugador </strong>{{ isset($player) ? $player->name : null }}</h3>
@endsection
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
@if( isset($player) ) 
  	{!! Form::open(['route' => ['admin.players.update',$player], 'id'=>'formJugador', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form' , 'form', 'files' => true]) !!}
@else
	{!! Form::open(['route' => 'admin.players.store', 'id'=>'formJugador', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
@endif
  	<div class="row">
  		<div class="col-md-6 col-sm-6 col-xs-6">
  			<div class="form-group">
		      <label class="col-sm-3 control-label">ID Kardex<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" value="{{ isset($player) ? $player->id_kardex : null }}" name="id_kardex" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Nombres<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->name : null }}" name="name" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Apellido Paterno<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->second_name_p : null }}" name="second_name_p" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Apellido Materno
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->second_name_m : null }}" name="second_name_m" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Fecha de Nacimiento<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		         <input type="text" value="{{ isset($player) ? $player->birthday : null }}" name="birthday" class="date-picker form-control" placeholder="Select a date..." required>
                 <i class="icon-calendar"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Lugar de Nacimiento<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->place_of_birth : null }}" name="place_of_birth" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="fa-flag-or"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">N# CI<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" value="{{ isset($player) ? $player->ci : null }}" name="ci" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        
		      </div>
		    </div>
		    <div class="form-group">
				<label class="col-sm-3 control-label">Club<span class="text-danger">*</span></label>
		        <div class="col-sm-9 prepend-icon">
		            {!! Form::select('club_id', $clubs, isset($player) ? $player->club_id : null, ['data-type'=>'text', 'class'=>'form-control', 'data-search'=>'true']) !!}
		        </div>
	        </div>
		  	<div class="form-group">
				<label class="col-sm-3 control-label">Categoria<span class="text-danger">*</span></label>
	          	<div class="col-sm-9 prepend-icon">
	            	{!! Form::select('category_id', $categories, isset($player) ? $player->category_id : null, ['data-type'=>'text', 'class'=>'form-control', 'data-search'=>'true']) !!}
	          	</div>
	        </div>  
  		</div>
  		<div class="col-md-6 col-sm-6 col-xs-6">
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Nacionalidad<span class="text-danger">*</span></label>
		      <div class="col-sm-9 prepend-icon">
		        <select  value="{{ isset($player) ? $player->nationality : null }}" name="nationality" data-type="text" class="form-control" data-search="true"  data-parsley-group="block1" required>
                    <option value="1">Bolivia</option>
                    <option value="2">Argentina	</option>
                    <option value="3">Brasil</option>
                  </select>
		        
		     </div>
		    </div>
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Domicilio<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->home : null }}" name="home" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-direction"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Telefono
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" value="{{ isset($player) ? $player->phone : null }}" name="phone" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-screen-smartphone"></i>
		      </div>
		    </div>
		    <div class="form-group">
		    	<label class="col-sm-3 control-label">Celulares
		    	</label>
		      <div class="col-sm-9 prepend-icon">
		      	<input value="{{ isset($player) ? $player->movil : null }}" name="movil" class="select-tags form-control" style="width: 15em !important;" >
		      	<i class="icon-screen-smartphone"></i>
		        
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Email<span class="text-danger" >*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="email" value="{{ isset($player) ? $player->email : null }}" name="email" class="form-control" placeholder="Introduce tu email..." required>
		        <i class="icon-envelope"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Profesion</label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" value="{{ isset($player) ? $player->profession : null }}" name="profession" class="form-control" placeholder="Introduce tu profesion ..." >
		        <i class="icon-globe"></i>
		      </div>
		    </div>

		    <div class="form-group">
		    	<label class="col-sm-3 control-label">Foto<span class="text-danger">*</span>
		      	</label>
			    <div class="col-sm-9">
			    	@if( isset($player) ) 
			    		<img src="{{asset($player->picture)}}" alt="{{$player->picture}}" class="img-thumbnail">
		            	<input type="file" name="picture" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Selecciona una imagen">
			    	@else
			    		<input type="file" name="picture" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Selecciona una imagen" required>
			    	@endif
			    </div>
		    </div>
  		</div>
  	</div>
    
    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <div class="pull-right">
          <button type="submit" class="btn btn-embossed btn-primary m-r-20">Guardar</button>
          <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancelar</button>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
</div>
             


  
@endsection
@section('scripts')

<script src="{{ asset('plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js')}}"></script> <!-- Select Inputs -->
	<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script> <!-- >Bootstrap Date Picker -->
	<script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
<script src="{{asset('js/plugins/tags/tagsinput.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/src/localization/messages_es.js')}}"></script>
<script src="{{asset('plugins/bootstrap-filestyle-1.2.1/src/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<script>
$(document).ready(function() {
  $("#formJugador").validate({
    lang: 'es'  // or whatever language option you have.
  });
});

</script>
@endsection