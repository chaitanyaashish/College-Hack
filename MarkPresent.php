<?php
require 'includes/common.php';
$item=$_GET['item'];
$query="Update dispensary set attendence='PRESENT' where NAME='$item';";
$res= mysqli_query($con, $query);
if ($res)
{
    header('location:Dispensary.php');
}
else
{
    echo("Some error occured.");
}
?>