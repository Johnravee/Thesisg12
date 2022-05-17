<?php

// Login System

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['type'];

   $select = " SELECT * FROM accounts WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['type'] == 'admin'){

         $_SESSION['admin'] = $row['name'];
         header('location:admin-page.php');

      }elseif($row['type'] == 'user'){

         $_SESSION['user'] = $row['name'];
         header('location:user-page.php');

      }
     
   }else{
      $error[] = '<div class="alert alert-danger" role="alert"> Incorrect Email Or Password</div>';
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


   <link rel="Icon" href="Images/logo.jpg">
   <title>Login</title>

   <!-- CSS link  -->
   <link rel="stylesheet" href="css/Login.css">

</head>
<body>


      <header>
            
          <img src="Images/logo.jpg" alt="Default">

          <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>

      </header>

   <!-- Main Form -->
<div class="form-container">

   <form action="" method="post">
      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <div>
               <input type="email" name="email" required placeholder="Enter your email">
      </div>

      <div>
              <input type="password" name="password" required placeholder="Enter your password">
      </div>

      <div>
         <center>
                 <input type="submit" name="submit" value="Sign-in" class="form-btn">
           </center> 
      </div>

      <p>Don't have an account? <a href="registrationform.php">Register now</a></p>
   </form>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>