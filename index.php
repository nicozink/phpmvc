<?php
  echo "Hello, world! <br>";

  // Create connection
  $con = mysqli_connect("localhost", "dbt_user", "dbt_password", "dbt_master");

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $result = mysqli_query($con, "SELECT * FROM dbt_account");

  while($row = mysqli_fetch_array($result))
  {
    echo $row['data'];
    echo "<br>";
  }
  
  mysqli_close($con);
?>
