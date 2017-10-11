<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
    include_once('include/navigation/default-header.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);

    // if a record is found.
    if( sign_in( $db, $username, $pasword ) ) {
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