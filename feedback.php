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

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
<body>
  <h1>Hotel managenment</h1>
      <div class="header-top-nav">
        <div class="wrap">
          <ul>
            <li><a href="frontpage.php">HOME</a></li
          </ul>
        </div>
      </div>

<h1>Please register here</h1>

<div>
  <form action="" method="POST">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name here.."><br><br>

    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="phone">Phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{10}" required><br><br>

    <label for="feedback">Feedback:</label><br>
    <textarea id="feedback" name="feedback"></textarea><br><br>

    <input type="submit" name="submit" value="Submit">

  </div>
  </form>
</div>

<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error());
 }
 mysqli_select_db($con, 'dbms_mini_project');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

 if(isset($_POST['submit'])){

 $sql="INSERT INTO feedback(fname, email, phno, feedback)
VALUES
('$_POST[fname]','$_POST[email]','$_POST[phone]','$_POST[feedback]')";

if (!mysqli_query($con, $sql))
 {
 die('Error: ' . mysqli_error());
 }
echo "<script>alert('Thank you for the feedback. Click OK to Continue');</script>";

   }
}
mysqli_close($con);
  ?>
</body>
</html>
