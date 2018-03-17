<?php
require 'includes/common.php';
$item=$_POST['item'];
$price=$_POST['price'];
$query="INSERT INTO AMUL(ITEM,PRICE,status) VALUES('$item',$price,'AVAILABLE');";
$res= mysqli_query($con, $query);
if (!($res))
    { ?>
   <script> alert("Some error occurred. Please try again");
   </script>
    <?php
}
else
{
    header('location:Amul.php');
}
?>


