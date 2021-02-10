<?php

//db connnect start

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "safaa");
     $db_connect=mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
            if(mysqli_connect_error()){
                echo "<h1>There is somthing error</h1>";
            }
    ///db connnect  END

?>