<?php

session_start();

if (!empty($_POST['logout'])) {
    $_SESSION["USER_AUTHORIZED"] = "no";
    session_destroy();
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Gootax</title>
    </head>
    <body>
        <h1>Cookies и сессии PHP.</h1>
        <p>Авторизация</p>
        <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/5/pageA.php"?>" method="POST">
            <p><input type="submit" name="login" value="Войти"></p>
        </form>
    </body>
</html>