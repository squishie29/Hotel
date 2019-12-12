
<?php  
$servername='localhost';
$username='root';
$password='';
$dbname = "h_db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
$limit = 2;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
if(isset($_POST['ASC']) or isset($_POST['DSC'])or isset($_POST['ASCn'])or isset($_POST['DSCn'])or isset($_POST['ASCc'])or isset($_POST['DSCc'])or isset($_POST['ASCp'])or isset($_POST['DSCp'])or isset($_POST['ASCd'])or isset($_POST['DSCd'])or isset($_POST['ASCa'])or isset($_POST['DSCa'])or isset($_POST['DSCidH'])or isset($_POST['DSCidH']))
{
  if(isset($_POST['DSC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY id DESC LIMIT $start_from, $limit");
  }
  else if(isset($_POST['ASC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY id ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY date_d ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY date_d DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY date_f ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY date_f DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY titre ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY titre DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCd']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY description ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCd']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY description DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCa']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY pourcentage ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCa']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY pourcentage DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCidH']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY idH ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCidH']))
  {
    $result=mysqli_query($conn,"SELECT * FROM promotion ORDER BY idH DESC LIMIT $start_from, $limit");
      
  }
  
}
else
{
  $result=mysqli_query($conn,"SELECT * FROM promotion LIMIT $start_from, $limit");
}
?>

<?PHP
include "../../core/promotionC.php";
$promotion1C=new promotionC();


//test


//var_dump($listepromotions->fetchAll());
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage promotion</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/manage.css">
    <script src="../assets/js/manage.js"></script>

</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Manage <b>promotions</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <form id="form3" method="post" action="ajouterpromotion1.php">
                            <button type="submit" class="btn btn-info add-new" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" style="word-break: break-word;">
                <thead>
                    <tr>
                        <th>Id promotion
                            <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASC" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSC"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form>
                        </th>
                        <th>Nom du promotion
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCn" value="ASCn"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCn" value="DSCn"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Nombre d'etoils
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCe" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCe"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Nombre des chambres
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCc" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCc"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Description du promotion
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCd" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCd"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>pourcentage du promotion
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCa" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCa"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>idH du promotion
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCidH" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCidH"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
while ($row = mysqli_fetch_array($result)) {  
?>
                    <tr>
                        <td>
                            <?PHP echo $row['id']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['date_d']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['date_f']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['titre']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['description']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['pourcentage']; ?>
                        </td>
                        <td>
                            <?PHP echo $row['idH']; ?>
                        </td>
                        <td>
                            <form id="form2" method="post" action="suprimerpromotion.php">
                                <input type="text" value="<?PHP echo $row['id']; ?>" name="id" hidden>
                                <input class="btn btn-info add-new" type="submit" value="supprimer" />
                            </form>
                            <form id="form1" method="post" action="modifierpromotion.php">
                                <input type="text" value="<?PHP echo $row['id']; ?>" name="id" hidden>
                                <input class="btn btn-info add-new" type="submit" value="Modifier" />
                            </form>
                        </td>
                        <?PHP } ?>
                    </tr>
                </tbody>
            </table>
            <?php  

$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM promotion"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='Bpromotions.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>
        </div>
    </div>
</body>

</html>

