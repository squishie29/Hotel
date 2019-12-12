<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ ?>
<?PHP
include "../../entities/chambre.php";
include "../../core/chambreC.php";

foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}
if (isset($_POST['idCh']) ){
    $chambre1= new chambreC;
$chambreX=new chambre((int)$_POST['idCh'],$_POST['nbBed'],$_POST['idH'],$_POST['typeC'],$_POST['prix']);

$chambre1->ajouterchambre($chambreX);
header('Location:Bchambres.php');

}
else{
    foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}
}

?>
<?php 

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="auth.html">Cliquer pour se connecter</a>';

}  ?>
