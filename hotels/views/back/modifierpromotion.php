
<HTML>
<head>
    <script src="../assets/js/validp.js"></script>
</head>
<body>
    <?PHP
include "../../entities/promotion.php";
include "../../core/promotionC.php";

	$promotion1C=new promotionC();
    $result=$promotion1C->recupererpromotion($_POST['id']);
	foreach($result as $row){
		$id=$row['id'];
		$date_d=$row['date_d'];
		$date_f=$row['date_f'];
        $titre=$row['titre'];
		$description=$row['description'];
		$pourcentage=$row['pourcentage'];
		$idH=$row['idH'];}
   
?>
<link rel="stylesheet" href="../assets/css/ajouter.css">
<div class="container">  
  <form method="post" action="cmodifierpromotion.php" id="contact" onsubmit="return formValidation();" name='registration'>
    <h3>Modifier un promotion</h3>
    <h4>Modifier un promotion de la base de donner</h4>
      <fieldset>
      <input placeholder="Id de promotion" type="text" name="id" value="<?PHP echo $id ?>"   readonly>
    </fieldset>
    <fieldset>
      <input placeholder="date de debut du promotion" type="date" name="date_d" value="<?PHP echo $date_d ?>"  >
    </fieldset>
    <fieldset>
      <input placeholder="date de fin du promotion" type="date" name="date_f"   value="<?PHP echo $date_f ?>" >
    </fieldset>
    <fieldset>
      <input placeholder="Nombre de chambres" type="text" name="titre" value="<?PHP echo $titre ?>" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Descripdddtion du promotion" tabindex="5" type="text" name="description" value="<?PHP echo $description ?>"  ><?PHP echo $description ?></textarea>
    </fieldset>
      <fieldset>
      <input placeholder="pourcentage du promotion" type="text" name="pourcentage" value="<?PHP echo $pourcentage ?>">
    </fieldset>
      <fieldset>
      <input placeholder="idH du promotion" type="text" name="idH" value="<?PHP echo $idH ?>" >
    </fieldset>
    <fieldset>
      <button type="submit" name="modifier" value="modifier">Modifier</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</HTMl>
