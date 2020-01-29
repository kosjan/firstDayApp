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
    <?php if(!empty($_POST['chislo'])){
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
<?php if(!empty($_POST['age'])){
$age = $_POST['age'];
echo "Если вы прожили: ";
echo $age;
echo " секунд, ";
$age = $age/365/24/60/60;
echo "то вам: ";
echo round($age);
echo " лет!";
}
?>
  </main>
  <footer>
  <!-- Подвал сайта-->
  </footer>
</body>
</html>
