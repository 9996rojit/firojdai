
<header style="background-color:#a9a9a9">
      <div class="top" style="background-color=#a9a9a9a;">
                    
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
                <a href="index.php"><img src="img/uni.png" height="50px" width="100px"></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Universities <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="university.php?id=<?php echo $row['id']?>">Tribhuwan University</a></li>
                        <li><a href="university.php?id=<?php echo $row['id']?>">Kathmandu University</a></li>
                        <li><a href="university.php?id=<?php echo $row['id']?>">Purwanchal University</a></li>
                        <li><a href="university.php?id=<?php echo $row['id']?>">Pokhara University</a></li>

                      </ul>
                    </li>
                    
                    <li>
                      <a href="#">Login</a> 
                      </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->