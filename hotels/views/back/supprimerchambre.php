<?PHP
include "../../entities/chambre.php";
include "../../core/chambreC.php";
$chambreC=new chambreC();
if (isset($_POST["idCh"])){
	$chambreC->supprimerchambre($_POST["idCh"]);
	header('Location:Bchambres.php');
}

?>