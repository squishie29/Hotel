
<?PHP
include "../../entities/hotel.php";
include "../../core/hotelC.php";
/*foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}*/
if (isset($_POST['idH']) ){
    $hotel1= new hotelC;
$hotelX=new hotel((int)$_POST['idH'],$_POST['nomHotel'],(int)$_POST['nbEtoils'],$_POST['nbChambre'],$_POST['photo'],$_POST['description'],$_POST['adresse'],$_POST['note']);

$hotel1->ajouterhotel($hotelX);
header('Location: Bhotels.php');

}
else{
    foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}
}

?>

