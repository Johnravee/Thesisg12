<?php

// Admin User Interface 

@include 'config.php';

session_start();

if(!isset($_SESSION['admin'])){
   header('location:Loginform.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initia
  l-scale=1.0">
  <script src="https://kit.fontawesome.com/ffaaf925d7.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">

<!-- Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
 
  <title>MONTALBAN INFIRMARY HOSTPITAL</title>

<!-- CSS Style -->
<link rel="stylesheet" href="css/adminstyle.css">
<link rel="icon" href="Images/logo.jpg">
</head>
<body>

<!-- Information Navigation -->
  <header>
          <nav>
            <ul>
                <li><a href="https://doh.gov.ph/sites/default/files/health_magazine/DOHissue4.pdf" target="blank">Laws And Policies</a></li>
                <li><a href="https://www.who.int/philippines/news" target="blank">Health News</a></li>
                <li><a href="https://covid19.who.int/region/wpro/country/ph" target="blank">Covid Cases</a></li>
                <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
            </ul>
      </nav>

           
  </header>


  <section class="tittle">
             
             <img src="Images/logo.jpg" alt="Default">

             <h1>MONTALBAN <br>INFIRMARY HOSTPITAL</h1>

     </section>


<!-- Admin Patient Navigation -->
  <div class="content">
    <div class="main-content">
    
      
      <div>
        <a href="Patient-history.php">History Forms</a>
      </div>

      <div>
        <a href="adminappointment.php">Appointments</a>
      </div>

    </div>
  </div>



        
         
        </div>
        
        </div>
        
        
  




  
</body>
<script src="Javascript/adminslide.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>