<?php
class config{
  public $bd = [
    'ip' => 'localhost',//Адрес базы данных
    'user' => 'root',//Имя пользователя
    'password' => '',//Пароль от базы данных
    'dbname' => '',//Имя базы данных
   ];
  public $urls = [ //Ссылки
      'ok' => 'https://ok.ru/', //Одноклассники (На всякий случай) 
      'vk' => 'https://vk.com/', //Вконтакте
      'yt' => 'https://www.youtube.com/', //Ютюб
    ];
  public $tmc = [ // TradeMC
   'id' => '1', //ID магазина
   'key' => '', //Секретный ключ магазина
   ];
  /*public $da = [ //DonationAlerts
    'id'=> '', //ID пользователя
    ];*/
  public $project = [ // Проект
      'name' => 'TestdCraft', //Имя проекта
      'email' => 'testmail@mail.com', //Почта проекта
      'tel' => '+79123456789', //Телефон проекта (или вторая почта)
      'img' => 'favicon.png', //Иконка сайта в папке img
    ];
  public $emaill = [  // SMTP сервер
    'login' => 'administrarion1@executeworld.ru', // Имя пользователя почтового сервера
    'password' => '', // Пароль от пользователя почтового сервера
    'host' => 'smtp.yandex.ru', // SMTP адрес почтового сервера
    'title' => 'Execute World', // Имя отправившего
    'charset' => 'UTF-8', // Кодировка письма
    ];
  public $recap = [ //reCAPTCHA
    'public' => '', // Публичный ключ рекапчи
    'secret' => '' // Секретный ключ рекапчи (его никому не говорите)
    ];
  public $vk = [  // Группа ВК
    'id' => '169440684', // ID группы вашей вконтакте
    'sec' => '15', //Открывать сообщения через сколько-то сек (во дефулту через 15 сек)
    ];
  public $servers =[ // Сервера проекта
        [
          "Vanila", // Имя
          "mc.hypixel.net", // IP
          "25565" //Порт
        ],
        [
          "HiTech", // Имя
          "46.174.48.33", // IP
          "25668"
        ],
        [
          "Minigames", // Имя
          "94.23.204.159", // IP
          "2561" //Порт
        ],
      ];
}