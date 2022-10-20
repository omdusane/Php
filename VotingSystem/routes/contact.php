<?php
session_start();
  if(!isset($_SESSION['userdata'])){
      header("location: ../");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/contact.css">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand">College Voting System</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="groups.php">Candidates</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>    
  </nav>

  <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    <h5>Yoga Life</h5>
                    <p>
                      Make your health First Priority..!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    
                    <ul>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
                        </span>
                        Monday-Friday, 10am-5pm
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                        +91 9731633257
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                        tcstechnologies@gmail.com
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    <h5>Our Location</h5>
                    <p>TCS Technologies, Shivaji Road, New Panvel, Navi-Mumbai, Maharashtra, 410-206</p>
                  </div>
                </div>
                <div>
                  <div class="widget">
                    <h5>Follow Us</h5>
                    <ul class="social-network">
                      <li class="social-facebook">
                        <a href="https://www.facebook.com/login.php" style="color:white;">
                          Facebook
                        </a>
                      </li>
                      <li class="social-twitter">
                        <a href="https://twitter.com/?lang=en-in" style="color:white;">
                          Twitter
                        </a>
                      </li>
                      <li class="social-instagram">
                        <a href="https://www.instagram.com/" style="color:white;">
                          Instagram
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

<footer>      
    <div class="text-left">
      <p>&copy; Copyright - TCS. All rights reserved</p>
    </div>
    <div class="text-right">
      <div class="credits">Designed by TCS Technologies</div>
    </div>
  </footer>
</body>
</html>