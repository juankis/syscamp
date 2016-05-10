@extends('layouts.admin')

@section('titleContent')
<h2>Crear <strong>Jugadores</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Crear </strong>Jugador</h3>
@endsection
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="panel-content pagination2 table-responsive" id='grupos'>
		<table class="table table-hover table-dynamic" id="creador">
          	<thead>
              	<tr>
	                <th>ID Kardex</th>
	                <th>Nombre Completo</th>
	                <th class="text-center">CI</th>
	                <th class="text-center">Nacionalidad</th>
	                <th class="text-center">Telefono</th>
	                <th class="text-center">Estado</th>
	                <th class="text-center">Acciones</th>
              	</tr>
            </thead>
          	<tbody> 
          		@foreach($players as $player)                 
          		<tr>
	                <td>{{ $player->id_kardex }}</td>
                  	<td>{{ $player->name }}</td>
                  	<td>{{ $player->ci }}</td>
                  	<td>{{ $player->nationality }}</td>
                 	<td>{{ $player->phone }}</td>
                  	<td class="text-center"><span class="btn btn-sm btn-info">activo</span></td>
                  	<td>
                      	<div class="text-center dropdown" id="user-header">
                        	<button type="button" class="btn btn-sm btn-primary" aria-expanded="false"href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                          		<i class="glyphicon glyphicon-th-list">&nbsp;</i><span class="caret"></span>
                        	</button>
	                        <ul class="dropdown-menu">
	                          <li>
	                            <a onClick=""><i class="fa fa-refresh"></i><span>Cambiar Estado</span></a>
	                          </li>
	                          <li>
	                            <a onClick=""><i class="glyphicon glyphicon-edit"></i><span>Editar</span></a>
	                          </li>
	                          <li>
	                            <a onClick=""><i  class="glyphicon glyphicon-remove"></i><span>Borrar</span></a>
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