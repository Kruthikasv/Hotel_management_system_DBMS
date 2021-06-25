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
            <li><a href="frontpage.php">HOME</a></li
          </ul>
        </div>
      </div>

<h2>Enter login details here</h2>

<div>
  <form action="" method="POST">
    <label for="uname">USERNAME</label>
    <input type="text" id="uname" name="uname" placeholder="Your name here.."><br><br>
    <label for="pwd">PASSWORD</label>
    <input type="password" id="pwd" name="pwd"><br><br>
    <input type="submit" name="submit" value="Submit">
    <h3>If you haven't registered click the link below</h3>
    <p><a href="register.php">Register here</a></p>
  </form>
</div>

<?php
session_start();
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"dbms_mini_project");
        $query = "select * from register where uname = '$_POST[uname]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['uname'] == $_POST['uname']){
                if($row['pwd'] == $_POST['pwd']){
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['uname'] = $row['uname'];
                    header("Location:index.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
?>
</body>
</html>
