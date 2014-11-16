<?php 
 $this->layout = 'headVets';
?>

<body id="home" data-spy="scroll" data-target=".navbar-fixed-top" class= "callout3">
  

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
                      <li><a class= "page-scroll"href="#home"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                      <li><a class= "page-scroll" href="#servicios"><FONT COLOR="#FFFFFF">Mis Datos</FONT></a></li>
                      <li><a class= "page-scroll" href="#about"><FONT COLOR="#FFFFFF">Mis Mascotas</FONT></a>
                      
                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>

                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Logout Usuario",
array('controller' => 'vets', 'action' => 'logout')); ?>
  </FONT></li>


                       </ul> 
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
        </div>
  

  <div class="container well ">
    <br>
    <div id= "ex5">
          <?php
            echo $this->Html->image('PP-Clientes.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
        </div>
    <br>
    
    <FONT COLOR="#000000"> <h3>Dueño: <?php echo AuthComponent::user('rut_vet');?></h3></FONT>

    <br>

    <div class="row">
      <div class="col-md-9">
             <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Mi agenda</h3>
             Comprobar horario de trabajo, Solicitudes de hora de clientes, Solicitudes Aceptadas
               </button>
                <br>
               <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Generar Atención</h3>
               </button>
               <br>

               <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Registrar Nuevo Cliente</h3>
               </button>
               <br>

             	<button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Registrar Nueva Mascota</h3>
             	A un cliente registrado previamente
               </button>
               <br>

               <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Administración</h3>
               Modificar Datos Personales, Ingresar Patoligías, Ingresar Medicamentos, Ingresar tipo de vacunas
               </button>
              

        
      </div>
      <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('esteto.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
    </div>

    <br><br><br><br>

  </div>
<br>
    <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
          <div class="col-md-6 text-right dm">
            <ul id="downMenu">
              <li class="active"><a href="#home">Principal</a></li>
              <li><a href="#servicios">Mis Datos</a></li>
              <li><a href="#about">Mis Mascotas</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>    


	<?php echo $this->element('sql_dump'); ?>
</body>
