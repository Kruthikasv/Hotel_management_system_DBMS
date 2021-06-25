<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
html {
  background: url(blackgold.jpg) no-repeat center fixed;
  background-size: cover;
}
h1 {
  text-align: center;
  text-transform: uppercase;
  color: white;
}
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: black;
  }
  li {
      float: left;
      width: 100%;
  }
  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 20px;
      text-decoration: none;
  }
  li a:hover {
      background-color: grey;
  }

  input[type=submit] {
    width: 10%;
    background-color: Tomato;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: Tomato;
  }
  body {
    text-align: center;
    float: left;
    width: 100%;
    color: white;
    font-size: 120%;
  }

</style>
<body>
  <h1>Hotel managenment</h1>
      <div class="header-top-nav">
        <div class="wrap">
          <ul>
            <li><a href="index.php">HOME</a></li
          </ul>
        </div>
      </div>

<h1>BOOK ROOM HERE</h1>

  <div>
<form action="" method="POST">

  <h1>Room Type</h1>
      <input list="rooms" name="rooms"  placeholder="Select room type" required>
      <datalist id="rooms">
        <option value="Classic : 5000/-">
        <option value="Deluxe : 7000/-">
        <option value="Twin rooms : 9000/-">
        <option value="Superior : 8000/-">
      </datalist><br><br>
      <label for="ac">Choose AC or NON-AC :</label>
      <select id="ac" name="ac" required>
        <option value="ac">AC : extra 500/-</option>
        <option value="non-ac">NON-AC : extra 0/-</option>
      </select><br><br>

<h1>Select other facilities : </h1>
<h2> SPA </h2>
<input type="checkbox" id="Ayurvedic" name="Ayurvedic" value="ayurvedic">
<label for="ayurvedic"> Ayurvedic : 1800/-</label><br>
<input type="checkbox" id="Balinese" name="Balinese" value="Balinese">
<label for="Balinese"> Balinese : 2100/-</label><br>
<input type="checkbox" id="Swedish" name="Swedish" value="Swedish">
<label for="Swedish"> Swedish : 2000/-</label><br>
<input type="checkbox" id="Beauty Salon" name="Beauty_Salon" value="Beauty Salon">
<label for="Beauty Salon"> Beauty Salon </label><br><br>

<h1>Check in and Check out Date : </h1>
<label for="birthday">Check-In date:</label>
<input type="date" id="check-in" name="check_in" required><br><br>

<label for="birthday">Check-out date:</label>
<input type="date" id="check-out" name="check_out" required><br><br>

<input type="submit" name="submit" value="Submit">
</form>
  </div>

  <?php

      if(isset($_POST['submit'])){
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"dbms_mini_project");
          $name=$_SESSION['uname'];
      
          $query_run = mysqli_query($connection,"INSERT INTO room (uname, roomtype, AC)
         VALUES
         ('$name','$_POST[rooms]','$_POST[ac]')");

          $query_run1 = mysqli_query($connection,"INSERT INTO facilities (uname, Ayurvedic, Balinese, Swedish, Salon)
         VALUES
         ('$name','$_POST[Ayurvedic]','$_POST[Balinese]','$_POST[Swedish]','$_POST[Beauty_Salon]')");


          $query_run2 = mysqli_query($connection,"INSERT INTO dates (uname, checkIn, checkOut)
         VALUES
         ('$name','$_POST[check_in]','$_POST[check_out]')");

          header("Location:info.php");
      }

  ?>

</body>
</html>
