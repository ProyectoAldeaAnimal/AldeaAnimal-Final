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
        echo $this->Html -> css(array("bootstrap.css"));
        echo $this->Html -> css(array("font-awesome.css"));
        echo $this->Html -> css(array("main.css"));
        echo $this->Html -> css(array("style.css"));
        echo $this->Html -> css(array("style2.css"));
        echo $this->Html -> css(array("signin.css"));
        echo $this->Html-> script(array("jquery-1.8.3.min.js"));
        echo $this->Html-> script(array("ie-emulation-modes-warning.js"));
        echo $this->Html-> script(array("bootstrap.min.js"));
        echo $this->Html-> script(array("ie10-viewport-bug-workaround.js"));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
      ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


              <?php echo $content_for_layout ?>



</html>

