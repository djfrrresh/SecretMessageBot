<?php

$data = json_decode(file_get_contents('php://input'));

$callback_query = $data->callback_query;
$callback_query_id = $callback_query->id;
$callback_data = $callback_query->data;

$from = $callback_query->from;

$user_id = $from->id;
$username = $from->username;
$first_name = $from->first_name;

$message = $callback_query->message;
$message_id = $message->message_id;
$callback_message_text = $message->text;

$chat = $message->chat;
$chat_id = $chat->id;

$inline_message_id = $callback_query->inline_message_id;

//$post = [
//    'chat_id' => 915597301,
//    'text' => json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
//];
//sendRequest('sendMessage', $post);