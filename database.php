
<?php

define('db_name', "English");
define('db_user', 'root');
define('db_password', '');
define('db_host''localhost:8888');

$link = mysql_connect(db_host, db_username, db_pass);

if (!$link) {
	die('could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(db_name, $link);

if (!$db_selected) {
	die('Can\'t use ' . db_name . ': ' . mysql.error());
}

$value1 = $_POST['student_first_name'];
$value2 = $_POST['student_last_name'];
$value3 = $_POST['student_id_num'];

$sql = "INERT INTO English (student_first_name, student_last_name, student_id_num) VALUES ('$value1', '$value2', 'value3')";

if (!mysql_query($sql)) {
	die ('Error: ' . mysql_error());
}



?>