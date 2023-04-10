<?php

// Функция с callback_data для коктейлей и штучек
function cocktail_callback($callback_data, $user_id, $message_id)
{
    include 'cocktails.php'; // Файл с коктейлями

    $cocktail_buttons = [
        [['text' => 'Краткая история', 'callback_data' => 'short_story']],
        [['text' => 'Состав и приготовление', 'callback_data' => 'preparation']],
        [['text' => '<<< В меню', 'callback_data' => 'start']]
    ];

    if ($the_unforgettables[$callback_data]) {
        $cocktail = $the_unforgettables[$callback_data];
        $media = $cocktail['cocktail_name'] . $cocktail['cocktail_photo'];
        $back_button = [[['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p1']]];
        $inline_keyboard = array_merge($cocktail_buttons, $back_button);
    } elseif ($contemporary_classic[$callback_data]) {
        $cocktail = $contemporary_classic[$callback_data];
        $media = $cocktail['cocktail_name'] . $cocktail['cocktail_photo'];
        $back_button = [[['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p1']]];
        $inline_keyboard = array_merge($cocktail_buttons, $back_button);
    } elseif ($new_era_drinks[$callback_data]) {
        $cocktail = $new_era_drinks[$callback_data];
        $media = $cocktail['cocktail_name'] . $cocktail['cocktail_photo'];
        $back_button = [[['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p1']]];
        $inline_keyboard = array_merge($cocktail_buttons, $back_button);
    } elseif ($help[$callback_data]) {
        $reference = $help[$callback_data];
        $media = $reference['text'] . $reference['photo'];
        $inline_keyboard = [[['text' => '<<< В меню', 'callback_data' => 'help_start']]];
    }
    // Выбранный коктейль заносится в БД
    cocktail_callback_data($callback_data, $user_id, $message_id);

    $post = [
        'chat_id' => $user_id,
        'message_id' => $message_id,
        'text' => $media,
        'parse_mode' => 'html',
        'reply_markup' => inline_keyboard($inline_keyboard)
    ];
    sendRequest('editMessageText', $post);
}

// Функция с callback_data для краткой истории и ингредиентов
function switch_callback($callback_data, $user_id, $all_cocktails, $message_id)
{
    switch($callback_data) {
        case 'short_story':
            $button = 'cocktail_history';
            break;
        case 'preparation':
            $button = 'cocktail_cooking';
            break;
    }
    $cocktail_callback_data = cocktail_get_callback($user_id, $message_id);
    $text = $all_cocktails[$cocktail_callback_data['callback_data']][$button];
    $post = [
        'chat_id' => $user_id,
        'message_id' => $message_id,
        'text' => $text,
        'parse_mode' => 'html',
        $menu_keyboard = [[['text' => '<< Назад', 'callback_data' => $cocktail_callback_data['callback_data']]],
            [['text' => '<<< В меню', 'callback_data' => 'start']]],
        'reply_markup' => inline_keyboard($menu_keyboard)
    ];
    sendRequest('editMessageText', $post);
}