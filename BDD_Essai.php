<?php
require ('BDD_Classe_Personnage.php');
require ('BDD_Classe_PersonnageManager.php');

$perso = new Personnage([
  'nom' => 'Victor',
  'forcePerso' => 5,
  'degats' => 0,
  'niveau' => 1,
  'experience' => 0
]);

echo $perso->nom();

$db = new PDO('mysql:host=localhost; dbname=Jeu_Role; charset=utf8', 'root', 'Alligator487§?§');
$manager = new PersonnageManager($db);
$persos = $manager->getList();

//  var_dump($manager->getList());
foreach($persos as $perso):
echo $perso->id() . ' ' . $perso->nom() . ' ' . $perso->forcePerso() . ' ' . $perso->experience() . '<br>';
endforeach;
?>
