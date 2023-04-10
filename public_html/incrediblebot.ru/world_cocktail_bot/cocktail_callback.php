<?php

// Функция с callback_data для коктейлей и штучек
cocktail_callback($callback_data, $user_id, $message_id);

// Объединение всех массивов с коктейлями в один
$all_cocktails = array_merge($the_unforgettables, $contemporary_classic, $new_era_drinks);

// Функция с callback_data для краткой истории и ингредиентов
switch_callback($callback_data, $user_id, $all_cocktails, $message_id);