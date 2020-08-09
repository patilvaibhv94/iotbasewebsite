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

	$select = $_REQUEST['select1'];
	$input = $_REQUEST['input1'];

	$pll = $_REQUEST['pll'];
	$pul = $_REQUEST['pul'];
	$pkg = $_REQUEST['pkg'];
	$px = $_REQUEST['pxaxis'];
	$py = $_REQUEST['pyaxis'];

	$fll = $_REQUEST['fll'];
	$ful = $_REQUEST['ful'];
	$fkg = $_REQUEST['fkg'];
	$fx = $_REQUEST['fxaxis'];
	$fy = $_REQUEST['fyaxis'];

	$tll = $_REQUEST['tll'];
	$tul = $_REQUEST['tul'];
	$tkg = $_REQUEST['tkg'];
	$tx = $_REQUEST['txaxis'];
	$ty = $_REQUEST['tyaxis'];

	$lll = $_REQUEST['lll'];
	$lul = $_REQUEST['lul'];
	$lkg = $_REQUEST['lkg'];
	$lx = $_REQUEST['lxaxis'];
	$ly = $_REQUEST['lyaxis'];
	
	$xll = $_REQUEST['xll'];
	$xul = $_REQUEST['xul'];
	$xkg = $_REQUEST['xkg'];
	$xx = $_REQUEST['xxaxis'];
	$xy = $_REQUEST['xyaxis'];
	
	$sql = "INSERT INTO analog VALUES('$select','$input','$pll','$pul','$pkg','$px','$py','$fll','$ful','$fkg','$fx','$fy','$tll','$tul','$tkg','$tx','$ty',
					'$lll','$lul','$lkg','$lx','$ly','$xll','$xul','$xkg','$xx','$xy')";

	if(mysqli_query($conn,$sql))
	{
		echo"<script>alert(' Inserted Successfully !!!')  </script>";	
	}
	else{
		echo"<script> alert(' Some Problem... ') </script>";
	}
	$conn->close();
?>

