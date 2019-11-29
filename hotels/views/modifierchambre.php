<html>
<head>
</head>
<body>
    <?PHP
include "../entities/chambre.php";
include "../core/chambreC.php";

	$chambre1C=new chambreC();
    $result=$chambre1C->recupererchambre($_POST['idCh']);
	foreach($result as $row){
		$idCh=$row['idCh'];
		$nbBed=$row['nbBed'];
        $idH=$row['idH'];
		$typeC=$row['typeC'];
		$prix=$row['prix'];
    }
   
?>
<link rel="stylesheet" href="assets/css/ajouter.css">
<div class="container">  
  <form method="post" action="cmodifierchambre.php" id="contact">
    <h3>Modifier un chambre</h3>
    <h4>Modifier un chambre de la base de donner</h4>
      <fieldset>
      <input placeholder="Id de chambre" type="text" name="idCh" value="<?PHP echo $idCh ?>"  readonly >
    </fieldset>
    <fieldset>
      <input placeholder="Nombre de lits dans la chambre" type="text" name="nbBed" value="<?PHP echo $nbBed ?>" pattern="^[0-9]*$" >
    </fieldset>
      <fieldset>
      <input placeholder="Id du Hotel" type="text" pattern="^[0-9]*$" name="idH" value="<?PHP echo $idH ?>"  >
    </fieldset>
    <fieldset>
      <input placeholder="Type du chambre" type="text" name="typeC" value="<?PHP echo $typeC ?>" >
    </fieldset>
    <fieldset>
      <textarea placeholder="prix du chambre" tabindex="5" type="text" pattern="^[0-9]*$" name="prix" value="<?PHP echo $prix ?>"  ><?PHP echo $prix ?></textarea>
    </fieldset>
    <fieldset>
      <button type="submit" name="modifier" value="modifier">modifier</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</html>