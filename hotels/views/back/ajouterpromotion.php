
<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}
if (isset($_POST['id']) ){
    $promotion1= new promotionC;
$promotionX=new promotion((int)$_POST['id'],$_POST['date_d'],$_POST['date_f'],$_POST['titre'],$_POST['description'],$_POST['pourcentage'],$_POST['idH']);

$promotion1->ajouterpromotion($promotionX);
header('Location:Bpromotions.php');

}
else{
    foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}
}

?>

