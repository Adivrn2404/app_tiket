<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
include 'koneksi.php';  
require 'function.php';
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiketku.com</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">Tiketku.com</p> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                	<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="?page=rute"><i class="fa fa-dashboard fa-3x"></i> Lihat Rute</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="?page=kereta"><i class="fa fa-dashboard fa-3x"></i> Lihat Daftar Kereta</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="?page=user"><i class="fa fa-dashboard fa-3x"></i> Lihat Data User</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="?page=customer"><i class="fa fa-dashboard fa-3x"></i> Lihat Data Customer</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="?page=reservation"><i class="fa fa-dashboard fa-3x"></i> Data Reservation</a>
                    </li>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <?php 
                        
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];
                        
                        if($page == "rute"){
                          if ($aksi == "") {
                              include "page/rute/ruteka.php";
                          }elseif ($aksi == "tambah") {
                              include "page/rute/tambah.php";
                          }elseif ($aksi == "ubah") {
                              include "page/rute/ubah.php";
                          }elseif ($aksi == "hapus") {
                              include "page/rute/hapus.php";
                          }

                          }elseif ($page == "kereta") {
                            if ($aksi == "") {
                              include 'page/kereta/kereta.php';
                          }elseif ($aksi == "ubah") {
                              include "page/kereta/ubah.php";
                          }elseif ($aksi == "tambah") {
                              include "page/kereta/tambah.php";
                          }elseif ($aksi == "hapus") {
                              include "page/kereta/hapus.php";
                          }

                      	  }elseif ($page == "customer") {
                            if ($aksi == "") {
                              include 'page/customer/customer.php';
                          }

                      	  }elseif ($page == "reservation") {
                            if ($aksi == "") {
                              include 'page/reservation/reservation.php';
                          }

                          }elseif ($page == "user") {
                            if ($aksi == "") {
                              include 'page/user/user.php';
                          }
                          }elseif ($page == ""){
                            include "home.php";
                          }
                        ?>     
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    
   
</body>
</html>