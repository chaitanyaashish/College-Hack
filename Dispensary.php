<?php
require 'includes/common.php';

if (!(isset($_SESSION['id'])))
{
    header('location:index.php');
}
$query='SELECT NAME,FIELD,ATTENDENCE FROM DISPENSARY;';
$res=mysqli_query($con,$query);
?>
<html>
    <head>
        <title>Canteen</title>
       <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style1.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style='margin:0px 30px 0px 30px; border-right:2px black solid; border-left:2px black solid;'>
        <?php
        include 'includes/header.php';
        ?>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-offset-1 col-xs-4'>
                    <h3>LIST OF DOCTORS</h3>
                    <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>NAME</th>
                            <th>FIELD</th>
                            <th>ATTENDANCE</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($res)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[0]; ?>
                            </td>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                            <td>
                                <?php 
                                if (strcmp($row[2],'PRESENT')==0)
                                {
                                 echo "<a role='button' class='btn btn-primary' style='color:white;' href='MarkAbsent.php?item=$row[0]'>Present</a>" ;
                                }
                                else if (strcmp($row[2],'ABSENT')==0)
                                {
                                  ?>
                                           <?php echo "<a role='button' class='btn btn-primary' style='color:white;' href='MarkPresent.php?item=$row[0]'>Absent</a>" ?>
                                      </div> <?php  
                                }
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
               </div>
        </div>
    <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
