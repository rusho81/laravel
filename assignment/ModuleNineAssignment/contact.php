<!DOCTYPE html>
<html>
<head>
<title>Module Nine Assignment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding: 16px">
  <img src="company.png" alt="">
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a href="index.php" class="w3-bar-item w3-button ">Home</a>
      <a href="blog.php" class="w3-bar-item w3-button ">Blog</a>
      <a href="contact.php" class="w3-bar-item w3-button w3-light-grey">Contact</a>
    </div>
  </div>
</header>



<form class="w3-container w3-card-4" action="success.php">
  <h2 class="w3-text-blue">Contact Form</h2>
  <p>      
  <label class="w3-text-blue"><b>Name:</b></label>
  <input class="w3-input w3-border" name="name" type="text" required></p>
  <p>      
  <label class="w3-text-blue"><b>Email:</b></label>
  <input class="w3-input w3-border" name="mail" type="email" required></p>
  <p>      
  <label class="w3-text-blue"><b>Subject:</b></label>
  <input class="w3-input w3-border" name="subject" type="text" required></p>
  <p>      
  <label class="w3-text-blue"><b>Message</b></label><br/>
  <textarea name="message" rows="10" cols="50" required>
</textarea> 
  <p>      
  <button class="w3-btn w3-blue">Register</button></p>
</form>
</div>

<!-- END GRID -->
<br>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Created by Quazi Tariqul Alam</p>
</footer>

</body>
</html>
