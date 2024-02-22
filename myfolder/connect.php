<?php
$userName = $_POST['userName'];
$password = $_POST['password'];
$yearLevel = $_POST['yearLevel'];
$favoriteColor = $_POST['favoriteColor'];
$favoriteFood = $_POST['favoriteFood'];

//for connection
$con = new mysqli('localhost', 'root', '', 'test');
if($con->connect_error){
  die('Connection Failed: ' .$con->connect_error);
}
else{
  $stmt = $con->prepare("insert into signup(userName, password, yearLevel, favoriteColor, favoriteFood) values(?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiss", $userName, $password, $yearLevel, $favoriteColor, $favoriteFood);
  $stmt->execute();
  $stmt->close();
  $con->close();
  header('Location: signin.php');
  exit;
}
  ?>






