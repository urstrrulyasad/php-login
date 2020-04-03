<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);	

class commanFunctions
{

	function connectDB(){

		$connection = mysqli_connect("localhost:3306","root","root","Animal");
		return $connection;
	}

	function chekLogin($userInput,$tableName,$connection){
		$updateStatus = "";
		$query = "SELECT * FROM ". $tableName ." WHERE ";
		$i=0;
		foreach ($userInput as $key => $value) {
			if ($key=='PASSWORD') {
			 	$value = md5($value);
			 } 
			if ($i>0) {
				$query .= " AND ";
			}

			$query .= "  ".$key." = '".$value."'";

			$i++;
		}
		////	return $query;
		$executeQuery = mysqli_query($connection,$query);

		while ($userRow = mysqli_fetch_assoc($executeQuery)) {
			//echo "inside while";
			session_start();
			$_SESSION['user_name'] = $userRow['FIRST_NAME'] ." ".$userRow['LAST_NAME']; 
			$updateQuery = "UPDATE ". $tableName ." SET LAST_UPDATED = CURRENT_TIMESTAMP()  WHERE USER_ID = '".$userRow['USER_ID']."'";

			//return 	$updateQuery;
			$updateStatus = mysqli_query($connection,$updateQuery);

			return $updateStatus;	

		}
		
		


	}

		function genrateUserID($tableName,$columnName,$connection){
		$query ='SELECT  '.$columnName.' FROM '.$tableName.' ORDER BY '.$columnName.' DESC LIMIT 1';
		$result = mysqli_query($connection,$query);
		
		$resultCount = mysqli_num_rows($result);

		if($resultCount> 0){
			
			while($row  = mysqli_fetch_assoc($result)){
				$userID =	++$row[$columnName];
			}
		 
		}else{
			
			$userID = 'USER001';
		}
		return $userID;
	}


	function buildQuerySignUp($data,$connection,$tableName){
		$pkColumn = 'USER_ID';
		$query = "INSERT INTO ".$tableName ;
		$getUserID = $this->genrateUserID($tableName,$pkColumn,$connection);
		
		$columnNames = "(".$pkColumn .",STATUS,CREATED_AT,";

		$columnValues = "VALUES ('".$getUserID."' ,'Y',CURRENT_TIMESTAMP(),";
		$i=1;
		$dataCout = count($data);
		foreach ($data as $key => $value) {
			if($key == 'PASSWORD'){
			$value = md5($value);

			}
			
			$columnNames .= $key." ";
			$columnValues .= "'".$value."'";
			if($i<$dataCout){
			$columnNames .= ",";
			$columnValues .= ",";	
			}
			$i++;
		}
		
		$columnNames .= ")";
		$columnValues .= ")";
		$query .=" ".$columnNames."  ".$columnValues." " ;
		//return $query;
	
	$result = mysqli_query($connection,$query);
	 if($result){
	 	$userCredQuery = "INSERT INTO USER_CREDENTIAL (USER_ID,PASSWORD) SELECT USER_ID,PASSWORD FROM USER WHERE USER_ID='".$getUserID."'";
	 	$finalResult = mysqli_query($connection,$userCredQuery);
	 	 
	 	 return $finalResult;

	 }else{
	 	return $result;
	 }
	}
}
?>