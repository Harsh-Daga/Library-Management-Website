<?php
    include "navbar.php" ;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact-Us</title>
    <link rel="stylesheet" href="contact-us.css">
    <script src="https://kit.fontawesome.com/ebbb76d6f0.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Paytone+One&display=swap');
    </style>
</head>

<body>


<br>

  <section id="main-contact">

    <div class="contact-container">
        <div class="left-col">
        </div>
        <div class="right-col">
            <h1>Contact us</h1>
            <p>Planning to Get a New Book soon? Get insider tips, Best Recommendations, find best deals for your next
                adventure.</p>

            <form id="contact-form" method="post">
                <label for="name">Full name</label>
                <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                <label for="message">Message</label>
                <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
                <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button>
                <!--</a>-->

            </form>
            <div id="error"></div>
            <div id="success-msg"></div>
        </div>
    </div>

</section>

    <script type="text/javascript" src="https://popupsmart.com/freechat.js"></script>
    <script> window.start.init({ title: "Hi there ✌️", message: "How may we help you? Just send us a message now to get assistance.", color: "#FA764F", position: "right", placeholder: "Enter your message", withText: "Write with", viaWhatsapp: "Or write us directly via Whatsapp", gty: "Go to your", awu: "and write us", connect: "Connect now", button: "Write us", device: "everywhere", logo: "https://d2r80wdbkwti6l.cloudfront.net/CV5AZerkX4dHl5ShngUoOrJDl17RPiWt.jpg", services: [{ "name": "whatsapp", "content": "+919789841770" }, { "name": "mail", "content": "hs108699@gmail.com" }, { "name": "phone", "content": "+919789841770" }, { "name": "sms", "content": "+919789841770" }] })</script>


</body>

</html>