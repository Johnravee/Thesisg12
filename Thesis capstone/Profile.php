<?php 

$db = mysqli_connect('localhost','root','2003','e-healthcare');

session_start();
error_reporting(0);

$userid = $_SESSION['userid'];

$select = "SELECT * FROM form INNER JOIN accounts ON accounts.id = form.acc_id where accounts.id = form_id.form_id";


$con = mysqli_query($db,$select);

if(mysqli_num_rows($con) > 0){

  $row = mysqli_fetch_array($con);
   
 }else{
     $error[] = '<script>alert("wrong")</script>';
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS -->
     <link rel="stylesheet" href="css/Profile.css">
    <title>Profile</title>
</head>
<body>

<aside>
    <div class="profile-content">
        <div class="man-content">

            <div class="profile">
            <h2 class="tittle">Profile</h2>
            <div>
                <label for="name">Name : <?php  echo "".$row['firstname']."" ,"".$row['lastname'].""?></label>
            <br>
                <label for="name">Email :  <?php  echo "".$row['email'].""?>  </label>
            <br>
            
            <label for="name">Password : <?php  echo "".$row['password'].""?> </label> 
        <br>
             <label for="name">Account Type :  <?php  echo "".$row['type'].""?> </label>
        
            </div>
        </div>

        </div>
    </div>
</aside> 

<section>
   
    <div class="information">
        <div class="info-content">
            
            
            <nav>
                <ul>
                    <li><a href="Otherlinks/Historyform.php">Medical History</a></li>
                    <li><a href="Otherlinks/Appointment.php">Appointment</a></li>
                </ul>
            </nav>



            <div class="historyform">
                <div class="h-info">
                <div class="title-form">
                    <img src="Images/logo.jpg" alt="">
                <h2>Medical History Form</h2>
              
                    </div>
                    <hr>
                 <div>
                  
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quas adipisci laudantium reiciendis iste voluptatem molestias, soluta aliquid doloribus perspiciatis tempore et enim mollitia ea? Libero nemo reiciendis amet laborios Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, sit?</p>
                 </div>

                 <hr>
                <label for="name">Firstname :  <?php  echo "".$row['firstname'].""?> </label>
                <label for="name">Lastname :  <?php  echo "".$row['lastname'].""?> </label>
         
                 <label for="name">Contact :   <?php  echo "".$row['contact'].""?></label>
              
                 <label for="name"> Email :  <?php  echo "".$row['email'].""?> </label>
          
                <label for="name">Vacinated :  <?php  echo "".$row['vacinated'].""?></label>
  
                 <label for="name">Do you drink alcohol :  <?php  echo "".$row['alcohol'].""?> </label>
          
                 <label for="name">Recent Illness :  <?php  echo "".$row['illness'].""?></label>
            </div>
      
            </div>

        </div>
    </div>
    </div>

</section>



   

</body>


</html>