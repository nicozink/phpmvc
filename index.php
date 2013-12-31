<?php
  echo "Server: ".$_SERVER["REQUEST_URI"]."<br>";
  echo "Script: ".$_SERVER["SCRIPT_NAME"]."<br>";
  echo "<br>";
  
  $requestURI = explode("/", $_SERVER["REQUEST_URI"]);
  $scriptName = explode("/", $_SERVER["SCRIPT_NAME"]);

  for($i = 0; $i < sizeof($requestURI); $i++)
  {
    if ($requestURI[$i] == null || $requestURI[$i] == "")
    {
      unset($requestURI[$i]);
    }
  }
  
  $command = array_values($requestURI);

  switch ($command[0])
  {
    case "commandOne" :
    echo "You entered command: ".$command[0]."<br>";
    break;

    case "commandTwo" :
    echo "You entered command: ".$command[0]."<br>";
    break;

    default:
    echo "That command does not exist: ".print_r($command)."<br>";
    break;
  }

  // Create connection
  $con = mysqli_connect("localhost", "dbt_user", "dbt_password", "dbt_master");

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error()."<br>";
  }
  
  $result = mysqli_query($con, "SELECT * FROM dbt_account");

  while($row = mysqli_fetch_array($result))
  {
    echo $row['data'];
    echo "<br>";
  }
  
  mysqli_close($con);
?>
