<?PHP
include "../core/chambreC.php";
$chambre1C=new chambreC();
$listechambres=$chambre1C->afficherchambres();


//var_dump($listechambres->fetchAll());
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


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/manage.css">
<script src="assets/js/manage.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manage <b>chambres</b></h2></div>
                    <div class="col-sm-4">
                        <form id="form3" method="post" action="ajouterchambre.html">
                        <button type="submit" class="btn btn-info add-new" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id chambre</th>
                        <th>Nombre de lits</th>
                        <th>Id du Hotel</th>
                        <th>Type du chambre</th>
                        <th>prix du chambre</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach($listechambres as $row){?>
                    <tr>
                        <td><?PHP echo $row['idCh']; ?></td>
                        <td><?PHP echo $row['nbBed']; ?></td>
                        <td><?PHP echo $row['idH']; ?></td>
                        <td><?PHP echo $row['typeC']; ?></td>
                        <td><?PHP echo $row['prix']; ?></td>
                        <td>
                            <form id="form2" method="post" action="supprimerchambre.php">
                             <input type="text" value="<?PHP echo $row['idCh']; ?>" name="idCh" hidden>
                             <input class="btn btn-info add-new" type="submit" value="supprimer"/>
                            </form>
                         <form id="form1" method="post" action="modifierchambre.php">
                             <input type="text" value="<?PHP echo $row['idCh']; ?>" name="idCh" hidden>
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