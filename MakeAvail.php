<?php
require 'includes/common.php';
$item=$_GET['item'];
$query="Update canteen set status='AVAILABLE' where item='$item';";
$res= mysqli_query($con, $query);
if ($res)
{
    header('location:Canteen.php');
}
else
{
    echo("Some error occured.");
}
?>