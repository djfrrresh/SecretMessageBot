<?php

include '../vendor/autoload.php'; // Установка компонентов для работы функций QIWI SDK

// Обязательные ключи для перевода
define('SECRET_KEY', 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6ImI1dGd3OS0wMCIsInVzZXJfaWQiOiI3OTAyMjMwNDMxOCIsInNlY3JldCI6Ijc2NDc0OGU1NjQxNDgxNDdjZDFlZDhlNTI3ZWU0MDM4MWZkNjNkMjgyZjM2YzE5NmJkNDQ2ODA2NGE3Mzk0NzcifX0=');
define('PUBLIC_KEY', '48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iPptJfFd3L7dP7nRXNEsLNLooHWCGMDaJrQr6okVb4qek7SHGKb56GrEZzE7DYrZmaqQ9vyJQdmvWMcyJadxjGkMAZZG5EaB6Qo9SFzVzE6');

$billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);

// Узнать данные о переводе
///** @var \Qiwi\Api\BillPayments $billPayments */
//$response = $billPayments->getBillInfo('4285cad3-94aa-4006-a2a1-e85c53c99d63');
//print_r($response);

// Метод generateId возвращает строку в формате UUID v4, удобно для генерирования billId
$billId = $billPayments->generateId();

$params = [
    'publicKey' => PUBLIC_KEY,
    'amount' => 50,
    'billId' => $billId,
    'successUrl' => 'https://incrediblebot.ru/',
    'comment' => 'SecretMessageBot ' . $user_id
];

/** @var \Qiwi\Api\BillPayments $billPayments */
$link = $billPayments->createPaymentForm($params);

bill_id_reg($username, $user_id, $billId);