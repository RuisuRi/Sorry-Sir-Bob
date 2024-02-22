
3 of 423
(no subject)
Inbox

hexel cordero <hexel.cor@gmail.com>
Attachments
6:25 PM (1 hour ago)
to me

myfolder.rar

 2 Attachments
  •  Scanned by Gmail
<?php
$id = $_POST['id'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$yearLevel = $_POST['yearLevel'];
$favoriteColor = $_POST['favoriteColor'];
$favoriteFood = $_POST['favoriteFood'];

$con = new mysqli('localhost', 'root', '', 'test');
if($con->connect_error){
  die('Connection Failed: ' .$con->connect_error);
} else {
  $check_query = "SELECT * FROM signup WHERE userName = ?";
  $stmt = $con->prepare($check_query);
  $stmt->bind_param("s", $userName);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    echo "Account already exists.";
    header('Location: signup.php?error=username_exists');
    exit;
  } else {
    $insert_query = "INSERT INTO signup (id, userName, password, yearLevel, favoriteColor, favoriteFood) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($insert_query);
    $stmt->bind_param("ississ", $id, $userName, $password, $yearLevel, $favoriteColor, $favoriteFood);
    if ($stmt->execute()) {
      echo "Account created successfully.";
    } else {
      echo "Error creating account.";
    }
    $stmt->close();
    $con->close();
    header('Location: signin.php');
    exit;
  }
}
?>






