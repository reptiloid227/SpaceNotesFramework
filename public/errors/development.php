<?php


/**
 * @var $errorNumber \SNFW\ErrorHandler
 * @var $errorString \SNFW\ErrorHandler
 * @var $errorFile \SNFW\ErrorHandler
 * @var $errorLine \SNFW\ErrorHandler
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
</head>
<body>

<h1>Произошла ошибка</h1>
<p><b>Код ошибки:</b> <?= $errorNumber ?></p>
<p><b>Текст ошибки:</b> <?= $errorString ?></p>
<p><b>Файл, в котором произошла ошибка:</b> <?= $errorFile ?></p>
<p><b>Строка, в которой произошла ошибка:</b> <?= $errorLine ?></p>

</body>
</html>
