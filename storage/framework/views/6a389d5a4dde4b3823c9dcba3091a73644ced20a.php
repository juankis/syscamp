<?php $__env->startSection('titleContent'); ?>
<h2>Lista <strong>Jugadores</strong></h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titlePanel'); ?>
<h3 class="panel-title"><strong>Lista </strong>Jugador</h3>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="panel-content pagination2 table-responsive" >
		<table class="table table-hover table-dynamic">
          	<thead>
              	<tr>
	                <th>ID Kardex</th>
	                <th>Nombre Completo</th>
	                <th class="text-center">CI</th>
	                <th class="text-center">E-mail</th>
	                <th class="text-center">Telefono</th>
	                
	                <th class="text-center">Acciones</th>
              	</tr>
            </thead>
          	<tbody> 
          		<?php foreach($players as $player): ?>                 
          		<tr>
	                <td><?php echo e($player->id_kardex); ?></td>
                  	<td><?php echo e($player->name); ?></td>
                  	<td><?php echo e($player->ci); ?></td>
                  	<td><?php echo e($player->email); ?></td>
                 	<td><?php echo e($player->phone); ?></td>
                  	
                  	<td>
                      	<div class="text-center dropdown" id="user-header">
                        	<button type="button" class="btn btn-sm btn-primary" aria-expanded="false"href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                          		<i class="glyphicon glyphicon-th-list">&nbsp;</i><span class="caret"></span>
                        	</button>
	                        <ul class="dropdown-menu">
	                          
	                          <li>
	                            <a href="<?php echo e(route('admin.players.edit', $player->id)); ?>"><i class="glyphicon glyphicon-edit"></i><span>Editar</span></a>
	                          </li>
	                          <li>
	                            <a href="<?php echo e(route('admin.players.destroy', $player->id)); ?>"><i  class="glyphicon glyphicon-remove"></i><span>Borrar</span></a>
	                          </li>
	                        </ul>
                     	</div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>   
        
    </div>
</div>
             


  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>