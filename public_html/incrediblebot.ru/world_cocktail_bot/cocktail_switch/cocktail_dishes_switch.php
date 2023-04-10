<?php

switch ($callback_data) {
    case 'dishes_p1':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Выбери интересующую тебя посуду',
            $Dishes = [
                [['text' => 'Bar spoon / Барная ложка', 'callback_data' => 'bar_spoon']],
                [['text' => 'Jigger / Джиггер', 'callback_data' => 'jigger']],
                [['text' => 'Strainer / Стрейнер', 'callback_data' => 'strainer']],
                [['text' => 'Shaker / Шейкер', 'callback_data' => 'shaker']],
                [['text' => 'Stopper / Стоппер', 'callback_data' => 'stopper']],
                [['text' => 'Вперёд >>', 'callback_data' => 'dishes_p2']],
                [['text' => '<<< В меню', 'callback_data' => 'help_start']]
            ],
            'reply_markup' => inline_keyboard($Dishes)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'dishes_p2':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Выбери интересующую тебя посуду',
            $Dishes = [
                [['text' => 'Squeezer / Сквизер', 'callback_data' => 'squeezer']],
                [['text' => 'Muddler / Мадлер', 'callback_data' => 'muddler']],
                [['text' => 'Dispenser / Дозатор', 'callback_data' => 'dispenser']],
                [['text' => '<< Назад', 'callback_data' => 'dishes_p1']],
                [['text' => '<<< В меню', 'callback_data' => 'help_start']]
            ],
            'reply_markup' => inline_keyboard($Dishes)
        ];
        sendRequest('editMessageText', $post);
        break;
}