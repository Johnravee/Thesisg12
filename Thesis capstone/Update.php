<?php 

@include 'config.php';



if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['phone'];
$vac = $_POST['vacinated'];
$alc = $_POST['Alcohol'];
$ill = $_POST['illness'];

$id = $_POST['id'];

$update = "UPDATE historyforms set Firstname ='$firstname', Lastname = '$lastname', Contact = '$contact',Vacinated = '$vac',Alcohol = '$alc', Illness = '$ill' where ID= '$id'" ;

$query = mysqli_query($conn,$update);

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
        
        <input type="text" name="id" placeholder="ID">

          <label for="fullname">Fullname*</label>

          <div class="input-box">
            <input type="text" name="firstname" placeholder="Firstname" required value="">

            <input type="text" name="lastname" placeholder="Lastname" required>

          </div>

<div>
          <label for="contact">Phone Number*</label>
 </div>          
          <div class="input-box">
            <input type="tel" name="phone" placeholder="(000)000-0000" required>
          </div>
      
         
          <hr>
            
        
         <label >Are You Vacinated?</label>

         <div class="input-box">
              <input type="checkbox"  value="Yes" name="vacinated">Yes
              <input type="checkbox" Value="No" name="vacinated" >No
         </div>

         <label>Do you drink Alcohol?</label>

         <div class="input-box">
           <input type="checkbox" name="Alcohol" value="Yes">Yes
           <input type="checkbox" name="Alcohol" value="No" >No
         </div>

         <label>Recent Illness</label>

         <div class="input-box">
           <input type="text" name="illness" id="recent-illnes" placeholder="Specify your recent illness">
         </div>

        <div class="input-box">
         
                <button type="submit" id="submit" name="submit" >Submit</button> 
        </div>
          
   
      </div>

    </form>

  
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>