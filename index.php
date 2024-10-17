<?php

echo "<strong>Уровень 1: Легкий</strong> <br>";

echo "<strong>1. Конкатенация строк:</strong> <br>";

$str1 = "Hello, ";
$str2 = "World!";
$result = $str1 . $str2;
echo $result . "<br>";

echo "<strong>2. Изменение регистра:</strong> <br>";
// Текст
$text = "Hello World";

// Преобразование в верхний регистр
$upper = strtoupper(string: $text);

// Преобразование в нижний регистр
$lower = strtolower($text);

// Вывод результатов
echo "Верхний регистр: " . $upper . "<br>";
echo "Нижний регистр: " . $lower . "<br>";

echo "<strong>3. Сравнение строк:</strong> <br>";

$str1 = "Hello";
$str2 = "hello";

// Сравнение с учетом регистра
if ($str1 === $str2) {
    echo "Строки равны (с учетом регистра).<br>";
} else {
    echo "Строки не равны (с учетом регистра).<br>";
}

// Сравнение без учета регистра
if (strcasecmp($str1, $str2) == 0) {
    echo "Строки равны (без учета регистра).<br>";
} else {
    echo "Строки не равны (без учета регистра).<br>";
}

echo "<strong>4. Поиск подстроки:</strong> <br>";

$str = "Hello, World!";
$substring = "World";

// Найдем позицию подстроки
$position = strpos($str, $substring);

if ($position !== false) {
    echo "Подстрока '{$substring}' найдена на позиции {$position}.<br>";
} else {
    echo "Подстрока '{$substring}' не найдена.<br>";
}

echo "<strong>5. Замена подстроки: </strong> <br>";

$str = "Hello, World!";
$oldWord = "World";
$newWord = "PHP";

// Замена слова
$result = str_replace($oldWord, $newWord, $str);

// Вывод результата
echo "Исходная строка: " . $str . "<br>";
echo "Строка после замены: " . $result . "<br>";

echo "<strong>6. Форматирование строки: </strong> <br>";

$name = "Алла";
$age = 28;
$city = "Питере";

// Форматирование строки
$formattedString = sprintf("Меня зовут %s, мне %d лет, и я живу в %s.", $name, $age, $city);

// Вывод результата
echo $formattedString . "<br>";

echo "<strong>7. Разделение строки: </strong> <br>";

$str = "яблоко,банан,груша,апельсин";
$delimiter = ",";

// Разделение строки на массив
$array = explode($delimiter, $str);

// Вывод результата
echo "Разделенная строка на массив: <pre>";
print_r($array);
echo "</pre>";

// Объединение массива обратно в строку
$rejoinedString = implode($delimiter, $array);

// Вывод результата
echo "Объединенная строка: " . $rejoinedString . "<br>";

echo "<strong>8. Работа с многострочным текстом: </strong> <br>";

$text = "Это первая строка.\nЭто вторая строка.\nЭто третья строка.";

// Преобразование многострочного текста в HTML-разметку
$htmlText = nl2br($text);

// Вывод результата
echo $htmlText . "<br>";

echo "<strong>Уровень 2: Усложненный</strong> <br>";

echo "<strong>1. Сложная конкатенация строк: </strong> <br>";

$name = "Алла";
$age = 28;
$city = "Питер";

$sentence = "Привет, меня зовут " . $name . ". Мне " . $age . " лет, и я живу в городе " . $city . ".";

echo $sentence . "<br>";

echo "<strong>2. Изменение регистра с условиями: </strong> <br>";

$text = "HELLO i love cupcakes and coffee";

$result = ucwords(strtolower($text));

echo $result . "<br>";

echo "<strong>3. Сравнение строк с учётом регистра и без: </strong> <br>";

$string1 = "Hello World";
$string2 = "Hello world";

// Сравнение с учётом регистра
if ($string1 === $string2) {
    echo "Строки полностью совпадают (===).";
} else {
    echo "Строки не совпадают (===).";
}

echo "<br>";

// Сравнение без учёта регистра 
if (strcasecmp($string1, $string2) === 0) {
    echo "Строки совпадают без учёта регистра.";
} else {
    echo "Строки не совпадают даже без учёта регистра.";
}

echo "<br>";

// Сравнение без строгой проверки типов
if ($string1 == $string2) {
    echo "Строки совпадают (==)." . "<br>";
} else {
    echo "Строки не совпадают (==)." . "<br>";
}

echo "<strong>4. Замена подстроки с использованием массива: </strong> <br>";

// Текст
$string = "Hello world! Welcome to PHP.";

// Массив слов для поиска
$search = array("Hello", "world", "PHP");

// Массив слов для замены
$replace = array("Hi", "Earth", "Hypertext Preprocessor");

// Замена слов
$newString = str_replace($search, $replace, $string);

echo $newString . "<br>";

echo "<strong>5. Форматирование строки с числом: </strong> <br>";

$name = "Alla";
$age = 28;

// Форматирование строки
$formattedString = sprintf("My name is %s, and I am %d years old.", $name, $age);

echo $formattedString . "<br>";

echo "<strong>6. Разделение и объединение сложной строки: </strong> <br>";

// Исходная строка 
$string = "10,20,30,40,50";

// Разделение строки по разделителю (запятая)
$numbers = explode(",", $string);

// Подсчёт суммы элементов массива
$sum = array_sum($numbers);

echo "Сумма чисел: " . $sum . "<br>";

echo "<strong>7. Создание случайной строки: </strong> <br>";

function generateRandomString($length = 10) {
    // Массив символов
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    // Генерация строки 
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

// Вывод
echo generateRandomString(12) . "<br>";

echo "<strong>8. Проверка строки на палиндром: </strong> <br>";

function isPalindrome($string) {
    // Приводим строку к нижнему регистру
    $cleanedString = strtolower(str_replace(' ', '', $string));
    
    // Переворачиваем строку
    $reversedString = strrev($cleanedString);
    
    // Сравниваем строки
    return $cleanedString === $reversedString;
}

// Вывод
$testString1 = "A man a plan a canal Panama";
$testString2 = "Hello World";

echo $testString1 . " - " . (isPalindrome($testString1) ? 'Палиндром' : 'Не палиндром') . "<br>";
echo $testString2 . " - " . (isPalindrome($testString2) ? 'Палиндром' : 'Не палиндром') . "<br>";

?>