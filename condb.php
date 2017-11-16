<?php

$dbname = "survey.db";

$db=new SQLite3($dbname);

if (!$db) {
	
	die("database not create ...");
}
//create table in sqlite database
$query = "CREATE TABLE IF NOT EXISTS survey_table(survey_id integer primary key,
		s_name text)";

$db->exec($query);


?>