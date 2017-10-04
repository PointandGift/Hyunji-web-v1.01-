<!DOCTYPE html>
<html>
    <head>
        <title>Signin</title>
        <meta charset="utf-8" />
        
        <style>
        </style>
    </head>
    
    
    <?php
        
        // Include Head
        include_once('include/common/head.php');
    
    ?>
    
    <body>
        
        <?php
            
            // Include Header & Connect to DB
            include_once('include/navigation/default-header.php');    
        
        ?>
        
        
        <div id="content">
            <div class="container">
                <form method="post" action="signin-user.php">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button type="submit">Signin</button>
                </form>
            </div>
        </div>
        
        <?php //include_once('include/common/footer.php'); ?>
    </body>
</html>