
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
