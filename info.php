<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
  h1 {
    text-align: center;
    text-transform: uppercase;
    color: Tomato;
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
        background-color: Tomato;
    }
    input[type=text], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
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

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
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
      <h1 style="font-size:200%; color:Tomato; ">Your room has been booked successfully!</h1>
      <?php
      $username=$_SESSION['uname'];
      echo "<p style='font-size:200%; color:Tomato; text-align: center;'>Welcome " .$username . "</p>";

      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"dbms_mini_project");

      $query = "select * from room where uname = '$username'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_assoc($query_run);
      echo "<p style='font-size:150%; color:black;text-align: center;'><b>Selected room type :</b> " .$row['roomtype']. "</p>";

      $query = "select * from room where uname = '$username'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_assoc($query_run);
      echo "<p style='font-size:150%; color:black;text-align: center;'><b>Preference : </b>" .$row['AC']. "</p>";

      $query = "select * from dates where uname = '$username'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_assoc($query_run);
      echo "<p style='font-size:150%; color:black;text-align: center;'><b>Check-in date : </b>" .$row['checkIn']. "</p>";

      $query = "select * from dates where uname = '$username'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_assoc($query_run);
      echo "<p style='font-size:150%; color:black;text-align: center;'><b>Check-out date : </b>" .$row['checkOut']. "</p><br>";

      ?>


    </body>
    </html>
