<?php
include('session.php');
?>

<HTML>
<head>
    <title>Athenaum Users</title>
    <link rel="stylesheet" href="includes/style.css" />
    <link rel="stylesheet" href="includes/dist/jquery.fancybox.min.css" />
</head>

<body>

<div class="custom-padding">
    <nav>
        <div class="logo">Users List</div>

        <ul class="menu-area">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <br>
    <br>
</div>

<div align="center">
    <h1><?php echo htmlentities($_GET["user"]) . "'s Media Library";?></h1>
    <br>
    <br>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <div style align="center">
        <?php
        $name = htmlentities($_GET["user"]);
        $sql = "SELECT * from movies WHERE username = " . "'". $name ."' ORDER BY name ASC";
        $result = mysqli_query($db, $sql);

        echo "<p class='imglist'>";

        if ($row = mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='" .$row["photo"] . "' data-fancybox='images' data-caption='" .$row["name"] . " (" . $row["year"] . ") - " .$row["synopsis"] ."'>";
                echo "<img src='" .$row["photo"] . "' width=400px height=600px alt='" .$row["name"] . " (" . $row["year"] . ")'/>";
                echo "</a>";
            }
        }
        else {
            echo $name . " Has Not Added Any Movies Yet. Click 'Add Movies' Above To Get Started";
        }
        echo "</p>";
        ?>
    </div>

</div>
</body>
</HTML>