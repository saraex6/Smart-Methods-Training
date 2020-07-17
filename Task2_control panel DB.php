<?php 

function test()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";


	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST['Forward'])){
		echo "F";
		$sql = "INSERT INTO positions (direction)  VALUES ('Forward')";
	}
	elseif (isset($_POST['Left'])) {
		echo "L";
		$sql = "INSERT INTO positions (direction)  VALUES ('Left')";
	}elseif (isset($_POST['Stop'])) {
		echo "S";
		$sql = "INSERT INTO positions (direction)  VALUES ('Stop')";
	}elseif (isset($_POST['Right'])) {
		echo "R";
		$sql = "INSERT INTO positions (direction)  VALUES ('Right')";
	}elseif (isset($_POST['Backward'])) {
		echo "B";
		$sql = "INSERT INTO positions (direction)  VALUES ('Backward')";
	}


if ($conn->query($sql) === TRUE) {
  echo " ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

test();
?>