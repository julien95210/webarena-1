<html>
<!-- Réfère au Controller Arenas -->
<!-- Vue de l'action sight() -->


<!-- Affichage des infos du combattant -->
<?php echo pr($infos); ?>

<!-- Formulaire référant à la méthode doMove -->
<?php

    echo $this->Form->create('Fighter');
    echo $this->Form->input('direction',array(
    		'options' => array(
    				'north'=>'north',
    				'east'=>'east',
    				'south'=>'south',
    				'west'=>'west'),
    		'default' => 'east'));
    echo $this->Form->end('Move');
?>


</html>