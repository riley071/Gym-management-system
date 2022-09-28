<?php
$conn = mysqli_connect("localhost","root","","gym_db") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>