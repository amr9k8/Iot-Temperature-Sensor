
<?php
  include_once('esp-database.php');

  // Keep this API Key value to be compatible with the ESP code provided in the project page. If you change this value, the ESP sketch needs to match
  $api_key_value = "xxxx";

  $api_key= $sensor = $location = $value1 = "";

  
 
 if (isset($_POST['value1']) ) 
  {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
      $location = test_input($_POST["location"]);
      $value1 = test_input($_POST["value1"]);
      $result = insertReading($sensor, $location, $value1);
      echo $result;
    }
    else {
      echo "Wrong API Key provided.";
    }
  }



  
 // for sensor to check current state 
 if (isset($_GET['action']) && $_GET['action'] == "get_states") 
  {
    $result = getAllOutputStates();
    if ($result)
    {
        $row = $result->fetch_assoc();
        echo ($row['state']);
               
    }

                
  }
  
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
