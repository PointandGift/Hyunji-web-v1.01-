<?php
    include_once('include/common/db.php');
    include_once('include/common/head.php');
    include_once('include/navigation/main-header.php');

    $rows = get_all_cards( $db );

?>

<div id="content">
    <div class="container">
        <ul>
            <?php foreach( $rows as $row ){ ?>
                <li>

                    <img src="assets/images/companies/<?php echo $row['img']; ?>">
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

<?php include_once('include/common/footer.php'); ?>