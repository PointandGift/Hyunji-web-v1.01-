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
        
            $HYUNJI_ID = 2;
            $sql = "SELECT * FROM card";
        
            $statement = $db->prepare($sql);
        
            // Run!
            $statement->execute();
        
            // Get all the rows.
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);       
        
        ?>
        
        
        
        <div id="content">
            <div class="container">
                <ul>
                    <?php foreach( $rows as $row ){ ?>
                        <li>
                            
                            <img src="assets/images/companies/<?php echo $row['img']; ?>" style="width: 20%; border-radius: 25px;">
                            <?php echo $row['company']; ?>
    
                            <form method="POST" action="add-card.php">
                                <input type="hidden" name="card_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="user_id" value="2">
                                <button type="submit">Add</button>
                                
                            </form>

                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
        <?php //include_once('include/common/footer.php'); ?>
    </body>
</html>