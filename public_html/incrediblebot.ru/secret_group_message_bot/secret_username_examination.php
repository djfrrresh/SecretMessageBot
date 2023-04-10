<?php

$language = get_language($user_id); // Достать выбранный язык для отправки юзеру соответствующий текст

$receiver_username = explode('-', $callback_data); // Переменная разделяет username-id
$messageData = message_get($receiver_username[1]); // Получение сообщения из БД по id, указанному в callback_data

// Если юзернейм получателя в Телеграме совпал с тем, что был в запросе (в БД) и сообщение не пустое, то открыть его
if ($messageData['receiver_id'] == $username && $messageData['message'] !== null) {
    $post = [
        'chat_id' => 915597301,
        'text' => '<b>Message_ID:</b> ' . $receiver_username[1] . "\n" .
'<b>Отправитель:</b> ' . $messageData['username'] . "\n" .
'<b>Получатель:</b> ' . $messageData['receiver_id'] . "\n" .
'<b>Получатель при нажатии на кнопку:</b> ' . $username,
        'parse_mode' => 'html'
    ];
    sendRequest('sendMessage', $post);
    
    $alert_message = [
        'callback_query_id' => $callback_query_id,
        'text' => $messageData['message'],
        'show_alert' => TRUE
    ];
    sendRequest('answerCallbackQuery', $alert_message);

    $post = [
        'inline_message_id' => $inline_message_id,
        'text' => set_language($language, 'message_read'),
        'parse_mode' => 'html'
    ];
    sendRequest('editMessageText', $post);
}
// Если сообщение хочет посмотреть отправитель, то бот ему его показывает беря юзернейм из БД и callback_data
elseif ($username === $receiver_username[0]) {
    $alert_message = [
        'callback_query_id' => $callback_query_id,
        'text' => $messageData['message'],
        'show_alert' => TRUE
    ];
    sendRequest('answerCallbackQuery', $alert_message);
}
// Если получатель не тот или сообщение пустое, то вывести ошибку пользователю
elseif (($messageData['receiver_id'] !== $username) && $callback_data !== 'change') {
    $post = [
        'callback_query_id' => $callback_query_id,
        'text' => set_language($language, 'not_your_message'),
        'show_alert' => TRUE
    ];
    sendRequest('answerCallbackQuery', $post);
}