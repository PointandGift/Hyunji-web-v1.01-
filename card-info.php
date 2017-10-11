<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
    include_once('include/navigation/main-header.php');

    $card_id = isset( $_GET['card_id'] ) ? $_GET['card_id'] : false;

    $row = get_card_info( $db, 2, $card_id )

?>



<div id="content">
    <div class="container">
        <form method="post" action="update-card.php">
            <input name="card_id" type="hidden" value="<?php echo $card_id ?>"><br>
            <input name="barcode" type="text" value="<?php echo $row['barcode']; ?>"><br>
            <textarea name="note" rows="15"><?php echo $row['note']; ?></textarea><br><br>

            <button type="submit">Update</button>
            <button type="delete">Delete</button>

        </form>

    </div>
</div>

<?php include_once('include/common/footer.php'); ?>