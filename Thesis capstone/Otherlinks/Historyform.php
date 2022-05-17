<?php 

// History Form page for users 
$conn = mysqli_connect('localhost','root','2003', 'e-healthcare');
session_start();



if(isset($_POST["submit"])){
  
 

  $firstname = $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $contact = $_POST['phone'];
  $vacinated = $_POST['vacinated'];
  $alcohol = $_POST['Alcohol']; 
  $illness = $_POST['illness'] ;
 $reason = $_POST['reason'];
 $smoke = $_POST['smoke'];
 $allergies = $_POST['allergies'];
  

  $inserting = "INSERT INTO form(firstname,lastname,contact,vacinated,alcohol,illness,reason,smoking,allergy)VALUES('$firstname','$lastname','$contact','$vacinated','$alcohol','$illness','$reason','$smoke','$allergies')";


  $result = mysqli_query($conn,$inserting);

   echo  "<script>alert('Submitted')</script>";

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootsrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">


  <title>History Form </title>
  <link rel="stylesheet" href="history.css">
  <link rel="icon" href="Images/logo.jpg">
</head>
<body>

  <header>
      <img src="Images/logo.jpg" alt="device-width" >
          <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>
  </header>

 
    <form action="" method="POST">
        
      <div class="form">
        <h2>Medical History</h2>
<center>
        <h4>Please Fill-out</h4>
</center>       
        <div class="container"> 
        

          <label for="fullname">Fullname↓</label>

          <div class="input-box">
            <input type="text" name="firstname" placeholder="Firstname" required>

            <input type="text" name="lastname" placeholder="Lastname" required>

          </div>

<div>
          <label for="contact">Phone Number↓</label>
 </div>          
          <div class="input-box">
            <input type="tel" name="phone" placeholder="(000)000-0000" required maxlength="11">
          </div>
      

          <label for="reason">Reason for seeing the doctor:↓</label>
          <div>
             <input type="text" name="reason" placeholder="Input here..">
          </div>
         
          <hr>
            
        
         <label >Are You Vacinated?</label>

         <div class="input-box">
              <input type="radio"  value="Yes" name="vacinated">Yes
              <input type="radio" Value="No" name="vacinated">No
         </div>

         <label>Do you drink Alcohol?</label>

         <div class="input-box">
           <input type="radio" name="Alcohol" value="Yes">Yes
           <input type="radio" name="Alcohol" value="No"  >No
         </div>


         <label>Do you smoke?</label>
         <div class="input-box">
              <input type="radio"  value="Yes" name="smoke">Yes
              <input type="radio" Value="No" name="smoke"  >No
         </div>

         <label>Do you have allergies?</label>
         <div class="input-box">
              <input type="radio"  value="Yes" name="allergies">Yes
              <input type="radio" Value="No" name="allergies"  >No
         </div>

        

         <label>Recent Illness</label>

         <div class="input-box">
             <input type="text" name="illness" id="recent-illnes" placeholder="Specify your recent illness" required>
         </div>

        

        <div class="input-box">
         
                <button type="submit" id="submit" name="submit"  class="btn btn-primary btn-block"  >Submit</button> 
        </div>
          
   
      </div>

    </form>

  
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>