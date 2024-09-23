<?php
$textStorage = [];

function add(array &$storage, string $title, string $text): void
{
    $storage[] = [
        'title' => $title,
        'text' => $text,
    ];
}

function remove(array &$storage, int $index): bool
{
    if (isset($storage[$index])){
        unset($storage[$index]);
        $storage = array_values($storage);
        return true;
    }
    return false;
}

add($textStorage, 'Загловок певрого текста', 'Текст первого элемента');
add($textStorage, 'Заголовок второго текста', 'Текст второго элемента');

remove($textStorage, 0);

print_r($textStorage);