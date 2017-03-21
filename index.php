<?php
/*
* http://php.net/manual/fr/function.include.php
* http://php.net/manual/fr/function.include-once.php
*/
  include_once("includes/header.php");
?>

<!-- Exo 2
Voir la fonction date :
  http://php.net/manual/en/function.date.php
-->
<?php
  // Pour info le timestamp
  // http://php.net/manual/fr/function.time.php
  // timestamp Nombre de seconde depuis le 1 janvier 1970
  // echo time();
?>
  <p>
    Pour passer les date en FR
    <br />
    setlocale(LC_TIME, 'fr_FR.utf8','fra');
  </p>
   http://php.net/manual/fr/function.strftime.php
   <br />
  echo strftime('%A %e %B %Y');


    <p>
      <?php
      setlocale(LC_TIME, 'fr_FR.utf8','fra');
      ?>
      Nous sommes le : <?php echo date('j F Y'); // ou date('j', 'm', 'Y'); ?><br />
      <!-- %A : jour de la semaine %e: Date du jour en chiffre
      %B : Mois version textuelle en version longue %Y: Annee sur 4 chiffre
      -->
      Nous sommes le : <?php echo strftime('%A %e %B %Y'); // ou date('j', 'm', 'Y'); ?><br />
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

// Acceder à un seul element
echo "<br />Acceder à un seul element du tableau personnes<br />";
echo $personnes[1]['prenom'];

echo "<p>Boucler sur le tableau avec for ou foreach</p>";
echo "<p>Avec <a href='http://php.net/manual/en/control-structures.for.php' target='_blank' >for</a> :</p>";

// Boucler sur le tableau avec une boucle for
for($i=1; $i <= count($personnes); $i++){
  echo $personnes[$i]['prenom']."<br />";
}

echo "<p>Avec <a href='http://php.net/manual/en/control-structures.foreach.php' target='_blank' >foreach </a> :</p>";
// Boucler sur le tableau avec foreach
foreach($personnes as $personne){
  // Pour afficher tout le tableau valeur
  foreach($personne as $donnee){
    echo $donnee."<br />";
  }
}
echo "<p>Avec foreach en affichant les clefs en plus des valeurs :</p>";

// Boucler sur le tableau avec foreach
foreach($personnes as $personne){
  // Pour afficher tout le tableau clef et valeur
  foreach($personne as $clef => $donnee){
    echo $clef." : ".$donnee."<br />";
  }
}

echo "<p>Boucler et trouver Mme Dain grâce à <a href='http://php.net/manual/fr/function.in-array.php' target='_blank' >in_array()</a> :</p>";

// Boucler sur le tableau avec foreach
foreach($personnes as $personne){
  // Trouver la valeur madame Dain dans un des tableaux
  // Premiere solution : in_array()
  if(in_array('Dain', $personne)){
    echo "Mme Dain est présente";
  }
}

echo "<p>Boucler et trouver Mme Dain grâce à  <a href='http://php.net/manual/fr/function.array-search.php' target='_blank' >array_search()</a> :</p>";
foreach($personnes as $personne){
  // Deuxieme solution : avec array_search() renvoie la clef de la valeur recherchée
  // Si on trouve une clef pour la valeur Dain, cela veut dire que cette valeur est présente dans le tableau
  $position = array_search('Dain', $personne);
  echo "<br />Clef : ";
  echo $position;
  echo "<br />";
}


?>

<?php
  include_once("includes/footer.php");
?>
