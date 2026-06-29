 <?php

              // hostname        username     password      databasename
  $conn=new mysqli("localhost","wetinde3_marcelu", "marcel@0062", "wetinde3_marcellinusdb");
  if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
  }
    ?>

 