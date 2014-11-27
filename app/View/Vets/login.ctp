<?php 
 $this->layout = 'head';
?>

    <div class="callout4">
      <div class="form-signin login-box" role="form">
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
        <br>



        <div class="users form">
              <?php echo $this->Session->flash('auth'); ?>
              <?php echo $this->Form->create('Vet', array('action'=>'login', 'type'=>'post')); ?>
              <fieldset>
                   
                    <?php echo $this->Form->input('RUT_VET',array('label'=>"",'type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'id'=>"rut", 'required autofocus' ));
                    echo $this->Form->input('PASSWORD_VET',array('label'=>"",'type'=>'password','class'=>"form-control", 'placeholder'=> "Password", 'required'));

                    $langs = array('Administrador' => 'Administrador', 'Veterinario' => 'Veterinario');
                    ?>
                    
                    <?php
                    echo $this->Form->input('rol', array(
                                      'label'=>"",  
                                      'type' => 'select',
                                      'options' => $langs,
                                      'class'=> 'form-control',
                                      'selected' => 'Veterinario'
                                  )
                      );
                    ?>
                 
                      

                      <?php echo $this->Form->input('Entrar',array('label'=>"",'type'=>'submit','class'=>"btn btn-lg btn-primary btn-block"));?>
                      <?php echo $this->Form->end();
                    ?>
              </fieldset>
            
            <?php
                      /*echo $this->Form->input('username',array('label'=>"",'type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'name'=>"rut", 'id'=>"rut", 'required autofocus' )); 
                      echo $this->Form->input('password',array('label'=>"",'type'=>'password','class'=>"form-control", 'placeholder'=> "Password", 'required')); ?>
                      <?php echo $this->Form->input('Entrar',array('label'=>"",'type'=>'submit','class'=>"btn btn-lg btn-primary btn-block"));?>
                      <?php echo $this->Form->end();*/?>
        
                  </fieldset>

          </div>


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

