<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "music_player";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    
    if(!$conn){
        die("Connection failed due to".mysqli_connect_error());
    }

    if(!empty($_SESSION["id"])){
      header("Location: index.php");
    }

    $username = mysqli_real_escape_string($conn, $_POST["username"]); 
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);

    try{
        $stmt = mysqli_prepare($conn, "SELECT * FROM `music_player`.`tb_sign_up` WHERE name = ? OR email = ?");
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0){
            http_response_code(400);
            $response['status'] = 'error';
            $response['message'] = 'Username or Email has already taken!';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            $response['status'] = 'error';
            $response['message'] = 'Please enter a valid email address';
        } elseif ($password !== $confirmpassword) {
            http_response_code(400);
            $response['status'] = 'error';
            $response['message'] = 'Passwords do not match';
        } else {
            // Insert new record
            $sql = "INSERT INTO `music_player`.`tb_sign_up` (``,`username`, `email`, `password`, `confirmpassword`) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $confirmpassword);
            if (mysqli_stmt_execute($stmt)) {
                $response['status'] = 'success';
                $response['message'] = 'User registered successfully';
            } else {
                http_response_code(500);
                $response['status'] = 'error';
                $response['message'] = 'An error occurred while registering. Please try again later.';
            }
            mysqli_stmt_close($stmt);
      }
    }
    echo json_encode($response);
  
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="signup.css" />
    <meta name="google-signin-client_id" content="822297089243-t4ra49avlgq4731i5khi3tap1f2jplfs.apps.googleusercontent.com">
  </head>
  <body>
    <header><p>Sign Up,</p></header>
    <section class="container">
      <form action="signup.php" method="POST" class="form" onsubmit="return verifyPassword()">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" id="username" name="username" placeholder="Enter username" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" id="email" name="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required />
            <span id="message"></span>
          </div>
          <div class="signup">
          <button><input type="submit" id="signup" value="Sign-up" name="signup" onclick="auth()"/>
          </button>
        </div>
        <script src="signup.js"></script>
      </form>
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <a href="#" onclick="signOut();">Sign out</a>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script>
    function auth(){
      var name=document.getElementById("username").value;
      var email=document.getElementById("email").value;
      var pass1=document.getElementById("password").value;
      var pass2=document.getElementById("confirmpassword").value;
      window.location.assign("index.php");
      alert("Login Successful");
      return;
  }
    </script>
  </body>
</html>
