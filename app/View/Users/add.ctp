<!-- app/View/Users/add.ctp -->
<div class="users form">

<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php 
        echo $this->Form->input('RUT_CLI',array(
    'type' => 'text'));
        echo $this->Form->input('NOMBRE_CLI');
        echo $this->Form->input('APELLIDO_PCLI');
        echo $this->Form->input('APELLIDO_MCLI');
        echo $this->Form->input('MAIL_CLI');
        echo $this->Form->input('TEL_CLI');
        echo $this->Form->input('FECHA_REGISTRO_CLI');
        echo $this->Form->input('DIR_CLI');
        echo $this->Form->input('HABILITADO_CLI');
        echo $this->Form->input('PASSWORD_CLI');
		echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));

		
		echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}
?>