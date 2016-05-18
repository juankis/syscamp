@extends('layouts.admin')

@section('titleContent')
<h2>Editar <strong>Jugador</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Editar </strong>Jugador {{$player->name}}</h3>
@endsection
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  
  
  	{!! Form::open(['route' => ['admin.players.update',$player], 'id'=>'formJugador', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form' ]) !!}
  	<div class="row">
  		<div class="col-md-6 col-sm-6 col-xs-6">
  			<div class="form-group">
		      <label class="col-sm-3 control-label">ID Kardex<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" name="id_kardex" value="{{$player->id_kardex}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Nombres<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="name" value="{{$player->name}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Apellido Paterno<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="second_name_p" value="{{$player->second_name_p}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Apellido Materno
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="second_name_m" value="{{$player->second_name_m}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Fecha de Nacimiento<span class="text-danger">*</span><span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		         <input type="text" name="birthday" value="{{$player->birthday}}" class="date-picker form-control" placeholder="Select a date..." required>
                 <i class="icon-calendar"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Lugar de Nacimiento<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="place_of_birth" value="{{$player->place_of_birth}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="fa-flag-or"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">N# CI<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" name="ci" value="{{$player->ci}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Nacionalidad<span class="text-danger">*</span></label>
		      <div class="col-sm-9 prepend-icon">
		        <select  name="nationality" data-type="text" value="{{$player->nationality}}" class="form-control" data-search="true"  data-parsley-group="block1" required>
                    <option value="1">Bolivia</option>
                    <option value="2">Argentina	</option>
                    <option value="3">Brasil</option>
                  </select>
		        
		      </div>
		    </div>
		    
  		</div>
  		<div class="col-md-6 col-sm-6 col-xs-6">
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Domicilio<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="home" value="{{$player->home}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-direction"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Telefono
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="number" name="phone" value="{{$player->phone}}" class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
		        <i class="icon-screen-smartphone"></i>
		      </div>
		    </div>
		    <div class="form-group">
		    	<label class="col-sm-3 control-label">Celulares
		    	</label>
		      <div class="col-sm-9 prepend-icon">
		      	<input name="movil" class="select-tags form-control" value="{{$player->movil}}"  style="width: 15em !important;" >
		      	<i class="icon-screen-smartphone"></i>
		        
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Email<span class="text-danger" >*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="email" name="email" value="{{$player->email}}" class="form-control" placeholder="Introduce tu email..." required>
		        <i class="icon-envelope"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Profesion</label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="profession" value="{{$player->profession}}" class="form-control" placeholder="Introduce tu profesion ..." >
		        <i class="icon-globe"></i>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="col-sm-3 control-label">Foto<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="picture" value="{{$player->picture}}" class="form-control" placeholder="Introduce tu foto..." >
		        <i class="icon-user"></i>
		      </div>
		    </div>
  		</div>
  	</div>
    
    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <div class="pull-right">
          <button type="submit" class="btn btn-embossed btn-primary m-r-20">Send my Comment</button>
          <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
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

<script>
$(document).ready(function() {
  $("#formJugador").validate({
    lang: 'es'  // or whatever language option you have.
  });
});

</script>

@endsection