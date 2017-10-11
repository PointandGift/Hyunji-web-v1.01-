<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');

    include_once('include/navigation/main-header.php');

    $card_id = isset( $_GET['card_id'] ) ? $_GET['card_id'] : false;

    $row = get_card_info( $db, 2, $card_id );

?>        
<div id="content">
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