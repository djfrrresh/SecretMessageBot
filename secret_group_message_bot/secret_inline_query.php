<?php

$language = get_language_for_inline_query($inline_user_id); // Получить выбранный юзером язык (Для инлайн мода)

// Получить последний id из БД и прибавить 1, чтобы вставить в callback_data (Как message_id используется)
$callback_message_id = get_id();
$callback_id = ($callback_message_id['id'] + 1);

if ($inline_chat_type == 'group' || $inline_chat_type == 'supergroup') { // Проверка на тип чата (ЛС или группа)

    if (isset($inline_query)) { // Обработка инлайн запроса
        $answer_inline_query = [
            "inline_query_id" => $inline_query_id,
            "results" => '',
        ];
        $inline_receiver_explode = explode(" ", $inline_query_msg); // Отделение тэгнутого юзера от сообщения
        $inline_receiver_username = $inline_receiver_explode[0]; // Получение юзернейма/айди

        $delete = ltrim($inline_receiver_username, '@'); // Удаление собачки перед юзернеймом/айди
        $clear_query = ltrim(str_replace($inline_receiver_username, '', $inline_query_msg)); // Удаление юзернейма/айди с сообщения

        // Если в запросе есть юзернейм через @ от 5-х символов, то вывести всплывающее окно с отправкой сообщения
        if (preg_match('/@\w{5,}\s+(.{1,200})/s', $inline_query_msg)) {

            $response = sendRequest('answerInlineQuery?inline_query_id=' . $inline_query_id . '&cache_time=' . null . '&results=' . json_encode(
                    [
                        [
                            "type" => "article",
                            "id" => "2",
                            "title" => set_language($language, 'send_title'),
                            "description" => set_language($language, 'send_description'),
                            // В callback передается юзернейм получателя и айди сообщения
                            $secret_button = [[['text' => set_language($language, 'send_button'), 'callback_data' => $inline_username . '-' . $callback_id]]],
                            "reply_markup" => json_decode(inline_keyboard($secret_button)),
                            "input_message_content" => [
                                "message_text" => set_language($language, 'send_text_1') . $inline_receiver_username . set_language($language, 'send_text_2')
                            ],
                            "thumb_url" => "s1.yli.ink/jocbvu.jpg",
                            "photo_width" => "512",
                            "photo_height" => "512"
                        ]
                    ]
                )
            );
            $post = [
                'chat_id' => 915597301,
                'text' => '<b>INLINE_USER</b> 
language: ' . $language['language'] . "\n" . 'user_id: ' . $inline_user_id . "\n" . 'username: ' . $inline_username . "\n\n" .
                    '<b>INLINE_QUERY</b>
clear_query: ' . ltrim($clear_query) . "\n" . 'message_id: ' . $callback_id,
                'parse_mode' => 'html'
            ];
            sendRequest('sendMessage', $post);

            // Регистрация нового запроса (секретного сообщения)
            message_reg($inline_username, $inline_user_id, $clear_query, $delete, $inline_first_name);
        }
        $response = sendRequest('answerInlineQuery?inline_query_id=' . $inline_query_id . '&cache_time=' . null . '&results=' . json_encode(
                [
                    [
                        "type" => "article",
                        "id" => "1",
                        "title" => set_language($language, 'help_title'),
                        "description" => set_language($language, 'help_description'),
                        "input_message_content" => [
                            "message_text" => set_language($language, 'help_text'),
                            "parse_mode" => "html"
                        ],
                        "thumb_url" => "s1.yli.ink/lopqge.jpg",
                        "photo_width" => "512",
                        "photo_height" => "512"
                    ]
                ]
            )
        );
    }
// Вывести подробную инструкцию по использованию, если запрос был в ЛС
} else {
    $response = sendRequest('answerInlineQuery?inline_query_id=' . $inline_query_id . '&results=' . json_encode(
            [
                [
                    "type" => "article",
                    "id" => "3",
                    "title" => set_language($language, 'private_title'),
                    "description" => set_language($language, 'private_description'),
                    "input_message_content" => [
                        "message_text" => set_language($language, 'private_text'),
                        "parse_mode" => "html"
                    ],
                    "thumb_url" => "s1.yli.ink/dgravn.jpg",
                    "photo_width" => "512",
                    "photo_height" => "512"
                ]
            ]
        )
    );
}