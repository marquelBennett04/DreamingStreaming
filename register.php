<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Constants.php");

    $account = new Account($con);

    if(isset($_POST["submitButton"])) {
        
        $firstName = FormSanitizer::sanitizeFormFormString( $_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormFormString( $_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormFormUsername( $_POST["username"]);
        $email = FormSanitizer::sanitizeFormFormEmail( $_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormFormEmail( $_POST["email2"]);
        $password = FormSanitizer::sanitizeFormFormPassword( $_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormFormPassword( $_POST["password2"]);

        $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);
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
                    <h3>Sign Up</h3>
                    <span>to continue to DreamingStreaming</span>
                </div>

                <form method="POST">


                    <?php echo $account->getError(Constants::$firstNameCharacters);?>
                    <input type="text" name="firstName" placeholder="First Name" required>

                    <?php echo $account->getError(Constants::$lastNameCharacters);?>
                    <input type="text" name="lastName" placeholder="Last Name" required>

                    <?php echo $account->getError(Constants::$usernameCharacters);?>
                    <?php echo $account->getError(Constants::$usernameTaken);?>
                    <input type="text" name="username" placeholder="Username" required>

                    <?php echo $account->getError(Constants::$emailsDontMatch);?>
                    <?php echo $account->getError(Constants::$emailInvalid);?>
                    <?php echo $account->getError(Constants::$emailTaken);?>
                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <?php echo $account->getError(Constants::$passwordsDontMatch);?>
                    <?php echo $account->getError(Constants::$passwordsLength);?>
                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm Password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

            </div>

        </div>
    </body>

</html>