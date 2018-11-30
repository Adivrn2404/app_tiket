<?php  
session_start();
if($_SESSION){
    header("Location: index.php");
}
?>
<?php 
if(isset($_POST['login'])){
          
$koneksi = mysqli_connect("localhost", "root", "", "tiket");
if (mysqli_connect_error()) {
  echo "Gagal Melakukan Koneksi Ke Database: ". mysqli_connect_error();
}
          
          $username = $_POST['username'];
          $password = $_POST['password'];
          $level    = $_POST['level'];
          
          $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
          if(mysqli_num_rows($result) == 0){
            echo '<div class="alert alert-danger">Username atau Password salah.</div>';
          }else{
            $row = mysqli_fetch_assoc($result);
            if($row['level'] == 1 && $level == 1){
              $_SESSION['username']=$username;
              $_SESSION['level']='admin';
              header("Location: index.php");
            }elseif($row['level'] == 2 && $level == 2){
              $_SESSION['username']=$username;
              $_SESSION['level']='user';
              header("Location: pageuser/index1.php");
            }else{
              echo '<div class="alert alert-danger">Anda Salah memasukkan Level</div>';
            }
          }
        }
        ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login | Tiketku.com</title>
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
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Tiketku.com</h2>
            </div>
        </div>
         <div class="row ">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
    <strong>   Silahkan Login Terlebih Dahulu </strong>  
          </div>
            <div class="panel-body">
              <form action="" method="POST">
                <br />
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input type="text" class="form-control" placeholder="Username " name="username" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input type="password" class="form-control"  placeholder="Password" name="password" />
            </div>
            <div class="form-group">
                        <select name="level" class="form-control" required>
                            <option value="" style="display: none;">Pilih Level</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>                   
                    <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                    <br>
             &nbsp; <a href="registration.php" >Registration</a> 
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
