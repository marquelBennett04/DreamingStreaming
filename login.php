<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Welcome To DreamingStreaming</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
    </head>
    <body>
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="assets/images/Logo.png" title="Logo" alt="Site Logo"/>
                    <h3>Sign In</h3>
                    <span>to continue to DreamingStreaming</span>
                </div>

                <form method="POST">

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="register.php" class="signInMessage">Don't have an account? Sign up here!</a>

            </div>

        </div>
    </body>

</html>