<?php require('connection.php')?>
<?php 
    if (isset($_POST["username"]) &&  isset($_POST["phone"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["address"]) &&  isset($_POST["type"]) &&  (isset($_POST["password"]))){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $type = $_POST["type"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address = $_POST["address"];
        
        $duplicate = mysqli_query($connection , "SELECT * FROM user WHERE username='$username'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username is already taken'); </script>";
        }
        else{
            $query = "Insert into user values('','$phone', '$username','$password', '$type','$first_name','$last_name','$address');";
            mysqli_query($connection,$query);
                header ('Location:login.php');    
        }

    }

?>
<html>
  <head>
   <title>Signup page</title>
   <link rel="stylesheet" href="style.css">
    </head>
    <div id="signup-box">
      <div class="left">
        <h1>Sign up</h1>
        <form action = "signup.php" method= "post">
          <input type = "text" name = "first_name" placeholder="First Name">
          <input type = "text" name = "last_name" placeholder="Last Name" > 
          <input type = "text" name = "address" placeholder="Address">
          <input type = "text" name = "phone" placeholder="Phone">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <input type="radio" name="type" value="customer"> Customer
          <input type="radio" name="type" value="vendor"> Vendor
        
          <input type="submit" name="signup_submit" value="Sign Up" />
        </form>
        <p>Already have an account? <a href="login.php">Login</a> </p>
      </div>
      
      <div class="right">
        <img src="images/logo.jpg" id="logo">

      </div>
    </div>
   </body>
  
</html>