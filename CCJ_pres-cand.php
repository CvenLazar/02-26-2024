<!DOCTYPE html>
<html lang="en">
<head>

  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/homepage.css">

<!------------------  Internal Css ------------------>
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
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">VOTE FOR CCJ PRESIDENT</h1>
           <p class="text-center" style="margin-bottom: 50px; font-size: 20px;">Choose 1 To Vote</p>
         </div>
<?php 
   $sql = "select * from candidates
   where deptid= 3 && position='president'";

   $dsn = "mysql:host=localhost;dbname=voting";
   $user = "root";
   $pass = "";
   $option = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_ASSOC];
   
   try{
    $pdo =  new PDO($dsn,$user,$pass,$option);
   
   }catch(PDOException $e){
     echo $e->getMessage();
   };
    
       $result= $pdo->query($sql);
       $rs = $result->fetchAll();
       foreach ($rs as $row){
     
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-bottom:25px; margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 16rem; background-color: ;">
                 <a href="CCJ_PRES-Confirmation.php"><img class="card-img-top" src="img/pic.jpg" 
                 alt="shinzo" height="150px"></a>
                  <div class="card-body">
                    <h2 class="card-title" style="font-size: 20px;  font-weight: bold;"><?php  echo $row['Lname'] .", ".  $row['Fname'];?></h2>
                    <p class="card-text"><?php echo "<b>Achievements: </b>'" .$row['Achievements']. " '"; ?></p></a>
                    <p class="card-text"><?php echo "<b>Platform: '</b>".$row['Platform']. " '"; ?></p></a>
                    <a href="CCJ_PRES-Confirmation.php" class="btn btn-primary">Vote Now</a>
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