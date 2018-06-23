<?php 
$database_connection = null;
function get_connection() {
$hostname = "localhost";
$database = "lunwen";
$username ="root";
$password ="";
global $database_connection;
$database_connection = @mysql_connect($hostname, $username, $password) or die(mysql_error());

@mysql_select_db($database,$database_connection)or die (mysql_error());
}
function close_connection(){
global $database_connection;
if($database_connection){
   mysql_close($database_connection) or die (mysql_error());
}
}
?>
