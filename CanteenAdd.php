<?php
require 'includes/common.php';
$item=$_POST['item'];
$price=$_POST['price'];
$query="INSERT INTO CANTEEN(ITEM,PRICE) VALUES($item,$price);";
$res= mysqli_query($con, $query);
if (!($res))
    { ?>
   <script> alert("Some error occurred. Please try again");
   </script>
    <?php
}
else
{
    header('location:Canteen.php');
}
?>
