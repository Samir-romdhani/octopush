<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host = "yougooncwggh.mysql.db";
        $db_name = "yougooncwggh";
        $username = "yougooncwggh";
        $password = "Gh224222";
                   
       // Create connection
       $db = new mysqli($host, $username, $password, $db_name);

       // Check connection
      if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
      } 
     echo "Connected successfully (".$db->host_info.")";
    
        ?>
    </body>
</html>
