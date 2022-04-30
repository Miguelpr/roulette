<?php
$servername = "localhost";
$username = "id17651176_luckyuser";
$password = "W}i~UV}@Qmw]6^?x";
$dbname = "id17651176_lucky";



$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
