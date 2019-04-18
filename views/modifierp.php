


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html >
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body>
 

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>


                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurant</a> 
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="index1.html">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                        </ul>
                    </li>


                    <h3 class="menu-title">Stock</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Ingredient</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="afficheringredient.php">affichage</a></li>
                            <li><i class="fa fa-bars"></i><a href="app-stock.html">ajout</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Supplement</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="afficherstock.php">affichage</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="app-stock1.html">ajout</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div> </header>
            <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="#">Dashboard</li>
                             <li><a href="#">Stock</a></li>
                              <li><a href="#">Ingredient</a></li>
                            <li class="active">Ajout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>






 <?PHP
include "../Entities/produit.php";
include "../Cores/ProduitC.php";

if (isset($_GET['namep'])){

	$prodC=new ProduitC();
  $result=$prodC->recupererP($_GET['namep']);

	foreach($result as $row){
		$nom=$row['nom_P'];
		$type=$row['Type_P'];
		$desc=$row['Description'];
		$Prix=$row['Prix'];
		$image=$row['image'];
?>


                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Produit</strong> Elements
                                                    </div>
                                                    <div class="card-body card-block">


                                    <div class="menu-upload-form">


										<form class="form-horizontal" onsubmit="return test2(event)" method="POST" enctype="multipart/form-data">
                                        <div class="row form-group"><div class="col col-md-3">
                                            <label class="form-control-label">Modify Product</label></div>
                                            <div class="col-12 col-md-9">

                                                    <label for="inputFile-2"><span class="btn btn-warning">
                                                                    <input type="file" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value" name="image" >
                                                                    <i class="fa fa-file-archive-o"></i> </span>
                                                                
                                                    </label><br> 
                                                                                                
    
                                            </div>
                                        </div></div> <br>
                                                                
                                                                <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name Product</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" name="nom" placeholder="Type your menu Title" class="form-control" id="nom" value="<?php echo $nom ?>">
                                                                </div>
                                                            </div>
                                                             <br>
                                                               <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Product</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" class="form-control" placeholder="Type your menu Type" name="type" id="type"  value="<?php echo $type ?>">
                                                                </div>
                                                            </div>
                                                             <br>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Details</label>
                                                                </div>
                                                                <div class="col-12 col-md-9"><textarea class="form-control" rows="3" placeholder="Type your menu Details" id="description" name="description"   value="<?php echo $desc ?>"></textarea>
                                                                </div>
                                                            </div>
                                                             <br>
                                                                    <div class="row form-group">                                                     
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Price</label>
                                                                </div>
                                                                <div class="col-12 col-md-9"><input type="text" class="form-control" placeholder="$00.00" name="price" id="price" value="<?php echo $Prix ?>">
                                                                </div>
                                                            </div>
                                                             <br>



                                          <input type="hidden" name="check" value="<?PHP echo $_GET['namep'];?>" >

                                        <div class="form-group">
                                            <p id="erreur"></p>
                                            <div class="card-footer">
                                            
                                                <button class="btn btn-primary btn-sm" type="submit" class="submit" name="ch">Upload</button>
                                            </div>
                                        </div></div></div></form>
                                    
<?php
                                       }
                                   }
                                   $msg="";
if (isset($_POST['ch']))
{
   $target= "web/" .basename($_FILES['image']['name']);
$Images = $_FILES['image']['name'];

    $prod=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['price'],$Images);
$proC= new ProduitC();
    $proC->modifierp($prod,$_POST['check']);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target ))
{
    $msg = "DONE";
}
    echo $_POST['check']; 
     $name=$_POST['nom'];

    echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/modifieringp.php?mavar=$nom'/>";

    /*if ($_POST['type'] == 'boisson')
    {echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/ceevee/Menu-five.php' />";}
 else if ($_POST['type'] == 'salade')
    {echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/ceevee/Menu-two.php' />";}
 else if ($_POST['type'] == 'burger')
    {echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/ceevee/Menu-four.php' />";}
 else if ($_POST['type'] == 'grill')
    {echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/ceevee/Menu-three.php' />";}
else

{echo "<meta http-equiv='refresh' content='2;url=http://localhost:82/ZINK/Views/index-2.html' />";

}*/                                 



//header('Location: ceevee/Menu-three.php');
}
?>
</div>


                                <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-upload-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:45 GMT -->
</html>

<script type="text/javascript">
   function test2(event)
{   

var nom=document.getElementById("nom");
var type=document.getElementById("type");
var description=document.getElementById("description");
var price=document.getElementById("price");
var erreur;
if (!nom.value)
{
    erreur="nom  empty "
}
if(!type.value)
{
    erreur="type empty";
}
if(!description.value)
{
    erreur="description empty";
}
if(!price.value)
{
    erreur="price empty";
}

if (erreur)
{   event.preventDefault();
alert("vos champs sont vides ");
document.getElementById("erreur").innerHTML = erreur;

}









}
</script>