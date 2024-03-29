<div style="background-image: url(php/rr.jpg);height: 100% ;width:1900px ; background-repeat: no-repeat;margin-top: 3.5cm">
<?php

if (isset($_POST['submitBtn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $bType = $_POST['blood_group'];
    $created_at=$_POST['created_at'];
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    $flag = $db->registerUser($firstName, $lastName, $email, $dob, $gender, $bType, $city, $mobile,$created_at);
    
    if($flag){
        $success = "Thank You for registering with us.";
    } else {
        $message = "There was some technical error. Try again!";
    }
}
$title = "Join Us";
$setJoinUsActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>
    <div style="margin-top: -3cm;margin-left: 3cm"> <p>When you are registering here that means</p
        <p style="font-size: medium"> you are ready to donate blood and will be</p>
        <p>  avalilable whenever we will need you.</p></div>
<div class="container" >

    <div class="col-md-3"></div>
    <div class="col-md-6">

        <?php if(isset($success)): ?>
        <div  class="alert-success fade-out-5"><?= $success; ?></div>
        <?php endif; ?>
        <?php if(isset($message)): ?>
        <div  class="alert-danger fade-out-5"><?= $message; ?></div>
        <?php endif; ?>

        <div class="panel panel-default" style="margin-top: -3.2cm" >
            <div class="panel-heading" >
<label style="margin-left: 2cm;font-size: 40px">Sign Up As Donor</label>

            </div>
            <div class="panel-body"style="background-color: #990000;color: white" >
                <form method="post" action="register.php" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 form-label">Name</label>
                        <div class="col-md-4">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name" required="true">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="email" required="true" class="form-control" name="email" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">D.O.B</label>
                        <div class="col-md-8">
                            <input type="date" required="true" class="form-control" name="dob" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Gender</label>
                        <div class="col-md-8">
                            <input type="radio" value="Male" checked="true" class="radio-inline" name="gender" >Male
                            <input type="radio" value="Female" class="radio-inline" name="gender" >Female
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Blood Group</label>
                        <div class="col-md-8">
                            <select name="blood_group" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="form-label col-md-4">City</label>
                        <div class="col-md-8">
                            <input type="text" required="true" class="form-control" name="city" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Mobile</label>
                        <div class="col-md-8">
                            <input type="number" required="true" class="form-control" name="mobile" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Created At</label>
                        <div class="col-md-8">
                            <input type="datetime-local" required="true" class="form-control" name="created_at" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success" name="submitBtn" style="background-color:grey;color: maroon">Join</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

