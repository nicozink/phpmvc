<?php
  include_once "Config.php";

  include("src/route/Route.php");
  
  $requestURI = explode("/", $_SERVER["REQUEST_URI"]);
  $scriptName = explode("/", $_SERVER["SCRIPT_NAME"]);

  for($i = sizeof($requestURI) - 1; $i >= 0; --$i)
  {
    if ($requestURI[$i] == null || $requestURI[$i] == "")
    {
      unset($requestURI[$i]);
    }
  }

  $commands = array_values($requestURI);

  $route = new Route();
  $route->Call($commands);
?>
