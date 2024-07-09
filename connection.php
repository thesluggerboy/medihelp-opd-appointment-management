<?php

    $database= new mysqli("localhost","root","","medihelp");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>