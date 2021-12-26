<?php

include_once('esp-database.php');

  if (isset($_POST['action']) ) 
     {
       $action = test_input($_POST["action"]);
       $state = test_input($_POST["state"]);
       $result = updateOutput($state);
       
       if ($result && $state ==1)
       echo "<h3 style='color:green;text-align:center;margin:30px;'>Sensor Turned ON </h3>\n";
       
       else if ($result && $state ==0)
       echo "<h3 style='color:red;text-align:center;margin:30px;'>Sensor Turned OFF </h3>\n";
       
       else
         echo "<h3 style='color:blue;text-align:center;margin:30px;'>failed to change state</h3>\n";
     }
     

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>


<!DOCTYPE HTML>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="esp-style.css">
        <title>ESP Output Control</title>
    </head>
<body>

<form method="POST" action="http://xxxxxxxxxxx/control.php">
    <input type="hidden" name="action" value="output_update">
    <h3>Control Your Sensor Remotly </h3>
    <br><br>
    <select id="outputState" name="state">
       <option value="0">0 = OFF</option>
       <option value="1">1 = ON</option>
    </select>
    <br><br>
    <input type="submit" value="Change">
</form>


</body>
</html>