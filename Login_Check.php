<?php
require 'includes/common.php';
$user= mysqli_real_escape_string($con,$_POST['user']);
$password=md5(mysqli_real_escape_string($con,$_POST['pass']));
$query="select * from facilities where username='$user';";
$res= mysqli_query($con, $query);
$num= mysqli_num_rows($res);
if ($num==0)
{ echo 
   "<script> alert('No such account exists. Try again.');
       window.location.href='index.php';
   </script>";
    
}
else
{
    $r= mysqli_fetch_array($res);
    if ($r[3]==$password)
    {
        session_start();
        $_SESSION['id']=$r[0];
        $_SESSION['user']=$r[2];
        switch($_SESSION['id'])
        {
            case 1: {header('location:canteen.php');
            $q="Update facilities set status='OPEN' where id=1;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='1';
            $_SESSION['user']='Canteen';
            }
                break;
            case 2: {header('location:MessA.php');
            $q="Update facilities set status='OPEN' where id=2;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='2';
            $_SESSION['user']='Mess A';
            }
                break;
            case 3:{ header('location:messB.php');
            $q="Update facilities set status='OPEN' where id=3;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='3';
            $_SESSION['user']='Mess B';
            }
                break;
            case 4: {header('location:stationery.php');
            $q="Update facilities set status='OPEN' where id=4;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='4';
            $_SESSION['user']='Stationary';
            }
                break;
            case 5: {header('location:Dispensary.php');
            $q="Update facilities set status='OPEN' where id=5;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='5';
            $_SESSION['user']='Dispensery';
            }
                break;
            case 6: {header('location:Amul.php');
            $q="Update facilities set status='OPEN' where id=6;";
            $res= mysqli_query($con, $q) or die(error);
            $_SESSION['id']='6';
            $_SESSION['user']='Amul Parlor';
            }
                break;
        }
    }
 else 
        
 {?>
   <script> alert("Incorrect password. Try again.");
   window.location.href='index.php';</script>
    <?php
 }
}
?>


