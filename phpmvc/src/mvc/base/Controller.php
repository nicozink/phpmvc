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
  // Private Methods
  //
  
  // Generates an index view for the base controller.
  function Index()
  {
    echo "A default index method is not available.";
  }
  
  // Generates an error view for the base controller.
  function Error()
  {
    echo "An error has occurred loading a controller method.";
  }
}
?>