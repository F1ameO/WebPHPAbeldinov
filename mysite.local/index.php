<?php
  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $year = strftime('%Y');
  /*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H');
$welcome = ''; // Инициализируем переменную для приветствия

if ($hour > 0 && $hour < 6) {
  $welcome = 'Доброе ночи';
}
elseif ($hour > 6 && $hour < 12) {
  $welcome = 'Доброе утро';
}
elseif ($hour > 12 && $hour < 18) {
  $welcome = 'Доброе день';
}
elseif ($hour > 18 && $hour < 23) {
  $welcome = 'Доброе вечер';
}
else {
  $welcome = 'Доброе ночи';
}
   $leftMenu = [
      ['link'=>'Домой', 'href'=>'index.php'],
      ['link'=>'О нас', 'href'=>'about.php'],
      ['link'=>'Контакты', 'href'=>'contact.php'],
      ['link'=>'Таблица умножения', 'href'=>'table.php'],
      ['link'=>'Калькулятор', 'href'=>'calc.php'],
    ];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Гость!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <blockquote>
      <?php echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.'; ?>
    </blockquote>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
   <?php
    foreach ($leftMenu as $item) { // $item - внутренний массив
      echo "<ul>";
      echo "<li>";
      echo "<a href='{$item['href']}'> {$item['link']} </a>";
      echo "</li>";
      echo "</ul>";
    }
    ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?echo $year; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>