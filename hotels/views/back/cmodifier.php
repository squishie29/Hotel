<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ ?>
<?PHP
include "../../entities/hotel.php";
include "../../core/hotelC.php";
if (isset($_POST['modifier']) ){
    $hotel1= new hotelC;
$hotelX=new hotel($_POST['idH'],$_POST['nomHotel'],(int)$_POST['nbEtoils'],$_POST['nbChambre'],$_POST['photo'],$_POST['description'],$_POST['adresse'],$_POST['note']);
$hotel1->modifierhotel($hotelX);
	header('Location:Bhotels.php');
}
else echo 'le';
           
?>
<?php 

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="auth.html">Cliquer pour se connecter</a>';

}  ?>