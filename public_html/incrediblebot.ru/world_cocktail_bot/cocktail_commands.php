<?php

phpinfo();

switch ($message) {
    case '/start': // Приветственная команда, вызов кнопок под чатом
    case 'В меню':
        $menu_buttons = [
            [['text' => 'Открыть список коктейлей 🍾']],
            [['text' => 'Барная посуда и термины 🥄']],
//                [['text' => 'Найти коктейль по ингредиентам 🧾']],
            [['text' => 'Разработчик 🧑‍💻'], ['text' => 'Поддержать 💸']]
        ];
        if ($user_id == 915597301) {
            $menu_buttons[] = [['text' => 'Админ панель']];
        }
    $post = [
            'chat_id' => $user_id,
            'text' => 'Нажми на кнопку ниже, чтобы начать!',
            'reply_markup' => reply_keyboard($menu_buttons)
        ];
        sendRequest('sendMessage', $post);
        cocktail_user_reg($username, $user_id);
        break;
    case 'Открыть список коктейлей 🍾':
        $post = [
            'chat_id' => $user_id,
            'text' => 'Давай сначала определимся с категорией коктейлей',
            $themes_menu = [
                [['text' => 'Незабываемые 🥃', 'callback_data' => 'the_unforgettables_p1']],
                [['text' => 'Современная Классика 🍸', 'callback_data' => 'contemporary_classic_p1']],
                [['text' => 'Напитки Новой Эры 🍹', 'callback_data' => 'new_era_drinks_p1']]
            ],
            'reply_markup' => inline_keyboard($themes_menu),
        ];
        sendRequest('sendMessage', $post);
        break;
    case 'Барная посуда и термины 🥄':
        $post = [
            'chat_id' => $user_id,
            'text' => 'Эта памятка создана для объяснения различных барменских терминов, посуды',
            $help_buttons = [
                [['text' => 'Термины 📃', 'callback_data' => 'terms_p1']],
                [['text' => 'Посуда / Штучки 🥄', 'callback_data' => 'dishes_p1']]
            ],
            'reply_markup' => inline_keyboard($help_buttons)
        ];
        sendRequest('sendMessage', $post);
        break;
//    case 'Найти коктейль по ингредиентам 🧾':
//        include 'cocktail_ingredients.php';
//        break;
    case 'Разработчик 🧑‍💻':
        $post = [
            'chat_id' => $user_id,
            'text' => '🧑‍💻 Разработчик — @just_eugeny'
        ];
        sendRequest('sendMessage', $post);
        break;
    case 'Поддержать 💸':
        $post = [
            'chat_id' => $user_id,
            'text' => 'Ты можешь поддержать автора, перейдя по любой ссылке ниже',
            $donate_buttons = [
                [['text' => 'QIWI 🥝', 'url' => 'qiwi.com/n/KISKA999']],
                [['text' => 'ЮMoney 💴', 'url' => 'https://yoomoney.ru/to/4100112484825006/0']]
            ],
            'reply_markup' => inline_keyboard($donate_buttons)
        ];
        sendRequest('sendMessage', $post);
        break;
}

include 'cocktail_admin_panel.php'; // Админ панель
