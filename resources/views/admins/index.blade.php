@extends('layouts.admin')

@section('titleContent')
<h2>Lista <strong>Administradores</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Lista </strong>Administradores</h3>
@endsection
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="panel-content pagination2 table-responsive" >
		<table class="table table-hover table-dynamic">
          	<thead>
              	<tr>
	                <th>ID Admin</th>
	                <th>Nombre</th>
                  <th>E-mail</th>
	                <th>Nombre de usuario</th>
	                <th class="text-center">Ultima actualizacion</th>
	                <th class="text-center">Acciones</th>
              	</tr>
            </thead>
          	<tbody> 
          		@foreach($admins as $admin)                 
          		<tr>
	                <td>{{ $admin->id }}</td>
                  	<td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                  	<td>{{ $admin->user->username }}</td>
                    <td class="text-center">{{ $admin->updated_at }}</td>
                 	
                  	
                  	<td>
                      	<div class="text-center dropdown" id="user-header">
                        	<button type="button" class="btn btn-sm btn-primary" aria-expanded="false"href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                          		<i class="glyphicon glyphicon-th-list">&nbsp;</i><span class="caret"></span>
                        	</button>
	                        <ul class="dropdown-menu">
	                          
	                          <li>
	                            <a href="{{ route('admin.admins.edit', $admin->id)}}"><i class="glyphicon glyphicon-edit"></i><span>Editar</span></a>
	                          </li>
	                          <li>
	                            <a href="{{ route('admin.admins.destroy', $admin->id)}}"><i  class="glyphicon glyphicon-remove"></i><span>Borrar</span></a>
	                          </li>
	                        </ul>
                     	</div>
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>   
        
    </div>
</div>
             


  
@endsection
@section('scripts')



@endsection