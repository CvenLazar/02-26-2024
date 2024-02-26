<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Fonts CDN-->

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins;
        }
     
        
    </style>
</head>

<body>
<header id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
 <a class="navbar-brand" href="index.html"  style="color: white; font-weight: 600; margin-top: 15px;">HOME</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon" style="color: white;"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
     <li class="nav-item" >
       <a class="nav-link" href="VoterCheck.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Vote</a>
     </li>
    
     <li class="nav-item" >
       <a class="nav-link" href="logout.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Log Out</a>
     </li>
   
   </ul>
 </div>
</nav>
</header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center; margin-top:50px;"> About  </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Online voting systems are software platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.
 
                    They also protect the integrity of your vote by preventing voters from being able to vote multiple times.
                     
                    Many secure voting platform vendors provide supportive vote management consulting services that help organizations design and implement their voting procedures.
                     
                    These services help organizations save time, stick to best practices, and meet internal requirements and/or external regulations, such as third-party vote administration needs.</p>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center; margin-top:50px;"> Who can benefit from them ? </h1>
            </div>
            <div class="col-md-12">
                <p> The short answer is: anyone who makes decisions.

                    Consistent, structured decision-making needs span across organization types and industries.
                    
                    Individuals in organizations ranging from award shows, to law firms, to corporations, to schools will find value in online voting.
                    
                    Simply put - if a group of people needs to make a decision, and that decision requires input from others, an online voting system will be of value. </p>
                
              
                </div>
            <div class="col-md-12">
            <ul>
                        <li style="text-align:left; margin-left:20px;">maintains your vote’s integrity               </li>
                        <li style="text-align:left; margin-left:20px;">provides an easy vote administrator experience</li>
                        <li style="text-align:left; margin-left:20px;">creates a pleasant experience for your voters </li>
                        <li style="text-align:left; margin-left:20px;">has mechanisms for adapting to unique votes  </li>
                        <li style="text-align:left; margin-left:20px;">includes analytics, reporting, and auditing capabilities</li>
             </ul>
                    
            </div>
        </div>
    </div>

   

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>
<?php
    include("footer.html");
    ?>