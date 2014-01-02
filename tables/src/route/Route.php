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
    /*$functionToCall = $command->getFunction();
    
    if($command->getFunction() == "")
    {
      $functionToCall = "_Default";
    }

    if(!is_callable(array(&$this, $functionToCall)))
    {
      $functionToCall = "_Error";
    }

    call_user_func(array(&$this, $functionToCall));*/
  }
}
?>