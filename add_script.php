<?php
$img_name = $_FILES['img']['name'];
$current_path = $_FILES['img']['tmp_name'];
$new_path = dirname(__FILE__) . '/img/' . $img_name;
$ismoved = move_uploaded_file($current_path, $new_path);
$img_name = sprintf('img\\\\%s', $img_name);
$link = mysqli_connect("localhost:3307", "root", "");
mysqli_set_charset($link, "utf8");
$res = mysqli_query($link, "SELECT COUNT(*) FROM news.nstu_news");
$count = mysqli_fetch_array($res)[0];
print("Количество " . $count);
$sql = sprintf("INSERT INTO news.nstu_news(`id`, `title`, `preview`, `text`, `img`) VALUES ('%d','%s','%s','%s','%s')",$count + 1, $_POST['title'], $_POST['preview'], $_POST['text'], $img_name);
$res = mysqli_query($link, $sql);
if($res == false)
    print("Не удалось добавить");
header("Location: http://localhost/laba2/index.php?name=main&page=1");
