<?php include("includes/header.php"); ?>
<!-- Exo 2 -->
    <p>
      Nous sommes le : <?php  setlocale(LC_TIME, 'FR','fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
echo strftime('%d %B %Y', time()); ?>  <br />
Il est : <?php echo date('H:i:s'); ?>
    </p>

<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);
foreach ($personnes as $numero) {
  foreach ($numero as $qqun => $value){

  }
  if (in_array('Dain', $numero)){
    echo "J'ai trouvé Mme Dain ";
  }
}
include("includes/footer.php");
?>
