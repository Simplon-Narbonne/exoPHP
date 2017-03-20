<?php include "./includes/header.php" ?>
<!-- Exo 2 -->
    <p>
      Nous sommes le : <?php echo date('d/m/Y'); ?><br />
      Il est : <?php echo date('h:i:s'); ?>
    </p>

<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);
?>
<?php
foreach ($personnes as $element) {
  foreach ($element as $value) {
    echo $value . '<br/>';
  }
  if (in_array('Dain', $element)) {
    echo 'Le prénom Dain est apparu <br/>';
  }
}

?>
<?php include "./includes/footer.php" ?>
