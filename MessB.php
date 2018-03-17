<?php
require 'includes/common.php';

if (!(isset($_SESSION['id'])))
{
    header('location:index.php');
}
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$day=(jddayofweek($jd,0));
if ($day==0)
    $day+=7;
require 'includes/common.php';
$query="Select * from menu_b where day=$day;";
$result= mysqli_query($con, $query);
$row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Mess-B</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
      <body>
          <?php
        include 'includes/header.php';
        ?>
          <div class="col-xs-5 col-xs-offset-2">
              <form method='post' action='UpdateMenuB.php'>
                  <div class="form-group">
                      <h4> Breakfast: </h4> <?php echo"<input class='form-control' type='text' name='b' value='$row[1]'>"?>
                  </div>
                  <div class="form-group">
                      <h4> Lunch:</h4> <?php echo"<input class='form-control' type='text' name='l' value='$row[2]'>"?>
                  </div>
                  <div class="form-group">
                      <h4> Snacks: </h4><?php echo"<input class='form-control' type='text' name='s' value='$row[3]'>"?>
                  </div>
                  <div class="form-group">
                      <h4>Dinner:</h4> <?php echo"<input class='form-control' type='text' name='d' value='$row[4]'>"?>
                  </div>
                  <div class="form-group">
                      <button type='submit' name='submit' class='btn btn-primary form-control'>Update</button>
                  </div>
              </form>
          </div>
          <div class="navbar-fixed-bottom">
          <?php
        include 'includes/footer.php';
        ?> </div>
      </body>
          </html>
