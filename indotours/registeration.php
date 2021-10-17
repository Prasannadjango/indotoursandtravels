<?php

$name = $_POST['username'];
$mail = $_POST['usermail'];
$contactnumber=$_POST['usercontactnumber'];
$location=$_POST['userlocation'];


$sqlstmt = "insert into  registeration values ('$name','$mail',$contactnumber,'$location',current_timestamp())";

$conn = new mysqli("localhost", "root", "", "indotours");

if ($conn->query($sqlstmt) === TRUE) 
{
    header("Location:http://localhost/myphp/indotours/successfulpage.html");
}
else
{
	header("Location:http://localhost/myphp/indotours/errorpage.html");

}	
$conn->close();

?>






