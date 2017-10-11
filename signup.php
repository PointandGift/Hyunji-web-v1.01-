<?php
    include_once('include/common/head.php');
?>  
        <div>
            <img src="assets/images/sign_in_out/background.png" style="width:100%;">
        </div>
        <div id="sign-up-form-container" class="pink-gradation margin-top-negative-10">
            <div class="mini-container text-center">
                <form method="post" action="signin-user.php">
                    <input id="username" type="text" name="username" placeholder="username">
                    <input id="password" type="password" name="password" placeholder="password">
                    <input id="eamil" type="email" name="email" placeholder="email">
                    <button id="signup" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </body>
</html>