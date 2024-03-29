<div style="background-image: url(php/uu.jpg);height: 100% ;width:3500px;  background-repeat: no-repeat;margin-top:3cm;margin-left: 4cm">

<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';


?>

<div class="container" >
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10"style="margin-left: -30cm;margin-top: -1cm">
            <form class="form-inline" role='form' method="post" action="availability.php">

                <label class="form-label">Select Blood Group: </label>
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
                <button type="submit" class="btn btn-success" name="searchBtn"style="background-color: #737373">Check Availability</button>
            </form>

            <br>
            <div class="form-group">
                <?php if(isset($donors[0])): ?>
                <label>Total number of donors with <?= $donors[0]['b_type']; ?> </label><div class="emphasize"><?= count($donors); ?> Donors</div>
                <table class="table table-condensed">
                    <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>

                    <th>City</th>
                    <th>Blood Group</th>
                    </thead>

                    <?php foreach($donors as $d): $i++;?>
                    
                    <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                        <td><a href="../profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                        <td><?= $d['sex']; ?></td>
                        <td><?= $d['bday']; ?></td>

                        <td><?= $d['city']; ?></td>
                        <td><?= $d['b_type']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-1"></div>
<!--        <img src="php/fff.jpg" class="rr "width="1200px" height="800px" style="padding-top: 0px ;margin-left:0px-->
<!--          ;flex: 400px" >-->
    </div>
</div>



