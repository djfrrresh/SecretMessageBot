<?php

switch ($callback_data) {
    case 'the_unforgettables_p1':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p1 = [
                [['text' => 'Negroni / Негрони', 'callback_data' => 'negroni']],
                [['text' => 'Manhattan / Манхэттен', 'callback_data' => 'manhattan']],
                [['text' => 'Americano / Американо', 'callback_data' => 'americano']],
                [['text' => 'Daikiri / Дайкири', 'callback_data' => 'daiqiri']],
                [['text' => 'Old Fashioned / Олд фэшн', 'callback_data' => 'old_fashioned']],
                [['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p2']],
                [['text' => '• 1 •', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p1)
        ];
        sendRequest('editMessageText', $post);
        delete_cocktail_callback_data($user_id);
        break;
    case 'the_unforgettables_p2':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p2 = [
                [['text' => 'Ramos Fizz / Рамоз Физз', 'callback_data' => 'ramos_fizz']],
                [['text' => 'Clover Club / Кловер Клаб', 'callback_data' => 'clover_club']],
                [['text' => 'Gin Fizz / Джин Физз', 'callback_data' => 'gin_fizz']],
                [['text' => 'Vieux Carre / Вью Карэ', 'callback_data' => 'vieux_carre']],
                [['text' => 'Sazerac / Сазерак', 'callback_data' => 'sazerac']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p1'], ['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p3']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '• 2 •', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p2)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'the_unforgettables_p3':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p3 = [
                [['text' => 'Alexander / Александр', 'callback_data' => 'alexander']],
                [['text' => 'Angel Face / Лицо Ангела', 'callback_data' => 'angel_face']],
                [['text' => 'Aviation / Авиация', 'callback_data' => 'aviation']],
                [['text' => 'Between the Sheets / Между простынями', 'callback_data' => 'between_the_sheets']],
                [['text' => 'Boulevardier / Бульвардье', 'callback_data' => 'boulevardier']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p2'], ['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p4']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '• 3 •', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p3)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'the_unforgettables_p4':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p4 = [
                [['text' => 'Brandy Crusta / Бренди Круста', 'callback_data' => 'brandy_crusta']],
                [['text' => 'Casino / Казино', 'callback_data' => 'casino']],
                [['text' => 'Dry Martini / Драй Мартини', 'callback_data' => 'dry_martini']],
                [['text' => 'Hanky Panky / Ханки Панки', 'callback_data' => 'hanky_panky']],
                [['text' => 'John Collins / Джон Коллинз', 'callback_data' => 'john_collins']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p3'], ['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p5']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '• 4 •', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p4)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'the_unforgettables_p5':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p5 = [
                [['text' => 'Last word / Последнее слово', 'callback_data' => 'last_word']],
                [['text' => 'Martinez / Мартинес', 'callback_data' => 'martinez']],
                [['text' => 'Mary Pickford / Мэри Пикфорд', 'callback_data' => 'mary_pickford']],
                [['text' => 'Monkey Gland / Гланды обезьяны', 'callback_data' => 'monkey_gland']],
                [['text' => 'Paradise / Парадайз', 'callback_data' => 'paradise']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p4'], ['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p6']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '• 5 •', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p5)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'the_unforgettables_p6':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p6 = [
                [['text' => 'Planter’s Punch / Плантерс Пунш', 'callback_data' => 'planters_punch']],
                [['text' => 'Porto Flip / Порто Флип', 'callback_data' => 'porto_flip']],
                [['text' => 'Rusty Nail / Ржавый гвоздь', 'callback_data' => 'rusty_nail']],
                [['text' => 'Sidecar / Сайдкар', 'callback_data' => 'sidecar']],
                [['text' => 'Stinger / Стингер', 'callback_data' => 'stinger']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p5'], ['text' => 'Вперёд >>', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '• 6 •', 'callback_data' => 'the_unforgettables_p6'], ['text' => '7', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p6)
        ];
        sendRequest('editMessageText', $post);
        break;
    case 'the_unforgettables_p7':
        $post = [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => 'Отлично, теперь выбери любой коктейль из списка',
            $InlineTheUnforgettables_p7 = [
                [['text' => 'Tuxedo / Смокинг', 'callback_data' => 'tuxedo']],
                [['text' => 'Whiskey Sour / Виски сауэр', 'callback_data' => 'whiskey_sour']],
                [['text' => 'White Lady / Белая леди', 'callback_data' => 'white_lady']],
                [['text' => '<< Назад', 'callback_data' => 'the_unforgettables_p6']],
                [['text' => '1', 'callback_data' => 'the_unforgettables_p1'], ['text' => '2', 'callback_data' => 'the_unforgettables_p2'], ['text' => '3', 'callback_data' => 'the_unforgettables_p3'], ['text' => '4', 'callback_data' => 'the_unforgettables_p4'], ['text' => '5', 'callback_data' => 'the_unforgettables_p5'], ['text' => '6', 'callback_data' => 'the_unforgettables_p6'], ['text' => '• 7 •', 'callback_data' => 'the_unforgettables_p7']],
                [['text' => '<<< В меню', 'callback_data' => 'start']]
            ],
            'reply_markup' => inline_keyboard($InlineTheUnforgettables_p7)
        ];
        sendRequest('editMessageText', $post);
        break;
}