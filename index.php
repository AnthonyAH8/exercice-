<?php
require __DIR__.'/src/Animal.php';
require __DIR__.'/src/Cat.php';
require __DIR__.'/src/Dog.php';
require __DIR__.'/src/Chenil.php';
require __DIR__.'/src2/Character.php';
require __DIR__.'/src2/Warrior.php';
require __DIR__.'/src2/Magus.php';
require __DIR__.'/src2/Hunter.php';



$cat = new Cat('Félix');
var_dump($cat);

$dog =new Dog('Milou');
var_dump($dog);

$chenil = new Chenil();
$chenil->keep($cat)->keep($dog);
var_dump($chenil);

$aragorn = new Warrior('Aragorn', 100, 10);
var_dump($aragorn);

$legolas = new Hunter('Legolas', 100, 10, 10);
var_dump($legolas);

$gandalf = new Magus('Gandalf', 100, 10);
var_dump($gandalf);

?>

<p><?=$cat->move();?></p>
<p><?=$cat->climbsOnRoof();?></p>
<p><?=$dog->move();?></p>
<p><?=$dog->breathe();?></p>
<p><?=$cat->breathe();?></p>

<hr>
<p><?=$aragorn->strength();?></p>
<p><?=$gandalf->mana($aragorn);?></p>
<p><?=$legolas->rangedAttack($gandalf);?></p>
<p><?=$aragorn->strength($legolas);?></p>