<?php

// 1. Создайте главную страницу сайта index.php, которая будет неавторизованных
// пользователей отправлять на страницу авторизации, а авторизованных на ту
// страницу, которую они посещали последний раз ("А" или "Б"). Для пользователя
// главной страницы не будет видно, она нужна только для перенаправления.

session_start();

if (!empty($_POST['login'])) {
    $_SESSION["USER_AUTHORIZED"] = "yes";
}

if ($_SESSION["USER_AUTHORIZED"] == "yes") {
    header('Location: ' . $_COOKIE["page"]);
} else {
    header('Location: /gootax/5/login.php');
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
        <?php if ($_SESSION["USER_AUTHORIZED"] == "yes") { ?>
            <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/5/login.php"?>" method="POST">
                <p><input type="submit" name="logout" value="Выйти"></p>
            </form>
        <?php } ?>
    </body>
</html>