<?php
session_start();
require_once("../../admin/inc/confg.php");

if($_SESSION['key'] != "UsersKey")
{
    echo "<script> location.assign('../../admin/logout.php'); </script>";
    die;
}else if (!isset($_SESSION['username'])) {
    header("Location: ../indx.php");
    exit();
}else if (!isset($_SESSION['user_id'])) {
    header("Location: ../indx.php");
    exit();
}else if (!isset($_SESSION['department'])) {
    header("Location: ../indx.php");
    exit();
}

// Fetch user data from database



$username = $_SESSION['username'];

$sql = "SELECT * FROM users";
$result = $db->query($sql);

$user_id = $_SESSION['user_id'];
$department = $_SESSION['department'];
$query = "SELECT department FROM users WHERE id = '$user_id'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$department = $row['department'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userpanel - Dynamic Letter Creation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
    

