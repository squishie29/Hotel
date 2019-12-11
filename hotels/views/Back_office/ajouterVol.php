
<?PHP
include "header.php";


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des vols</a>
            </li>
            <li class="breadcrumb-item active">Ajouter Vol</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter Vol</div>
            <div class="card-body">
                <form method="POST" action="formVol.php" >
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputName">Referance</label>
                            <input class="form-control" name="airline" type="text" aria-describedby="nameHelp"  required>

                        </div>
                        <div class="form-row">

                            <label for="exampleInputLastName">Nom du Produit</label>
                            <input class="form-control" name="lieu_a"  type="text" aria-describedby="nameHelp"   required>

                        </div>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">lieu depart</label>
                        <input class="form-control" name="lieu_d" type="text"  required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputPassword1">date depart</label>
                            <input class="form-control" name="date_d" type="date"  required>

                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">date retour</label>
                            <input class="form-control" name="date_r" type="date"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">heure depart</label>
                            <input class="form-control" name="heure_d" type="number"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">heure retour</label>
                            <input class="form-control" name="heure_r" type="number" min=1 max=100 title="la quantite doit etre entre 1 et 100 ." required >
                        </div>

                    </div>
                    <input class="form-control" type="submit" name="ajouter" value="ajouter">
                </form>
            </div>


        </div>
    </div>

</div>

<?php include "footer.php";?>

