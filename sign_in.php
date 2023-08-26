<?php
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);
    $conn = mysqli_connect($server1, $username1, $password1);
    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $duplicate = mysqli_query($con, "select * from `tws`.`tws` where username='$username'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo '<script> alert("Username exists"); </script>';
        header("Location:http://localhost/MP/sign_in.php");
    } else
        if ($conn->query("INSERT INTO `tws`.`tws` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');") == true) {
            header("location:https://localhost/MP/index.php");
        } else {
            // echo "error: $sql <br> $con->error";
            'console.log("nope")';
        }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="sign_in.css" />
    <meta name="google-signin-client_id" content="822297089243-t4ra49avlgq4731i5khi3tap1f2jplfs.apps.googleusercontent.com">
  </head>
  <body>
    <header><p>Sign Up,</p></header>
    <section class="container">
      <form action="sign_in.php" method="POST" class="form" name="verify">
        <div class="input-box">
          <label>UserName</label>
          <input type="text" id="username" name="username" class="username" placeholder="Enter username" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" id="email" name="email" class="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="password" id="password" name="password" class="password" placeholder="Enter password" required />
            <span id="message"></span>
          </div>
          <div class="signup">
          <button><input type="submit" onclick="fun()" id="signup" value="Sign-up" name="signup"/>
          </button>
        </div>
        <script src="sign_in.js"></script>
      </form>
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script>
        function fun(){
var username =document.forms["verify"]["username"].value;
var password =document.forms["verify"]["password"].value;

if(username == "" && password == ""){
  alert("Enter username and password")
}
        }
    </script>
  </body>
</html>
