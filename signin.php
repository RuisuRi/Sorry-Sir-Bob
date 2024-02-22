<!DOCTYPE html>
<html>

<head>
  <link href="signin.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <audio autoplay loop id="bgm">
    <source src="">
  </audio>
  <script>
    var bgm = document.getElementById("bgm");
    bgm.volume = 0.05;
  </script>

  <div class="container">
    <h2>Sign In</h2>
    <form action="signin.php" method="post">
      <div class="signup">
        <input id = "userName" type="text" name="userName" placeholder="Username">
      </div>
      <div class="signup">
        <input id = "password" type="password" name="password" placeholder="Password">
      </div>
      <div class="click">
        <input id = "login" type="submit" value="Submit" name='login'><br><br>
 
        <?php
        session_start(); // Start session before accessing session variables
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = isset($_POST['userName']) ? $_POST['userName'] : "";
          $password = isset($_POST['password']) ? $_POST['password'] : "";
          $errorMessage = "";

          // Users
          $validUsers = [
            ['username' => 'adminHexel', 'password' => 'adminhexel'],
            ['username' => 'adminJarrod', 'password' => 'TipaklongGaming'],
            ['username' => 'adminAeon', 'password' => 'adminaeon']
          ];

          $validUser = false;
          foreach ($validUsers as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
              $validUser = true;
              $_SESSION['username'] = $username; // Store username in session
              break;
            }
          }

          if ($validUser) {
            // On successful login
            echo "<script>alert('Logged In! Have Fun!');</script>";
            header("Location: front-page.html");
            exit();
          } else {
            // On fail
            echo "<script>alert('Incorrect Password or Username');</script>";
          }
        }
        ?>
        <a href="signup.php"> Sign up </a>
      </div>
    </form>
  </div>

</body>

</html>
