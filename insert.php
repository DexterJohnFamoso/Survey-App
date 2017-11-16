<?php

include('condb.php');

	
$survey = $_POST['sname'];

$query = "INSERT INTO user_table(s_name) VALUES('$survey')";

if($db->exec($query)){

	header("Location:index.php");
}

else{
	echo "error in query....";
}


?>