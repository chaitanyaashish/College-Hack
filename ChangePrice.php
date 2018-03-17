<?php
require 'includes/common.php';
$item=$_POST['item'];
$price=$_POST['price'];
$query="update canteen set price=$price where item='$item';";
$res= mysqli_query($con, $query);
if ($res)
{
    header('location:Canteen.php');
}
else
{
    echo 'error';
}
?>