<?php
  

$user = 'root';
$password = ''; 
$database = 'indotours'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);
$sql = "SELECT * FROM registeration ";
$result = $mysqli->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</head>
<body style="background: url(images/adminbg.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
<div class="container-fluid  mt-5 shadow-lg p-3 mb-5  rounded ">
<a class="btn btn-danger border-white mt-4 me-3" href="http://localhost/myphp/indotours/homepage.html" >View Site</a>
<a class="btn btn-danger mt-4 border-white"  href="http://localhost/myphp/indotours/adminlogin.html" >Logout</a>
&nbsp;
<a class="btn btn-danger mt-4 border-white" href="http://localhost/myphp/indotours/deletereg.html" >Delete Regsiteration</a>
<a class="navbar-brand " >
    <img src="images/logo.jpg " alt="" width="150px" class="rounded-pill float-end" >
    </a>
	<h1 class="display-5 text-center " style="font-family:lora">Indo Tours and Travels</h1>
	<hr class="bg-white">
	<div class="container-fluid border rounded bg-white">
		<table class="table table-hover table-bordered border-dark rounded mt-2" >
		<tr>
		<th class="text-dark h4 bg-info">Name</th>
		<th class="text-dark h4 bg-info">Emial-id</th>	
		<th class="text-dark h4 bg-info" >Contanctnumber</th>
		<th class="text-dark h4 bg-info">Location</th>
		<th class="text-dark h4 bg-info">Registered Date/Time</th>		
		</tr>
    <?php  
              while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['Email-id'];?></td>
                <td><?php echo $rows['Contactnumber'];?></td>
                <td><?php echo $rows['Location'];?></td>
                <td><?php echo $rows['date'];?></td>
            </tr>
            <?php
                }
             ?>
</table>	
</div>
</div>	
</body>
</html>