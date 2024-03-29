<div class="container"style="flex: 200px">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed"style="margin-top: -15cm;margin-left: 4cm">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>D.O.B</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>City</th>
                <th>Mobile</th>
                </thead>
                <?php foreach($users as $u): $i++;?>
                <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-danger';} ?>">
                    <td><?= $u['first_name']." ".$u['last_name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['dob']; ?></td>
                    <td><?= $u['gender']; ?></td>
                    <td><?= $u['b_type']; ?></td>

                    <td><?= $u['city']; ?></td>
                    <td><?= $u['mobile']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>