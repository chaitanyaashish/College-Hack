<?php
require 'includes/common.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>COLLEGE HACK</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style1.css">
      <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
      </head>
      <body>
          <?php
          require 'includes/header.php';
          ?>
                


                            <div class="container">

                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                  <li data-target="#myCarousel" data-slide-to="3"></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="img/img1.jpg" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/img13.jpg" alt="Chicago" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/img5.jpg" alt="New york" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/img6.jpg" alt="New york" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>

                                     <br><br>
                                     <div class="container-fluid">
                                       <div class="row">
                                         <div class="col-xs-offset-1 col-xs-10 col-sm-10">
                                           <div class="jumbotron">
                                             <p style="font-size:20px; color:black; text-allign:left;">WHAT WE DO?</p>
                                               <br>
                                               <h1>College Problems?....Not any more</h1>
                                               <br>
                                               <p>Here we provide a method the students as well as all the customers to check whether the facilities in the college are available or not. </p>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                       <div class="background-image"><br>
                                     <div class="container">
                                       <div class="row">
                                         <div class="col-xs-4 col-sm-4 col-lg-4">
                                             
                        <?php
                            $q="Select status from facilities where id=1;";
                            $res= mysqli_query($con, $q);
                            $row= mysqli_fetch_array($res);
                        ?>
                                           <div class="thumbnail"><a data-toggle="modal" data-target="#Canteen1" style="color:#000000;font-size:25px;">
                                             <img src="img/c.jpg" class="img-rounded" alt="Canteen" style="height:250px;width:100%;">
                                             <div class="text caption" style="font-size:25px;"><b style="float:left;">CANTEEN</b>
                                             
                           <?php if ((strcmp($row[0],'OPEN'))==0) {   ?> <div style="float:right;"><ul style="color:green;font-size: 18px;">
                                                <li>OPEN</li>
                               </ul> </div>
                           <?php } else {?>
                                            <div style="float:right;">   <ul style="color:red">
                                                    <li>CLOSED</li> 
                                                </ul> </div> <?php } ?>
                                            </div></a>
                                           </div>
                                         </div>
                                         <div class="col-xs-4 col-sm-4 col-lg-4"><a data-toggle="modal" data-target="#MessA" style="color:#000000;font-size:25px;">
                                           <div class="thumbnail">
                                             <img src="img/bhm.jpg" class="img-rounded" alt="Boys hostel mess">
                                             <div class="text caption" style="font-size:25px;"><center><b style="float:left;">BOYS MESS</b></center>
                                                <a href="#" data-toggle="popover" data-placement="bottom" data-content="Breakfast: 8:00 -10:00 Lunch: 12:00-2:00 Snacks: 5:00- 6:30 Dinner: 8:00-10:00"> Mess Timings</a>

                                               </div> 
                                             </a>
                                           </div>
                                         </div>
                                         <div class="col-xs-4 col-sm-4 col-lg-4">
                                           <div class="thumbnail"><a data-toggle="modal" data-target="#MessB" style="color:#000000;font-size:25px;">
                                             <img src="img/ghm.jpg" class="img-rounded" alt="Girls hostel mess" style="height:250px;width:100%;">
                                             <div class="text caption" style="font-size:25px;"><b style="float:left;">GIRLS MESS</b> </a>
                                             <a href="#" data-toggle="popover" data-placement="bottom" data-content="Breakfast: 8:00 -10:00 Lunch: 12:00-2:00 Snacks: 5:00- 6:30 Dinner: 8:00-10:00"> Mess Timings</a>
                                           </div>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                     <br><br>
                                    <div class="container">
                                      <div class="row">
                                         <div class="col-xs-4 col-sm-4 col-lg-4">
                                             
                            <?php  
                             $q2="Select status from facilities where id=4;";
                            $res2= mysqli_query($con, $q);
                            $row2= mysqli_fetch_array($res);
                            ?>
                                           <div class="thumbnail"><a data-toggle="modal" data-target="#Stationary" style="color:#000000;font-size:25px;">
                                             <img src="img/ss1.jpg" class="img-rounded" alt="Stationary" style="height:250px;width:100%;">
                                            <div class="text caption" style="font-size:25px;"><b style="float:left;">STATIONARY</b>
                                            <?php if ((strcmp($row2[0],'OPEN'))==0) {   ?> <div style="float:right;"><ul style="color:green;font-size: 18px;">
                                                <li>OPEN</li>
                                                </ul> </div>
                           <?php } else {?>
                                            <div style="float:right;">   <ul style="color:red">
                                                    <li>CLOSED</li> 
                                                </ul> </div> <?php } ?>
                                            </div></a>
                                           </div>
                                         </div>
                                         <div class="col-xs-4 col-sm-4 col-lg-4">
                                           <br><br><br><br><br>
                                           
                                <?php  
                             $q3="Select status from facilities where id=5;";
                            $res3= mysqli_query($con, $q);
                            $row3= mysqli_fetch_array($res);
                            ?>
                                           <div class="thumbnail"><a data-toggle="modal" data-target="#Dispensary" style="color:#000000;font-size:25px;">
                                             <img src="img/dp.jpg" class="img-rounded" alt="Dispensary" style="height:150px; width:100%;">
                                             <div class="text caption" style="font-size:25px;"><b style="float:left;">DISPENSARY</b>
                                            <?php if ((strcmp($row3[0],'OPEN'))==0) {   ?> <div style="float:right;"><ul style="color:green;font-size: 18px;">
                                                <li>OPEN</li>
                               </ul> </div>
                           <?php } else {?>
                                            <div style="float:right;">   <ul style="color:red">
                                                    <li>CLOSED</li> 
                                                </ul> </div> <?php } ?>
                                           
                                            </div> </a>
                                           </div>
                                         </div>
                                         <div class="col-xs-4 col-sm-4 col-lg-4">
                                    <?php  
                             $q4="Select status from facilities where id=5;";
                            $res4= mysqli_query($con, $q);
                            $row4= mysqli_fetch_array($res);
                            ?>         
                           
                                           <div class="thumbnail"><a data-target="#Amul" data-toggle="modal" style="color:#000000;font-size:25px;">
                                             <img src="img/ap.jpg" class="img-rounded" alt="Amul Parlour" style="height:250px;width:100%;">
                                            <div class="text caption" style="font-size: 25px;"><b style="float:left;">AMUL</b>
                                           <?php if ((strcmp($row4[0],'OPEN'))==0) {   ?> <div style="float:right;"><ul style="color:green;font-size: 18px;">
                                                <li>OPEN</li>
                               </ul> </div>
                           <?php } else {?>
                                            <div style="float:right;">   <ul style="color:red">
                                                    <li>CLOSED</li> 
                                                </ul> </div> <?php } ?>
                                            </div></a>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                     
                                     
                                     <?php
require 'includes/common.php';
$query='SELECT ITEM,PRICE FROM CANTEEN where status="available";';
$res=mysqli_query($con,$query);
?>
                                     <div id="Canteen1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Menu </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>ITEM</th>
                            <th>PRICE</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($res)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[0]; ?>
                            </td>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div>
                                     
       <?php
require 'includes/common.php';
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$day=(jddayofweek($jd,0));
if ($day==0)
    $day+=7;
$query="Select * from menu_a where day=$day;";
$result= mysqli_query($con, $query);
?>
                                     <div id="MessA" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Menu </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>Breakfast</th>
                            <th>Lunch</th>
                            <th>Snacks</th>
                            <th>Dinner</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[1]; ?>
                            </td>
                            <td>
                                <?php echo $row[2]; ?>
                            </td>
                            <td>
                            <?php  echo $row[3]; ?>
                            </td>
                            <td>
                                <?php echo $row[4]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div>
<?php
require 'includes/common.php';
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$day=(jddayofweek($jd,0));
if ($day==0)
    $day+=7;
$query="Select * from menu_b where day=$day;";
$result= mysqli_query($con, $query);
?>
                                     <div id="MessB" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Menu </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>Breakfast</th>
                            <th>Lunch</th>
                            <th>Snacks</th>
                            <th>Dinner</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[1]; ?>
                            </td>
                            <td>
                                <?php echo $row[2]; ?>
                            </td>
                            <td>
                            <?php  echo $row[3]; ?>
                            </td>
                            <td>
                                <?php echo $row[4]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div>
<?php
require 'includes/common.php';
$query='SELECT ITEM,PRICE FROM AMUL where status="available";';
$res=mysqli_query($con,$query);
?>
                                     
                                     <div id="Amul" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Menu </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>ITEM</th>
                            <th>PRICE</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($res)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[0]; ?>
                            </td>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div>
                     <?php
require 'includes/common.php';
$q="SELECT Name,Field FROM Dispensary where attendence='PRESENT';";
$res2= mysqli_query($con, $q);
?>
        <div id="Dispensary" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  LIST OF DOCTORS PRESENT </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>NAME</th>
                            <th>SPECIALISATION</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($res2)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[0]; ?>
                            </td>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div>                             
                                     
                    <?php
require 'includes/common.php';
$q="SELECT item, price FROM stationary;";
$res2= mysqli_query($con, $q);
?>
        <div id="Stationary" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Menu </h4>
                    </div>
                    <div class="modal-body">
                        <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>ITEM</th>
                            <th>PRICE</th>
                        </tr>
                        <?php while($row= mysqli_fetch_array($res2)){ ?>
                        <tr>
                            <td>
                            <?php  echo $row[0]; ?>
                            </td>
                            <td>
                                <?php echo $row[1]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>                        
                    </div>
                </div>
            </div>
        </div> 
                                     
         <div class="row" style="margin:1px 1px 1px 1px;">
                              <div class="col-xs-6 " style="border:2px white hidden;">
                            <header>
                              <center>
                              <div style="background-color:#7f7fbf;border:2px 2px 1px 2px;">
                                <h2><b>UPCOMING EVENTS</b></h2> </div>
                              </center>
                            </header> <div class="col-xs-6 col-xs-offset-2">
                          <ul><li style="font-size:25px;"><a href="https://ecell.nitrr.ac.in/" target="_blank" style="color:black;padding:0px 0px 0px 5px;">E-Summit</a></li>
                              <li style="font-size:25px;"><a href="https://www.aavartan.org/" target="_blank" style="color:black;">Aavartan</a></li>
                              <li style="font-size:25px;"><a href="https://www.ted.com/tedx/events/20612" target="_blank" style="color:black;">TedX</a></li>
                              <li style="font-size:25px;"><a href="https://www.facebook.com/samar.nitrr/" target="_blank" style="color:black;">Samar</a></li>
                              <li style="font-size:25px;"><a href="http://eclectika.org/cgi-sys/suspendedpage.cgi" target="_blank" style="color:black;">Eclectika</a></li>

                            </ul>
                            <center>
                            <p style="font-size:20px;">Click here for more Updates</p>
                            <a href="events.php"><input type="submit" value="Updates" class="btn btn-primary" style="margin-bottom:5px;"></a>
                            </center>
                          </div>
                          </div>

                        <div class="col-xs-6" style="border:2px white hidden;">
                          <header>
                            <center>
                              <div style="background-color:#7f7fbf;border:2px 2px 1px 2px;">
                                <h2><b>NEWS</b></h2>
                              </center>
                            </header>
                            <div class="col-xs-6 col-xs-offset-2">
                              <marquee behaviour="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                              <ul>
                                <li><a href="http://www.nitrr.ac.in/exam_notice.php" style="color:black; font-size:20px;">Tentatives dates for spring exam 2018</a></li>
                                <li><a href="http://www.nitrr.ac.in/admission.php" style="color:black; font-size:20px;">Girls Hostel admission for session 2018-2019</a></li>
                                <li><a href="http://www.nitrr.ac.in/results.php" style="color:black; font-size:20px;">UFM notification for Autumn 2017 Examination</a></li>
                                <li><a href="http://www.nitrr.ac.in/exam_notice.php" style="color:black; font-size:20px;">Important notice for final year students</a></li>
                              </ul>
                            </marquee>
                          </div>
                        </div>
                      </div>
                    </div>
          <?php
          require 'includes/footer.php';
          ?>


              </body>
              </html>
