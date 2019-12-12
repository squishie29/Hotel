<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ ?>
<?PHP
include "header.php";


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <?php include "manage.php";?>
    </div>

</div>

<?php include "footer.php";?>

<?php 

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="auth.html">Cliquer pour se connecter</a>';

}  ?>
