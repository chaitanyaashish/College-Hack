<?php
require 'includes/common.php';
$item=$_GET['item'];
$query="Update amul set status='NOT AVAILABLE' where item='$item';";
$res= mysqli_query($con, $query);
if ($res)
{
    header('location:Amul.php');
}
else
{
    echo("Some error occured.");
}
?>