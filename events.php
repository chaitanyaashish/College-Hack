<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EVENTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style1.css">
  </head>
  <body>
   <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
            <a href="index.php" class="navbar-brand">COLLEGE HACK</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
         <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="modal" data-target="#Login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign up</a></li>
         </ul>
        </div>
      </div>
    </nav>
<div id="Login" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="float:right;">&times;</button>
                        <h4>  Login </h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="Login_Check.php">
                            <div class='form-group'>
                                <input type='text' name='user' placeholder="Username" class="form-control">
                            </div>
                            <div class='form-group'>
                                <input type='password' name='pass' placeholder="Password" class="form-control">
                            </div>
                            <div class='form-group'>
                            <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div id="banner_image">
      <div class="container">
        <div id="banner_content">
          <p id="headevent">EVENTS</p>
        </div>
      </div>
    </div>

<!-- Tedx-->
    <div class="container">
      <div class="row">
        <center><h1><b>TEDx...Going on (17&18 March)</b></h1></center>
        <div class="col-xs-4">
          <div class="thumbnail tevents">
            <img src="img/ted.jpg" alt="img" class="img-circle">
          </div>
        </div>
        <div class="col-xs-8 text">
          <br>
          <div class="jumbotron">
          <p> TED refers to the global set of conferences run by the private non-profit organisation, Sapling Foundation, under the slogan “Ideas worth Spreading”.TED is an organisation which aims to provide a platform for thinkers, visionaries and teachers, so that people around the globe can gain a better understanding of the biggest issues and feed a desire to help create a better future.</p>
        </div>
        </div>
      </div>
    </div>

    <!-- E-Summit-->
        <div class="container">
          <div class="row">
            <center><h1><b>E-Summit...Coming Soon</b></h1></center>
            <div class="col-xs-4">
              <div class="thumbnail tevents">
                <img src="img/esummit.jpg" alt="img" class="img-circle">
              </div>
            </div>
            <div class="col-xs-8 text">
              <br>
              <div class="jumbotron">
              <p> Entrepreneurship cell wants to organize an Entrepreneurship Summit to promote entrepreneurship among students and also provide a start-up initiative activity with help of NIT Raipur. It will be a conclave of some of the greatest minds in India ranging from students to investors and established startup founders.</p>
            </div>
            </div>
          </div>
        </div>

        <!-- Technocracy-->
            <div class="container">
              <div class="row">
                <center><h1><b>Aavartan...Coming Soon</b></h1></center>
                <div class="col-xs-4">
                  <div class="thumbnail tevents">
                    <img src="img/aavartan.jpg" alt="img" class="img-circle">
                  </div>
                </div>
                <div class="col-xs-8 text">
                  <br>
                  <div class="jumbotron">
                  <p> The Technocracy is the technical committee of NIT Raipur. It organizes various events whole round the academic year for technical development of student
and provides student with platform to build, improve
and test the implementation of engineering knowledge
and skills. </p>
                </div>
                </div>
              </div>
            </div>

            <!-- Eclectika-->
                <div class="container">
                  <div class="row">
                    <center><h1><b>Eclectika...February, 2019</b></h1></center>
                    <div class="col-xs-4">
                      <div class="thumbnail tevents">
                        <img src="img/eclectika.jpg" alt="img" class="img-circle">
                      </div>
                    </div>
                    <div class="col-xs-8 text">
                      <br>
                      <div class="jumbotron">
                      <p> Eclectika , the cultural festival of NIT Raipur is widely renowned as the largest fest in central India. With a participation roster exceeding over 1 hundred colleges across the academic demographic of India, Eclectika is a glorious rendition of the ideals of innovation, conception and determination to achieve high results.</p>
                    </div>
                    </div>
                  </div>
                </div>



  </body>
</html>
