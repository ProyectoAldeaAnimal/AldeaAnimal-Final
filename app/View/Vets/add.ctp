<!-- app/View/Users/add.ctp -->
<div class="users form">

<?php echo $this->Form->create('Vet');?>
    <fieldset>
        <legend><?php echo __('Add Vet'); ?></legend>
        <?php echo $this->Form->input('rut_vet');
        echo $this->Form->input('password_vet');
		echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));

		
		echo $this->Form->submit('Add Vet', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php /*
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}*/
?>	