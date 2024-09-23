<?php

$textStorage =[
    [
        'title' => 'Заголовок первого текста',
        'text' => 'Текст первого элемента'
    ],
    [
        'title' => 'Заголовок второго текста',
        'text' => 'Текс второго элемента'
    ]
];

function remove(array &$storage, int $index): bool
{
    if (isset($storage[$index])) {
        unset($storage[$index]);
        $storage = array_values($storage);
        return true;
    }

    return false;
}

$result1 = remove($textStorage, 0);
echo 'Результат удаления элемента с индексом 0: ' . ($result1 ? 'true' : 'false') . "\n";

$result2 = remove($textStorage, 5);
echo 'Результат удаления элемента с индексом 5: ' . ($result2 ? 'true' : 'false') . "\n";

print_r($textStorage);