<!DOCTYPE html>
<html lang="en" class="color12">
  <head>
      <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $title_for_layout?>
  </title>
      <?php

        echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));
        
        echo $this->Html->css (array('reset','style','fonts','http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700'));
        echo $this->Html -> css(array("cake.generic.css"));
        echo $this->Html -> css(array("bootstrap.css"));
        echo $this->Html -> css(array("font-awesome.css"));
        echo $this->Html -> css(array("main.css"));
        echo $this->Html -> css(array("style.css"));
        echo $this->Html -> css(array("style2.css"));
       
        echo $this->Html-> script(array("jquery-1.8.3.min.js"));
        echo $this->Html-> script(array("jquery-1.11.1.min.js"));
        echo $this->Html-> script(array("ie-emulation-modes-warning.js"));
        echo $this->Html-> script(array("bootstrap.min.js"));
        echo $this->Html-> script(array("ie10-viewport-bug-workaround.js"));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
      ?>
              <style type="text/css">   
          a:link   
          {   
           text-decoration:none;   
          }
        
          </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class='callout4'>
  <nav class = "navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class ="navbar-header">
                <button type= "button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class= "sr-only">Cambiar Navegacion</span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                </button> 
                <a  class= "navbar-brand"><FONT COLOR="#FFFFFF"><i class="fa fa-paw"></i> Aldea Animal </FONT></a>  
            </div>
            <div class="container m1 menu">
              <div class= "collapse navbar-collapse navbar-ex1-collapse">
                  <ul  class ="nav navbar-nav subMenu" >
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/homeVet"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">Home Veterinario</FONT></a></li> 
                      <li class="dropdown">
                      <a class= "page-scroll dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" href="#"><FONT COLOR="#FFFFFF"></i>  Mi Agenda</FONT><span class="caret"></span></a>
                      
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/miAgenda">Menú Principal</a></li>
                         <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/solicitudesHora">Solicitudes de hora de clientes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/ver_solicitudes">Ver Solicitudes Aceptadas</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/ofertahors/agregarOfertaHoraria">Mi Oferta Horaria</a></li>
                      </ul>
  




                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/atencion"><FONT COLOR="#FFFFFF"> Generar Atención </FONT></a></li> 
                       <li class="dropdown">
                      <a class= "page-scroll dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" href="#"><FONT COLOR="#FFFFFF"></i>  Registro de Usuarios y Mascotas</FONT><span class="caret"></span></a>
                      
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/users/add">Registrar Cliente</a></li>
                         <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/mas/add">Registrar Mascotas</a></li>
                      </ul>
                      <li class="dropdown">
                      <a class= "page-scroll dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" href="#"><FONT COLOR="#FFFFFF"></i> Administración</FONT><span class="caret"></span></a>
                      
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/administracion_vet">Menú Principal</a></li>
                         <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/view">Mis Datos Veterinario</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/pats/index">Patologías</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/farmacos/index">Medicamentos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/tipodeints/index">Tipos de Intervención</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/tipoexes/index">Tipos de Examen</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/AldeaAnimal/vets/estadisticas">Estadísticas de la Clínica</a></li>
                      </ul>
                     <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
               

                       <ul class="nav navbar-nav navbar-right" style="padding-top: 10px;"> 

                    
                                      <a href="/AldeaAnimal/vets/logout"> 
                                      <button type="button" class="btn btn-primary" ><i class="fa fa-users"></i> Logout</button></a>
                                 

                       </ul> 
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
  <?php echo $content_for_layout ?>
</body>

              



</html>

