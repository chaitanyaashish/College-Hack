<?php
require 'includes/common.php';
$item=$_POST['item'];
$price=$_POST['price'];
$query="update amul set price=$price where item='$item';";
$res= mysqli_query($con, $query);
if ($res)
{
    header('location:Amul.php');
}
else
{
    echo 'error';
}
?>