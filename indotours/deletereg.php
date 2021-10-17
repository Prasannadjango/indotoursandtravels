<?php

$mobilenumber = $_POST['mobilenumber'];


$sqlstmt =  "DELETE FROM registeration WHERE Contactnumber = $mobilenumber";

$conn = new mysqli("localhost", "root", "", "indotours");

if ($conn->query($sqlstmt) === TRUE) 
{
  header("Location:http://localhost/myphp/indotours/admin.php");
}
else
{
	header("Location:http://localhost/myphp/indotours/deletereg.html");
}	
$conn->close();

?>

