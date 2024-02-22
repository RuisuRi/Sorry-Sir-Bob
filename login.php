<script href ="login-and-authenticator.js"></script>
<?php
$con = new mysqli('localhost', 'root', '', 'test');
if($con->connect_error){
  die('Connection Failed: ' .$con->connect_error);
}
