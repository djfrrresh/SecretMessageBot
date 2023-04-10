<?php

// Список коктейлей в кнопках, кнопки "вперед/назад/в меню"
switch ($callback_data) {
    case 'help_start':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Эта памятка создана для объяснения различных барменских терминов, посуды',
            $help_buttons = [
                [['text' => 'Термины 📃', 'callback_data' => 'terms_p1']],
                [['text' => 'Посуда / Штучки 🥄', 'callback_data' => 'dishes_p1']]
            ],
            'reply_markup' => inline_keyboard($help_buttons)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'start':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Давай определимся с категорией коктейлей',
            $main_menu = [
                [['text' => 'Незабываемые 🥃', 'callback_data' => 'the_unforgettables_p1']],
                [['text' => 'Современная Классика 🍸', 'callback_data' => 'contemporary_classic_p1']],
                [['text' => 'Напитки Новой Эры 🍹', 'callback_data' => 'new_era_drinks_p1']]
            ],
            'reply_markup' => inline_keyboard($main_menu)
        ];
        sendRequest('editMessageText', $post);
        delete_cocktail_callback_data($user_id);
        break;
//    default: // вывод callback_data
//        $post = [
//            'chat_id' => 915597301,
//            'text' => 'callback_data: ' . $callback_data
//        ];
//        sendRequest('sendMessage', $post);
//        break;
}

include 'cocktails.php'; // Файл с текстами коктейлей/терминов/посуды

include 'cocktail_unforgettables_switch.php'; // Незабываемые

include 'cocktail_contemporary_switch.php'; // Современная классика

include 'cocktail_new_era_switch.php'; // Новая эра

include 'cocktail_dishes_switch.php'; // Посуда и штучки

include 'cocktail_terms_switch.php'; // Термины

include 'cocktail_callback.php'; // Файл с callback_data для коктейлей