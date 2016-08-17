@extends('layouts.admin')

@section('titleContent')
<h2>Lista <strong>Campeonatos</strong></h2>
@endsection
@section('titlePanel')
<h3 class="panel-title"><strong>Lista </strong>Campeonato</h3>
@endsection
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="panel-content pagination2 table-responsive" >
		<table class="table table-hover table-dynamic">
          	<thead>
              	<tr>
	                <th>ID Campeonato</th>
	                <th>Nombre</th>
	                <th class="text-center">Fecha Inicio</th>
	                <th class="text-center">Fecha Fin</th>
	                <th class="text-center">Creador</th>
	                <th class="text-center">Acciones</th>
              	</tr>
            </thead>
          	<tbody> 
          		@foreach($leagues as $league)                 
          		<tr>
	                <td>{{ $league->id }}</td>
                  	<td>{{ $league->name }}</td>
                  	<td>01-01-2016</td>
                  	<td>01-06-2016</td>
                 	<td>Juan Carlos</td>
                  	
                  	<td>
                      	<div class="text-center dropdown" id="user-header">
                        	<button type="button" class="btn btn-sm btn-primary" aria-expanded="false"href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                          		<i class="glyphicon glyphicon-th-list">&nbsp;</i><span class="caret"></span>
                        	</button>
	                        <ul class="dropdown-menu">
	                          <li>
                              <a href="{{ route('admin.inscriptions.create', $league->id)}}"><i class="glyphicon glyphicon-edit"></i><span>Agregar Club</span></a>
                            </li>
	                          <li>
	                            <a href="{{ route('admin.leagues.edit', $league->id)}}"><i class="glyphicon glyphicon-edit"></i><span>Editar</span></a>
	                          </li>
	                          <li>
	                            <a href="{{ route('admin.leagues.destroy', $league->id)}}"><i  class="glyphicon glyphicon-remove"></i><span>Borrar</span></a>
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