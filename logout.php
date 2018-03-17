<?php
include 'includes/common.php';
if (!isset($_SESSION['id']))
{
header('location:index.php');
}
$id=$_SESSION['id'];
$q="Update facilities set status='CLOSED' where id=$id;";
$res= mysqli_query($con, $q) or die(error);
session_unset();
session_destroy();
header('location:index.php');
?>
