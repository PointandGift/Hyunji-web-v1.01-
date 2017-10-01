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
            $sql = "SELECT card.company, card.img, card_holder.barcode, card_holder.point
                      FROM card_holder
                      INNER JOIN card
                             ON card_holder.card_id = card.id
                      WHERE user_id = $HYUNJI_ID";
        
            $statement = $db->prepare($sql);
        
            // Run!
            $statement->execute();
        
            // Get all the rows.
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);       
        
        ?>
        
        
        
        <div id="content">
            <div class="container">
                <ul id="card-list">
                    <?php foreach( $rows as $row ){ ?>
                        <li>
                            <div class="card-container">
                                <div class="card-img">
                                    <img src="assets/images/companies/<?php echo $row['img']; ?>" style="width: 100%; border-radius: 25px;">
                                </div>
                                <div class="card-company-name">
                                    <p><?php echo $row['company']; ?></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
        <?php //include_once('include/common/footer.php'); ?>
    </body>
</html>