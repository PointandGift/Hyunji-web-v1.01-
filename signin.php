<?php
    include_once('include/common/head.php');
?>   

        <div>
            <img src="assets/images/sign_in_out/background.png" style="width:100%;">
        </div>
        <div id="sign-in-form-container" class="pink-gradation margin-top-negative-10">
            <div class="mini-container text-center">
                <form method="post" action="signin-user.php">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button type="submit">Signin</button>
                </form>
            </div>
        </div>
    </body>
</html