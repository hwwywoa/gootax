<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Gootax</title>
    </head>
    <body>
        <h1>Запросы HTTP, параметры URL и формы HTML</h1>
        <p>Калькулятор</p>
        <form action= "<?= $SERVER["DOCUMENT_ROOT"] . "/gootax/4/result.php"?>" method="POST">
            <p>Введите первое число:</p>
            <input required type="number" name="value1" value=""><Br>
            <p>Введите второе число:</p>
            <input required type="number" name="value2" value=""><Br>
            <p>Выбирите операцию:</p>
            <p><input required type="radio" name="operation" value="sum">Сложение<Br>
            <p><input required type="radio" name="operation" value="sub">Вычитание<Br>
            <p><input required type="radio" name="operation" value="mult">Умножение<Br>
            <p><input required type="radio" name="operation" value="div">Деление<Br>    
            <p><input required type="submit"></p>
        </form>
    </body>
</html>