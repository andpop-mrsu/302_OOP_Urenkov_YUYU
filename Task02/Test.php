<?php

declare(strict_types=1);

use Task02\Vector;

function runTest():void
{
    // Тест: строковое представление
    $v1 = new Vector(1, 2, 3);
    echo "Ожидается: (1; 2; 3)" . PHP_EOL;
    echo "Получено: " . $v1 . PHP_EOL;

    // Тест: сложение
    $v2 = new Vector(4, -1, 0);
    $v3 = $v1->add($v2);
    echo "Ожидается: (5; 1; 3)" . PHP_EOL;
    echo "Получено: " . $v3 . PHP_EOL;

    // Тест: вычитание
    $v4 = $v1->sub($v2);
    echo "Ожидается: (-3; 3; 3)" . PHP_EOL;
    echo "Получено: " . $v4 . PHP_EOL;

    // Тест: умножение на число
    $v5 = $v1->product(2);
    echo "Ожидается: (2; 4; 6)" . PHP_EOL;
    echo "Получено: " . $v5 . PHP_EOL;

    // Тест: скалярное произведение
    $scalar = $v1->scalarProduct($v2);
    echo "Ожидается: 2" . PHP_EOL;
    echo "Получено: " . $scalar . PHP_EOL;

    // Тест: векторное произведение
    $v6 = $v1->vectorProduct($v2);
    echo "Ожидается: (-3; -12; -9)" . PHP_EOL;
    echo "Получено: " . $v6 . PHP_EOL;
}
?>