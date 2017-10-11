<!DOCTYPE html>
<html>    
    <head>
        <title>This is a Signup Page</title>
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
            
            input[type=text]{
                font-size: 20pt;
                font-weight: bold;
                color: white;
                background: none;
                border: none;
                border-bottom: 2px solid white;
            }
            
            input[type=password]{
                font-size: 20pt;
                font-weight: bold;
                color: white;
                background: none;
                border: none;
                border-bottom: 2px solid white;
            }
            
            input[type=email]{
                font-size: 20pt;
                font-weight: bold;
                color: white;
                background: none;
                border: none;
                border-bottom: 2px solid white;
            }
            
            #signup{
                font-size: 20pt;
                font-weight: bold;
                color: red;
                padding: 30px 320px;
                border-radius: 20px;
                background-color: white;
                bottom: 0px;
            }
        </style>
    </head>
    
    <body>
<!--    "post" does not show the user's information in addres bar     -->
        <form method="post" action="add-user.php">
<!--    Definition and Usage    -->
<!--    1. The name attribute specifies the name of an <input> element.
        2. The name attribute is used to reference elements in a JavaScript, or to reference form data after a form is submitted.
        3. Note: Only form elements with a name attribute will have their values passed when submitting a form.    
        **Source: https://www.w3schools.com/css/css_rwd_viewport.asp**     -->
            <input id="username" type="text" name="username" placeholder="username">
            <input id="password" type="password" name="password" placeholder="password">
            <input id="eamil" type="email" name="email" placeholder="email">
            <button id="signup" type="submit">Sign up</button>
        </form>
    </body>
</html>