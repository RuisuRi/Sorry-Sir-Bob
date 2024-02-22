<!DOCTYPE html>
<html>

<head>
  <audio autoplay loop id="bgm">
    <source src="Resources/Faruzan's Theme But It's CITY POP Genshin Impact.mp3" type="audio/mpeg">
  </audio>
  <script>
    var bgm = document.getElementById("bgm");
    bgm.volume = 0.05;
  </script>
  <link href="member-page.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <script href="authenticator.php"></script>
  <div class="header">
    <a href="front-page.html"><button class="Frontpagebutton">Front Page</button></a>
    <a href="goals-page.html"><button class="Goalsbutton">Goals</button></a>
    <a href="signin.php"><button class="Goalsbutton">Log out</button></a>
  </div>

  <div class="container"> 
    <h1> MEMBERS </h1>
    <div class="members">

      <div class="ourmembers">
        <div class="image">
          <img src="Resources/fotor-20240119215344jarrod.png" alt="jarrod">
        </div>
        <h3>Jarrod Louis Romero</h3>
        <p class="about"> about me: </p>
        <p>Hello! My full name is Jarrod Louis Talan Romero. I am a student studying in CIIT Senior Highschool and I am currently in 11th Grade in the programming strand.</p>
      </div>

      <div class="ourmembers">
        <div class="image">
          <img src="Resources/fotor-20240119215115aeon.png" alt="Aeon">
        </div>
        <h3>Aeon Hope Necio</h3>
        <p class="about"> about me: </p>
        <p>I am a student studying in CIIT Senior Highschool, and I am currently in 11th grade in the programming strand of AY 2024-2025. <br></p>
        <?php
        include 'authenticator.php';
        if(array_key_exists('resume', $_POST)){
          resume_check();
        }
        ?>
        <form method="post";>
        <input class = "submit_resume" type="submit" name="resume" ></input>
        </form>
      </div>

      <div class="ourmembers">
        <div class="image">
          <img src="Resources/hexel-modified.png" alt="Hexel">
        </div>
        <h3>Hexel Cordero</h3>
        <p class="about"> about me: </p>
        <p>Hello! My full name is Hexel A. Cordero. I am a student studying in CIIT Senior Highschool and I am currently in 11th Grade in the programming strand.</p>
      </div>

    </div>
<!-- container for the bubbles -->
    <div class="container2">
      <div class="bubble">
        <span style="--i:11"></span>
        <span style="--i:12"></span>
        <span style="--i:24"></span>
        <span style="--i:10"></span>
        <span style="--i:14"></span>
        <span style="--i:23"></span>
        <span style="--i:18"></span>
        <span style="--i:16"></span>
        <span style="--i:19"></span>
        <span style="--i:20"></span>
        <span style="--i:22"></span>
        <span style="--i:25"></span>
        <span style="--i:18"></span>
        <span style="--i:21"></span>
        <span style="--i:15"></span>
        <span style="--i:13"></span>
        <span style="--i:26"></span>
      </div>
    </div>

    <script>
      function redirectToResume(username) {
        // Redirect to the appropriate resume page based on the username
        switch (username) {
          case 'adminAeon':
            window.location.href = 'Resumes/Aeon/Aeon_Resume.html';
            break;
          case 'adminJarrod':
            window.location.href = 'Resumes/Jarrod/jarrod_resume.html';
            break;
          case 'adminHexel':
            window.location.href = 'Resumes/Hexel/hexel_resume.html';
            break;
          default:
            alert('Resume not found');
        }
      }
    </script>
</body>

</html>

