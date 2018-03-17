<?php
require 'includes/common.php';
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$day=(jddayofweek($jd,0));
if ($day==0)
    $day+=7;
$b=$_POST['b'];
$l=$_POST['l'];
$s=$_POST['s'];
$d=$_POST['d'];
$q1="Update menu_b set breakfast='$b' where day=$day;";
$q2="Update menu_b set lunch='$l' where day=$day;";
$q3="Update menu_b set snacks='$s' where day=$day;";
$q4="Update menu_b set dinner='$d' where day=$day;";
$res1= mysqli_query($con, $q1);
$res2= mysqli_query($con, $q2);
$res3= mysqli_query($con, $q3);
$res4= mysqli_query($con, $q4);
header('location:MessB.php');
?>