<?php

// Выбрать текст в зависимости от языка
function set_language($language, $text)
{
    global $russian_language;
    global $english_language;
    if ($language['language'] == 'ru') {
        $selected_language = $russian_language[$text];
    } else {
        $selected_language = $english_language[$text];
    }
    return $selected_language;
}

// Удаление команд пользователя
function delete_command_message()
{
    global $user_id;
    global $message_id;
    $post = [
        'chat_id' => $user_id,
        'message_id' => $message_id
    ];
    sendRequest('deleteMessage', $post);
}