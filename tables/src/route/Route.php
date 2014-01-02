<?php
class Route
{
  //
  // Constructors
  //

  // Creates a new instance of the Route class.
  function Route()
  {
    
  }

  //
  // Public Methods
  //
  
  // Executes the given command.
  // @param command The command.
  function Call(&$commands)
  {
    switch ($commands[0])
    {
      case "commandOne" :
      echo "You entered command: ".$commands[0]."<br>";
      break;

      case "commandTwo" :
      echo "You entered command: ".$commands[0]."<br>";
      break;

      default:
      echo "That command does not exist: ".print_r($commands)."<br>";
      break;
    }
    
    if(count($commands) > 1 && $this->isController($commands[0]))
    {
      $controllerName = $commands[0];
    }
    else
    {
      $controllerName = "Error";
    }
    
    include($this->_GetControllerPath($controllerName));
    
    $className = $controllerName."Controller";
    
    $controller = new $className();
    
    $functionToCall = $commands[1];
    
    if(count($commands))
    {
      $functionToCall = $commands[1];
    }
    else
    {
      $functionToCall = "_Default";
    }

    if(!is_callable(array(&$controller, $functionToCall)))
    {
      $functionToCall = "_Error";
    }

    call_user_func(array(&$controller, $functionToCall));
  }
  
  //
  // Private Methods
  //
  
  // Creates the path of a component given the component name.
  // @param controllerName The name of the controller.
  function _GetControllerPath($controllerName)
  {
    return "src/mvc/controller/".$controllerName.".php";
  }
  
  // Checks whether a component using the provided name exists.
  // @param controllerName The name of the controller.
  function _IsController($controllerName)
  {
    if($this->_GetControllerPath($controllerName))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>