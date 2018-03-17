<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style1.css">
 <script type="text/javascript">
 function validate(){
    var x = document.forms["myForm"]["password"].value;
  if (x.length < 8) {
      alert("Password should be of atleast 8 characters");
      return false;
  }
}
 </script>
  </head>
  <body>
    <?php 
    require 'includes/header.php';
    ?>
    <div class="container">
      <div class="jumbotron">
        <h2>Signup here according to the category to deploy your services for students.</h2>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/c.jpg" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Canteen</h4></center>
            <button type="button" onclick="func1()" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign up</button>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/mess_a.jpg" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Mess A</h4></center>
            <button type="button" onclick="func2()" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/mess_b.png" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Mess B</h4></center>
            <button type="button" onclick="func3()"  class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign up</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <br>

    <div class="container">
    <div class="row">
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/amul.jpg" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Amul Parlour</h4></center>
            <button type="button" onclick="func4()" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign up</button>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/dispe.jpg" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Dispensary</h4></center>
            <button type="button" onclick="func5()" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-xs-4 col-xs-4">
        <div class="thumbnail">
          <img src="img/stat.jpg" class="img-circle" alt="responsive image">
          <div class="caption">
            <center><h4>Stationery</h4></center>
            <button type="button" onclick="func6()" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mymodal" name="button">Sign up</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script type="text/javascript">
   function func1(){
       document.getElementById('idid').value=1; 
    }
    function func2(){
        document.getElementById('idid').value=2; 
    }
    function func3(){
        document.getElementById('idid').value=3; 
    }
    function func4(){
        document.getElementById('idid').value=4; 
    }
    function func5(){
        document.getElementById('idid').value=5; 
    }
    function func6(){
        document.getElementById('idid').value=6; 
    }
</script>
    <div class="container">


      <!-- Modal -->
      <div class="modal fade" id="mymodal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">SIGN UP FOR VARIOUS SERVICES</h4>
            </div>
            <div class="modal-body">
               <!-- <form method="post" action="signupcheck.php" name="myForm">
                    <div class="form-group">
             <label for="id"></label>
             <input type="text" class="form-control" id="idid" name="idid" disabled/>
         </div>
         <div class="form-group">
             <label for="pwd"></label>
              <input type="text" class="form-control" id="pwd" name="name" placeholder="Name">
         </div>
         <div class="form-group">
            <label for="email"></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email-Id">
         </div>
         <div class="form-group">
            <label for="pwd"></label>
             <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
         </div>
         <div class="form-group">
            <label for="pwd1"></label>
              <input type="number" class="form-control" id="pwd2" name="contact" placeholder="Contact">
         </div>
                    <div class="form-group">
         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form> -->
               <form method="post" action="LoginScript.php">
                   <div class="form-group">
                       <input type="text" id="idid" name="idid" readonly class="form-control">
                   </div>
                   <div class="form-group">
                       <input type="text" name="user"  class="form-control" placeholder="Username">
                   </div>
                   <div class="form-group">
                       <input type="password" name="pass" class="form-control" placeholder="Password">
                   </div>
                   <div class="form-group">
                       <input type="number" name="contact" class="form-control" placeholder="Contact">
                   </div>
                   <div class="form-group">
                       <button type="submit" class="form-control btn btn-primary">Sign In</button>
                   </div>
               </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
