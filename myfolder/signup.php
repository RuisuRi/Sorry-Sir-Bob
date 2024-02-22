<!DOCTYPE html>
<html>

<head>
  <link href="signup.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <audio autoplay loop id="bgm">
    <source src="">
  </audio>
  <script>
    var bgm = document.getElementById("bgm");
    bgm.volume = 0.05;
  </script>

  <script src="login-and-authenticator.js"></script>
  <div class="container">
    <h2>Sign Up</h2>
    <form action="connect.php" method="post">
      <div class="signup">
        <input type="text" placeholder="Username" id="userName" name="userName">
      </div>
      <div class="signup">
        <input type="password" placeholder="Password" id="password" name="password">
      </div>
      <div class="signup">
        <input type="text" placeholder="Year Level" id="yearLevel" name="yearLevel">
      </div>
      <div class="signup">
        <input type="text" placeholder="Favorite Color" id="favoriteColor" name="favoriteColor">
      </div>
      <div class="signup">
        <input type="text" placeholder="Favorite Food" id="favoriteFood" name="favoriteFood">
      </div>
      <div class="click">
        <input type="submit" value="Submit" name="signup"><br><br>
        <a href="signin.php">Already have an account?</a>
      </div>
    </form>
  </div>
</body>

</html>