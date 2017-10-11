<?php
    include_once('include/common/head.php');
    include_once('include/navigation/main-header.php');            
?>  

<form method="post" action="add-user.php">
    <input id="username" type="text" name="username" placeholder="username">
    <input id="password" type="password" name="password" placeholder="password">
    <input id="eamil" type="email" name="email" placeholder="email">
    <button id="signup" type="submit">Sign up</button>
</form>

<?php include_once('include/common/footer.php'); ?>