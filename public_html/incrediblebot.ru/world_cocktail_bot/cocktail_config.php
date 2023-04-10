<?php

define('BOT_SITE', 'https://incrediblebot.ru/world_cocktail_bot/cocktail_page.php'); // сайт бота
define('BOT_TOKEN', '1997888501:AAGmeRQIZFogjRy6Ff3aoSSsGSKyZUrmicg'); // токен бота
define('BOT_SET_WEBHOOK', 'https://api.telegram.org/bot' . BOT_TOKEN . '/setWebhook?url=https://incrediblebot.ru/world_cocktail_bot/cocktail_bot.php'); // установка вебхука
define('BOT_WEBHOOK_INFO', 'https://api.telegram.org/bot' . BOT_TOKEN . '/getWebhookInfo'); // инфо о вебхуке бота
define('BOT_ID', '1997888501'); // ID бота

// Пример отправки запроса sendMessage на мой айди с текстом hello friend
// https://api.telegram.org/bot1997888501:AAGmeRQIZFogjRy6Ff3aoSSsGSKyZUrmicg/sendMessage?chat_id=915597301&text=hello%20friend