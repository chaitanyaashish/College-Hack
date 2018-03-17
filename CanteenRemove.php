<?php
require ('includes/common.php');
$item=$_POST['item'];
$q="Delete from canteen where item=$item;";
$res=mysqli_query($con,$q);
if ($res)
{
    header('location:Canteen.php');
}
else
{
    ?>
<script> alert("Some error occured. Please try again.");</script>
<?php
}

?>