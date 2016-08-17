<!-- BEGIN SIDEBAR -->

<div class="sidebar">
   <div class="logopanel">
      <h1><a href="dashboard.html">&nbsp;</a></h1>
   </div>
   <div class="sidebar-inner">
      <div class="text-center sidebar-top">
         <!--<form action="#" method="post" class="searchform" id="search-results">
            <input type="text" class="form-control" name="keyword" placeholder="Search here...">
         </form>-->
         <div class="userlogged clearfix">
            <i class="fa fa-soccer-ball-o"></i>
            <div class="user-details">
               <h4></h4>
               <!--<div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                  <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                     <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                     <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                  </ul>
               </div>-->
            </div>
         </div>
      </div>
      <div class="menu-title">
         <span>Navegacion</span> 
      </div>
      <ul class="nav nav-sidebar">
         <li class="tm nav-active nav-parent">
            <a href="dashboard.php"><i class="icon-home"></i><span>Inicio</span></a>
            <ul class="children collapse" style=""></ul>
         </li>
         
         <!--<li class="tm nav-parent">
            <a href="#"><i class="icon icons-seo-icons-15"></i><span>Agentes</span><span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="agentes.php">Lista</a></li>
               <li class=""><a href="grupos.php">Grupos</a></li>
            </ul>
         </li>-->
         <li class="tm nav-parent">
            <a href=""><i class="fa fa-flag-checkered"></i><span>Campeonatos</span> <span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="{{ route('admin.leagues.index')}}">Lista de Campeonatos</a></li>
               <li class=""><a href="{{ url('/admin/leagues/create')}}">Nuevo Campeonato</a></li>
           </ul>
         </li>
         <li class="tm nav-parent" style="position: relative; opacity: 1; z-index: 0;">
            <a href=""><i class="fa fa-shield"></i><span>Clubs</span> <span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class="" style="opacity: 1; z-index: 0;"><a href="{{ route('admin.clubs.index')}}">Lista de Clubs</a></li>
               <li class=""><a href="{{ url('/admin/clubs/create')}}">Nuevo Club</a></li>
            </ul>
         </li>
         <li class="tm nav-parent">
            <a href="#"><i class="fa fa-group"></i><span>Jugadores</span><span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="{{ route('admin.players.index')}}">Lista de jugadores</a></li>
               <li class=""><a href="{{ url('/admin/players/create')}}">Nuevo Jugador</a></li>
            </ul>
         </li>
         <li class="tm nav-parent">
            <a href="#"><i class="fa fa-bookmark"></i><span>Categorias</span><span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="{{ route('admin.categories.index')}}">Lista de Categorias</a></li>
               <li class=""><a href="{{ url('/admin/categories/create')}}">Nueva Categoria</a></li>
            </ul>
         </li>
         <li class="tm nav-parent">
            <a href="#"><i class="fa fa-file-text-o"></i><span>Formulario de Resultados</span><span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="grupos">Lista de Formularios</a></li>
               <li class=""><a href="nuevo-grupo">Nuevo Formulario</a></li>
            </ul>
         </li>
         <li class="tm nav-parent" style="position: relative; opacity: 1; z-index: 0;">
            <a href=""><i class="fa fa-bar-chart-o"></i><span>Reportes</span> <span class="fa arrow"></span></a>
            <ul class="children collapse" style="">
               <li class=""><a href="lista-negra">Reporte 1</a></li>
               <li class=""><a href="telefonos-provincias">Reporte 2</a></li>
               
            </ul>
         </li>        
      </ul>

      <div class="sidebar-footer clearfix" style="">
         <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
         <i class="icon-settings"></i></a>
         <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
         <i class="icon-size-fullscreen"></i></a>
         <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
         <i class="icon-lock"></i></a>
         <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
         <i class="icon-power"></i></a>
      </div>
   </div>
</div>
<!-- END SIDEBAR -->
