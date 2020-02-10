<?php

//Make config constatnt available
define('__CONFIG__',true);
//Require the config
require_once "includes/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/css/uikit.min.css"/>

</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-login">
            <h2>Login</h2>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text-email" type="email" required="required" placeholder="Input your Email">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text-password" type="password" required="required" placeholder="Input your password">
                    </div>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once ("includes/footer.php");?>


</body>
</html>
