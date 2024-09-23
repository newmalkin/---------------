<?php


$textStorage = [
    [
        'title' => 'Заголовок первого текста',
        'text'  => 'Текст первого элемента.',
    ],
    [
        'title' => 'Заголовок второго текста',
        'text'  => 'Текст второго элемента.',
    ]
];

function edit(int $index, string $title, string $text, array &$storage): bool
{
    if (isset($storage[$index])) {
        $storage[$index]['title'] = $title;
        $storage[$index]['text']  = $text;
        return true;
    }
    return false;
}

$edited = edit(5, 'Новый заголовок', 'Новый текст', $textStorage);

if ($edited) {
    echo "Элемент успешно обновлён.\n";
} else {
    echo "Элемент с таким индексом не найден.\n";
}


print_r($textStorage);
