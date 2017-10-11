<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
  
        
    include_once('include/navigation/main-header.php');

    $card_id = isset( $_GET['card_id'] ) ? $_GET['card_id'] : false;

    $HYUNJI_ID = 2;
    $sql = "SELECT card_holder.note
              FROM card_holder
              WHERE card_id = $card_id
              AND user_id = $HYUNJI_ID";

    $statement = $db->prepare($sql);

    // Run!
    $statement->execute();

    // Get all the rows.
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC); 
    $row = $rows[0];

?>



<div id="content">
    <div id="note_container">
        <?php echo $row['note']; ?>
        <hr>
        <a href="card-info.php?card_id=<?php echo $card_id; ?>">Edit</a>
    </div>
</div>

<?php include_once('include/common/footer.php'); ?>