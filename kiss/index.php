<?php
function week($day): string
{
    switch ($day)
    {
        case 1:
            return "понедельник" . PHP_EOL;
        case 2:
            return "вторник" . PHP_EOL;
        case 3:
            return "среда" . PHP_EOL;
        case 4:
            return "четверг" . PHP_EOL;
        case 5:
            return "пятница" . PHP_EOL;
        case 6:
            return "суббота" . PHP_EOL;
        case 7:
            return "воскресенье" . PHP_EOL;
        default:
            throw new Exception("Ошибка");
    }
}

function week2($day)
{
    if($day < 1 || $day > 7)
    {
        throw new Exception("Ошибка");
    }
    $days = [
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье",
    ];

    return $days[$day - 1];
}

echo week(4);
echo week2(4);