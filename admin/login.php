<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Paytone+One&display=swap');
    *{
      font-family: 'Paytone One', sans-serif;
    }
    section
    {
      margin-top: 0px;
    }
    .log_img
    {
      height: 680px;
      margin-top: 15px;
      background-image: url(images/6.jpg) ;
    }
    .box1
    {
      height: 480px;
      width: 480px;
      background-color: black;
      margin: 70px auto;
      opacity: .9;
      color: white;
      font-family: 'Paytone One', sans-serif;
      padding: 22px;
    }
    form .login
    {
      margin: auto 50px;
    }
    input
    {
      height: 25px;
      width: 300px;

    } 

</style>   
</head>
<body>

<section>
  <div class="log_img">
   <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">BMSCE LIBRARY</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form  name="login" action="" method="post">

      <?php

          if(isset($_POST['submit']))
          {
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
            
            $row= mysqli_fetch_assoc($res);
            $count=mysqli_num_rows($res);

            if($count==0)
            {
              ?>
                <div class="alert alert-danger" style="width:250px ;margin-left:90px ; text-align: center; background-color: #de1313; color: white">
                  <strong>The username and password doesn't match</strong>
                </div>    
              <?php
            }
            else
            {
              $_SESSION['login_user'] = $_POST['username'];
              $_SESSION['pic']= $row['pic'];

              ?>
                <script type="text/javascript">
                  window.location="profile.php"
                </script>
              <?php
            }
          }

        ?>
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="LOGIN" style="color: black; width: 70px; height: 30px; margin-left:110px;"> 
        </div>
      
      <p style="color: white; padding-left: 22px; margin-left:78px;">
        <br><br>
        New to this website?<a style="color: yellow; text-decoration: none;" href="registration.php">&nbspSign Up</a>
      </p>
    </form>
    </div>
  </div>
</section>

 <script type="text/javascript" src="https://popupsmart.com/freechat.js"></script>
  <script> window.start.init({ title: "Hi there ✌️", message: "How may we help you? Just send us a message now to get assistance.", color: "#FA764F", position: "right", placeholder: "Enter your message", withText: "Write with", viaWhatsapp: "Or write us directly via Whatsapp", gty: "Go to your", awu: "and write us", connect: "Connect now", button: "Write us", device: "everywhere", logo: "https://d2r80wdbkwti6l.cloudfront.net/CV5AZerkX4dHl5ShngUoOrJDl17RPiWt.jpg", services: [{ "name": "whatsapp", "content": "+919789841770" }, { "name": "mail", "content": "hs108699@gmail.com" }, { "name": "phone", "content": "+919789841770" }, { "name": "sms", "content": "+919789841770" }] })</script>
</body>
</html>