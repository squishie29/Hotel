<?PHP
include "../../entities/hotel.php";
include "../../core/hotelC.php";
$hotelC=new hotelC();
if (isset($_POST["idH"])){
	$hotelC->supprimerhotel($_POST["idH"]);
	header('Location:Bhotels.php');
}

?>