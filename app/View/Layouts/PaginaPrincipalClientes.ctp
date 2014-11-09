<?php echo $this->Html->docType('html5');?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Aldea Animal
	</title>
	<?php

		echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));
		
		echo $this->Html->css (array('reset','style','fonts','http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700'));
		echo $this->Html -> css(array("bootstrap.css"));
		echo $this->Html -> css(array("font-awesome.css"));
		echo $this->Html -> css(array("main.css"));
		echo $this->Html -> css(array("style.css"));
		echo $this->Html -> css(array("style2.css"));
		echo $this->Html -> css(array("full-slider.css"));
		echo $this->Html-> script(array("jquery-1.8.3.min.js"));
		echo $this->Html-> script(array("jquery.mobile.customized.min.js"));
		echo $this->Html-> script(array("jquery.easing.1.3.js"));
		echo $this->Html-> script(array("bootstrap.min.js"));
		echo $this->Html-> script(array("scrolling-nav.js"));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body id="home" data-spy="scroll" data-target=".navbar-fixed-top">
  

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
                      <li><a class= "page-scroll" href="#servicios"><FONT COLOR="#FFFFFF">Servicios</FONT></a></li>
                      <li><a class= "page-scroll" href="#about"><FONT COLOR="#FFFFFF">Quienes Somos</FONT></a>
                      <li><a class= "page-scroll" href="#contact"><FONT COLOR="#FFFFFF">Contacto</font></a></li>
                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>

         

                        
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
        </div>
  

  

    <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
          <div class="col-md-6 text-right dm">
            <ul id="downMenu">
              <li class="active"><a href="#home">Principal</a></li>
              <li><a href="#servicios">Servicios</a></li>
              <li><a href="#about">Quienes Somos</a></li>
              <li class="last"><a href="#contact">Contacto</a></li>
              <!--li><a href="#features">Features</a></li-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>    
 
  <script>
    $('.carousel').carousel({
        interval: 3000, //changes the speed
        pause: "false"    

    });
    $('#playButton').click(function () {
        $('#myCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#myCarousel').carousel('pause');
    });



    </script>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
