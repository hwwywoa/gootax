<?php

session_start();

setcookie("page", "/gootax/5/pageA.php");

if (!empty($_POST['login'])) {
    $_SESSION["USER_AUTHORIZED"] = "yes";
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
        <p>Страница "А"</p>
        <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/5/pageB.php"?>" method="POST">
            <p><input type="submit" name="location" value="На страницу Б"></p>
        </form>
        <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/5/login.php"?>" method="POST">
            <p><input type="submit" name="logout" value="Выйти"></p>
        </form>
    </body>
</html>