<?php 
  
   require('config.php');
   if(isset($_POST['submit'])){

     @$fname   = mysqli_real_escape_string($con, $_POST['fname']);
     @$pname   = mysqli_real_escape_string($con, $_POST['pname']);
     @$fcolor  = mysqli_real_escape_string($con, $_POST['fcolor']);
     
     
     @$query   = "SELECT * FROM `lovecal` WHERE fname ='$fname' AND pname = '$pname'";
     @$fire = mysqli_query($con,$query);
     if(mysqli_num_rows($fire)>0){
      @$users = mysqli_fetch_assoc($fire);
      @$jeet  = $users['lovep'];
     }else {

           @$jeet     = rand(40,100);
           @$query1   = "INSERT INTO `lovecal`(`fname`, `pname`, `lovep`, `color`) VALUES ('$fname','$pname','$jeet','$fcolor')";
           @$fire1    = mysqli_query($con,$query1);

     }
   
 }else header("location:index.php");
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOVE | METER</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
	<link rel="icon" href="">
</head>
<body>
   <div id="wrapper">
   	 <div class="header">
   	 <p>LOVE % CALCULATOR VERSION 2.0</p>
   	 </div>
     <div class="container">
   	 <div id="form">
       <h2><?php echo @$jeet.'% love between<br>'.@$fname.' and '.@$pname ?></h2>

   	  <a href="index.php">tryAGAIN</a>
   	 </div>
   	</div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</body>
</html>