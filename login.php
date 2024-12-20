<?php require('connection.php')?>
<?php 
    if (isset($_POST["username"])  &&  (isset($_POST["password"]))){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connection , "SELECT * FROM user WHERE username='$username'");
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row['password']){
                header ('Location:index.php');

            }
            else{
                echo "<script> alert('Incorrect password'); </script>";
                
            }
            
        }
        else{
            echo "<script> alert('Incorrect username'); </script>";
        }

    }

?>
<html>
  <head>
   <title>Login page</title>
   <link rel="stylesheet" href="style.css">
    </head>
    <div id="login-box">
      <div class="left">
        <h1>Login</h1>
        <form action = "login.php" method= "post">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
        
          <input type="submit" name="Login_submit" value="Login" />
        </form>
      <p>Don't have an account? <a href="signup.php">Sign Up</a> </p>
      </div>
      
      <div class="right">
        <img src="images/logo.jpg" id="logo">
      </div>
    </div>
   </body>
  
</html>