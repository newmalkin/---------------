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
        $storage[$index]['text'] = $text;
        return true;
    }

   
    return false;
}


$edited = edit(0, 'Обновлённый заголовок первого текста', $textStorage[0]['text'], $textStorage);

if ($edited) {
    echo "Элемент успешно обновлён.\n";
} else {
    echo "Элемент с таким индексом не найден.\n";
}


print_r($textStorage);


