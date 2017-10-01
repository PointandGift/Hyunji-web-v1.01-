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
        
            $user_id = $_POST['user_id'];
            $card_id = $_POST['card_id'];
            
            //
            // Check if already registered
            //
        
            $sql = "SELECT * FROM card_holder
                    WHERE user_id = $user_id
                      AND card_id = $card_id";
        
            $statement = $db->prepare($sql);
            $statement->execute();
            $count = $statement->rowCount();
        
        
            // if a record is found.
            if( $count > 0) {
                echo '<a href="http://localhost:8888/png">You already have this card!!!</a>';
            }
        
            // if not
            else{
                
                // 추가 시작!!!!
        
                $barcode = rand();
                $sql = "INSERT INTO card_holder (user_id, card_id, barcode, point)
                        VALUES ($user_id, $card_id, $barcode, 0);";

                $statement = $db->prepare($sql);

                // Run!
                $statement->execute();
                
                echo '<a href="http://localhost:8888/png">Successfully registered!</a>';

            }
        
        
            
        
        ?>
        
        
    </body>
</html>