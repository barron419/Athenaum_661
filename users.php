<?php
include('session.php');
?>

<HTML>
    <head>
        <title>Athenaum Users</title>
        <link rel="stylesheet" href="includes/style.css" />
    </head>

    <body>

    <div class="custom-padding">
    <nav>
        <div class="logo">Users List</div>

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

    <div style align="center">
        <?php
        $sql = "SELECT * from users;";
        $result = mysqli_query($db, $sql);

        echo "<table border='black'>
            <tr>
                <th>Username</th>
                <th>E-Mail Address</th>
            </tr>";
        if ($row = mysqli_num_rows($result) > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td><a href='others.php?user=" .$row["username"] . "'>" . $row["username"] . "</a></td>";
                echo "<td>" . $row["Email"] . "</td></tr>";
            }
        }
        echo "</table>";

        ?>
    </div>

    </body>

</HTML>
