<!DOCTYPE html>
<html lang="ru">
<head>

<meta charset="utf-8">
<title>Testing development v.1.0b</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="initial-scale=1, width=device-width" name="viewport">

</head>
<body>

<?php
//phpinfo();
require_once "../vendor/autoload.php";

\Moment\Moment::setLocale("ru_RU");
$m = new \Moment\Moment("now", "Europe/Moscow");
?>

<img src="/i/izg.png" alt="Сайт в разработке" width="338" height="200">
<h2>
<?php
echo $m->format("l, d F Y H:i:s T (P)"); // e.g. 2012-10-03T12:00:00+0200
?>
</h2>

<pre>
<?php
$dbHandler = new \PDO("mysql:host=127.0.0.1;dbname=demoTest", "root", "D4h8L7z8", [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"
]);
$statementHandler = $dbHandler->prepare("select * from users");
$statementHandler->execute();
print_r($statementHandler->fetchAll());
?>
</pre>


<style> 
body {
  text-align: center;
}

pre {
  text-align: left;
}

img {
  max-width: 100%;
  display: block;
  margin: 0 auto;
}
</style>
</body>
</html>