<?php
   $server = "sql306.epizy.com"
   $username = "epiz_31522807"
   $password = "T5E4yaABHRC"
   $dbname = "epiz_31522807_door_lock"

   $conn = mysqli_connect($server, $username, $password, $dbname);

   if (!$conn) {
     die("connection Failed : "mysqli_connect_error());
   }

?>