<?php
function clearData($data, $type='i'){
        switch($type){
        case 'i':
                 return $data;
                 break;
        case 's';
              return trim(strip_tags($data));
              break;
        }
}
$output="";
if($_SERVER['REQUEST_METHOD']=='POST'){
$num1 = clearData($_POST[num1]);
$num2 = clearData($_POST[num2]);
$operator = clearData($_POST[operator], 's');
switch ($operator){
case '+':$output=$num1+$num2;
break;
case '-':$output=$num1-$num2;
break;
case '*':$output=$num1*$num2;
break;
case '/':
        if($num2==0)
        $output='Делить на ноль нельзя';
        else
        {
          $output=$num1/$num2;
        }
  break;
  default: $output="Оператор ненайден $operator";
}
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
if(isset($output)){
        print "<p>Результат: $output</p><hr />";
        }
?>
    <!-- Область основного контента -->
    <form action='<?=$SERVER['PHP_SELF']?>' method="POST">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->

</body>

</html>