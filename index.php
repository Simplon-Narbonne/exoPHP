
<!-- Exo 2 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title><br />
    <?php include_once('includes/header.php');?>
    <!--on peut utiliser require (ça permet de trouver le fichier
     meme s'il est modifié en cours de route)-->
  </head>
  <body>
    <p>

      <?php $nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
      $mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août",
        "septembre", "octobre", "novembre", "décembre");
        // on extrait la date du jour
        list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));
        echo "Aujourd'hui, nous sommes le  " ;
        echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?> <br/>
        Il est <?php echo date('h:i:s'); ?>
        <!--timestamp : nb de jours et de seconde depuis le 1er janvier 1970-->
    </p>

<!-- Exo 3 -->
<?php

$personnes = array(
  1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
  2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
  3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
  4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
);
    echo '<pre>';
    print_r($personnes[2]);
    echo '</pre>';

?>
<br />
<footer>
<?php
  $coordonnees = array (
      'prenom' => 'François',
      'nom' => 'Dupont',
      'adresse' => '3 Rue du Paradis',
      'ville' => 'Marseille');

  foreach($coordonnees as $element)
  {
      echo $element . '<br />';
  }

  $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

  $position = array_search('Fraise', $fruits);
  echo '"Fraise" se trouve en position ' . $position . '<br />';

  $position = array_search('Banane', $fruits);
  echo '"Banane" se trouve en position ' . $position;

  ?>
</footer>
  <br />
  <?php include_once('includes/footer.php'); ?>

</body>
</html>
