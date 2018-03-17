<?php
require 'includes/common.php';
$item=$_POST['item'];
$query="Delete from canteen where item='$item';";
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