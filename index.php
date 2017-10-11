<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');

            
    // Include Header & Connect to DB
    include_once('include/navigation/main-header.php');
        
    $HYUNJI_ID = 2;
    $sql = "SELECT card.id, card.img
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
            <div id="card-list">
                <?php foreach( $rows as $row ){ ?>
                    <div class="card-container">
                        <div class="card-img">
                            <a href="card-detail.php?card_id=<?php echo $row['id']; ?> ">
                            <img src="assets/images/companies/<?php echo $row['img']; ?>" style="width: 100%; border-radius: 25px;">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
        
<?php include_once('include/common/footer.php'); ?>