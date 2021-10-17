<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indotours";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from admin";

$result = $conn->query($sql);

$username = $_POST['username'];
$password = $_POST['userpassword'];
$i=0;
while($row = $result->fetch_assoc()) 
  
{
  if ($row["username"]==$username and $row["password"]==$password) 
  {
    $i=$i+1;
  }
 }

 if($i>0)
 {
  header("Location:http://localhost/myphp/indotours/admin.php");
}
 else
  {
    header("Location:http://localhost/myphp/indotours/adminlogin.html");
  } 

$conn->close();


?>