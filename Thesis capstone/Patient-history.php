
<!-- Patient History Chart -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/ffaaf925d7.js" crossorigin="anonymous"></script>  

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- Google Font -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200&display=swap" rel="stylesheet">

<!-- Links -->
<link rel="Icon" href="Images/logo.jpg">
<link rel="stylesheet" href="css/admin-history.css">

    <title>Patient Histrory</title>
</head>
<body>



<header>
<a href="admin-page.php"><img src="Images/logo.jpg" alt="Default"></a> 
         <h1>MONTALBAN <br>INFIRMARY HOSPITAL</h1>


</header>
<a class="nav-link active" aria-current="page" href="admin-page.php" style="color:black"><i class="fa-solid fa-house fa-xl"></i></a>
    <!-- Table -->
<div class="table-container">
    <h3>History Table Form of the Patient</h3>


  
    <center>
    <table class="table table-dark table-stripped">
      <thead>
            <tr>       
                 <th></th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Contact</th>
                <th>Vacinated</th>
                <th>Drinking alcohol</th>
                <th>Recent Illness</th>
                <th>Reason</th>
                <th>Smoking</th>
                <th>Allergy</th>
                <th>Update</th>
           </tr>
      </thead>

      <tbody> 
                                  
 <?php 

@include 'config.php';



$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if (!$result){
  die("Error !" . $conn->error);
}

while($row = $result->fetch_assoc()){
  echo"<tr><form action='' method = 'POST'>
                 <td><input type='hidden' name='id' value='" . $row["id"] . "'></td>
                  <td><input type='text' name='firstname' value='" . $row["firstname"] . "'></td>
                  <td><input type='text' name='Lastname' value='" . $row["lastname"] . "'></td>
                  <td><input type='tel' name='Contact' value='" . $row["contact"] . "'></td>
                  <td><input type='text' name='Vacinated' value='" . $row["vacinated"] . "'></td>
                  <td><input type='text' name='Alcohol' value='" . $row["alcohol"] . "'></td>
                  <td><input type='text' name='Illness' value='" . $row["illness"] . "'></td>
                  <td><input type='text' name='reason' value='" . $row["reason"] . "'></td>
                  <td><input type='text' name='smoking' value='" . $row["smoking"] . "'></td>
                  <td><input type='text' name='allergy' value='" . $row["allergy"] . "'></td>
                  <td><button name='edit' type='submit'  class='btn btn-primary'>Update</button></td>
                    
     </form>   </tr>";
}
?>
<?php 

if(isset($_POST['edit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['Lastname'];
  $contact = $_POST['Contact'];
  $vac = $_POST['Vacinated'];
  $alc = $_POST['Alcohol'];
  $ill = $_POST['Illness'];
  $reason = $_POST['reason'];
  $smoking = $_POST['smoking'];
  $allergy = $_POST['allergy'];
  $id = $_POST['id'];
  
  $update = "UPDATE form set firstname ='$firstname', lastname = '$lastname', contact = '$contact',vacinated = '$vac',alcohol = '$alc', illness = '$ill' , reason = '$reason', smoking = '$smoking' ,allergy = '$allergy'  where id= '$id'" ;
  
  $query = mysqli_query($conn,$update);

  echo "<meta http-equiv='refresh' content='0'>";
 
  
  
  }
?>


             </tbody>
   </table>
   </center>
 
  
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>