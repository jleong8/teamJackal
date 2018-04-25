<?php

    $servername = "us-cdbr-iron-east-05.cleardb.net";
    $username = "bd1dd24430dbcd";
    $password = "612bccc8";
    $dbname = "heroku_91135ca3bf7551b";

     try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }

?>
