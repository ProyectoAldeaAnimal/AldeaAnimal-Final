<?php 
 $this->layout = 'head';
?>

    <div class="callout4">
      <form class="form-signin login-box" role="form">
        <div id= "ex4">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'Logo', 'class'=>"img-responsive"));
          ?>
        </div>
        <div id= "ex5">
          <?php
            echo $this->Html->image('sigin.png', array('alt' => 'sigin', 'class'=>"img-responsive"));
          ?>
        </div>
        <br><br>
        <input type="text" class="form-control required rut" placeholder="Rut" name="rut" id="rut" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox contenido4">
          <input type="radio" name="group1" value="Administrador"> Administrador<br>
          <input type="radio" name="group1" value="Veterinario"> Veterinario<br>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <div class="lineFinal">
          <div class="container">
            <div class="row downLine">
              <div class="col-md-6 text-left copy">
                <p>Copyright &copy; 2014 Aldea Animal.</p>
              </div>
              <div class="col-md-6 text-right dm">
              </div>
            </div>
          </div>
        </div>

