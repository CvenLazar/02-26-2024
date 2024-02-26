<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/homepage.css">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }

</style>
</head>
<body>
<header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
	<div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="CITCS-Position.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Back</a>
        </li>
	  </ul>
    </div>
  </nav>
</header>

<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">VOTE FOR CITCS PRESIDENT</h1>
           <p class="text-center" style="margin-bottom: 50px; font-size: 20px;">Choose 1 To Vote</p>
         </div>
<?php
include("dbconnect2.php");
     
   $sql = "select * from candidates
   where deptid= 1 && position='president'";
    
       $result= $pdo->query($sql);
       $rs = $result->fetchAll();
       foreach ($rs as $row){
     
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-bottom:25px; margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 16rem; background-color: ;">
                 <a href="CITCS_PRES-Confirmation.php"><img class="card-img-top" src="img/pic.jpg" 
                 alt="shinzo" height="150px"></a>
                  <div class="card-body">
                    <h2 class="card-title" style="font-size: 20px;  font-weight: bold;"><?php  echo $row['Lname'] .", ".  $row['Fname'];?></h2>
                    <p class="card-text"><?php echo "<b>Achievements: </b>'" .$row['Achievements']. " '"; ?></p></a>
                    <p class="card-text"><?php echo "<b>Platform: '</b>".$row['Platform']. " '"; ?></p></a>
                    <a href="CITCS_PRES-Confirmation.php" class="btn btn-primary">Vote Now</a>
                  </div>
                </div>
              </div>
              <br><br>
              <?php } ?>
              <!-- Card End -->
    
          </div>
        </div>
      </section>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>