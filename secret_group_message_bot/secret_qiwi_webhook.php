<?php

include 'secret_db.php';
include 'secret_texts.php';
include 'secret_functions.php';

function sendRequest($method, $post = '') {
    // Создание нового ресурса cURL
    $ch = curl_init('https://api.telegram.org/bot1960025943:AAGUjOw5D1yX8Ex-OdzfUij8WLtcMG9MwQ8/' . $method);
    // Установка URL и других необходимых параметров
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, true); // Обычный HTTP POST-запрос
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Все данные, передаваемые в HTTP POST-запросе
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Эта функция работает вместо return
    }
    // Выполняет запрос cURL и возвращает данные
    curl_exec($ch);
}

$secret_key = 'SECRET';

$sha256_hash_header = $_SERVER['HTTP_X_API_SIGNATURE_SHA256']; // Получаю заголовок

$entity_body = file_get_contents('php://input');  // Декодирую тело входящего запроса
$array_body = json_decode($entity_body, 1);

$amount_currency = $array_body['bill']['amount']['currency'];
$amount_value = $array_body['bill']['amount']['value'];
$billId = $array_body['bill']['billId'];
$siteId = $array_body['bill']['siteId'];
$status_value = $array_body['bill']['status']['value'];

$user_info = get_bill_id($billId);
$language = get_language($user_info['user_id']);

// Объединить все параметры и расшифровать
$invoice_parameters = $amount_currency."|".$amount_value."|".$billId."|".$siteId."|".$status_value;
$sha256_hash = hash_hmac('sha256', $invoice_parameters, base64_decode($secret_key));

if (!empty($sha256_hash_header)) {
    $post = [
        'chat_id' => 915597301,
        'text' => '<b>Donation received from user!</b>

<b>user_id:</b> ' . $user_info['user_id'] . "\n" .
'<b>username:</b> ' . $user_info['username'] .  "\n" .
'<b>amount:</b> ' . $amount_value . ' ' . $amount_currency,
        'parse_mode' => 'html'
    ];
    sendRequest('sendMessage', $post);

    $post = [
        'chat_id' => $user_info['user_id'],
        'text' => set_language($language, 'donate'),
        'parse_mode' => 'html'
    ];
    sendRequest('sendMessage', $post);
    // Пополнить счетчик донатов
    update_donate_amount($user_info['user_id'], $amount_value);
} else {
    http_response_code(404);
    die();
}
