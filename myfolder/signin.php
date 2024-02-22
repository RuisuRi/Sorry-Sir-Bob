<!DOCTYPE html>
<html>

  <html>

  <head>
    <link href="signin.css" rel="stylesheet" type="text/css" />
  </head>
  <?php 
  include ("login.php");
  ?>
    <audio autoplay loop id="bgm">
    <source src="">
    </audio>
    <script>
    var bgm = document.getElementById("bgm");
      bgm.volume=0.05;
    </script>

  <body>
    <div class="container">
      <h2>Sign In</h2>
      <form action="signin.php" method="post">
        <div class = "signup">
      <input type = "text" name="userName" placeholder="Username">
          </div>
         <div class = "signup">
      <input type = "password" name="password" placeholder="Password" >
         </div>   

          <div class = "click"> 

      <input type="submit" value="Submit" name='login'><br><br>

<?php
  if(!empty($_POST['login']))
{
    $userName= $_POST["userName"];
    $password= $_POST["password"];
    $query="SELECT * FROM signup WHERE userName='$userName' && password='$password'";
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0){
      echo "<script>alert('Logged In! Have Fun!');</script>";
      header('Location: front-page.html');
    }
    else{
      echo "<script>alert('Incorrect Password or Username');</script>";
    }
  }

?>
            <a href="signup.php"> Sign up </a>
          </div>
          </form>
   </div>


    </div>



  </body>



  </html>