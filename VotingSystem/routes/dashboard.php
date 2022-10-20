<?php
  session_start();
  if(!isset($_SESSION['userdata'])){
      header("location: ../");
  }
  $userdata = $_SESSION['userdata'];
  $groupsdata = $_SESSION['groupsdata'];

  if ($_SESSION["userdata"]["status"]==0) {
    $status = "<b style='color:red'>Not Voted</b>";
  }
  else{
    $status = "<b style='color:green'>Voted</b>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="../css/dashboard.css">
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

  <div class="conatiner">
    <div class="row g-3">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card" style="width: 40rem; height: 25rem;">
          <img class="card-img-top center" style="width: 20rem; height: 12.5rem;" src="../uploads/<?php echo $userdata['photo'] ?>" height="200" width="200" alt=""/>
          <div class="card-body"><h5 class="card-title text-center"><?php echo $userdata['name'] ?></h5></div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card" style="width: 40rem; height: 25rem;">
          <div class="card-body">
          <div class="elements">
            <b>Name: </b><?php echo $userdata['name'] ?><br><br>
            <b>Mobile: </b><?php echo $userdata['contact'] ?><br><br>
            <b>Address: </b><?php echo $userdata['address'] ?><br><br>
            <b>Dob: </b><?php echo $userdata['dob'] ?><br><br>
            <b>Gender: </b><?php if ($userdata['gender']==1) {
              echo 'Male';
            }elseif ($userdata['gender']==2) {
              echo 'Female';
            }else {
              echo 'Not Specified';
            } ?><br><br>
            <b>Status: </b><?php echo $status ?><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div id="profile">
    <div class="center">
      <img src="../uploads/<?php echo $userdata['photo'] ?>" height="200" width="200" alt=""/><br>
    </div>
    <div class="elements">
    <b>Name: </b><?php echo $userdata['name'] ?><br><br>
    <b>Mobile: </b><?php echo $userdata['contact'] ?><br><br>
    <b>Address: </b><?php echo $userdata['address'] ?><br><br>
    <b>Dob: </b><?php echo $userdata['dob'] ?><br><br>
    <b>Gender: </b><?php if ($userdata['gender']==1) {
      echo 'Male';
    }elseif ($userdata['gender']==2) {
      echo 'Female';
    }else {
      echo 'Not Specified';
    } ?><br><br>
    <b>Status: </b><?php echo $status ?><br><br>
    </div>
  </div> -->
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