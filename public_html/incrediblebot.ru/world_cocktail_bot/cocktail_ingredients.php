<?php

$post = [
    'chat_id' => $chat_id,
    'text' => 'Тест',
];
sendRequest('sendMessage', $post);