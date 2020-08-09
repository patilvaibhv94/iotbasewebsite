<?php
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "cloud";

	$conn =  new mysqli("$host","$dbusername","$dbpassword","$db");

	if($conn){
		echo"";
	}else{
		die("Connection failed: ".mysqli_connect_error());
	}

	$motor = $_REQUEST['rdbmotor'];
	$motor_inpt = $_REQUEST['moinpt1'];

	$control = $_REQUEST['rdbcontrol'];
	$control_inpt = $_REQUEST['coinpt1'];

	$fan = $_REQUEST['rdbfan'];
	$fan_inpt = $_REQUEST['faninpt1'];

	$switch = $_REQUEST['rdbswitch'];
	$switch_inpt = $_REQUEST['swinpt1'];

	$motion = $_REQUEST['rdbmotion'];
	$motion_inpt = $_REQUEST['motinpt1'];

	$text = $_REQUEST['rdbtext'];	
	$text_inpt = $_REQUEST['textinpt1'];
	
	$sql = "INSERT INTO digital VALUES(null,'$motor','$motor_inpt','$control','$control_inpt','$fan','$fan_inpt','$switch','$switch_inpt','$motion','$motion_inpt','$text','$text_inpt')";

	if(mysqli_query($conn,$sql))
	{
		echo"<script>alert('Insertion Successfull !!!') </script>";	
	}else{
		echo"<script>alert(' Problem in insertion ... ') </script>";
	}
	$conn->close();
?>

