
<HTML>
<head>
    <script src="../assets/js/valid.js"></script>
</head>
<body>
    <?PHP
include "../../entities/hotel.php";
include "../../core/hotelC.php";

	$hotel1C=new hotelC();
    $result=$hotel1C->recupererhotel($_POST['idH']);
	foreach($result as $row){
		$idH=$row['idH'];
		$nomHotel=$row['nomHotel'];
		$nbEtoils=$row['nbEtoils'];
        $nbChambre=$row['nbChambre'];
		$photo=$row['photo'];
		$description=$row['description'];
		$adresse=$row['adresse'];
		$note=$row['note'];}
   
?>
<link rel="stylesheet" href="../assets/css/ajouter.css">
<div class="container">  
  <form method="post" action="Cmodifier.php" id="contact" onsubmit="return formValidation();" name='registration'>
    <h3>Modifier un Hotel</h3>
    <h4>Modifier un hotel de la base de donner</h4>
      <fieldset>
      <input placeholder="Id de Hotel" type="text" name="idH" value="<?PHP echo $idH ?>"   readonly>
    </fieldset>
    <fieldset>
      <input placeholder="Nom de Hotel" type="text" name="nomHotel" value="<?PHP echo $nomHotel ?>"  >
    </fieldset>
    <fieldset>
      <input placeholder="Nombre d'etoils" type="text" name="nbEtoils"   value="<?PHP echo $nbEtoils ?>" >
    </fieldset>
    <fieldset>
      <input placeholder="Nombre de chambres" type="text" name="nbChambre" value="<?PHP echo $nbChambre ?>" >
    </fieldset>
    <fieldset>
      <input placeholder="lien de photo" type="text" name="photo" value="<?PHP echo $photo ?>"  >
    </fieldset>
    <fieldset>
      <textarea placeholder="Descripdddtion du hotel" tabindex="5" type="text" name="description" value="<?PHP echo $description ?>"  ><?PHP echo $description ?></textarea>
    </fieldset>
      <fieldset>
      <input placeholder="Adresse du hotel" type="text" name="adresse" value="<?PHP echo $adresse ?>">
    </fieldset>
      <fieldset>
      <input placeholder="Note du Hotel" type="text" name="note" value="<?PHP echo $note ?>" >
    </fieldset>
    <fieldset>
      <button type="submit" name="modifier" value="modifier">Modifier</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</HTMl>
