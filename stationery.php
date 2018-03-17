<?php
require 'includes/common.php';
$q="SELECT item,price FROM stationary";
$res2= mysqli_query($con, $q);
?>
<html>
    <head>
        <title>Stationary</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style1.css">
    </head>
    <body>
            <?php
            require 'includes/header.php';
            ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
            <table class="table table-responsive table-hover table-striped">
                <tbody>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <td></td>
                    </tr>

                        <?php

                        while ($ROW= mysqli_fetch_array($res2)) {
                        ?>
                    <tr>
                        <td> <?php echo"$ROW[0]"; ?></td>
                        <td><?php echo"$ROW[1]"; ?></td>
                    </tr>
                        <?php } ?>

                </tbody>
            </table>
                </div>
            </div>
        </div>
          <div class="navbar-fixed-bottom">
          <?php
        include 'includes/footer.php';
        ?> </div>
    </body>
</html>
