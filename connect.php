

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
$insert = false;
if(isset($_POST['firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
   //alert("Success connecting to the db");
    
    }
    // Collect post variables
    $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$Guest=$_POST['guest'];
	$room=$_POST['room'];
	$arrivaldate=date("Y-m-d", strtotime($_POST['arrivaldate']));
	$departuredate=date("Y-m-d", strtotime($_POST['departuredate']));
	
    $sql = "INSERT INTO `bookroom`.`bookroom` (`firstname`,`lastname`,`phoneno`,`email`,`guest`,`room`,`arrivaldate`,`departuredate`) VALUES ('$firstname','$lastname','$phoneno','$email','$Guest','$room','$arrivaldate','$departuredate')";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
       
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
    header("home.html");
}
?>
<table class="table table-bordered border-primary">>
  
  <tbody>
    <tr>
      <td>Mark</td>
    
    </tr>
    <tr>
      
      <td><?php echo ('$phoneno')?></td>
    </tr>
    <tr>
      <td><?php echo ('$email')?></td>
      <td><?php echo ('$guest')?></td>

    </tr>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>