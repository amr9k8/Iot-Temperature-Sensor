<?php

  $servername = "fdb34.awardspace.net";
  $dbname = "3988230_tempdata";
  $username = "3988230_tempdata";
  $password = "Team_12345";



if($_GET['apikey']== '123123123')
 {

   getTableData_json() ;
 }
  
  
  
  
  
  
  
  
  
  
function getTableData_json() {
global $servername, $username, $password, $dbname;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `SensorData`";

if ($result = $conn->query($sql)) {

$row_data = array();
while ($row = $result->fetch_assoc()) 
    $row_data[] = $row;
   
   
   echo json_encode($row_data);
}

else {
    return false;
}

$conn->close();
}