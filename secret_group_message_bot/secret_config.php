<?php

define('BOT_SITE', 'https://incrediblebot.ru/secret_group_message_bot/secret_message.php'); // сайт бота
define('BOT_TOKEN', 'SECRET'); // токен бота
define('BOT_SET_WEBHOOK', 'https://api.telegram.org/bot' . BOT_TOKEN . '/setWebhook?url=https://incrediblebot.ru/secret_group_message_bot/secret_bot.php'); // установка вебхука
define('BOT_WEBHOOK_INFO', 'https://api.telegram.org/bot' . BOT_TOKEN . '/getWebhookInfo'); // инфо о вебхуке бота
define('BOT_ID', '1960025943'); // ID бота

// Пример отправки запроса sendMessage на мой айди с текстом hello friend
// https://api.telegram.org/bot[SECRET]/sendMessage?chat_id=915597301&text=hello%20friend
