# Краткое описание пакета

Преобразует строку в которой все слова начинаются с Заглавной буквы

## Требования
- PHP >=7.0

## Установка
composer require sergey-golovanov/my_first_package

## Использование
```
<?php

$converter = new StringConverter();
$newString = $converter->toUpperFirstLetter($you_string);

```