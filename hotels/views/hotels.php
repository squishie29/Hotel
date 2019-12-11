<?php  
$servername='localhost';
$username='root';
$password='';
$dbname = "h_db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
$limit = 4;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
if(isset($_POST['ASC']) or isset($_POST['DSC'])or isset($_POST['ASCn'])or isset($_POST['DSCn'])or isset($_POST['ASCe'])or isset($_POST['DSCe'])or isset($_POST['ASCc'])or isset($_POST['DSCc'])or isset($_POST['ASCp'])or isset($_POST['DSCp'])or isset($_POST['ASCd'])or isset($_POST['DSCd'])or isset($_POST['ASCa'])or isset($_POST['DSCa'])or isset($_POST['DSCnote'])or isset($_POST['DSCnote']))
{
  if(isset($_POST['DSC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY idH DESC LIMIT $start_from, $limit");
  }
  else if(isset($_POST['ASC']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY idH ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nomHotel ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCn']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nomHotel DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nbEtoils ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCe']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nbEtoils DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nbChambre ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCc']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY nbChambre DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCp']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY photo ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCp']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY photo DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCd']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY description ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCd']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY description DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCa']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY adresse ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['DSCa']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY adresse DESC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCnote']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY note ASC LIMIT $start_from, $limit");
      
  }
    else if(isset($_POST['ASCnote']))
  {
    $result=mysqli_query($conn,"SELECT * FROM hotel ORDER BY note DESC LIMIT $start_from, $limit");
      
  }
  
}
else
{
  $result=mysqli_query($conn,"SELECT * FROM hotel LIMIT $start_from, $limit");
}
?>
<?PHP
include "../core/hotelC.php";
$hotel1C=new hotelC();
if (isset($_POST['search2'])) 
{
    if ($_POST['search1'] == "")
    {
        $listehotels=$hotel1C->afficherhotels();
    }
    else 
    {
        $listehotels=$hotel1C->rechercherListehotels($_POST['search1']);
    }
}
else
  $listehotels=$hotel1C->afficherhotels();  

//var_dump($listehotels->fetchAll());
?>


<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- TITLE -->
    <title>Povo - Travel Agency & Tourism HTML Template</title>
</head>

<body>

    <!-- Start Loader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- End Loader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area  header-sticky">
        <div class="povo-mobile-nav">
            <div class="logo">
                <a href="index-2.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        </div>

        <div class="povo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="#" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home One</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-two.html" class="nav-link">Home Two</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link active">Tours <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="tours.html" class="nav-link active">Tours</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="single-tours.html" class="nav-link">Single Tours</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">Gallery</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Tours </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="tours.html" class="nav-link">Tours</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="single-tours.html" class="nav-link">Single Tours</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">News</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="news.html" class="nav-link">News</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="single-news.html" class="nav-link">Single News</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">Faq</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="signup.html" class="nav-link">Signup</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="login.html" class="nav-link">Login</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">News <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="news.html" class="nav-link">News</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="single-news.html" class="nav-link">Single News</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="others-options">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="signup.html" class="nav-link">Sign Up</a>
                                </li>

                                <li class="nav-item">
                                    <select class="lang">
                                        <option>English</option>
                                        <option>Australia</option>
                                    </select>
                                </li>

                                <li class="nav">
                                    <a class="nav-link" href="#searchmodal" data-toggle="modal" data-target="#searchmodal">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>

                                <li class="nav">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Right Side Modal -->
    <div class="modal right fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>

                    <p>Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    <ul class="modal-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> <b>27 Division St</b>New York, NY 10002, USA
                        </li>

                        <li>
                            <i class="fas fa-phone"></i> <b>+0 (321) 984 754</b>Give us a call
                        </li>

                        <li>
                            <i class="fas fa-envelope"></i><b>upstart@gmail.com</b>24/7 online support
                        </li>
                    </ul>

                    <ul class="social-links">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Right Side Modal -->

    <!-- Search Modal -->
    <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="search-form">
                        <input type="search" class="form-control" id="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->

    <!-- Page banner -->
    <section class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <h2>Hotels</h2>
                <p><a href="index-2.html">Home</a> / Hotels</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Tours Section -->
    
    <section class="tours-section">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                                            <?php  
while ($row = mysqli_fetch_array($result)) {  
?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <form action="single-hotels.php" method="post">
                                <button style="background-color:transparent;border:none;width:100%;" type="submit" value="envoyer">
                            <div class="tours-item">
                                
                                <div class="tours-image">
                                    
                                        <a name="aa" value="<?PHP echo $row['idH']; ?>">
                                        <img class="imghotel" src="../entities/img/<?PHP echo $row['photo']; ?>">
                                        </a>
                                        
                                    
                                    <input type="text" name="idH" value="<?PHP echo $row['idH']; ?>" hidden>
                                </div>
                                

                                <div class="tours-content" style="word-wrap: break-word;">
                                    <ul class="tours-list">
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <?PHP echo $row['nbEtoils']; ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-user">
                                                <?PHP echo $row['note']; ?>/10
                                            </i>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a value="<?PHP echo $row['idH']; ?> ">
                                            <?PHP echo $row['nomHotel']; ?></a>
                                    </h3>

                                </div>
                            </div>
                                    </button>
                                </form>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="tours-sidebar">
                        <div class="sidebar-content">
                            <h2>Plan Your Trip</h2>
                            <p>It’s time to plan just the perfect vacation!</p>
                        </div>

                        <div class="tours-form">
                            <form name="f1" method="post">
                                <input type="text" class="form-control" placeholder="Search Hotel" name="search1">
                                <button type="submit" name="search2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                    <h5 style="margin-bottom: 30px;margin-top: 10px; ">Trier par:</h5>
                    <div class="container" >
                        <div style="display:flex; justify-content:space-between;">
                            <p style="margin-top: 10px;">Nom du hotel</p>
                        <form method="POST" style=" width: 52px;">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCn" value="ASCn"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSCn" value="DSCn"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form>
                            </div>
                            <div style="display:flex; justify-content:space-between;">
                            <p style="margin-top: 10px;">Nombre d'etoils</p>
                        <form method="POST" style=" width: 52px;">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCe" value="ASC"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCe"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                                <div style="display:flex; justify-content:space-between;">
                           <p>Nombre des chambres</p> 
                        <form method="POST" style=" width: 52px;">
                                <p style="margin-top: 10px;">
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCc" value="ASC"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCc"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                                    <div style="display:flex; justify-content:space-between;">
                           <p>Photo du hotel</p> 
                        <form method="POST" style=" width: 52px;">
                                <p style="margin-top: 10px;">
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCp" value="ASC"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCp"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                                        <div style="display:flex; justify-content:space-between;">
                           <p>Description du hotel</p> 
                        <form method="POST" style=" width: 52px;">
                                <p style="margin-top: 10px;">
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCd" value="ASC"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCd"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                            <div style="display:flex; justify-content:space-between;">
                            <p>Adresse du hotel</p>
                        <form method="POST" style=" width: 52px;">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"  type="submit" name="ASCa" value="ASC"><img  src="assets/images/sort_asc.png"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCa"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                            <div style="display:flex; justify-content:space-between;">
                            <p>Note du hotel</p>
                        <form method="POST" style=" width: 52px;">
                                <p>
                                    <a><button style="width:25px; height:25px; background-color:transparent;border: none;"   type="submit" name="ASCnote" value="ASC"><img  src="assets/images/sort_asc.png" alt="aaa"></button>
                                        <button style="width:25px; height:25px; background-color:transparent;border: none;" type="submit" name="DSC" value="DSCnote"><img src="assets/images/sort_desc.png"></button>
                                    </a>
                                </p>
                            </form></div>
                        
            
    </div>
                </div>
            </div>
            <?php  

$result_db = mysqli_query($conn,"SELECT COUNT(idH) FROM hotel"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination' style='margin:auto; width:50px;  > ";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li  class='page-item'><a class='page-link' href='hotels.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>
        </div>
        
    </section>
    <!-- End Tours Section -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>About Crafted</h2>
                    </div>

                    <div class="footer-item">
                        <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="footer-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-item">
                        <div class="footer-content">
                            <h2>Useful Links</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="quick-menu">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>

                                    <li>
                                        <a href="#">Services</a>
                                    </li>

                                    <li>
                                        <a href="#">Projects</a>
                                    </li>

                                    <li>
                                        <a href="#">Tours</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="quick-menu">
                                    <li>
                                        <a href="#">Team</a>
                                    </li>

                                    <li>
                                        <a href="#">Blog</a>
                                    </li>

                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>

                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>Newsletter</h2>
                    </div>

                    <div class="footer-info">
                        <p class="mb-15">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt et.</p>

                        <div class="newsletter-content">
                            <input type="email" class="form-control" placeholder="Enter Email">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>Instagram</h2>
                    </div>
                    <ul class="instagram-feed">
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/1.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/2.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/3.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/4.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/5.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/6.png" alt="image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer section -->

    <!-- End Footer Bottom section -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p> 2019, EnvyTheme. All Rights Reserved by Povo</p>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom section -->

    <!-- Button Section -->
    <div class="go-top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!-- End Button Section -->


    <!-- jQuery Min JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Mean Menu Min JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Mixitup Min JS -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Upstart Map JS -->
    <script src="assets/js/upstart-map.js"></script>
    <!-- Active JS -->
    <script src="assets/js/active.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/povo/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:06 GMT -->

</html>
