<?php

$language = get_language($user_id); // Получить выбранный пользователем язык

switch ($message) {
    case '/start': // Команда start
    case 'В меню':
    delete_command_message();

    if ($user_id == 915597301) {
        $admin_button = [
            [['text' => 'Админ панель']],
        ];
    } else {
        $admin_button = [];
    }

    $post = [
        'chat_id' => $user_id,
        'text' => $russian_language['start_message'],
        'parse_mode' => 'html',
        'reply_markup' => reply_keyboard($admin_button)
    ];
    sendRequest('sendMessage', $post);
    $post = [
        'chat_id' => $user_id,
        'text' => $english_language['start_message'],
        'parse_mode' => 'html',
        'reply_markup' => reply_keyboard($admin_button)
    ];
    sendRequest('sendMessage', $post);

    secret_user_reg($username, $user_id); // Регистрация нового пользователя
        break;
    case '/developer': // Команда "разработчик"
        delete_command_message();

        include 'secret_qiwi_payments.php'; // Оплата через QIWI

        $donate_button = [
            [['text' => 'Donate', 'url' => $link]],
        ];
        $post = [
            'chat_id' => $user_id,
            'text' => set_language($language, 'developer'),
            'parse_mode' => 'html',
            'reply_markup' => inline_keyboard($donate_button)
        ];
        sendRequest('sendMessage', $post);
        break;
    case '/language': // Команда смены языка
        delete_command_message();

        if ($language['language'] == 'ru') {
            $language_button = [
                [['text' => 'Change to English 🇬🇧', 'callback_data' => 'change']]
            ];
        } elseif ($language['language'] == 'en') {
            $language_button = [
                [['text' => 'Поменять на Русский 🇷🇺', 'callback_data' => 'change']]
            ];
        }
        $post = [
            'chat_id' => $user_id,
            'text' => 'Here you can <b>change the language</b> in the bot!
        
Здесь ты можешь <b>сменить язык</b> в боте!',
            'reply_markup' => inline_keyboard($language_button),
            'parse_mode' => 'html'
        ];
        sendRequest('sendMessage', $post);
        break;
    case '/help': // Команда с помощью
        delete_command_message();

        $post = [
            'chat_id' => $user_id,
            'text' => set_language($language, 'help'),
            'parse_mode' => 'html'
        ];
        sendRequest('sendMessage', $post);
        break;
}

include 'secret_admin_panel.php'; // Админ панель
