<?php
	session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    include('../model/Connection.php');

    $packagename = $_GET['packagename'];
    $hotelname = $_GET['hotelname'];
    $location = $_GET['location'];
    $cost = $_GET['cost'];
    $rating = $_GET['rating'];
    
     
?>

<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Package Details</title>
</head>
<style>
	a:link, a:visited {
  background-color: #04AA6D;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
<body align = "center">
	<div class="main">
	<h1 align="center">You have ordered a package</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	<fieldset>
		<legend>Package Information</legend>
		<label for="packagename">Package name : <?php echo $packagename;?></label>
		
		<br><br>

		<label for="hotelname">Hotel Name : <?php echo $hotelname ?>
		
		<br><br>

		<label for="location">Location : <?php echo $location ?><br><br>

		<label for="cost">Cost : <?php echo $cost ?>
		<br><br>


		<label for="rating">Rating : <?php echo $rating ?></label>
		<br><br>

		<a href="packageList.php">Cencel</a>
<a href="packageList.php">Make Payment</a>
		<br><br>
	</fieldset>
	<br>
	
         
            

 </form>
</div>
</body>
</html>
