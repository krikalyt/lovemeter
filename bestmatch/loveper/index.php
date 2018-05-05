<?php 


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOVE | METER</title>
	<link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
	<link rel="icon" href="image/icon.png">
</head>
<body>
   <div id="wrapper">
   	 <div class="header">
   	 <p>LOVE % CALCULATOR VERSION 2.0</p>
   	 </div>
     <div class="container">
   	 <div id="form">
   	 <form action="calc.php" method="POST" onsubmit="return vroomx()">
      <h3>Your Name:</h3>   <input type="text" id="fname" name="fname">
        <br><br>
        <h3>Lover Name:</h3> <input type="text" id="pname" name="pname">
        <br><br>
       <h3>Favourite Color:</h3> </label>  <input type="text" id="favcolor" name="fcolor">
        <br><br>
        <input type="submit" id="find" name="submit" value="FIND">
   	 </form>
   	 </div>
   	</div>
   </div>
  <script>
    function vroomx(){
      var result=true;
       var i = document.getElementsByTagName("input");
       if(i[0].value.length==0)
       result = false;
       if(i[1].value.length==0)
       result = false;
       if(i[2].value.length==0)
       result = false;
      return(result);
    }
  </script>
	
</body>
</html>