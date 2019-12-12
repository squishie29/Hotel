<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ ?>
<?PHP
include "../../entities/chambre.php";
include "../../core/chambreC.php";
if (isset($_POST['modifier']) ){
    $chambre1= new chambreC;
$chambreX=new chambre($_POST['idCh'],$_POST['nbBed'],$_POST['idH'],$_POST['typeC'],$_POST['prix']);

    $chambre1->modifierchambre($chambreX);

	header('Location: Bchambres.php');
}
else echo 'le';        
?>

<?php 

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="auth.html">Cliquer pour se connecter</a>';

}  ?>