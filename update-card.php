<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
    include_once('include/navigation/main-header.php');

    $card_id = $_POST['card_id'];
    $barcode = $_POST['barcode'];
    $note = $_POST['note'];

    update_card( $db, $card_id, $barcode, $note );

  
?>
<div id="success">
    <a href="http://localhost:8888/png/card-detail.php?card_id=<?php echo $card_id; ?>">Successfully done. Check it out!</a>
</div>
<?php include_once('include/common/footer.php'); ?>