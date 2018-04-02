<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feeder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (array_key_exists("OT",$_POST)){
$sql = "INSERT INTO timer (timeot, timedo)
VALUES ('{$_POST["OT"]}', '{$_POST["DO"]}');";

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if(array_key_exists("getTime",$_POST)){
//$sql_1 = "SELECT id, timeot, timedo FROM timer";
echo "qwertyuiop";
// $sql_1 = "SELECT * FROM timer WHERE id = 46";//(select max(id) from timer)
// $result = $conn->query($sql_1);
// if ($result->num_rows > 0) {
//     // output data of each row
// $row = $result->fetch_assoc();
// echo $row;
    
//     //echo "id: " . $result["id"]. " - Время от: " . $result["timeot"]. "-Время до: " . $result["timedo"]. "<br>";
// } else {
//     echo "0 results";
// }
}
//echo "asdfghjkl";
$conn->close();
//header("Location: /CatFeeder");
?> 