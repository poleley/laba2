<?php
$img_name = $_FILES['img']['name'];
$current_path = $_FILES['img']['tmp_name'];
$new_path = dirname(__FILE__) . '/img/' . $img_name;
//$ismoved = move_uploaded_file($current_path, $new_path);
$img_name = sprintf('img\\\\%s', $img_name);
$link = mysqli_connect("localhost:3307", "root", "");
mysqli_set_charset($link, "utf8");
$sql = sprintf('UPDATE news.nstu_news SET text = "%s", preview = "%s", title = "%s" WHERE id = %d', $_POST['text'], $_POST['preview'], $_POST['title'], $_GET['id']);
$res = mysqli_query($link, $sql);
print(mysqli_error($link));
if($res == false)
    print("Не удалось добавить");
header("Location: http://localhost/laba2/index.php?name=main&page=1");