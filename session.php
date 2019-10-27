<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select * from users where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];
$fname_session = $row['FirstName'];
$lname_session = $row['LastName'];
$email_session = $row['Email'];
$pass_session = $row['password'];

if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
}
?>