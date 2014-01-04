<?php
include_once "Config.php";

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
    if(count($commands) >= 1)
    {
      if ($this->IsController($commands[0]))
      {
        $controllerName = $commands[0];
      }
      else
      {
        $controllerName = "Error";
      }
    }
    else
    {
      $controllerName = Config::$DefaultController;
    }
    
    include($this->GetControllerPath($controllerName));
    
    $className = $controllerName."Controller";
    
    $controller = new $className();
    
    if(count($commands) >= 2)
    {
      $functionToCall = $commands[1];
    }
    else
    {
      $functionToCall = Config::$DefaultControllerMethod;
    }
    
    if(!is_callable(array(&$controller, $functionToCall)))
    {
      $functionToCall = "Error";
    }

    call_user_func(array(&$controller, $functionToCall));
  }
  
  //
  // Private Methods
  //
  
  // Creates the path of a component given the component name.
  // @param controllerName The name of the controller.
  function GetControllerPath($controllerName)
  {
    return "src/mvc/controller/".$controllerName."Controller.php";
  }
  
  // Checks whether a component using the provided name exists.
  // @param controllerName The name of the controller.
  function IsController($controllerName)
  {
    if(file_exists($this->GetControllerPath($controllerName)))
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