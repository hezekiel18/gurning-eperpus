
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" media="all" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/demo.css" media="all" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/center.css" media="all" />   
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	

  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url(); ?>assets/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <title><?php print_r($title);?></title>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">       
      <a class="navbar-brand js-scroll-trigger" href="#page-top">E-Perpus</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#booklist"><?php print_r($title);?></a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">About Us</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
          	<div class="dropdown">
             <a class="btn btn-secondary my-2 my-sm-0" onclick="display()"><img src="<?php echo base_url(); ?>assets/images/user_icon.png" class="d-inline-block align-top"></a>        	
             <div class="dropdown-content" aria-labelledby="dropdownMenuButton">
              <a id="user"  style="display:none "  href="#">> user: <?php echo isset($_SESSION['username'])? $_SESSION['username'] : "ADMIN"   ; ?></a>           
              <a id="logout" style="display:none"  href="<?php echo base_url('buku/logout'); ?>">> Log out</a>          
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>	



























<!-- <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" ><img src="<?php echo base_url(); ?>assets/images/user_icon.png" class="d-inline-block align-top"></a> -->
            <!-- <div class="dropdown dropdown">        
            <a class="nav-link py-3 px-0 px-lg-3"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo base_url(); ?>assets/images/user_icon.png" class="d-inline-block align-top" alt="">          
            </a>              
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">user: <?php echo $_SESSION['username']  ; ?></a>           
            <a class="dropdown-item" href="<?php echo base_url('buku/logout'); ?>">Log out</a>          
            </div>
          </div>-->
