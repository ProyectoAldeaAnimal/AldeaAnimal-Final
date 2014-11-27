<?php
$this->layout = 'headVets';

?>

   <FONT COLOR="#229b0d"> <h3><?php
    $usuario = AuthComponent::user();
    debug($usuario);
    echo ("Doctor: ".$usuario[0]['Vet']['name']);?></h3></FONT>