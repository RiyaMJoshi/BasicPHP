<?php

require 'animal.php';
require 'cow.php';
require 'lion.php';

$cow = new Cow('Herbivore', 'Grass');
$lion = new Lion('Carnivore', 'Meat');

echo '<b>Cow Object: </b><br/>';
echo 'The cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br/><br/>';

echo '<b>Lion Object: </b><br/>';
echo 'The lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food() . '<br/><br/>';

?>