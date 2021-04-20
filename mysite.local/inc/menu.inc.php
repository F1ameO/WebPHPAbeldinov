<h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
    $menu = array(
      'Домой' => "index.php",
      'О нас'=> "about.php",
      'Контакты'=> "contact.php",
      'Таблица умножения'=> "table.php",
      'Калькулятор'=> "calc.php"
      );
  drawMenu($menu, false);
    ?>