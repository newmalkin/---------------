<?php

$textStorage = [];

function add(array &$storage, string $title, string $text): void
{
    $storage[] = [
        'title' => $title,
        'text' => $text, 
    ];
}
add($textStorage, 'Заголовок первого текста', 'Это текст первого элемента');

print_r($textStorage);