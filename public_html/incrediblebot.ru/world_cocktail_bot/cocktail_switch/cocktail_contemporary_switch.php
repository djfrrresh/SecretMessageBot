<?php

switch ($callback_data) {
    case 'contemporary_classic_p1':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p1 = [
                [['text' => 'White Russian / Белый Русский', 'callback_data' => 'white_russian']],
                [['text' => 'Bloody Mary / Кровавая Мэри', 'callback_data' => 'bloody_mary']],
                [['text' => 'Long Island Iced Tea / Лонг Айленд', 'callback_data' => 'long_island']],
                [['text' => 'Mojito / Мохито', 'callback_data' => 'mojito']],
                [['text' => 'Pina Colada / Пина Колада', 'callback_data' => 'pina_colada']],
                [['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p2']],
                [['text' => '• 1 •', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p1)
        ];
        sendRequest('editMessageText', $post);
        delete_cocktail_callback_data($user_id);
        break;
    case 'contemporary_classic_p2':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p2 = [
                [['text' => 'Tequila Sunrise / Текила Санрайз', 'callback_data' => 'tequila_sunrise']],
                [['text' => 'Cosmopolitan / Космополитен', 'callback_data' => 'cosmopolitan']],
                [['text' => 'Irish Coffee / Айриш Кофе', 'callback_data' => 'irish_coffee']],
                [['text' => 'Margarita / Маргарита', 'callback_data' => 'margarita']],
                [['text' => 'Bellini / Беллини', 'callback_data' => 'bellini']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p1'], ['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p3']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '• 2 •', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p2)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'contemporary_classic_p3':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p3 = [
                [['text' => 'Caipirinha  / Кайпиринья', 'callback_data' => 'caipirinha']],
                [['text' => 'Champagne Cocktail / Коктейль Шампань', 'callback_data' => 'champagne_cocktail']],
                [['text' => 'Corpse Reviver / Оживитель трупов', 'callback_data' => 'corpse_reviver']],
                [['text' => 'Cuba Libre / Куба Либре', 'callback_data' => 'cuba_libre']],
                [['text' => 'French 75 / Френч 75', 'callback_data' => 'french']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p2'], ['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p4']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '• 3 •', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p3)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'contemporary_classic_p4':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p4 = [
                [['text' => 'French Connection / Французский связной', 'callback_data' => 'french_connection']],
                [['text' => 'Golden Dream / Золотая Мечта', 'callback_data' => 'golden_dream']],
                [['text' => 'Grasshopper / Кузнечик', 'callback_data' => 'grasshopper']],
                [['text' => 'Hemingway Special / Хемингуэй Спешл', 'callback_data' => 'hemingway_special']],
                [['text' => 'Mai-Tai / Май-Тай', 'callback_data' => 'mai_tai']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p3'], ['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p5']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '• 4 •', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p4)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'contemporary_classic_p5':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p5 = [
                [['text' => 'Horse’s Neck / Лошадиная шея', 'callback_data' => 'horse_neck']],
                [['text' => 'KIR / Кир', 'callback_data' => 'kir']],
                [['text' => 'Mimosa / Мимоза', 'callback_data' => 'mimosa']],
                [['text' => 'Mint Julep / Мятный Джулеп', 'callback_data' => 'mint_julep']],
                [['text' => 'Moscow Mule / Московский Мул', 'callback_data' => 'moscow_mule']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p4'], ['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p6']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '• 5 •', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p5)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'contemporary_classic_p6':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p6 = [
                [['text' => 'Pisco Sour / Писко Сауэр', 'callback_data' => 'pisco_sour']],
                [['text' => 'Sea Breeze / Морской бриз', 'callback_data' => 'sea_breeze']],
                [['text' => 'Sex on the Beach / Секс на пляже', 'callback_data' => 'sex_on_the_beach']],
                [['text' => 'Singapore Sling / Сингапурский Слинг', 'callback_data' => 'singapore_sling']],
                [['text' => 'Vesper / Веспер', 'callback_data' => 'vesper']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p5'], ['text' => 'Вперёд >>', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '• 6 •', 'callback_data' => 'contemporary_classic_p6'], ['text' => '7', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p6)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'contemporary_classic_p7':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineContemporaryClassic_p7 = [
                [['text' => 'Zombie / Зомби', 'callback_data' => 'zombie']],
                [['text' => '<< Назад', 'callback_data' => 'contemporary_classic_p6']],
                [['text' => '1', 'callback_data' => 'contemporary_classic_p1'], ['text' => '2', 'callback_data' => 'contemporary_classic_p2'], ['text' => '3', 'callback_data' => 'contemporary_classic_p3'], ['text' => '4', 'callback_data' => 'contemporary_classic_p4'], ['text' => '5', 'callback_data' => 'contemporary_classic_p5'], ['text' => '6', 'callback_data' => 'contemporary_classic_p6'], ['text' => '• 7 •', 'callback_data' => 'contemporary_classic_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineContemporaryClassic_p7)
        ];
        sendRequest('editMessageText', $post);
        break;
}