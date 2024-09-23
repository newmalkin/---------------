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

function edit(int $index, string $title, string $text, array &$stotage): bool
{
    if(isset($storage[$index])) {
        $storage[$index]['title'] = $title;
        $storage[$index]['text'] = $text;
        return true;
    }

    return false;
}

$edited = edit(1, 'Обновлённый заголовок второго текста', 'Обновлённый текст второго элемента.', $textStorage);

if ($edited) {
    echo "Элемент успешно обновлён.\n";
} else {
    echo "Элемент с таким индексом не найден.\n";
}

print_r($textStorage);
