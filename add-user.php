<!DOCTYPE html>
<html>
    
    <?php
        // Include Head
        include_once('include/common/head.php');
    ?>
    
    <body>
        <?php
            
            // Include Header & Connect to DB
            include_once('include/navigation/default-header.php');
        
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            //
            // Check if already registered
            //
        
            $sql = "SELECT * FROM user
                    WHERE username LIKE '$username'
                       OR email LIKE '$email'";
        
            $statement = $db->prepare($sql);
            $statement->execute();
            $count = $statement->rowCount();
        
        
            // if a record is found.
            if( $count > 0) {
                echo '<a href="http://localhost:8888/png/signup.php">Username / Email is already existing.</a>';
            }
        
            // if not
            else{
                
                // 추가 시작!!!!
        
                $password = md5( $password );
                
                $sql = "INSERT INTO user (username, password, email)
                        VALUES ('$username', '$password', '$email');";

                $statement = $db->prepare($sql);

                // Run!
                $statement->execute();
                
                echo '<a href="http://localhost:8888/png">Successfully registered!</a>';

            }
        
        
            
        
        ?>
        
        
    </body>
</html>