<?php
define('DB_SERVER','localhost');
define('DB_USER','jssoluti_2638_cg');
define('DB_PASS' ,'newdate11');
define('DB_NAME', 'jssoluti_hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>