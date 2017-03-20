<?php include("includes/header.php"); ?>

<!-- Exo 2 -->


    <p>
      Nous sommes le : <?php
if ($_SERVER['SERVER_NAME'] == "website.com") // On line
{
   $number_of_the_day= "%e"; // Number of the day without "0"
}
else
{
   $number_of_the_day = "%#d";  // The same on Windows/Wampserver
}

setlocale(LC_TIME, 'fr_FR.utf8','fra'); // I'm french !

// i use this fonction ucfirst('string') for "V" Maj. and "J" Maj.

echo ucfirst(strftime('%A '.$number_of_the_day.' %B %Y'));

//  "Vendredi 1 Janvier 2016"  (->  without "0")
?> <br />
      Il est : <?php echo date ('H:i:s'); ?>
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
	foreach($element as $value){

	} 
if(in_array('Dain', $element)){
	echo 'Dain se trouve dans le tableau';
}

}
?>



<?php include("includes/footer.php"); ?>
