
@extends('layouts.admin')

@section('titleContent')
<h2><strong>Clubs</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Club </strong>{{ isset($club) ? $club->name : null }}</h3>
@endsection
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
@if( isset($club) ) 
    {!! Form::open(['route' => ['admin.clubs.update', $club], 'id'=>'formClub', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
@else
  {!! Form::open(['route' => 'admin.clubs.store', 'id'=>'formClub', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
@endif
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="form-group">
          <label class="col-sm-3 control-label">ID Club<span class="text-danger">*</span>
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="id_club" value='{{ isset($club) ? $club->id_club : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nombre<span class="text-danger">*</span>
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="name" value='{{ isset($club) ? $club->name : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Color Oficial
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="color_official" value='{{ isset($club) ? $club->color_official : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Color Alternativo
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="color_anternative" value='{{ isset($club) ? $club->color_anternative : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            <i class="fa-flag-or"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Fijo
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="number" name="fijo" value='{{ isset($club) ? $club->fijo : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            <i class="icon-screen-smartphone"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Movil<span class="text-danger">*</span>
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="number" name="movil" value='{{ isset($club) ? $club->movil : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
            <i class="icon-screen-smartphone"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">facebook
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="facebook" value='{{ isset($club) ? $club->facebook : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3">
            <i class="icon-globe"></i>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="form-group">
          <label class="col-sm-3 control-label">Nombre Director Tecnico
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="dt_name" value='{{ isset($club) ? $club->dt_name : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3">
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Apellido Director Tecnico
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="dt_second_name" value='{{ isset($club) ? $club->dt_second_name : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3">
            <i class="icon-user"></i>
          </div>
        </div>
      <div class="form-group">
          <label class="col-sm-3 control-label">Telefono Director Tecnico
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="number" name="dt_movil" value='{{ isset($club) ? $club->dt_movil : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            <i class="icon-screen-smartphone"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">President
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="president" value='{{ isset($club) ? $club->president : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Vice presidente
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="vice_president" value='{{ isset($club) ? $club->vice_president : null }}' class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" >
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Secretario General </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="general_secretary" value='{{ isset($club) ? $club->general_secretary : null }}' class="form-control" placeholder="Introduce tu profesion ..." >
            <i class="icon-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Delegato tutorial</label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="delegate_holder" value='{{ isset($club) ? $club->delegate_holder : null }}' class="form-control" placeholder="Introduce tu profesion ..." >
            <i class="icon-user"></i>
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

<script>
$(document).ready(function() {
  $("#formJugador").validate({
    lang: 'es'  // or whatever language option you have.
  });
});

</script>
@endsection