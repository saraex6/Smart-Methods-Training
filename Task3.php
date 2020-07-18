<?php

$Left = filter_input(INPUT_POST, 'le');
$Forward = filter_input(INPUT_POST, 'forward');
$Right = filter_input(INPUT_POST, 'ri');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions_map";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{

	$sql = "INSERT INTO table3 (le,forward,ri) values ('$Left','$Forward','$Right')";
}

if ($conn->query($sql)){
echo "";

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

?>

