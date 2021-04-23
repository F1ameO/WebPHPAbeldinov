<?php
require_once 'inc/lib.inc.php';
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 9;
$rows = ($rows) ? $rows : 9;
$color = ($color) ? $color : 'teal';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?=$cols?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?=$rows?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?=$color?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
	drawTable($cols, $rows, $color);
    ?>
    <!-- Таблица -->
    <!-- Область основного контента -->

</body>

</html>