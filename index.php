

<?php include("includes/header.php"); ?>
<!-- Exo 2 -->


    <p>

<?php
$mois = array(1=>'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
$jours = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
echo 'Nous sommes le '.$jours[date('w')].' '.date('j').' '.$mois[date('n')].' '.date('Y');
?>
<br/>
      <?php $heure = date("H");
$minute = date("i");
echo "il est $heure h $minute.";
?>
    </p>

<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);

foreach($personnes as $element)
{
    foreach ($element as $key => $value) {

    }
    if(in_array('Dain',$element)){
      echo 'Mme Dain esttrouvée';

}

  }
?>
<?php include("includes/footer.php"); ?>
