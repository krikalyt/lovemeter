<?php 

require('config.php');
if(isset($_POST['submit'])){
	@$name = mysqli_real_escape_string($con, $_POST['name']);
	@$gen  = mysqli_real_escape_string($con, $_POST['GENDER']);
  if($gen == "MALE"){
  	@$query = "SELECT * FROM `matchingboys` WHERE NAME = '$name'";
  	@$fire = mysqli_query($con,$query);
  	   if(mysqli_num_rows($fire)>0){
       @$users = mysqli_fetch_assoc($fire);
       @$mname = $users['GFNAME'];
       }else { 
	   @$rand = rand(1,9);
	   @$query1 = "SELECT * FROM `girls` WHERE id = '$rand'";
	   @$fire1  = mysqli_query($con,$query1);
	   @$users1 = mysqli_fetch_assoc($fire1);
	   @$mname  = @$users1['GIRLNAME'];
	   @$query2 = "INSERT INTO `matchingboys`(`NAME`, `GFNAME`) VALUES ('$name','$mname')";
	   @$fire2  = mysqli_query($con,$query2);
       }

} else{

	@$query = "SELECT * FROM `matchinggirls` WHERE GIRLSNAME = '$name'";
  	@$fire = mysqli_query($con,$query);
  	if(mysqli_num_rows($fire)>0){
  		@$users = mysqli_fetch_assoc($fire);
  		@$mname = $users['BFNAME'];
  	}else{
  		@$rand  = rand(1,42);
  		@$query1 = "SELECT * FROM `boysname` WHERE id = '$rand'";
      	@$fire1  = mysqli_query($con,$query1);
	    @$users1 = mysqli_fetch_assoc($fire1);
	    @$mname  = $users1['BOYSNAME'];
	    @$query2 = "INSERT INTO `matchinggirls`(`GIRLSNAME`, `BFNAME`) VALUES ('$name','$mname')";
	    @$fire2  = mysqli_query($con,$query2);
  	}
 }
 } else header("location:index.html");	

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Best Match</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
</head>
<body>
<div id="wrapper">
	<!--header start from here-->
	<header>
	<div class="container">
		<div id="brand">
		<p>KRIKALYT</p>
		</div>
    </div>
    <div id="head">
      <div class="container">
      <p>BEST MATCHING APP CS17</p>	
      </div>
    </div>
	</header>
	<!--header end-->

<!--middle body-->
<div class="container">
	<div id="form">
	<p>Matching Found </p>
	<div class="container">
    <table>
    	<tr>
    		<th>Name</th>
    	    <th>Match</th>
    	</tr>
    	<tr>
    		<td><?php echo @$name ?></td>
    		<td><?php echo @$mname ?></td>
    	</tr>
    </table>
    <a href="index.html">tryAgain</a>
    </div>
		
	</div>
</div>
</div>
	


<!--javascript from here-->
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>