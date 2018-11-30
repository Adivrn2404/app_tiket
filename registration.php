<?php 
include 'koneksi.php';
require 'function.php';

    if (isset($_POST["register"])) {

        if(registrasi($_POST)>0){
            echo "<script>
                    alert('User Baru Telah Ditambahkan');
                  </script>";
        }else{
            echo mysqli_error($koneksi);
        }
        
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Registrasi | Tiketku.com</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Tiketku.com</h2>
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Silahkan Isi Form ini Untuk Daftar </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="" method="post">
<br/>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input type="password" class="form-control" placeholder="Retype Password" name="password2" id="password2" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input type="text" class="form-control" placeholder="Fullname" name="fullname" id="fullname" />
        </div>
        <div class="form-group">
            <select name="level" class="form-control" required>
                <option value="" style="display: none;">Pilih Level</option>
                <option value="1" style="display: none;">Admin</option>
                <option value="2">User</option>
            </select>
        </div> 
        <div>
            <button type="submit" class="btn btn-success" name="register">Registrasi</button>
        </div>
                                    <hr />
                                    Sudah Terdaftar?<a href="login.php" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
