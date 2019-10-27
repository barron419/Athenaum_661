
<HTML>

<head>
    <title>New Movie</title>
    <link rel="stylesheet" href="includes/style.css" />
</head>

<body>
    <div class="custom-padding">
    <nav>
        <div class="logo">Add New Movie</div>

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
            <input type="text" placeholder="Movie Name" name="name">
            <input type="integer" placeholder="Release Year" name="year">
            <input type="text" placeholder="Photo URL" name="photo">
            <input type="text" placeholder="Synopsis" name="synopsis">
            <button>Add To Library</button>
            </form>
        </div>
    </div>

</body>


<?php
include('session.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get information from form
    $name = mysqli_real_escape_string($db, $_REQUEST['name']);
    $year = mysqli_real_escape_string($db, $_REQUEST['year']);
    $photo = mysqli_real_escape_string($db, $_REQUEST['photo']);
    $user = mysqli_real_escape_string($db, $login_session);
    $synopsis = mysqli_real_escape_string($db, $_REQUEST['synopsis']);


    // Add to Library
    $sql = "INSERT INTO movies (name, year, photo, username, synopsis) VALUES ('$name', '$year', '$photo', '$user', '$synopsis')";

    if(mysqli_query($db, $sql)){
        echo "Records added successfully." . "<br><br>";
        header("location: welcome.php");
    }
    else {
        echo "Error: Could not execute $sql. " . mysqli_error($db);
        }
    }
?>

</HTML>
