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

$removed = remove($textStorage, 0);

if ($removed) {
    echo "Элемент успешно удален.\n";
} else {
    echo "Элемент с таким индексом не найден.\n";
}

print_r($textStorage);