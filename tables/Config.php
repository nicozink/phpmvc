<?php
  class Config
  {
    //
    // Public Static Variables
    //
    
    // Stores the name of the database.
    public static $MySQLDatabase = "dbt_master";
    
    // Stores the server hosting the database.
    public static $MySQLServer = "localhost";
    
    // Stores the user used to connect to the database.
    public static $MySQLUser = "dbt_user";
    
    // Stores the password used to connect to the database.
    public static $MySQLPassword = "dbt_password";
    
    // Stores the default controller to use when not
    // given one as part of a request.
    public static $DefaultController = "Default";
    
    // Stores the default method to call on a controller
    // when nothing is specified.
    public static $DefaultControllerMethod = "Index";
  }
?>
