<?php require_once './app/config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kiganda Ivan">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="./assets/font-awesome/css/font-awesome.css">

    <style type="text/css">
      .card{
        border: none;
      }
      div#parallax{
        background-color: whitesmoke;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 400px;

      }
      div#parallax i{
        padding: 120px 80px;
        font-size: 120px;
      }
    </style>
    <title>Agricultural department</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-success navbar-dark fixed-top">
      <a class="navbar-brand" href="#">Agricultural Sciences</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./views/aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./views/profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./views/projects.php">Projects</a>
          </li>
                              <li class="nav-item">
            <a class="nav-link" href="./views/contactform.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./documents/cv-kigandaivan.pdf" target="_blank" >Download CV here</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-sm bg-primary" id="new-modal" data-toggle="modal" data-target="#myModal" style="color: white;margin-top: 5px;">Become a Member</button>
          </li>
        
        </ul>
        <div class="modal fade" id="myModal" data-backdrop="false">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register to become a Member</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php require_once('./views/signup.php'); ?>
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-left: 45%;margin-top: -98px;">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <form class="form-inline">
    <div class="input-group">
      <!-- <span class="input-group-addon">@</span> -->
      <input type="text" class="form-control " placeholder="Search">
    </div>    
  </form>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-4" style="width: 100%;">
        <div class="card">
          <div class="card-body">
          <div class="card-header bg-default" style="text-align: center;"><br><br><h2>News & Updates</h2><i class="fa fa-arrow-right"></i></div>
          Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here.
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here.
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news .
         </div>
          <!-- <div class="card-footer">Footer</div> -->
        </div>
      </div>
      <div class="col-md-8" style="width: 100%;">
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/must10.jpg" alt="Los Angeles" >
      <div class="carousel-caption">
        <h3>Agricultural Projects</h3>
        <p>Our projects need funds to fully be established.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/pic01.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Becoming a Partner</h3>
        <p>We welcome partners all around the world !</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/must7.jpg" alt="New York" >
      <div class="carousel-caption">
        <h3>Activities</h3>
        <p>We empower farmers with new modern technologies in agriculture</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
      </div>
    </div>
    <div class="row">
     <div class="col-md-3">
      <div class="card" style="width: 400px;">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width:80%;">
      </div>
    </div>
         <div class="col-md-3">
                <div class="card" style="width:80%;">
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
            Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here.
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news department website and we department website and we
        </div>
         </div>

    </div>
         <div class="col-md-3">
      <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width:80%">
      </div>
    </div>
    <div class="col-md-3">
            <div class="card" >
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
            Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here.
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here.
           Apparently we welcome you to our department website and we
           would like you to enjoy your surfing by checking out all the latest news and updates from here
           Apparently
         </div>
         </div>
      </div>
  </div>
  <div class="row">
     <div class="col-md-3">
      <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe jkhkjhkjh</h4>
        </div>
        <img class="card-img-bottom" src="./images/must7.jpg" alt="Card image" style="width:400px;">
      </div>
    </div>
         <div class="col-md-3">
                <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
          <video controls style="width: 80%;height: 320px;">
              <source src="./videos/index.mp4" type="video/mp4">
          </video>

        </div>
         </div>
    </div>
         <div class="col-md-3">
      <div class="card" style="width:400px">
        <div class="card-body">
          <img class="card-img-bottom" src="./images/must9.jpg" alt="Card image" style="width:80%;height: 320px;">
          <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
        </div>
        
      </div>
    </div>
         <div class="col-md-3">
                <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
          <video controls style="width: 80%;height: 320px;">
              <source src="./videos/index.mp4" type="video/mp4">
          </video>

        </div>
         </div>
    </div>
  </div>
  <div class="row" id="parallax">
    <div class="col-md-2">
      <i class="fa fa-envelope"></i>
    </div>
        <div class="col-md-2">
        <i class="fa fa-edit"></i>
    </div>
        <div class="col-md-2">
        <i class="fa fa-facebook"></i>
    </div>
        <div class="col-md-2">
        <i class="fa fa-twitter"></i>
    </div>
        <div class="col-md-2">
        <i class="fa fa-instagram"></i>
    </div>
        <div class="col-md-2">
              <i class="fa fa-flag"></i>

    </div>
  </div>  
  <div class="row">
<div class="col-md-4">
      <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width: 80%">
      </div>
    </div>
    <div class="col-md-4">
            <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width: 80%">
      </div>
    </div>
         <div class="col-md-4">
                <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
          <video controls style="width: 80%;height: 338px;">
              <source src="./videos/index.mp4" type="video/mp4">
          </video>

        </div>
         </div>
    </div>
    </div>
    <div class="row">
<div class="col-md-4">
      <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width: 80%">
      </div>
    </div>
         <div class="col-md-4">
                <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Testimonial</h4>
          <video controls style="width: 80%;height: 340px;">
              <source src="./videos/index.mp4" type="video/mp4">
          </video>

        </div>
         </div>
    </div>
        <div class="col-md-4">
                <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
        </div>
        <img class="card-img-bottom" src="./images/pic01.jpg" alt="Card image" style="width: 80%">
      </div>
    </div>
    </div>
<div id="footer" style="background-color: rgba(0,0,0,1);color: white;">
  <div class="row">
    <div class="col-md-3">
      <h3>Events</h3>
      <a href="#" class="btn btn-primary">Agricultural Galla</a><br>
      <a href="#" class="btn btn-primary">Wild Life Tour</a><br>
      <a href="#" class="btn btn-primary">Upcoming Events</a><br>
      <a href="#" class="btn btn-primary">Projects</a><br>
    </div>
        <div class="col-md-3">
          <h3>Address & Location <i class=""></i></h3>
          Located at Makerere University Kampala
          College of Veterinary Medicines
          Agriculture Department,
          Contact us on :
          Tel : +(256) 888 999 , +(256) 545 545  
          Email <i class="fa fa-envelope" style="color: whitesmoke;"></i>: <a href="">agridep@gmail.com</a> 
          facebook <i class="fa fa-facebook" style="color: rgba(0,80,250,0.6);"></i>: <a href="">agridep@facebook.com</a>
          twitter <i class="fa fa-twitter" style="color: rgba(0,150,200,1);"></i>: <a href="">agrid@twitter.com</a>
          instagram <i class="fa fa-instagram" style="color: rgba(0,150,200,1);"></i>: <a href="">#agricultureMUK</a>
        </div>
        <div class="col-md-3">
          <h3>Links </h3>
          <a href="#" class="">Agricultural Galla</a><br>
          <a href="#" class="">Wild Life Tour</a><br>
          <a href="#" class="">Student's Portal</a><br>
          <a href="#" class="">Projects</a>
          <a href="#" class="">Agricultural Galla</a><br>
          <a href="#" class="">Wild Life Tour</a><br>
          <a href="#" class="">Student's Portal</a><br>
          <a href="#" class="">Projects</a>
    </div>
        <div class="col-md-3">
          <h3>Partners </h3>
          <a href="#" class="btn btn-success">Makerere University</a><br>
      <a href="#" class="btn btn-success">Uganda Wild Life</a><br>
      <a href="#" class="btn btn-success">Ministry of Agriculture</a><br>
      <a href="#" class="btn btn-success">United Nations </a><br>
        </div>
       <em>College of Agricultural Sciences all coyrights reserved &copy;2019 version 1.0</em>
  </div>
</div>
</div>
    <script type="text/javascript" src="./assets/jquery/jquery-3.1.0.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#new-modal').click(function(){
          debugger
          $('.modal-backdrop fade').hide();
        });
      });
    </script>
</body>
</html>