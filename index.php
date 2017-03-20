<?php include './includes/header.php' ?>
<!-- Exo 2 -->
<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

echo "<p>Nous sommes le : " . $jour . " ". $mois . " ". $annee ."<br />Il est : " . $heure . ":" . $minute . "</p>";

 ?>


<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);

if (in_array("Dain", $personnes))
  {
  echo "<p>Oui elle y est !!!</p>";
  }
else
  {
  echo "<p>Non elle n'y est pas !!!</p>";
  }

?>
<?php include './includes/footer.php' ?>
