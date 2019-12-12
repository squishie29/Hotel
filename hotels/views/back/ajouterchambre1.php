
<HTML>
<head>
    <script src="../assets/js/validc.js"></script>
</head>
<body>
 <?PHP
    include("../../entities/hotel.php");
include "../../core/hotelC.php";
    
    $hotel1C=new hotelC();
    $listehotels=$hotel1C->afficherhotels();
    ?>
<link rel="stylesheet" href="../assets/css/ajouter.css">
<div class="container">  
  <form id="contact" action="ajouterchambre.php" method="post" onSubmit="return formValidation();" name='registration'>
    <h3>Ajouter une Chambre</h3>
    <h4>Ajouter un Chambre dans la base de donner</h4>
      <fieldset>
      <input placeholder="Id de Chambre" type="text" pattern="^[0-9]*$" tabindex="1" name="idCh" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Nombre de lits du chambre" pattern="^[0-9]*$" type="text" tabindex="1" name="nbBed" required >
    </fieldset>
      <fieldset>
          <select name="idH">
              <?PHP foreach($listehotels as $row2){ ?>
                   <option><?PHP echo $row2['idH']; ?></option>
                       <?PHP } ?>
          </select>
    </fieldset>
    <fieldset>
      <input placeholder="Type du chambre" type="text" tabindex="2" name="typeC" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="prix du Chambre" tabindex="5" name="prix" pattern="^[0-9]*$" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" >Submit</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</HTMl>
