
<HTML>
<head>
        <script src="../assets/js/validp.js"></script>

</head>
<body>
 <?PHP
    include("../entities/hotel.php");
include "../core/hotelC.php";
    
    $hotel1C=new hotelC();
    $listehotels=$hotel1C->afficherhotels();
    ?>
<link rel="stylesheet" href="assets/css/ajouter.css">
<div class="container">  
  <form id="contact" action="ajouterpromotion.php" method="post" onSubmit="return formValidation();" name='registration'>
    <h3>Ajouter une promotion</h3>
    <h4>Ajouter un promotion dans la base de donner</h4>
      <fieldset>
      <input placeholder="Id de promotion" type="text" tabindex="1" name="id" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Date du debut de promotion" type="date" tabindex="1" name="date_d" required >
    </fieldset>
    <fieldset>
      <input placeholder="Date du fin de promotion" type="date" tabindex="2" name="date_f" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="titre du promotion" tabindex="5" name="titre" required></textarea>
    </fieldset>
      <fieldset>
      <textarea placeholder="desc du promotion" tabindex="5" name="description" required></textarea>
    </fieldset>
      <fieldset>
      <textarea placeholder="% du promotion" tabindex="5" name="pourcentage" required></textarea>
    </fieldset>
           <fieldset>
          <select name="idH">
              <?PHP foreach($listehotels as $row2){ ?>
                   <option><?PHP echo $row2['idH']; ?></option>
                       <?PHP } ?>
          </select>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" >Submit</button>
    </fieldset>
  </form>
 
  
</div>

</body>
</HTMl>

