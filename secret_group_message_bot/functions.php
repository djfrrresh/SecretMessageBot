<?php

// Функция отправки кнопок в сообщении
function inline_keyboard($array) {
    return json_encode(['inline_keyboard' => $array]);
}

// Функция отправки кнопок под чатом
function reply_keyboard($array) {
    return json_encode(['keyboard' => $array, 'resize_keyboard' => true]);
}

// Функция отправки запросов
function sendRequest($method, $post = '') {
    // создание нового ресурса cURL
    $ch = curl_init('https://api.telegram.org/bot' . BOT_TOKEN . '/' . $method);
    // Установка URL и других необходимых параметров
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, true); // Обычный HTTP POST-запрос
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Все данные, передаваемые в HTTP POST-запросе
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Эта функция работает вместо return
    }
    // Выполняет запрос cURL и возвращает данные
    curl_exec($ch);

    // Проверяем наличие ошибок
    if (!curl_errno($ch)) {
        global $http_code;
        $http_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
//        switch ($http_code) {
//            case 200: // OK
//                break;
//            case 400: // Bad Request
//                $error_post = [
//                    'chat_id' => 915597301,
//                    'text' => 'HTTP code: 400',
//                ];
//                sendRequest('sendMessage', $error_post);
//                break;
//            case 403: // Forbidden
//                $error_post = [
//                    'chat_id' => 915597301,
//                    'text' => 'HTTP code: 403',
//                ];
//                sendRequest('sendMessage', $error_post);
//                break;
//        }
        return $http_code;
    }

    //Завершение сеанса и освобождение ресурсов
    curl_close($ch);

    $error_data = json_decode($data);

    if (!$error_data->ok) { // Присылает ошибку с описанием от телеграма
        $error_post = [
            'chat_id' => 915597301,
            'text' => json_encode($post, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n" . $error_data->description
        ];
        sendRequest('sendMessage', $error_post);
    }
}

// Получить id всех юзеров ботов, отметить тех, кто забанил бота
function get_all_users_id_func($bot_id, $bot_token, $users_db)
{
    $post = [
        'chat_id' => 915597301,
        'text' => 'I start counting...'
    ];
    sendRequest('sendMessage', $post);

    $user_count = count(get_all_users_id($bot_id, $users_db)); // Получить количество юзеров всего
    $blocked_users = 0;
    $start_time = microtime(true);

    $ch = curl_init('https://api.telegram.org/bot' . $bot_token . '/sendChatAction');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    for ($i = 0; $i < $user_count; $i++) {
        $users_id_get = get_all_users_id($bot_id, $users_db)[$i]; // Достать каждого юзера по одному
        users_is_not_banned($bot_id, $users_db, $users_id_get['user_id']); // Отметить всех не забаненными в БД

        curl_exec($ch);
        if (!curl_errno($ch)) {
            global $http_code;
            $http_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        }

        // Отправить юзеру запрос методом sendChatAction (В статусе бота в чате будет "Печатает")
        $post = [
            'chat_id' => $users_id_get['user_id'],
            'action' => 'typing'
        ];
        sendRequest('sendChatAction', $post);
        // Проверить код запроса, посчитать забаненных юзеров
        if ($http_code == 403) {
            $blocked_users = $blocked_users + 1;
            users_is_banned($bot_id, $users_db, $users_id_get['user_id']); // Отметить в БД тех кто забанил бота
        }
    }
    curl_close($ch);
    $end_time = microtime(true);
    $total_time = $end_time - $start_time;

    $alive_users = $user_count - $blocked_users;
    $post = [
        'chat_id' => 915597301,
        'text' => '🧑‍💻 <b>Users count:</b> ' . $user_count . "\n" . '❌ <b>Users who blocked the bot:</b> ' . $blocked_users
            . "\n" . '✅ <b>Alive users: </b>' . $alive_users . "\n\n" . '⏳ <b>Total time:</b> ' . round($total_time, 2),
        'parse_mode' => 'html'
    ];
    sendRequest('sendMessage', $post);
}
