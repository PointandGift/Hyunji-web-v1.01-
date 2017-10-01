<!DOCTYPE html>
<html>    
    <head>
        <title>This is a Signup Page</title>
    </head>
    
    <body>
<!--    "post" does not show the user's information in addres bar     -->
        <form method="post" action="add-user.php">
<!--    Definition and Usage    -->
<!--    1. The name attribute specifies the name of an <input> element.
        2. The name attribute is used to reference elements in a JavaScript, or to reference form data after a form is submitted.
        3. Note: Only form elements with a name attribute will have their values passed when submitting a form.    
        **Source: https://www.w3schools.com/css/css_rwd_viewport.asp**     -->
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="email" name="email" placeholder="email">
            <button type="submit">SignUp</button>
        </form>
    </body>
</html>