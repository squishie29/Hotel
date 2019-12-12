
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

