
<html>
<head>
    <script src="../assets/js/validp.js"></script>
</head>
<body>
    <?PHP
include "../../entities/chambre.php";
include "../../core/chambreC2.php";
include("../../entities/hotel.php");
include "../../core/hotelC.php";
    
    $hotel1C=new hotelC();
    $listehotels=$hotel1C->afficherhotels();
    
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
<link rel="stylesheet" href="../assets/css/ajouter.css">
<div class="container">  
  <form method="post" action="cmodifierchambre.php" id="contact" onSubmit="return formValidation();" name='registration'>
    <h3>Modifier un chambre</h3>
    <h4>Modifier un chambre de la base de donner</h4>
      <fieldset>
      <input placeholder="Id de chambre" type="text" name="idCh" value="<?PHP echo $idCh; ?>"  readonly >
    </fieldset>
    <fieldset>
      <input placeholder="Nombre de lits dans la chambre" type="text" name="nbBed" value="<?PHP echo $nbBed; ?>" pattern="^[0-9]*$" >
    </fieldset>
      <fieldset>
          <select name="idH">
              <?PHP foreach($listehotels as $row2){ ?>
                   <option><?PHP echo $row2['idH']; ?></option>
                       <?PHP } ?>
          </select>
    </fieldset>
    <fieldset>
      <input placeholder="Type du chambre" type="text" name="typeC" value="<?PHP echo $typeC ?>" >
    </fieldset>
    <fieldset>
      <textarea placeholder="prix du chambre" tabindex="5" type="text" pattern="^[0-9]*$" name="prix" value="<?PHP echo $prix; ?>"  ><?PHP echo $prix ?></textarea>
    </fieldset>
    <fieldset>
      <button type="submit" name="modifier" value="modifier">modifier</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</html>
