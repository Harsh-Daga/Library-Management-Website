<?php
    session_start() ;
    include "connection.php";
?>


<!DOCTYPE html>
<html>

<head>

    <title>BMSCE Library</title>
    <link rel="stylesheet" href="navbar.css">
    <script src="https://kit.fontawesome.com/ebbb76d6f0.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Paytone+One&display=swap');
    </style>

</head>

<body>

        <?php

        if(isset($_SESSION['login_user']))
        {?>

            <div class="header-area">
                <div class="logo"><b>BMSCE LIBRARY</b></div>
                <nav id="nav-1" style="text-align: right;">
                    <a class="link-1" href="index.php">HOME</a>
                    <a class="link-1" href="catalogue.php">CATALOGUE</a>
                    <a class="link-1" href="services.php">SERVICES</a>
                    <a class="link-1" href="contact-us.php">CONTACT US</a>
                    <a class="link-1" href="fine.php">FINE</a>
                    <a class="link-1" href="profile.php">MY PROFILE</a>
                    <a class="link-1" href="logout.php">LOGOUT</a>
                </nav>
                </div>
            </div>
            <?php
        }
        else{
            ?>
            <div class="header-area">
                <div class="logo"><b>BMSCE LIBRARY</b></div>
                <nav id="nav-1" style="text-align: right; margin-left:430px;">
                    <a class="link-1" href="index.php"><b>HOME</b></a>
                    <a class="link-1" href="catalogue.php"><b>CATALOGUE</b></a>
                    <a class="link-1" href="services.php"><b>SERVICES</b></a>
                    <a class="link-1" href="contact-us.php"><b>CONTACT US</b></a>
                    <a class="link-1" href="login.php"><b>LOGIN</b></a>
                    <i class="fas fa-user-circle fa-lg"></i>
                </nav>
                </div>
            </div>
            <?php
        }
        ?>  
      <?php
      if(isset($_SESSION['login_user']))
      {
        $day=0;

        $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
        $res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");
      
      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['return_b']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $day= $day+floor($diff/(60*60*24)); 
        } //Days
        
      }
      $_SESSION['fine']=$day*10;
    }
    ?>
</body>
</html>