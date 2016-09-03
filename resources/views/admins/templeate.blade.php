
@extends('layouts.admin')

@section('titleContent')
<h2><strong>Administradores</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Administrador </strong>{{ isset($admin) ? $admin->name : null }}</h3>
@endsection
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  @if( isset($admin) ) 
  	{!! Form::open(['route' => ['admin.admins.update', $admin], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
  @else
  {!! Form::open(['route' => 'admin.admins.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
    
  @endif	
    <div class="row">
  		<div class="col-md-6 col-sm-6 col-xs-6">
  			<div class="form-group">
		      <label class="col-sm-3 control-label">Nombre<span class="text-danger">*</span>
		      </label>
		      <div class="col-sm-9 prepend-icon">
		        <input type="text" name="name" value="{{ isset($admin) ? $admin->name : null }}"  class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
		        <i class="icon-user"></i>
		      </div>
		    </div>
		    <div class="form-group">
          <label class="col-sm-3 control-label">Email<span class="text-danger">*</span>
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="email" name="email" value="{{ isset($admin) ? $admin->email : null }}"  class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
            <i class="icon-envelope"></i>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nombre de Usuario<span class="text-danger">*</span>
          </label>
          <div class="col-sm-9 prepend-icon">
            <input type="text" name="username" value="{{ isset($admin) ? $admin->user->username : null }}"  class="form-control" placeholder="Minimo 3 caracteres ..." minlength="3" required>
            <i class="icon-user"></i>
          </div>
        </div>

        
        
        @if( isset($admin) )
        <div class="form-group">
          <div class="col-sm-9 prepend-icon">
          <label class="control-label">
            <input id="passwords_check"  name="passwords_check" class="form-control" type="checkbox" data-checkbox="icheckbox_minimal-blue" data-type="checkbox">Cambiar Password</label>
            </div>
        </div>
        <div id="passwords" style="display: none">
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                  <input type="password" class="form-control" name="password" minlength="6" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                  <input type="password" class="form-control" name="password_confirmation" minlength="6" required>

                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
        </div> 
         @endif
  		</div>
  		<div class="col-md-6 col-sm-6 col-xs-6">
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
<script src="{{asset('plugins/icheck/icheck.min.js')}}"></script> <!-- Checkbox & Radio Inputs -->
<script src="{{asset('js/saltinmania.js')}}"></script>
<script>
$(document).ready(function() {
  $("#formCategory").validate({
    lang: 'es'  // or whatever language option you have.
  });
});

</script>
@endsection