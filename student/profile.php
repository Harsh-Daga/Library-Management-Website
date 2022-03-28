
<?php 
	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
		 @import url('https://fonts.googleapis.com/css2?family=Paytone+One&display=swap');
		*{
			font-family: 'Paytone One', sans-serif;
		}
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: black;
 		}
		.container{
			margin-top: 30px;
		}

		body{
			background-image: url(images/4.png);
		}

		.box2{
			box-sizing: border-box ;
			width: 100%;
			height: 300px;
			background-color: black;
			opacity: 0.85;
			color: white;
			margin-right: 50px;
		}

 	</style>



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px; margin-top: 30px; background-color:black; color:yellow;" name="submit1"><b>EDIT</b></button>
 		</form>
 		<div class="wrapper">
 			<?php

 				if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM student where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center; color: black;"><b>MY PROFILE</b></h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>
			 <br>
 			<div style="text-align: center; font-size:18px;"> <b>Welcome, </b>
	 			<b> <?php echo $_SESSION['login_user']; ?> </b>
 			</div>
			 <br>
			 <br>
			<div class="box2">
			 	<h2 style="text-align: center; color: red; margin-top: 10px; padding-top: 10px; text-decoration:underline;"><b>YOUR DETAILS</b></h2>
			
				<br>
			
				<?php
					echo"<center>" ;

						
								echo "<b> First Name: </b>";
								echo $row['first'];
								echo"<br>" ;
								echo"<br>" ;
							

								echo "<b> Last Name: </b>";
								echo $row['last'];
								echo"<br>" ;
								echo"<br>" ;
							
					
								echo "<b> User Name: </b>";
								echo $row['username'];
								echo"<br>" ;
								echo"<br>" ;
						

						
								echo "<b> Email: </b>";	
								echo $row['email'];
								echo"<br>" ;
								echo"<br>" ;
						

						
								echo "<b> Contact: </b>";
								echo $row['contact'];
								echo"<br>" ;
								echo"<br>" ;
							

						
					echo "</center>" ;
				?>
			</div>

			<br><br>
 		</div>
 	</div>

	 <script type="text/javascript" src="https://popupsmart.com/freechat.js"></script>
  <script> window.start.init({ title: "Hi there ✌️", message: "How may we help you? Just send us a message now to get assistance.", color: "#FA764F", position: "right", placeholder: "Enter your message", withText: "Write with", viaWhatsapp: "Or write us directly via Whatsapp", gty: "Go to your", awu: "and write us", connect: "Connect now", button: "Write us", device: "everywhere", logo: "https://d2r80wdbkwti6l.cloudfront.net/CV5AZerkX4dHl5ShngUoOrJDl17RPiWt.jpg", services: [{ "name": "whatsapp", "content": "+919789841770" }, { "name": "mail", "content": "hs108699@gmail.com" }, { "name": "phone", "content": "+919789841770" }, { "name": "sms", "content": "+919789841770" }] })</script>
 </body>
 </html>