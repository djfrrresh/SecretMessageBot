<?php

include '../vendor/autoload.php'; // Установка компонентов для работы функций QIWI SDK

// Обязательные ключи для перевода
define('SECRET_KEY', 'SECRET');
define('PUBLIC_KEY', 'SECRET');

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
