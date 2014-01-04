<?php
include_once "Config.php";

include("src/mvc/base/Controller.php");

// Stores a controller method which loads the default page.
class DefaultController extends Controller
{
  //
  // Constructors
  //

  // Creates a new instance of the DefaultController class.
  function DefaultController()
  {
    
  }
  
  //
  // Public Methods
  //
  
  // Shows the default page.
  function Index()
  {
    $server = Config::$MySQLServer;
    $database = Config::$MySQLDatabase;
    $user = Config::$MySQLUser;
    $password = Config::$MySQLPassword;
    
    // Create connection
    $con = mysqli_connect($server, $user, $password, $database);

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
  }
}
?>
