<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='cbtm';
  // Create connection
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";

?>
