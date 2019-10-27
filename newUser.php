<?php
include("config.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get information from form
        $username = mysqli_real_escape_string($db, $_REQUEST['username']);
        $fname = mysqli_real_escape_string($db, $_REQUEST['fname']);
        $lname = mysqli_real_escape_string($db, $_REQUEST['lname']);
        $email = $_POST["email"];
        $password = mysqli_real_escape_string($db, $_REQUEST['password']);


    // Add to Library
        $sql = "INSERT INTO users (username, FirstName, LastName, Email, password) VALUES ('$username', '$fname', '$lname', '$email', '$password')";

        echo "Error: Could not execute $sql. " . mysqli_error($db);

        if (mysqli_query($db, $sql)) {
            echo "Records added successfully." . "<br><br>";
            header("location: index.php");
        }

        else {
            echo "Error: Could not execute $sql. " . mysqli_error($db);
        }
}
?>


<HTML>
    <head>
        <title>New User Registration</title>

        <link rel="stylesheet" href="includes/style.css" />

    </head>

    <body>
        <div align="center">
            <br>
            <br>
            <h1>New User Registration</h1>
        </div>

        <div class="login-page">
            <div class="form">
                <form class="login-form" action="" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="First Name" name="fname">
                    <input type="text" placeholder="Last Name" name="lname">
                    <input type="text" placeholder="E-Mail Address" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button>Register</button>
                </form>
            </div>
        </div>

    </body>

</HTML>
