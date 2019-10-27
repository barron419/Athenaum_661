<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Athenaum Media Library</title>
    <link rel="stylesheet" href="includes/style.css" />
    <style>
        h1{
            align-content: center;
            background-color: #DCDCDC;
        }
    </style>
</head>
<body>

<div align="center">
    <br>
    <br>
    <h1>Athenaum Media Library Login</h1>
</div>

<div class="login-page">
    <div class="form">
        <form class="login-form" action="" method="POST">
            <input type="text" placeholder="Username" name="username"/>
            <input type="password" placeholder="Password" name="password"/>
            <button>Login</button>
            <p class="message">Not registered? <a href="newUser.php">Create an account</a></p>
        </form>
    </div>
</div>




</body>
</html>