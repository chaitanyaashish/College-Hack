<?php
require ('includes/common.php');
$item=$_POST['item'];
$q="Delete from amul where item='$item';";
$res=mysqli_query($con,$q);
if ($res)
{
    header('location:Amul.php');
}
else
{
    ?>
<script> alert("Some error occured. Please try again.");</script>
<?php
}

?>