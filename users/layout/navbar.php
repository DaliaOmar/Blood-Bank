 <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Blood Bank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="index.php"style="font-size: 20px">Home</a></li>
                        <li class="<?php
                        if (isset($setAboutActive)) {
                            echo $setAboutActive;
                        } else {
                            echo '';
                        }
                        ?>">
                        
                        <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
                            <a href="register.php"style="font-size: 20px">Sign Up</a>
                        </li>
                        
                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a href="availability.php"style="font-size: 20px">Check Availability</a>
                        </li>
                        
                        <li class="">
                            <a href="../index.php"style="font-size: 20px">Employee Login</a>
                        </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</br></br>