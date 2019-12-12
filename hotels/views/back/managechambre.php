
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
if(isset($_POST['ASC']) or isset($_POST['DSC'])or isset($_POST['ASCn'])or isset($_POST['DSCn'])or isset($_POST['ASCe'])or isset($_POST['DSCe'])or isset($_POST['ASCc'])or isset($_POST['DSCc'])or isset($_POST['ASCp'])or isset($_POST['DSCp']))
{
  if(isset($_POST['DSC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY idCh DESC LIMIT $start_from, $limit");
  }
  else if(isset($_POST['ASC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY idCh ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY nbBed ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY nbBed DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY idH ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY idH DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY typeC ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY typeC DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCp']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY prix ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCp']))
  {
    $result=mysqli_query($conn,"SELECT * FROM chambre ORDER BY prix DESC LIMIT $start_from, $limit");
      
  }
   
  
}
else
{
  $result=mysqli_query($conn,"SELECT * FROM chambre LIMIT $start_from, $limit");
}
?>


<?PHP
include "../../core/chambreC.php";
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
    <script type="application/javascript">$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});</script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/manage.css">
<script src="../assets/js/manage.js"></script>

</head>
<body>
    
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manage <b>chambres</b></h2></div>
                    <div class="col-sm-4">
                        <form id="form3" method="post" action="ajouterchambre1.php">
                        <button type="submit" class="btn btn-info add-new" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
             <table class="table table-bordered" id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id chambre
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASC" value="ASC"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSC"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Nombre de lits
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCn" value="ASCn"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCn" value="DSCn"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Id du Hotel
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCe" value="ASCe"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCe" value="DSCe"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>Type du chambre
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCc" value="ASCc"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCc" value="DSCc"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                        <th>prix du chambre
                        <form method="POST">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;" class="btn btn-primary btn-xs" type="submit" name="ASCp" value="ASCp"><img  src="../assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCp" value="DSCp"><img src="../assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php  
while ($row = mysqli_fetch_array($result)) {  
?>
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
                </tbody>
            </table>
            <?php  

$result_db = mysqli_query($conn,"SELECT COUNT(idCh) FROM chambre"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='Bchambres.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>
        </div>
    </div>     
</body>
</html>        
