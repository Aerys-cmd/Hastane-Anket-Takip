<?php  
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "12345678";
$dbname = "portal";
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if(!$con)
{
  die("failed to  connect!");
}
$con->set_charset("utf8");

?>
