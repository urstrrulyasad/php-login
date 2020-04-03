<?php
 include '../includes/commanFunctions.php';


 if (!empty($_POST['pageRequest']) && $_POST['pageRequest']=="signup") {
 	//echo "<pre>".print_r($_POST)."<pre>";
 	//die;
 	unset($_POST['pageRequest']);
 	$data =$_POST; 
 	
	$classObj = new commanFunctions();

	$connection =  $classObj->connectDB();
 	$tableName = "USER";
 	$query = $classObj->buildQuerySignUp($data,$connection,$tableName);
 	///echo $query;die;
 	if ($query) {
 		echo "User Created Successfully <br>
 		Please wait redirecting to login page";
 		header( "refresh:9;url=../login.php" );
 	}else{
 		echo "Error";
 	}
 }

 if (!empty($_POST['pageRequest']) && $_POST['pageRequest']=="login") {
 	
 	unset($_POST['pageRequest']);
 	$data =$_POST; 
 	
	$classObj = new commanFunctions();

	$connection =  $classObj->connectDB();
 	$tableName = "USER";
 	$query = $classObj->chekLogin($data,$tableName,$connection);
 	//echo $query;die;
 	if ($query) {
 		header("location:../welcome.php");

 	}else{
 		echo "Error";
 	}
 }
?>