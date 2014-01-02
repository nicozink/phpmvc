<?php
class Controller
{
  //
  // Constructors
  //

  // Creates a new instance of the Controller class.
  function Controller()
  {
    
  }

  //
  // Public Methods
  //
  
  // Executes the given command.
  // @param command The command.
  function Execute(&$command)
  {
    $functionToCall = $command->getFunction();
    
    if($command->getFunction() == "")
    {
      $functionToCall = "_Default";
    }

    if(!is_callable(array(&$this, $functionToCall)))
    {
      $functionToCall = "_Error";
    }

    call_user_func(array(&$this, $functionToCall));
  }
  
  //
  // Private Methods
  //
  
  function _Default()
  {
    echo "This is the default method.";
  }
  
  function _Error()
  {
    echo "This is an error.";
  }
}
?>