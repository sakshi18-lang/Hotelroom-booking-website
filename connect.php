

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
    //echo ("Success connecting to the db");
    
    
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
        echo ($firstname);
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <style>
      body{
        background: url(images/bgsuit.jpg)no-repeat center top ;
    background-size: cover;
    
        margin: 0;
    padding: 0;
    overflow: hidden;
    margin-left:0px;
    background-size: cover;
   
    
      }
      .rec{
        text-transform: uppercase;
        margin-left:0px;
      }
      tr{
        font-size:26px;
        font-weight: 500;
      color: black;
      font-family: 'Playfair Display', serif;

  margin-left:0px;
   
      }
      h2{
        position: relative;
    text-align: center;
      }
    .main{
      font-weight: 500;
      color: black;
      text-transform: uppercase;
    }
    .head-btn{
    margin: 294px 0;
    font-size: 20px;
    font-weight: bold;
    border: 3px solid #fff;
    background: transparent;
    padding: 13px 10px;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    cursor: pointer;
    transition: var(--transition);
}
.head-btn:hover{
    background: transparent;
}
.flex{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
      
    </style>
</head>
<body>
  
  <h2>BOOKING DETAILS</h2>
  
    <table class="table" >
    
    <tr >
    <td class="main">Name</td>
    <td class="rec"><?php echo($firstname) ?>     <?php echo($lastname) ?></td>
    
</tr>
    <br></br>
    <tr>
    <td class="main">PHONE NO</td>
    <td><?php echo($phoneno) ?></td>
    </tr>
    <tr>
    <td class="main">EMAIL ID</td>
    <td><?php echo($email) ?></td>
    </tr>
    <tr>
    <td class="main">NO OF PEOPLE  </td>
    <td><?php echo($Guest) ?></td>
    </tr>
    <tr>
    <td class="main">TYPE OF ROOM  </td>
    <td class="rec"><?php echo($room) ?></td>
    </tr>
    <td class="main">arrivaldate </td>
    <td class="rec"><?php echo($arrivaldate) ?></td>
    </tr>
    <td class="main">departuredate </td>
    <td class="rec"><?php echo($departuredate) ?></td>
    </tr>
    </table>
    <div class = "head-bottom flex">
    <a href="index.html" class = "head-btn">BACK TO HOME PAGE</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
  
}
?>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
