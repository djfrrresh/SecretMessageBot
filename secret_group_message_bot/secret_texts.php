<?php

$russian_language = [

    'start_message' => 'Привет! Через <b>меня</b> ты можешь отправлять секретные сообщения в группах!

Я работаю в Inline - режиме, это значит, что меня даже <b>не нужно приглашать в беседу!</b>

Набери команду /help для инструкций и команду /language для выбора языка',

    'developer' => '🧑‍💻 Разработчик — @just_eugeny
    
🥝 Ты можешь <b>поддержать</b> разработчика, перейдя по ссылке ниже на <b>QIWI кошелек!</b>',

    'help' => 'Формат отправки секретных сообщений таков - <code>@secret_group_message_bot</code> <code>@username</code> "<i>Ваш текст</i>"

Давай разберем по порядку, как все работает:

<code>@secret_group_message_bot</code> - имя бота, набрав которое, в телеграм поступит запрос о том, что вы собираетесь использовать именно <b>меня</b>

<code>@username</code> - уникальное имя пользователя в Telegram, которое также необходимо вписать, чтобы я знал, кому нужно показать сообщение. 
<b>Важно!</b> Бот работает только с пользователями, у которых есть <code>@username</code>, и которые находятся с вами в одной группе!

"<i>Ваш текст</i>" - само секретное сообщение, которое вы хотите отправить человеку в группе. Сообщение <b>не должно быть</b> длиннее 200 символов, а также <b>не может содержать</b> любые медиа, только сам текст!

Пример секретного сообщения: <code>@secret_group_message_bot @durov Приветики-пистолетики</code>

После того, как вы набрали всё для отправки сообщения, во всплывающем окне нажмите на "<i>Отправить секретное сообщение</i>"',

    'message_read' => '<b>Сообщение было прочитано</b> ✔',

    'not_your_message' => 'Упс! Это не твое сообщение! 🤐',

    'send_title' => 'Отправить секретное сообщение',

    'send_description' => 'Укажи @username и напиши текст до 200 символов',

    'send_button' => 'Посмотреть сообщение ⬇️',

    'send_text_1' => 'Участнику ',

    'send_text_2' => ' пришло секретное сообщение!',

    'help_title' => 'Помощь 🆘',

    'help_description' => '@secret_group_message_bot @username "Сообщение"',

    'help_text' => 'Набери секретное сообщение в следующем формате - <code>@secret_group_message_bot</code> <code>@username</code> "<i>Ваш текст</i>"

Пример: @secret_group_message_bot @durov Приветики-пистолетики

Далее во всплывающем окне бота нажми на "<i>Отправить секретное сообщение</i>"

<b>Но предупреждаем:</b> сообщение <b>не должно быть</b> длиннее 200 символов, а также <b>не может содержать</b> любые медиа, только сам текст!

Секретные сообщения могут отправляться <b>только</b> пользователям с <code>@username</code>!',

    'private_title' => 'Я работаю только в группе!',

    'private_description' => 'Нажми на меня, чтобы получить инструкцию!',

    'private_text' => 'Привет! Через <b>меня</b> ты можешь отправлять секретные сообщения в группах!

Я работаю в Inline - режиме, это значит, что меня даже <b>не нужно приглашать в беседу!</b>

Формат отправки секретных сообщений таков - <code>@secret_group_message_bot</code> <code>@username</code> "<i>Ваш текст</i>"

Давай разберем по порядку, как все работает:

<code>@secret_group_message_bot</code> - имя бота, набрав которое, в телеграм поступит запрос о том, что вы собираетесь использовать именно <b>меня</b>

<code>@username</code> - уникальное имя пользователя в Telegram, которое также необходимо вписать, чтобы я знал, кому нужно показать сообщение
<b>Важно!</b> Бот работает только с пользователями, у которых есть <code>@username</code>, и которые находятся с вами в одной группе!

"<i>Ваш текст</i>" - само секретное сообщение, которое вы хотите отправить человеку в группе. Сообщение <b>не должно быть</b> длиннее 200 символов, а также <b>не может содержать</b> любые медиа, только сам текст!

Пример секретного сообщения: <code>@secret_group_message_bot @durov Приветики-пистолетики</code>

После того, как вы набрали всё для отправки сообщения, во всплывающем окне нажмите на "<i>Отправить секретное сообщение</i>"',

    'donate' => '<b>Благодарим за донат!</b>'

];

$english_language = [

    'start_message' => 'Hey! Through <b>me</b> you can send secret messages in groups!

I work in Inline - Mode, which means that <b>I do not even need to be invited to the groups!</b>

Type /help for instructions and /language for language selection',

    'developer' => '🧑‍💻 Developer — @fakin_kiska
    
🥝 You can <b>support</b> the developer by clicking on the link below for a <b>QIWI wallet!</b>',

    'help' => 'The format for sending secret messages is <code>@secret_group_message_bot</code> <code>@username</code> "<i>Your text</i>"

Let is take a look at how it all works:

<code>@secret_group_message_bot</code> - the name of the bot, by typing which, telegram will receive a request that you are going to use exactly <b>me</b>

<code>@username</code> is a unique username in Telegram, which also needs to be entered so that I know who to show the message to.
<b>Important!</b> The bot only works with users who have <code>@username</code> and who are in the same group as you!

"<i>Your text</i>" is the secret message you want to send to the person in the group. The message <b>should not</b> be longer than 200 characters, and also <b>cannot</b> contain any media, only the text itself!

Example of a secret message: <code>@secret_group_message_bot @durov Hi, Pavel!</code>

After you have typed everything to send a message, in the pop-up window, click on "<i>Send secret message</i>"',

    'message_read' => '<b>Message has been read</b> ✔',

    'not_your_message' => 'Oops! This is not your message! 🤐',

    'send_title' => 'Send secret message',

    'send_description' => 'Specify @username and write text up to 200 characters',

    'send_button' => 'View message ⬇️',

    'send_text_1' => 'The member ',

    'send_text_2' => ' received a secret message!',

    'help_title' => 'Help 🆘',

    'help_description' => '@secret_group_message_bot @username "Text"',

    'help_text' => 'Type a secret message in the following format - <code>@secret_group_message_bot</code> <code>@username</code> "<i>Your text</i>"

Example: @secret_group_message_bot @durov Hi, Pavel! 

Next, in the pop-up window of the bot, click on "<i>Send secret message</i>"

<b>But be warned:</b> the message <b>should not</b> be longer than 200 characters, and <b>cannot</b> contain any media, only the text itself!

Secret messages can only be sent to <b>only</b> users with <code>@username</code>!',

    'private_title' => 'I only work in a group!',

    'private_description' => 'Click me for instructions!',

    'private_text' => 'Hey! Through <b>me</b> you can send secret messages in groups!

I work in Inline mode, which means that <b>I do not even need to be invited to the conversation!</b>

The format for sending secret messages is <code>@secret_group_message_bot</code> <code>@username</code> "<i>Your text</i>"

Let is take a look at how it all works:

<code>@secret_group_message_bot</code> - the name of the bot, by typing which, telegram will receive a request that you are going to use exactly <b>me</b>
<code>@username</code> - a unique username in Telegram, which also needs to be entered so that I know who to show the message to
<b>Important!</b> The bot only works with users who have <code>@username</code> and are in the same group as you!

"<i>Your text</i>" is the secret message you want to send to the person in the group. The message <b>should not</b> be longer than 200 characters, and also <b>cannot</b> contain any media, only the text itself!

Example of a secret message: <code>@secret_group_message_bot @durov Hi, Pavel!</code>

After you have typed everything to send a message, in the pop-up window, click on "<i>Send secret message</i>"',

    'donate' => '<b>Thanks for the donation!</b>'

];
