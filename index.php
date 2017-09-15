<?php

//namespace PHP_Homework_11;

function myFirstAutoLoader($className)
{
    $filePath = "./classes/" . $className . ".class.php";
    if (file_exists($filePath)) {
        include_once $filePath;
    }
}

spl_autoload_register("myFirstAutoLoader");

 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Домашнее задание №11</title>
</head>
<body>
  <div class="wrapper">
    <div class="determination">
      <h2>Как я понимаю, что такое пространство имён</h2>
      <p><strong>Пространство имён</strong>, по-моему - это как бы дополнительная приставка к названиям классов. Это как если в проводнике положить два файла с одинаковым названием в разные папки. Используется при работе с большим количеством подключаемых библиотек или в больших командах. А вообще, как я понял, лучше просто приучить себя сразу прописывать вначале <em>namespace</em>.</p>
    </div>  
    <div class="interface-and-abstract">
      <h2>Как я понимаю, что такое исключения (Exception)</h2>
      <p><strong>Исключения</strong> - это один из способов работы с ошибками. Причём это не совсем ошибки. Исключения, в отличии от ошибок, ещё требуют от программиста каких-то действий, чтобы не просто увидеть, но и как-то обработать каждый конкретный случай.</p>
    </div>
  </div>
</body>
</html>