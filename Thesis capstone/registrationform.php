<?php

// Registration System

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['copassword']);
   $user_type = $_POST['type'];

   $select = " SELECT * FROM accounts WHERE Email = '$email' && Password = '$pass' ";

   $result = mysqli_query($conn, $select);
   

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User Already Exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO accounts(name, email, password, type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:Loginform.php');
         
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- Bootstrap -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">

<!-- Css Link -->
   <link rel="stylesheet" href="css/regisstyle.css">

   <link rel="Icon" href="Images/logo.jpg">
   <title>Registration Form</title>



</head>
<body>  


   <header>
              
          <img src="Images/logo.jpg" alt="Default">

          <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>

   </header>
   
   
<div class="form-container">

   <form action="" method="post">
   <h3>Registration Form</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class=input-box>
                   <input type="text" name="name" required placeholder="Enter your name">


      <div class=input-box>
                  <input type="email" name="email" required placeholder="Enter your email">
                       </div>


      <div class=input-box>
                   <input type="password" name="password" required placeholder="Enter your password">
                        </div>

      <div class=input-box>
                   <input type="password" name="copassword" required placeholder="Confirm your password">
                        </div>
      
      <div class=usertype>
      <h4>Account  Type</h4>
          <select name="type">
        
              <option value="user">User</option>
         </select>
              </div>

 
      <input type="submit" name="submit" value="Sign-up" class="form-btn">
      <p>Already have an account? <a href="Loginform.php">Login Now</a></p>
   </form>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>