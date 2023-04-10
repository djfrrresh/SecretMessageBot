<?php

switch ($callback_data) {
    case 'terms_p1':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Выбери интересующий тебя термин',
            $Terms = [
                [['text' => 'Dash / Дэш', 'callback_data' => 'dash']],
                [['text' => 'Flairing / Флейринг', 'callback_data' => 'flairing']],
                [['text' => '<<< В меню', 'callback_data' => 'help_start']]
            ],
            'reply_markup' => inline_keyboard($Terms)
        ];
        sendRequest('editMessageText', $post);
        break;
}