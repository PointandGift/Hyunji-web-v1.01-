<!DOCTYPE html>
<html>
     <head>
        <title>Note_Page</title>
        <meta charset="utf-8" />
        
        <style>
            body{
                background-color: #CCCCCC;
            }
        </style>
    </head>
    
    <?php
        // Include Head
        include_once('include/common/head.php');
    ?>
    
    <body>
        <?php
        
            include_once('include/navigation/default-header.php');
        
            $card_id = isset( $_GET['card_id'] ) ? $_GET['card_id'] : false;
        
            $HYUNJI_ID = 2;
            $sql = "SELECT card.img, card_holder.barcode
                      FROM card_holder
                      INNER JOIN card
                             ON card_holder.card_id = card.id
                      WHERE user_id = $HYUNJI_ID
                        AND card.id = $card_id";
        
            $statement = $db->prepare($sql);
        
            // Run!
            $statement->execute();
        
            // Get all the rows.
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC); 
            $row = $rows[0];
        
        ?>
        
        
        
        <div id="card-detail-content">
            <div class="container">
                <div class="card-detail-container">
                    <div id="card-img">
                        <img src="assets/images/companies/<?php echo $row["img"]; ?>" />
                    </div>
                    <div id="card-detail-buttons">
                        <ul>
                            <li><a href="card-note.php?card_id=<?php echo $card_id; ?>">Note</a></li>
                            <li><a href="#">Store</a></li>
                        </ul>
                    </div>
                    <div id="barcode" class="text-center">
                        <img src="assets/images/barcode/-Barcode_32896.jpg" />
                        <p><?php echo $row['barcode']; ?></p>
                    </div>
                </div>
                
               
            </div>
        </div>
        
        <?php include_once('include/common/footer.php'); ?>
    </body>
</html>