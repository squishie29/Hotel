<?php 
include "../core/hotelC.php";
$hotel1C=new hotelC();
$res=$hotel1C->calculernote();
foreach($res as $varr){
    foreach($varr as $varr1){
    $sayeb_zeby=$varr1;
}
}
echo $sayeb_zeby;
?>

