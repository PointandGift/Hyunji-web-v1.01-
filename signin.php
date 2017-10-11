<!DOCTYPE html>
<html>
    <head>
        <title>Signin</title>
        <meta charset="utf-8" />
        
        <style>
            form {
                width: 100%;
                height: 1250px;
                left: 0px;
                bottom: 0px;
                z-index: -1;
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff6d6a+0,ff294a+100 */
                background: #ff6d6a; /* Old browsers */
                background: -moz-linear-gradient(top, #ff6d6a 0%, #ff294a 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #ff6d6a 0%,#ff294a 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #ff6d6a 0%,#ff294a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6d6a', endColorstr='#ff294a',GradientType=0 ); /* IE6-9 */
            }
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