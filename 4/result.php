<?php

$result = null;

switch ($_POST["operation"]) {
  case "sum":
    $result = $_POST["value1"] + $_POST["value2"];
    break;
  case "sub":
    $result = $_POST["value1"] - $_POST["value2"];
    break;
  case "mult":
    $result = $_POST["value1"] * $_POST["value2"];
    break;
  case "div":
    $result = $_POST["value1"] / $_POST["value2"];
    break;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Gootax</title>
  </head>
  <body>
    <h1>Запросы HTTP, параметры URL и формы HTML</h1>
    <p>Результат вычисления:</p>
    <p><?= $result ?></p>
    <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/4/index.php"?>">
      <button>Назад</button>
    </form>
  </body>
</html>