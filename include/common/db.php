<?php

    // Database Information
    $servername = "localhost";
    $dblogin    = "root";
    $password   = "root";
    $dbname     = "png";
    $db         = null;


    try {
        
        // This is not supposed to be working this way!!!
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
        
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // PHP 5 has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
    //The thrown object must be an instance of the Exception class or a subclass of Exception. Trying to throw an object that is not will result in a PHP Fatal Error.
    // **Source: http://php.net/manual/en/language.exceptions.php**
    } catch(PDOException $e) {
        echo "<p style='color: red;'>From the SQL code: $sql</p>";
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
?>