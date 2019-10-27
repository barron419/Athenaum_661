<?php
include('session.php');

?>

<HTML>
<HEAD>
    <TITLE>Profile</TITLE>
    <link rel="stylesheet" href="includes/style.css" />
</HEAD>


    <body>


        <div class="custom-padding">
            <nav>
                <div class="logo"><?php echo $login_session;?>'s Profile</div>

                <ul class="menu-area">
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="newMovie.php">Add Movie</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <br>
            <br>
        </div>

        <div class="login-page">
            <div class="form">
                <form class="login-form" action="" method="POST">
                    <input type="text" placeholder="<?php echo $login_session; ?>" name="username" />
                    <input type="text" placeholder="<?php echo $fname_session; ?>" name="fname" />
                    <input type="text" placeholder="<?php echo $lname_session; ?>" name="lname" />
                    <input type="text" placeholder="<?php echo $email_session; ?>" name="email" />
                    <input type="password" placeholder="Password" name="password" />
                    <button>Update</button>
                </form>
            </div>
        </div>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // Get from form
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $fname = mysqli_real_escape_string($db, $_POST['fname']);
            $lname = mysqli_real_escape_string($db, $_POST['lname']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            $user2 = $login_session;
            $fname2 = $fname_session;
            $lname2 = $lname_session;
            $email2 = $email_session;
            $pass2 = $pass_session;


            if ($login_session != $username && $username != ""){
                $user2 = $username;
            }
            elseif ($fname_session != $fname && $fname != ""){
                $fname2 = $fname;
            }
            elseif ($lname_session != $lname && $lname != ""){
                $lname2 = $lname;
            }
            elseif ($email_session != $email && $email != "") {
                $email2  = $email;
            }
            elseif ($pass_session != $password && $password != "") {
                $pass2 = $password;
            }

            $sql = "UPDATE users SET username = '$user2', FirstName = '$fname2', LastName = '$lname2', Email = '$email2', password = '$pass2' WHERE username = '$login_session'";

            if(mysqli_query($db, $sql)){
                echo "Records added successfully." . "<br><br>";
                header("location: welcome.php");
            }
            else {
                echo "Error: Could not execute $sql. " . mysqli_error($db);
            }
        }
        ?>

    </body>
</HTML>
