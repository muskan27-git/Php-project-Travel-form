<?php
$insert = false;
if(isset($_POST['name'])){
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
    echo "Success connecting to the db";
    }

  
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $phone  = $_POST['phone'];
    $Gender = $_POST['Gender'];
   
    
    
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `Email`, `phone`,`Gender`, `other`, `dt`) VALUES ('$name', '$Email','$phone','$Gender', '$desc', current_timestamp());";

    if($con->query($sql) == true){
        echo "Successfully inserted";}


        $con->close();
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="travel.css"> 
</head>
<body>
    <div class="container">
        <h1>Welcome to VIT VELLORE TRIP </h1>
        <h2>Enter your details and submit the form for reserving your seat in this trip</h2>
        <form action="travel.php" method="post">
        <div class="details">

         <label for="Name"> Name:</label>

        <input type="text " name="name" class="name" placeholder="Enter your name"><br>

        <label for="Email" class="Email"> Email:</label>

        <input type="text " name="Email"  placeholder="Enter your Email"><br>
        <label for="Phone " > Phone Number:</label>

       <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Enter your phone number"><br>


        <label for="Gender"> Gender:</label>

       

        <input type="text " name="Gender"  placeholder="Enter your Gender"><br>

  <label for="Any suggestions for the trip" class="sug">Any suggestions for the trip</label>
<textarea name="desc" id="desc" rows=10 col=10> </textarea><br>
<button class="btn1"> Reset </button>
<button class="btn1"> Submit </button>

</div>
</form>
        
    </div>
    
</body>
</html>