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
        
            $card_id = $_POST['card_id'];
            $barcode = $_POST['barcode'];
            $note = $_POST['note'];
            
            //
            // Check if already registered
            //
        
            $sql = "UPDATE card_holder
                        SET barcode = $barcode,
                            note    = '$note'
                     WHERE card_id = $card_id
                        AND user_id = 2"; //Hyunji's ID
        
            $statement = $db->prepare($sql);
            $statement->execute();
            $count = $statement->rowCount();
        
        ?>
        <div id="success">
            <a href="http://localhost:8888/png/card-detail.php?card_id=<?php echo $card_id; ?>">Successfully done. Check it out!</a>
        </div>
        
        
    </body>
</html>