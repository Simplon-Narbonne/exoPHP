<?php include("includes/header.php"); ?>
<!-- Exo 2 -->
<?php
$lesMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

$jours = date('d');
$mois = date('m');
$annee = date('Y');
?>
    <p>
      Nous sommes le : <?php echo $jours . " " . $lesMois[$mois-1] . " " . $annee ?> <br />
      Il est : <?php echo date ('H:i:s') ?>
    </p>

<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);

foreach ($personnes as $element)
{
    foreach($element as $value)
    {
        echo $value . '<br />';
    }
    if(in_array ('Dain', $element)){
        echo 'Le prénom Dain est apparu <br />';
    }
}
/* Autre moyen de dire si madame Dain se trouve dans les personnes du tableau
$position = array_search('Dain', $personnes);
echo '"Dain" se trouve dans le tableau.';
*/

?>
<?php include("includes/footer.php"); ?>
