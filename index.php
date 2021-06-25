<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  text-align: center;
  text-transform: uppercase;
  color: Tomato;
  font-family: 'Abril Fatface', serif;
   text-shadow: 2px 2px red;
}
h2 {
  text-align: center;
  text-transform: uppercase;
  color: white;
}
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: grey;
  }
  li {
      float: left;
      width: 20%;
  }
  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 20px;
      text-decoration: none;
  }
  li a:hover {
      background-color: Tomato;
  }

  div.gallery {
  margin: 50px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background: url(thumbnail.jpg) no-repeat center;
  background-size: cover;
  height: 500px;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

div.textbox {
  border: 1px solid gray;
  padding: 10px;
 }

 .p1 {
  text-indent: 50px;
  text-align: center;
  letter-spacing: 3px;
}
</style>
</head>
<body>

<h1>Hotel managenment</h1>  <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"dbms_mini_project");
$username=$_SESSION['uname'];
 echo "<p style='font-size:150%; color:black;text-align: center;'>Welcome " .$username . "</p>";
  ?>
<div class="header-top-nav">
  <div class="wrap">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="book_a_room.php">BOOK A ROOM</a></li>
      <li><a href="Gallery.php">GALLERY</a></li>
      <li><a href="contact.php">CONTACT  US</a></li>
      <li><a href="frontpage.php">LOGOUT</a></li>
    </ul>
  </div>
</div>

<div class="hero-image">
  <div class="hero-text">
    <h2 style="font-size:50px">WELCOME TO OUR HOTEL</h2>
    <h3 style="font-size:30px">Feels like home :)</h3>
  </div>
</div><br>

<div class="textbox">
  <h1>What we offer</h1>
  <p class="p1"> <b>STAY</b> : Classic, Deluxe, Twin rooms, Superior <br>
    <b>SPA</b> :  Ayurvedic, Balinese, Swedish, Beauty Salon <br>
    <b>DINING CUISINES</b> :  South Indian, North Indian, Italian, Chinese, Mexican <br>
    <b>OTHER FACILITIES</b> :  Swimming pool, Game room, Gym, Cycling, Kids play area </p>
</div>

<div class="gallery">
  <a target="_self" href="single bed.jpg">
    <img src="single bed.jpg" alt="single bed" width="600" height="400">
  </a>
  <div class="desc">Classic</div>
</div>

<div class="gallery">
  <a target="_self" href="double bed.jpg">
    <img src="double bed.jpg" alt="double bed" width="600" height="400">
  </a>
  <div class="desc">Deluxe</div>
</div>

<div class="gallery">
  <a target="_self" href="twin room.png">
    <img src="twin room.png" alt="twin room" width="600" height="400">
  </a>
  <div class="desc">Twin rooms</div>
</div>

<div class="gallery">
  <a target="_self" href="2 single bed.jpg">
    <img src="2 single bed.jpg" alt="2 single bed" width="600" height="400">
  </a>
  <div class="desc">Superior</div>
</div>

</body>
</html>
