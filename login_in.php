<?php 
$insert=false;
if(isset($_POST['email'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "music_login";
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed due to".mysqli_connect_error());
    }
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $stmt = $conn->prepare("INSERT INTO `music_login`.`music` (`email`, `pass`) VALUES (?,?)");
    $stmt->bind_param("ss", $email, $pass);
    
    if($stmt->execute()){
        $insert=true;
        ob_start();
            header("Location: index.php");
            ob_end_flush();
            exit;
            
    }
    else{
        echo "ERROR:".$stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <link rel="stylesheet"  href="login_in.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Login</h1>
  <div class="main">
    <div class="conatiner">
      <div class="form">
      <form name="login" action="index.php" method="post">
        <div class="input input-field">
        <label for="email">Email-id:</label>
        <input type="text" id="email" placeholder="Enter your email id" name="email" required><br><br>
        <label for="pass">Password:</label>
        <input type="password" id="pass" placeholder="Enter your password" name="pass" required><br><br>
        </div>
        <input type="submit" value="Login">
       </form>
      </div>
    </div>
  </div>
</body>
</html>