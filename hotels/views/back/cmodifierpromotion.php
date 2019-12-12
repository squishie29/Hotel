<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ ?>
<?PHP
include "../../entities/promotion.php";
include "../../core/promotionC.php";
if (isset($_POST['modifier']) ){
    $promotion1= new promotionC;
$promotionX=new promotion($_POST['id'],$_POST['date_d'],$_POST['date_f'],$_POST['titre'],$_POST['description'],$_POST['pourcentage'],$_POST['idH']);
$promotion1->modifierpromotion($promotionX);
	header('Location:Bpromotions.php');
}
else echo 'le';
           
?>
<?php 

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="auth.html">Cliquer pour se connecter</a>';

}  ?>