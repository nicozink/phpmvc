<?php
include("src/mvc/base/Controller.php");

// Stores a controller method which displays an error message.
class ErrorController extends Controller
{
  //
  // Constructors
  //

  // Creates a new instance of the ErrorController class.
  function ErrorController()
  {
    
  }
  
  //
  // Public Methods
  //
  
  // Creates a new instance of the Error class.
  function Error()
  {
    echo "An unspecified error has occurred.";
  }
  
  // Creates a new instance of the Error class.
  function Index()
  {
    echo "An unspecified error has occurred.";
  }
}
?>
