<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/>
  <title>First code</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Тело сайта, отвечает за вывод на страницу-->
  <header>
  <!-- Шапка сайта-->
  </header>
  <nav>
  <!-- Навигация -->
  </nav>
  <main>
    <!-- Основное тело -->
    <?php
      if(!empty($_POST['chislo'])){
          $chislo = $_POST['chislo'];
          $chisloBigger = $chislo+1;
            echo('Ваше любимое число: ' .$chislo);
            echo(' Однако нам кажется что вашему темпераменту подойдет именно это число: ' .$chisloBigger);
        }
    ?>

<form name="test" method="post" action="age.php">
<input type="text" size="40" name="age" placeholder="Введите кол-во секунд">
</p>
</p>
<p><input type="submit" value="Отправить">
</form>
<?php
if(!empty($_POST['age'])){
  function Modulo ($num1)
  {
    $buff = intdiv($num1,1);
    $res = $num - $buff;
  }
    $age = $_POST['age'];
      print "Если вы прожили: ";
      echo $age;
      print " секунд, ";
    $age_year = intdiv($age,31536000);
    $age_grover = Modulo($age_year);
    $mounth = $age_grover*12;
    $week = Modulo($mounth)*4;
    $day = Modulo($week)*7;
    $hour = Modulo($day)*24;
      print "то вам: ";
      echo $age_year;
      print " лет, ";
      echo round($mounth);
      print " месяцев, ";
      echo round($week);
      print " недель, ";
      echo round($day);
      print " дней, ";
      echo round($hour);
      print " часов!";
  }

?>
  </main>
  <footer>
  <!-- Подвал сайта-->
  </footer>
</body>
</html>
