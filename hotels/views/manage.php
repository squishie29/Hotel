<?PHP
include "../core/hotelC.php";
$hotel1C=new hotelC();
$listehotels=$hotel1C->afficherhotels();


//var_dump($listehotels->fetchAll());
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/manage.css">
<script src="assets/js/manage.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manage <b>Hotels</b></h2></div>
                    <div class="col-sm-4">
                        <form id="form3" method="post" action="ajouter.html">
                        <button type="submit" class="btn btn-info add-new" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id Hotel</th>
                        <th>Nom du hotel</th>
                        <th>Nombre d'etoils</th>
                        <th>Nombre des chambres</th>
                        <th>Photo du hotel</th>
                        <th>Description du hotel</th>
                        <th>Adresse du hotel</th>
                        <th>Note du hotel</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach($listehotels as $row){?>
                    <tr>
                        <td><?PHP echo $row['idH']; ?></td>
                        <td><?PHP echo $row['nomHotel']; ?></td>
                        <td><?PHP echo $row['nbEtoils']; ?></td>
                        <td><?PHP echo $row['nbChambre']; ?></td>
                        <td><?PHP echo $row['photo']; ?></td>
                        <td><?PHP echo $row['description']; ?></td>
                        <td><?PHP echo $row['adresse']; ?></td>
                        <td><?PHP echo $row['note']; ?></td>
                        <td>
                            <form id="form2" method="post" action="supprimer.php">
                             <input type="text" value="<?PHP echo $row['idH']; ?>" name="idH" hidden>
                             <input class="btn btn-info add-new" type="submit" value="supprimer"/>
                            </form>
                         <form id="form1" method="post" action="modifier.php">
                             <input type="text" value="<?PHP echo $row['idH']; ?>" name="idH" hidden>
                             <input class="btn btn-info add-new" type="submit" value="Modifier"/>
                            </form>
                        </td>
                        <?PHP } ?>
                    </tr>

                    </tr>      
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            