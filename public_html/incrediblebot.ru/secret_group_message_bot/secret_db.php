<?php

include '../database.php'; // База данных

// Регистрация новых пользователей SecretMessageBot
function secret_user_reg($username, $user_id)
{
    global $pdo;
    $sql = "INSERT INTO secret_users (username, user_id) 
    VALUES (:username, :user_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return true;
}

// Регистрация инлайн-запросов (секретного сообщения)
function message_reg($inline_username, $inline_user_id, $clear_query, $delete, $inline_first_name)
{
    global $pdo;
    $sql = "INSERT INTO `secret_messages` (username, user_id, message, receiver_id, first_name) 
    VALUES (:inline_username, :inline_user_id, :clear_query, :delete, :inline_first_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':inline_username', $inline_username, PDO::PARAM_STR);
    $stmt->bindParam(':inline_user_id', $inline_user_id, PDO::PARAM_INT);
    $stmt->bindParam(':clear_query', $clear_query, PDO::PARAM_STR);
    $stmt->bindParam(':delete', $delete, PDO::PARAM_STR);
    $stmt->bindParam(':inline_first_name', $inline_first_name, PDO::PARAM_STR);
    $stmt->execute();
    return true;
}

// Получить последний id в БД и прибавить 1, чтобы вставить его в callback_data (Иначе говоря message_id)
function get_id()
{
    global $pdo;
    $sql = "SELECT id
    FROM `secret_messages`
    ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}

// Получение секретного сообщения указанному юзернейму (Достается по id, первая колонка в БД)
function message_get($id)
{
    global $pdo;
    $sql = "SELECT message, receiver_id, username, id
        FROM secret_messages
        WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
}

// Поменять язык
function change_language($user_id)
{
    global $pdo;
    global $message_id;
    $language = get_language($user_id);
    if ($language['language'] == 'ru') {
        $sql = "UPDATE secret_users
        SET language = 'en'
        WHERE user_id = :user_id";
        $set_language = 'Language has been changed to <b>English</b>';
    } else {
        $sql = "UPDATE secret_users
        SET language = 'ru'
        WHERE user_id = :user_id";
        $set_language = 'Язык был изменен на <b>Русский</b>';
    }
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $post = [
        'chat_id' => $user_id,
        'message_id' => $message_id,
        'text' => $set_language,
        'parse_mode' => 'html'
    ];
    sendRequest('editMessageText', $post);
}

// Достать id языка, используемого юзером
function get_language($user_id)
{
    global $pdo;
    $sql = "SELECT language
        FROM secret_users
        WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Достать id языка, используемого инлайн юзером
function get_language_for_inline_query($inline_user_id)
{
    global $pdo;
    $sql = "SELECT language
        FROM secret_users
        WHERE user_id = :inline_user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':inline_user_id', $inline_user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Добавить в базу данных айди чека об оплате с киви
function bill_id_reg($username, $user_id, $bill_id)
{
    global $pdo;
    $sql = "INSERT INTO secret_payments (username, user_id, bill_id) 
    VALUES (:username, :user_id, :bill_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':bill_id', $bill_id, PDO::PARAM_STR);
    $stmt->execute();
    return true;
}

// Достать по айди чека данные телеграм юзера
function get_bill_id($bill_id)
{
    global $pdo;
    $sql = "SELECT user_id, username
        FROM secret_payments
        WHERE bill_id = :bill_id
        ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':bill_id', $bill_id, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
}

// Пополнить счетчик донатов
function update_donate_amount($user_id, $amount)
{
    global $pdo;
    $sql = "SELECT donate_amount
        FROM secret_users
        WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $donate = $stmt->fetch();

    $donate = $donate['donate_amount'] + $amount;

    $sql = "UPDATE secret_users
        SET donate_amount = :donate
        WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':donate', $donate, PDO::PARAM_INT);
    $stmt->execute();
}