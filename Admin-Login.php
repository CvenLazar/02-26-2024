
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    
	</head>
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #a517ba solid;
			border-radius:5px;
			border-color: green;	
		}
	</style>
	<body>
	<div class="container-fluid" id="cont-3">
<header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href=index.php style="color: white; font-weight: 600; margin-top: 15px;">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="VoterCheck.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Vote</a>
        </li>
        
        <li class="nav-item" >
          <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
        </li>
      
      </ul>
    </div>
  </nav>
</header>


		<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<h3>LOG IN</h3>
            <p>Your Admin Account</p>
            <?php
    include('dbConnect.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $uname = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($uname) && !empty($password) && !is_numeric($uname))
        {
            $query = "select * from admin where email = '$uname' limit 1" ;
            $result = mysqli_query($conn, $query);

            if ($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                     
                    if($user_data['Password'] === $password)
                    {
                        header("Location: admin-page.html");
                    }
                    else{ 
                        echo "Your Password Is Incorrect";
                    }
                }
            }
        }
    }

    $conn -> close();

?>
	<form method="post">
    <div class="form-floating mb-3">
        <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
        <label for="email">Email</label>
    </div>
    <div class="form-floating">
        <input required type="password" name="password" class="form-control" id="floatingPassword" placeholder="password">
        <label for="password">Password</label><br>
    </div>
    <div class="col-12">
  <button class="btn btn-primary" type="submit" style="margin-bottom: 10px; font-design:none;">Log in</button>
  </div>
    </form>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>    
		<script src="js/bootstrap.min.js"></script> 
	</body>
	</html>

