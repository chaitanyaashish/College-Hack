<?php
require 'includes/common.php';
$userid= mysqli_real_escape_string($con,$_POST['idid']);
$email= mysqli_real_escape_string($con, $_POST['user']);
$password=md5(mysqli_real_escape_string($con, $_POST['pass']));
$check_email="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
if (!preg_match($check_email, $email))
{
    echo "<script type='text/javascript'>;
  alert('Enter a valid email-id');
  window.location.href='signup.php';
  </script>";
}
$query1="SELECT username FROM facilities WHERE id=$userid AND USERNAME IS NOT NULL;";
$result1= mysqli_query($con, $query1);
if (mysqli_num_rows($result1)==1)
{
   ?> <script type='text/javascript'>;
  alert('Cannot Register.Account already exists.');
  window.location.href='signup.php';
  </script> <?php

}
else{
$q="update facilities set username='$email' where id=$userid;";
$q1="update facilities set password='$password' where id=$userid;";
$res=mysqli_query($con, $q);
$res2= mysqli_query($con, $q1);
header('location:index.php'); }
?>


