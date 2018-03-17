<?php
require 'includes/common.php';

if (!(isset($_SESSION['id'])))
{
    header('location:index.php');
}
$query='SELECT ITEM,PRICE,STATUS FROM CANTEEN;';
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
                    <h3>MENU</h3>
                    <table class='table table-responsive table-striped table-hover'>
                        <tr>
                            <th>ITEM</th>
                            <th>PRICE</th>
                            <th>STATUS</th>
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
                                if (strcmp($row[2],'AVAILABLE')==0)
                                {
                                 echo "<a role='button' class='btn btn-primary' style='color:white;' href='MakeUnAvail.php?item=$row[0]'>Available</a>" ;
                                }
                                else if (strcmp($row[2],'NOT AVAILABLE')==0)
                                {
                                  ?>
                                           <?php echo "<a role='button' class='btn btn-primary' style='color:white;' href='MakeAvail.php?item=$row[0]'>Not Available</a>" ?>
                                      </div> <?php  
                                }
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            <div class="col-xs-3">
                <br><br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Add an Item </h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="AddItem.php">
                            <div class="form-group">
                                <input class="form-control" type="text" name="item" placeholder="ITEM">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="price" placeholder="PRICE">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <br><br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Change price </h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="ChangePrice.php">
                            <div class="form-group">
                                <input class="form-control" type="text" name="item" placeholder="ITEM">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="number" name="price" placeholder="PRICE"> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                        </form>
                    </div>
            </div>
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Remove an Item</h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="RemoveItem.php">
                            <div class="form-group">
                                <input class="form-control" type="text" name="item" placeholder="ITEM">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Remove</button>
                            </div>
                        </form>
                    </div>
                </div> 
                
            </div>
         </div>
    </div>
    <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
