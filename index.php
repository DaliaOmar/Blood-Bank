<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $flag = $db->login($username, $password);
    if($flag){
        header("Location: ./home.php");
    } else {
        $message = "Username of password was incorrect!";

    }
}
$title="Login";
$setDonorActive = "active";
include 'layout/_header.php';


?>

<nav class="nav navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo-left-15 pull-left">
                    <div class="h4" id="logo"><a  style="font-size: 20px;font-weight: bold;color: white">Blood Bank </a></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="#home" style="font-size: 20px;color: white">Home</a></li>
                        <li class="<?php
                        if (isset($setAboutActive)) {
                            echo $setAboutActive;
                        } else {
                            echo '';
                        }
                        ?>">

                        <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
                            <a href="#sign up" style="font-size: 20px;color: white">Sign Up</a>
                        </li>

                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a href="#check" style="font-size: 20px;color: white">Check Availability</a>
                        </li>

                        <li class="">
                            <a href="#login" style="font-size: 20px;color: white">Employee Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>


</nav>

<div class="container" style="margin-left: 15cm;width: 35cm">
    <div class="row">
        <div class="col-md-6">
            <?php if(isset($message)): ?>
                <div class="alert-danger"><?= $message; ?></div>
            <?php endif; ?>
            <div class="panel panel-default"style="size: 50px;margin-top: -600px;margin-left: 5cm">
                <div class="panel-heading"style="margin-top: 15px">
                    <div class="col-md-6">
                        <img src="assets/login.jpg" class="img img-responsive img-thumbnail"width="42px" height="42px" style="padding-top: 0px" >
                    </div>
                    <div style= "margin-left: -9cm;font-size: 20px"  > User Login </div>
                </div>
                <div class="panel-body" style="background-color:#1a1a1a">
                    <form class="form-vertical" role="form" method="post" action="index.php">
                        <div class="form-group">
                            <input type="text" class="form-control" required="true"style="width: 270px" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">

                            <input type="password" required="true" class="form-control"style="width: 270px" name="password" placeholder="Password">
                        </div>
                        <div class="form-group loginBtn">
                            <button type="submit" name="loginBtn" class="btn btn-primary btn-sm"style="background-color: maroon;border-radius: 15px">Login</button>
                            <a href="users/" class="btn btn-sm btn-warning"style="background-color: dimgray;border-radius: 15px">I do not have username or password</a>
                            <a href="admin/index.php" class="btn btn-sm btn-warning"style="background-color: dimgray;border-radius: 15px">I am admin</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


