<?php
  session_start();
  if(!isset($_SESSION['userdata'])){
      header("location: ../");
  }
  $userdata = $_SESSION['userdata'];
  $groupsdata = $_SESSION['groupsdata'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vote</title>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/vote.css">
 
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
  <div class="row g-3">
        <?php
          
            if($_SESSION['groupsdata']){
                for ($i=0; $i < count($groupsdata) ; $i++) { 
                    ?>
                    
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="card">
                            <img class="card-img-top center" style="width: 20rem; height: 12.5rem;" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" alt="" height="100" width="100">
                            <div class="card-body">
                              <h5 class="card-title">

                              </h5>
                              <p class="card-text">
                                <b>Group Name: </b><?php echo $groupsdata[$i]['name'] ?><br><br>
                                <b>Votes: </b><?php echo $groupsdata[$i]['votes'] ?><br><br>
                                <form action="../api/vote.php" method="POST">
                                    <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                    <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                    <?php
                                        if ($_SESSION['userdata']['status']==0) {
                                            ?>
                                                <input class="btn w-100" type="submit" name="votebtn" value="Vote" id="votebtn">
                                                <?php
                                        }
                                        else{
                                            ?>
                                            <input disabled class="btn w-100" type="submit" name="votebtn" value="Voted" id="voted">
                                            <?php
                                        }
                                    ?>
                                </form>
                              </p>
                            </div>
                          </div>
                        </div>
                      
  
                    <?php
                }
            }
            else{

            }
        ?>
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