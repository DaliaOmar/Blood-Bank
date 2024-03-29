
<nav class="nav navbar-default navbar-fixed-top"style="background-color: #1a1a1a">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-left-15 pull-left">
                    <div class="h4" id="logo"><a href="index.php"style="color: white">Blood Donation Management</a></div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive; } else { echo '';}?>"><a href="home.php"style="color: white">Home</a></li>
                        <li class="<?php if (isset($setEmployeeActive)) { echo $setEmployeeActive; } else { echo '';}?>"><a href="employee.php"style="color: white">Employees</a></li>
<!--                        <li><a href="index.php">Logout</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>


</nav>
        

