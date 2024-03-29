
<?php

//require_once 'php/DBConnect.php';
//$db = new DBConnect();
//$db->checkAuth();
//
//
//include 'layout/_header.php';
//
//include 'layout/_top_nav.php';
//$invalid = NULL;
//if(isset($_POST['loginBtn'])){
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    if($username == "admin"){
//        if($password == "123"){
//            session_start();
//            $_SESSION['username'] = $username;
//            header("Location: http://localhost/BDManagement/admin/home.php");
//        } else {
//            $invalid = "Invalid Password!";
//        }
//    }else{
//        $invalid = "Invalid username or password!";
//    }
//}
//
//$title="Admin Login";
//include 'layout/_header.php';
//
//
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->checkAuth();
include 'layout/_header.php';
//
//include 'layout/_top_nav.php';
$invalid = NULL;
if(isset($_POST['loginBtn'])){
   $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin"){
        if($password == "123"){
            session_start();
           $_SESSION['username'] = $username;
            header("Location: http://localhost/BDManagement/admin/home.php");

       } else {
            $invalid = "Invalid Password!";
       }
    }else{
       $invalid = "Invalid username or password!";
   }
    $title="Admin Login";
//include 'layout/_header.php';
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"style="font-size: 20px">Blood Donation Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive; } else { echo '';}?>"><a href="#home.php"style="font-size: 20px">Home</a></li>
                <li class="<?php if (isset($setEmployeeActive)) { echo $setEmployeeActive; } else { echo '';}?>"><a href="#employee.php"style="font-size: 20px">Employees</a></li>
                <li><a href="index.php"style="font-size: 20px">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
</br></br>
<img src="assets/dd.jpg"style="margin-left: 7cm">
<div class="container"style="margin-top: -5cm">
<div class="col-md-4"></div>
<div class="col-md-4"style="margin-top: 5cm">
    <?php if(isset($invalid)): ?>
        <div class="alert-danger" id="invalid"><?= $invalid; ?></div>
    <?php endif; ?>
    <div class="panel panel-primary">
        <div class="panel-heading"style="background-color: #737373">
            <div class="col-md-4">
                <img src="assets/login.jpg" class="img img-responsive img-thumbnail"style="width: 60px">
            </div>
            <h3>Admin Login</h3>
        </div>
        <div class="panel-body"style="background-color: maroon;color: white">
            <form class="form-vertical" role="form" method="post" action="index.php">
                <div class="form-group">
                    <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group loginBtn">
                    <button type="submit" name="loginBtn" style="background-color: #737373;color: white;text-decoration: none" class="btn btn-primary btn-sm"><a href="home.php"style="color: white">Login</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4"></div>
</div>

