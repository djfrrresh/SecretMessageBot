<?php

// В теле запроса содержится JSON, php://input читает сырой запрос,
// который мы отправили через функцию sendRequest,
// а json_decode расшифровывает в виде массива
$data = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

$chat_id = $data['message']['chat']['id']; // ID чата
$chat_type = $data['message']['chat']['type']; // Тип чата
$user_id = $data['message']['from']['id']; // ID юзера
$username = $data['message']['from']['username']; // Юзернейм
$message = $data['message']['text']; // Текст сообщения
$message_id = $data['message']['message_id']; // ID сообщения
$first_name = $data['message']['from']['first_name'];
$last_name = $data['message']['from']['last_name'];

$inline_query = $data['inline_query']; // Inline Query
$inline_query_id = $data['inline_query']['id']; // ID Inline - запроса
$inline_query_msg = $data['inline_query']['query']; // Сообщение Inline - запроса (сам запрос)
$inline_user_id = $data['inline_query']['from']['id']; // ID юзера Inline - запроса
$inline_username = $data['inline_query']['from']['username']; // Юзернейм того, кто делает Inline - запрос
$inline_first_name = $data['inline_query']['from']['first_name']; // Имя того, кто делает Inline - запрос
$inline_chat_type = $data['inline_query']['chat_type']; // Тип чата