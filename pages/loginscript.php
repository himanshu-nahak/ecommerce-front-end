<?php

$u = $_POST["username"];
$p = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "Root@123";
$dbname = "ecomdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT v_user,v_pass FROM Vendor where v_user='" . $u . "' and v_pass='" . $p."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location:../index.html");

    exit();

    // output data of each row
    /*while($row = $result->fetch_assoc()) {
      echo "name: " . $row["v_user"]. "<br>";
    }
    */
  } else {
    header("Location:../login2.html");
  }
  $conn->close();



?>