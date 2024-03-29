<?php
$id = $_GET['id'];
if (isset($_POST['yesBtn'])) {
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    $id = $_POST['id'];
    $flag = $db->remove($id);

    if ($flag) {
//        header("Location: http://localhost/BDManagement/admin/employee.php");
    }
}
if (isset($_POST['noBtn'])) {
//    header("Location: http://localhost/BDManagement/admin/employee.php");
}

$title = "Remove Employee";
include 'layout/_header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"style="margin-top: 1cm">
            <div class="panel panel-danger">
                <div class="panel-heading"style="background-color: grey">
                    <h5 style="color: #b30000">Are you sure you want to remove this employee from the database!!!</h5>
                </div>
                <div class="panel-body"style="margin-top: 1cm">
                    <center>
                        <div class="form-group">
                            <form method="post" action="delete.php">
                                <input type="hidden" name="id" value="<?= $id; ?>" />
                                <button class="btn btn-danger btn-lg" type="submit" name="yesBtn"style="background-color: maroon" >YES</button>
                                <button class="btn btn-success btn-lg" type="submit" name="noBtn" style="background-color: #737373">NO</button>
<!--                             //   <button class="btn btn-success btn-lg" type="submit" name="noBtn"style="background-color: maroon"><a href="employee.php"style="color: white">Back</a></button>-->
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
</div>
<img src="assets/thinking.jpg"style="width: 200px;margin-top: 2cm">

