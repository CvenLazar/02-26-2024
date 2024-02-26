<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
          
      }
     
    </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="CCJ_pres-cand.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Back</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
    


    </section>
    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Confirmation</h1>
                <form action="Voting-process.php" method="post" id=ConfirmForm> 
                <table>
                    <tr>
                        <td class="td-1">Student Number:</td>
                        <td class="td-1"><input type="text" style="text-align: left;" name="StudentNo" required></td>
                    </tr>
                    <tr>
                        <td class="td-1">Department :</td>
                        <td><select name="Department"  required >                          
                          <option>CCJ</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Which Candidate :</td>
					<td class="td-1"><select required name="Candidate" required>
            <option>--------Select--------</option>
            <?php 
           $sql = "select lname, fname from candidates where deptid = 3 and position = 'president'";
        include("dbconnect2.php");
      
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll();
        
   
        foreach ($results as $output) {?>
        <option><?php echo $output["lname"]. ", " .$output["fname"] ;?></option>
<?php }?>
			
					</select></td>
                    </tr>
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
    

</body>
</html>