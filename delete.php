<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost:3307", "root", "");
$sql = "DELETE FROM news.nstu_news WHERE id = $id";
$res = mysqli_query($link, $sql);
$sql = "UPDATE news.nstu_news SET id = id- 1, date = date WHERE id > " . $id;
$res = mysqli_query($link, $sql);
header("location: http://localhost/laba2/index.php?name=main&page=1");