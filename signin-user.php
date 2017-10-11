<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
    include_once('include/navigation/default-header.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);

    //
    // Check if already registered
    //

    $sql = "SELECT * FROM user
            WHERE username LIKE '$username'
              AND password LIKE '$password'";

    $statement = $db->prepare($sql);
    $statement->execute();
    $count = $statement->rowCount();

    // if a record is found.
    if( $count > 0) {
        echo '<a href="http://localhost:8888/png">Welcome!!!!</a>';
    }
    // if not
    else{
        echo '<a href="http://localhost:8888/png/signin.php">Try again please.</a>';
    }
?>
    <!-- Non-logged in users should not see the footer yet! -->
    </body>
</html>