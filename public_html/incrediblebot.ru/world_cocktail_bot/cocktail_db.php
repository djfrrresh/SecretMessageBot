<?php

include '../database.php'; // База данных

// Регистрация новых пользователей CocktailBot
function cocktail_user_reg($username, $user_id)
{
    global $pdo;
    $sql = "INSERT INTO cocktail_users (username, user_id) VALUES (:username, :user_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
    $stmt->execute();
    return true;
}

// Запись в БД о том, какой последний коктейль просмотрел юзер
function cocktail_callback_data($callback_data, $user_id, $message_id)
{
    global $pdo;
    $sql = "INSERT INTO cocktail_callback_data (user_id, message_id, callback_data) 
    VALUES (:user_id, :message_id, :callback_data)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':message_id', $message_id, PDO::PARAM_INT);
    $stmt->bindParam(':callback_data', $callback_data, PDO::PARAM_STR);
    $stmt->execute();
    return true;
}

// Достать из БД callback последнего просмотренного коктейля
function cocktail_get_callback($user_id, $message_id)
{
    global $pdo;
    $sql = "SELECT callback_data
    FROM cocktail_callback_data
    WHERE (user_id = :user_id AND message_id = :message_id) AND (callback_data != 'short_story' AND callback_data != 'preparation')
    ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':message_id', $message_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Удаление записи в БД о callback_data
function delete_cocktail_callback_data($user_id)
{
    global $pdo;
    $sql = "DELETE FROM cocktail_callback_data
        WHERE user_id = :user_id
        ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}