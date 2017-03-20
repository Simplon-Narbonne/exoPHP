<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
  </head>
  <body>

<!-- Exo 2 -->
<!-- Affichez la date du jour et l'heure actuelle sur deux lignes. -->
<?php
$jour = date('d');
$mois = date('m');
$année = date('Y');

$heure = date('H');
$minutes = date('i');
$secondes = date('s');

echo 'Nous sommes le : ' . $jour . '/' . $mois . '/'. $année . '</br>';
echo 'il est : ' . $heure . ':' . $minutes . ':' . $secondes . '</br>';

 ?>

<!-- Exo 3 -->
<!-- Parcourez le tableau de personnes à l'aide de foreach et recherchez grâce à une fonction si madame Dain se trouve dans les personnes du tableau -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);



echo "<pre>";
print_r($personnes);
echo "</pre>";


$position = array_search ('Dain', $personnes);
echo 'Madame "Dain" se trouve dans les personnes ' . '</br>';
?>

<footer>

</footer>
</body>
</html>
