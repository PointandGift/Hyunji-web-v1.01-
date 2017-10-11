<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
  
        
    include_once('include/navigation/main-header.php');

    $card_id = isset( $_GET['card_id'] ) ? $_GET['card_id'] : false;

    $row = get_card_info( $db, 2, $card_id );
?>



<div id="content">
    <div id="note_container">
        <?php echo $row['note']; ?>
        <hr>
        <a href="card-info.php?card_id=<?php echo $card_id; ?>">Edit</a>
    </div>
</div>

<?php include_once('include/common/footer.php'); ?>