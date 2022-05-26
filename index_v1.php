<?php

echo PHP_EOL;
echo '1. Название текущего файла и номер текущей строки.'.PHP_EOL;

echo 'Имя файла - '.basename(__FILE__, '.php').'.php'.PHP_EOL;
echo 'Номер строки - '.__line__.PHP_EOL;
echo PHP_EOL;

echo '2. Heredoc'.PHP_EOL;

$multiString=<<<ST
Это многострочная строка, написанная  при помощи\r
синтаксиса heredoc. \r\n
ST;
echo $multiString;
echo PHP_EOL;

echo '3. Строковые переменные'.PHP_EOL;

$a='Рыба';
$b='человек';

echo "$a. рыбою сыта, а $b человеком \r\n";
