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
<?php if(!empty($_POST['firstName'])){
$firstName = $_POST['firstName'];
$secondName = $_POST['secondName'];
$middleName = $_POST['middleName'];
echo "Здравствуйте, ";
echo join(' ', array( $firstName, $secondName, $middleName ) );
echo " !";
}
?>

<form name="test" method="post" action="age.php">
<p><b>Ваше любимое число:</b><br>
<input type="text" size="40" name="chislo">
</p>
</p>
<p><input type="submit" value="Отправить">
</form>
  </main>
  <footer>
  <!-- Подвал сайта-->
  </footer>
</body>
</html>
