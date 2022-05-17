<!-- Admin Appointment Chart -->

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

<!-- Links -->
<link rel="Icon" href="Images/logo.jpg">
<link rel="stylesheet" href="css/Appointadmin.css">


    <title>Appointments</title>
</head>
<body>



<header>
        <a href="admin-page.php"><img src="Images/logo.jpg" alt="Default"></a> 
         <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>

</header>

    
<div class="table-container">
    <h3>Appointments Scheduled</h3>


  
    <center>
    <table class="table table-striped table-hover table-bordered table-dark">
      <thead>
            <tr>
          
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>First Time Visit </th>
                <th>Action</th>
           </tr>
      </thead>

      <tbody> 
                                  
 <?php 

$con = mysqli_connect('localhost','root','2003','e-healthcare');

$sql = "SELECT * FROM appointments";
$result = $con->query($sql);


if (!$result){
  die("Error !" . $con->error);
}

while($row = $result->fetch_assoc()){
  echo"<tr>
                  
                  <td>" . $row["firstname"] . "</td>
                  <td>" . $row["lastname"] . "</td>
                  <td>" . $row["contact"] . "</td>
                  <td>" . $row["email"] . "</td>
                  <td>" . $row["date"] . "</td>
                  <td>" . $row["time"] . "</td>
                  <td>" . $row["first_time"] . "</td>  
                <td> 
                   <a href='Adminappointment.php?id=" . $row["id"] ." ' class='btn btn-danger'>DELETE</a>
                </td>
        </tr>";
}

if(isset($_GET['id'])){

  $id = $_GET['id'];

  $delete = mysqli_query($con,"DELETE  FROM appointments Where id ='$id'");
}


$select = "SELECT * FROM appointments";
$run = mysqli_query($con,$select);
?>

             </tbody>
   </table>
   </center>

  
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>