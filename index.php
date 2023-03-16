<?php
// подключаем классы
require_once 'data.php';
require_once 'formater.php';
require_once 'enumColors.php';
require_once 'generate.php';
// прием данных из формы на сервер
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name = $_POST['name'] ?? '';
   $email = $_POST['email'] ?? '';
   $rEmail = $_POST['rEmail'] ?? '';
   $phone = $_POST['phone'] ?? '';
   $rPhone = $_POST['rPhone'] ?? '';
}
// записываем данные в массив
$data =[
    'name' => $name,
    'emails' => [$email, $rEmail],
    'phones' => [$phone, $rPhone],
];
// создаем новый объект в котором хранится массив данных из формы
$formData = new signData($data);

// форматирование телефонного номера
$phoneFormater = new phoneFormater();
$formattedPhones = $phoneFormater->formater($formData->phones);

// объект генерации страницы на клиент
$signGenerate = new signGenerate();

// вывод объекта в разном цвете
echo $signGenerate->genHTML($formData->name, $formattedPhones[0], $formattedPhones[1], $formData->emails[0], $formData->emails[1],Colors::red->value);
echo $signGenerate->genHTML($formData->name, $formattedPhones[0], $formattedPhones[1], $formData->emails[0], $formData->emails[1],Colors::green->value);