<?php
require 'includes/common.php';
$item=$_POST['item'];
$price=$_POST['price'];
$query="Insert into canteen(item,price,status) values('$item',$price,'AVAILABLE');";
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