<?php
require_once 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <style>
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        table td, table th {
            border: 1px solid #ccc;
            padding: 5px;
        }

        table th {
            background: #eee;
        }
    </style>
    <meta charset="UTF-8">
    <title>Библиотека успеха</title>
</head>
<h1>Библиотека успешного человека</h1>
<?php if (isset($_GET)) { ?>
<form method="GET">
    <input type="text" name="isbn" placeholder="ISBN" value="<?= $_GET['isbn'] ?>" />
    <input type="text" name="name" placeholder="Название книги" value="<?= $_GET['name'] ?>" />
    <input type="text" name="author" placeholder="Автор книги" value="<?= $_GET['author'] ?>" />
    <input type="submit" value="Поиск" />
</form>
<?php } ?>
<br>
<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Aвтор</th>
        <th>Год</th>
        <th>ISBN</th>
        <th>Жанр</th>
    </tr>
<?php
if (isset($_GET['isbn']) || isset($_GET['name']) || isset($_GET['author'])) {
$sql = 'SELECT * FROM books WHERE isbn LIKE "%' . $_GET['isbn'] . '%"' . 'AND name LIKE "%' . $_GET['name'] . '%"' . 'AND author LIKE "%' . $_GET['author'] . '%"';
}
else {
    $sql = 'SELECT id,name,author,year,isbn,genre FROM books';}
foreach ($pdo->query($sql) as $row) { ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['author'] ?></td>
        <td><?php echo $row['year'] ?></td>
        <td><?php echo $row['isbn'] ?></td>
        <td><?php echo $row['genre'] ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>

