<?php
require 'configure.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email= $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_sign_up WHERE username = '$username' OR email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <link rel="stylesheet"  href="login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Login</h1>
  <div class="main">
    <div class="conatiner">
      <div class="form">
        <form name="login" action="login.php" method="POST">
          <div class="input input-field">
          <label for="email">username</label>
          <input type="text" id="username" placeholder="Enter username" name="username" required><br><br>
          <label for="pass">Password:</label>
          <input type="password" id="password" placeholder="Enter your password" name="password" required><br><br>
          </div>
          <input type="submit" value="Login" onclick="auth()">
        </form>
      </div>
    </div>
  </div>
  <script>
  function auth(){
    var email=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    alert("Login Successful");
    window.location.assign("index.php");
    return;
}
</script>
</body>
</html>