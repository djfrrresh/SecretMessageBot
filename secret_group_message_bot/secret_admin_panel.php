<?php

if ($user_id == 915597301) {
    switch ($message) {
        case 'Количество пользователей': // Получить id всех юзеров бота, отметить тех, кто забанил бота
            $bot_id = BOT_ID;
            $bot_token = BOT_TOKEN;
            $users_db = 'secret_users';
            get_all_users_id_func($bot_id, $bot_token, $users_db);
            break;
        case 'Админ панель':
            $cocktails_button = [
                [['text' => 'Количество пользователей']],
                [['text' => 'В меню']]
            ];
            $post = [
                'chat_id' => $user_id,
                'text' => 'Выбери любую функцию из админ панели',
                'reply_markup' => reply_keyboard($cocktails_button)
            ];
            sendRequest('sendMessage', $post);
            break;
    }
}