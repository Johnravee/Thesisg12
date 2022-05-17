

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootsrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">


      <title>E-Healtcare Management System Of Montalban Infirmary</title>
      <link rel="stylesheet" href="Appointment.css">
      <link rel="icon" href="Images/logo.jpg">
     
      <script src="https://kit.fontawesome.com/ffaaf925d7.js" crossorigin="anonymous"></script>
</head>
<body>

         <header>
                  <img src="Images/logo.jpg" alt="Image">

                  <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>
         </header>

<section>
           <div class="container">
           <?php 

// Appointment Form For Patient

$con = mysqli_connect('localhost','root','2003','e-healthcare');


if(isset($_POST["submit"])){

   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $contact = $_POST["contact"];
   $email = $_POST["email"];
   $date = $_POST["date"];
   $time = $_POST["time"];
   $checkbox = $_POST["checkbox"];

   $query = "INSERT INTO appointments VALUES('','$firstname','$lastname','$contact','$email','$date','$time','$checkbox')";

   $run = mysqli_query($con,$query);

   echo '<script>alert("Submitted Successfully. ")</script>,
  
   <h1 align=center>Please Take a Screenshot for Proof of the Appointment</h1>';



}

?>


<?php if(isset($_POST['submit'])){
   $hide = $_POST['submit'];
}?>


                       <h2>Appointment</h2>
                       <h4 align=center>Please Fill out Form</h4>

      <form action="" method="POST" class="form">
    
                   <div class="nameinfo">
                         <label for="fullname">Name*</label>
                        <br>
                         <input type="text" name="firstname" placeholder="Firstname" value="<?php if(isset($_POST['submit'])){echo htmlentities( $firstname);} ?>" required>

                         <input type="text" name="lastname" placeholder="Lastname" value="<?php if(isset($_POST['submit'])){echo htmlentities( $lastname);} ?>" required>
<br>
<br>
                       <label for="tel">Phone Number</label>
                    <br>
                    <input type="tel" placeholder="(000) 000-0000" maxlength="11" name="contact" value="<?php if(isset($_POST['submit'])){echo htmlentities( $contact);} ?>" required>


                     <input type="email" placeholder=" Email" name="email" value="<?php if(isset($_POST['submit'])){echo htmlentities( $email);} ?>" required>

                       </div>
                          
              <div class="Date">

           <label for="date">Appointment Date:</label>
                      <div>
                         <input type="date"  name="date" value="<?php if(isset($_POST['submit'])){echo htmlentities($date);} ?>" required>
                       </div>


                <label for="time">Appointment Time:</label>
                       <div>
                          <input type="time" name="time" value="<?php if(isset($_POST['submit'])){echo htmlentities($time);} ?>" required>
                       </div>

     <?php if(!isset($hide)){ ?>
                       <div>
                         <label for="question">First Time Visit?</label>
                      <br>
                         <input type="checkbox" name="checkbox" value="Yes" id="y"> Yes
                     <br>

                     <input type="checkbox" name="checkbox" value="No" id="n"> No
                      
                </div>
 
                <div>
                     <button type="submit" name="submit" id="submit" >Submit</button>
                </div>

         </div>
    </form>
 <?php }?>



 
</section>

  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
   const submit = document.querySelector('#submit')

   submit.addEventListener("submit",()=>{
      submit.remove()
   })
</script>


</html>