<?php

// Patient User Interface 

@include 'config.php';

session_start();

if(!isset($_SESSION['user'])){
   header('location:loginform.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/ffaaf925d7.js" crossorigin="anonymous"></script> 

   <title>Welcome | Montalban Infirmary Hospital</title>
   <link rel="Icon" href="Images/logo.jpg">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/User.css">

</head>
<body>


<header>
          <nav>
            <ul>
                <li><a href="https://doh.gov.ph/sites/default/files/health_magazine/DOHissue4.pdf" target="blank">Laws And Policies</a></li>
                <li><a href="https://www.who.int/philippines/news" target="blank">Health News</a></li>
                <li><a href="https://covid19.who.int/region/wpro/country/ph" target="blank">Covid Cases</a></li>
                 <li><button class="btn btn-success"><a href="#"  id="profile" class="btn"><i class="fa-solid fa-user"></i>Profile</a></button></li>
                <li><button class="btn btn-danger"><a href="logout.php" class="btn">Logout</a></button></li>
            </ul>
      </nav>         
</header>

<div class="tittle">
  <img src="Images/logo.jpg" alt="Default">

  <h1>MONTALBAN <br>INFIRMARY HOSTPITAL</h1>

</div>

            <div class="btn-content">
               <div class="content">
                   <button class="btn-link"><a href="Otherlinks/Appointment.php">Appointment</a></button>
                   <button class="btn-link"><a href="Otherlinks/Historyform.php">Medical History Form</a></button>
                   <button class="btn-link"><a href="Otherlinks/Programs.php">Programs</a></button>
                   <button class="btn-link"><a href="Otherlinks/Facility.php">Facility</a></button>
                 
               </div>
            </div>

        <footer class="footer">
          <div class="footer-wraper">
        
        <div class="myfooter">
        <h4>Montalban Infirmary <br>Hostpital</h4>
        <br>
        <br>
        
       <p> A community health facility <br> that offers primary health care services <br> in the Municipality of Rodriguez (Montalban), Rizal</p>
        
        </div>
        
        <div class="myfooter">
        <h4>Navigation</h4>
        <br>
        <li class="info"><a href="https://www.facebook.com/Montalban-Infirmary-105879047820845" target="blank" class="footerlink">About us</a></li>
        <li class="info"><a href="Appointment.html" class="footerlink">Appoint</a></li>
        <li class="info"><a href="Otherlinks/MiandVi.html" target="blank" class="footerlink">Mission and Vision</a></li>
        
        </div>
        
        <div class="myfooter">
        <h4>Contact Information</h4> 
        <br>
        
        <ul>
            <li><i class="fa-solid fa-map-location-dot"></i>  Kasiglahan Village 1, Brgy. San Jose, 1860 Rodriguez, Philippines</li>
            <li> <i class="fa-solid fa-envelope"></i> montalban.infirmary@gmail.com</li>
            <li><i class="fa-solid fa-phone"></i> 0917 129 5279</li>
            <li>
                 <a href="https://www.facebook.com/Montalban-Infirmary-105879047820845" class="footerlink"><i class="fa-brands fa-facebook">Montalban Infirmary</i> </a>
                </li>
        </ul>
           
        
        
        </div>
        
          </div> 
        
          <div id="copy">
              Copyright &copy;2022 Montalban Infirmary Hospital.All right reserved.
          </div>
        
        </footer>
                        
        
         
        </div>
        
        </div>

</body>
<script src="Javascript/user.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>

const profile =  document.querySelector('#profile')

profile.addEventListener('click',()=>{

 alert("Sorry this page is being disabled..")
  
})



</script>

</html>