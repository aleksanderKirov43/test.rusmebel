<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, была ли форма отправлена методом POST

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $name = html_entity_decode(trim(htmlspecialchars(urldecode($name))));
    $phone = html_entity_decode(trim(htmlspecialchars(urldecode($phone))));
    $email = html_entity_decode(trim(htmlspecialchars(urldecode($email))));


    $senderEmail = 'admin@gomeopatia38.ru'; // Электронная почта отправителя
    $recipientEmail = 'region-manager43@yandex.ru'; // Ваша электронная почта
    $counter_file = 'count.txt';

    // Проверяем, существует ли файл
    if (!file_exists($counter_file)) {
        file_put_contents($counter_file, '0');
    }

    $count = file_get_contents($counter_file);
    $count++;
    file_put_contents($counter_file, $count);

    $subject = "Заявка на обратную связь №" . $count;
    $headers = "From: <$senderEmail>\r\n"; // Установка отправителя в заголовке письма
    $headers .= "Reply-To: $senderEmail\r\n";
    $messageBody = "Имя: $name\r\nТелефон: $phone\r\n";

    if (mail($recipientEmail, $subject, $messageBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error: Доступ к этому скрипту запрещен.";
}
