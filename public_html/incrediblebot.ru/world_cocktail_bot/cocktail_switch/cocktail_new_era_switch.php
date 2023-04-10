<?php

switch ($callback_data) {
    case 'new_era_drinks_p1':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p1 = [
                [['text' => 'Aperol Spritz / Апероль Спритц', 'callback_data' => 'aperol_spritz']],
                [['text' => 'Penicillin / Пенициллин', 'callback_data' => 'penicillin']],
                [['text' => 'Espresso Martini / Эспрессо Мартини', 'callback_data' => 'espresso_martini']],
                [['text' => 'Bramble / Брамбл', 'callback_data' => 'bramble']],
                [['text' => 'Old Cuban / Старый Кубинец', 'callback_data' => 'old_cuban']],
                [['text' => 'Вперёд >>', 'callback_data' => 'new_era_drinks_p2']],
                [['text' => '• 1 •', 'callback_data' => 'new_era_drinks_p1'], ['text' => '2', 'callback_data' => 'new_era_drinks_p2'], ['text' => '3', 'callback_data' => 'new_era_drinks_p3'], ['text' => '4', 'callback_data' => 'new_era_drinks_p4'], ['text' => '5', 'callback_data' => 'new_era_drinks_p5'], ['text' => '6', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p1)
        ];
        sendRequest('editMessageText', $post);
        delete_cocktail_callback_data($user_id);
        break;
    case 'new_era_drinks_p2':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p2 = [
                [['text' => 'B-52 / Б-52', 'callback_data' => 'b-52']],
                [['text' => 'Gin Tonic / Джин Тоник', 'callback_data' => 'gin_tonic']],
                [['text' => 'Trinidad Sour / Тринидад Сауэр', 'callback_data' => 'trinidad_sour']],
                [['text' => 'Barracuda / Барракуда', 'callback_data' => 'barracuda']],
                [['text' => 'Bee’s Knees / Высший сорт', 'callback_data' => 'bees_knees']],
                [['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p1'], ['text' => 'Вперёд >>', 'callback_data' => 'new_era_drinks_p3']],
                [['text' => '1', 'callback_data' => 'new_era_drinks_p1'], ['text' => '• 2 •', 'callback_data' => 'new_era_drinks_p2'], ['text' => '3', 'callback_data' => 'new_era_drinks_p3'], ['text' => '4', 'callback_data' => 'new_era_drinks_p4'], ['text' => '5', 'callback_data' => 'new_era_drinks_p5'], ['text' => '6', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p2)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'new_era_drinks_p3':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p3 = [
                [['text' => 'Canchanchara / Канчанчара', 'callback_data' => 'canchanchara']],
                [['text' => 'Dark ‘n’ stormy / Тьма и буря', 'callback_data' => 'dark_n_stormy']],
                [['text' => 'Fernandito / Фернандито', 'callback_data' => 'fernandito']],
                [['text' => 'French Martini / Французский Мартини', 'callback_data' => 'french_martini']],
                [['text' => 'Illegal / Незаконный', 'callback_data' => 'illegal']],
                [['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p2'], ['text' => 'Вперёд >>', 'callback_data' => 'new_era_drinks_p4']],
                [['text' => '1', 'callback_data' => 'new_era_drinks_p1'], ['text' => '2', 'callback_data' => 'new_era_drinks_p2'], ['text' => '• 3 •', 'callback_data' => 'new_era_drinks_p3'], ['text' => '4', 'callback_data' => 'new_era_drinks_p4'], ['text' => '5', 'callback_data' => 'new_era_drinks_p5'], ['text' => '6', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p3)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'new_era_drinks_p4':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p4 = [
                [['text' => 'Lemon drop Martini / Лемон дроп Мартини', 'callback_data' => 'lemon_drop_martini']],
                [['text' => 'Naked and Famous / Голый и Знаменитый', 'callback_data' => 'naked_and_famous']],
                [['text' => 'New York Sour / Нью-Йорк Сауэр', 'callback_data' => 'new_york_sour']],
                [['text' => 'Paloma / Палома', 'callback_data' => 'paloma']],
                [['text' => 'Paper Plane / Бумажный самолетик', 'callback_data' => 'paper_plane']],
                [['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p3'], ['text' => 'Вперёд >>', 'callback_data' => 'new_era_drinks_p5']],
                [['text' => '1', 'callback_data' => 'new_era_drinks_p1'], ['text' => '2', 'callback_data' => 'new_era_drinks_p2'], ['text' => '3', 'callback_data' => 'new_era_drinks_p3'], ['text' => '• 4 •', 'callback_data' => 'new_era_drinks_p4'], ['text' => '5', 'callback_data' => 'new_era_drinks_p5'], ['text' => '6', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p4)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'new_era_drinks_p5':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p5 = [
                [['text' => 'Russian Spring Punch / Русский Весенний Пунш', 'callback_data' => 'russian_spring_punch']],
                [['text' => 'Southside / Южная Сторона', 'callback_data' => 'southside']],
                [['text' => 'Spicy Fifty / Спайси Фифти', 'callback_data' => 'spicy_fifty']],
                [['text' => 'Suffering Bastard / Страдающий Ублюдок', 'callback_data' => 'suffering_bastard']],
                [['text' => 'Tipperary / Типперэри', 'callback_data' => 'tipperary']],
                [['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p4'], ['text' => 'Вперёд >>', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '1', 'callback_data' => 'new_era_drinks_p1'], ['text' => '2', 'callback_data' => 'new_era_drinks_p2'], ['text' => '3', 'callback_data' => 'new_era_drinks_p3'], ['text' => '4', 'callback_data' => 'new_era_drinks_p4'], ['text' => '• 5 •', 'callback_data' => 'new_era_drinks_p5'], ['text' => '6', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p5)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'new_era_drinks_p6':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineNewEra_p6 = [
                [['text' => 'Tommy’s Margarita / Маргарита Томми', 'callback_data' => 'tommys_margarita']],
                [['text' => 'VE.N.TO / ВЭ.Н.ТО', 'callback_data' => 'vento']],
                [['text' => 'Yellow Bird / Желтая Птичка', 'callback_data' => 'yellow_bird']],
                [['text' => '<< Назад', 'callback_data' => 'new_era_drinks_p5']],
                [['text' => '1', 'callback_data' => 'new_era_drinks_p1'], ['text' => '2', 'callback_data' => 'new_era_drinks_p2'], ['text' => '3', 'callback_data' => 'new_era_drinks_p3'], ['text' => '4', 'callback_data' => 'new_era_drinks_p4'], ['text' => '5', 'callback_data' => 'new_era_drinks_p5'], ['text' => '• 6 •', 'callback_data' => 'new_era_drinks_p6']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineNewEra_p6)
        ];
        sendRequest('editMessageText', $post);
        break;
}