
<?php
echo "Привет, меня зовут Иван" ;
print_r(array_values($_POST));
$fio = $_POST['user'];
$phone = $_POST['phone'];
$checkbox = $_POST['personal-data'];
$formname = $_POST['formname'];

$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);

$fio = urldecode($fio);
$phone = urldecode($phone);

$fio = trim($fio);
$phone = trim($phone);

$emailAddress="info@t-kartika.ru";

$referer = $_SERVER['HTTP_REFERER'];
echo $fio;
echo "<br>";
echo $phone;
echo "<br>";
echo $referer;

include "libmail.php"; //Класс для работы с мейлом через smtp SSL/TSL
$m= new Mail("utf-8"); // начинаем
$m->From( " Server Notification;pelfimov@yandex.ru" ); // от кого отправляется почта
$m->To( $emailAddress ); // кому адресованно
$m->Subject("Новая заявка с сайта ");
$m->Body(
"Новая заявка с сайта
Cсылка перехода  $referer
ИМЯ  $fio
Оставленный телефон $phone
Наименование формы $formname");
$m->Priority(3);// приоритет письма
$m->smtp_on("ssl://smtp.yandex.ru","pelfimov","24m7#4be", 465);
$m->Send();    // а теперь пошла отправка


?>
