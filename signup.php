<?php



$servername = "sql302.infinityfree.com"; $username = "if0_38174118";
$password = "IKDMFt7realw9";
$dbname ="if0_38174118_indiv";


// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection


if (!$conn) die("Connection failed: " . mysqli_connect_error());


else


echo " Connected sucessfully <br>" ;


$sql = "INSERT INTO signup (email,password)


VALUES ('$_POST[email]','$_POST[password]')";


if (mysqli_query($conn, $sql)) {


echo "New record created successfully";


} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


?>
