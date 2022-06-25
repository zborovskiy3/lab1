<?php
require_once "Shop.php";
$shop = new Shop();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB1</title>
</head>
<body>
<form action="" method="post">
    <input placeholder="Производитель:" type="text" name="vendor">
    <input type="submit"><br>

</form>
<br>
<form action="" method="post">
    <input placeholder="Категория:"type="text" name="category">
    <input type="submit"><br>

</form>
<br>
<form action="" method="post">
    <input placeholder="Минимальная цена:" type="number" name="minPrice">
    <input placeholder="Максимальная цена:" type="number" name="maxPrice">
    <input type="submit"><br>

</form>

<?php
if (isset($_POST["vendor"])) {
    $shop->vendor();
} elseif (isset($_POST["category"])) {
    $shop->category();
} elseif (isset($_POST["minPrice"])) {
    $shop->price();
}
?>
</body>
</html>

