
<?php

  $servername = "fdb34.awardspace.net";

  // REPLACE with your Database name
  $dbname = "3988230_tempdata";
  // REPLACE with Database user
  $username = "3988230_tempdata";
  // REPLACE with Database user password
  $password = "Team_12345";


// For ESP32  
  function insertReading($sensor, $location, $value1) {
    global $servername, $username, $password, $dbname;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO SensorData (location,value1)
    VALUES ('" . $location . "', '" . $value1 . "')";

    if ($conn->query($sql) === TRUE) {
      return "New record created successfully";
    }
    else {
      return "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
  
  
  
 // For Control.php to update state
  
   function updateOutput($state) {
        global $servername, $username, $password, $dbname;
       
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
           
            die("Connection failed: " . $conn->connect_error);
        }
       
        $sql = "UPDATE state SET state='" . $state . "'";
        
       if ($conn->query($sql) === TRUE) {
            return "Output state updated successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    
 
 // for ESP32 To Check Current State
 function getAllOutputStates() {
        global $servername, $username, $password, $dbname;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         $sql = "SELECT state FROM state where id =1";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }
  
  
?>
