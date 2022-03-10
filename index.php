<?php
    $addr = "http://localhost/laba2/index.php?name=";
    $name = $_GET['name'];
    $link = mysqli_connect("localhost:3307", "root", "");
    switch ($name) {
        case 'main':
            if ($link == false) {
                print("Ошибка при подключении к БД");
            }
            else {
                $page = $_GET['page'];
                mysqli_set_charset($link, "utf8");
                $sql = sprintf('SELECT preview, title, date FROM news.nstu_news WHERE id >= %d AND id <= %d', ($page - 1) * 4 + 1, $page * 4);
                $res = mysqli_query($link, $sql);
                if ($res == false) {
                    print("Неудачное получение данных\n");
                    print(mysqli_error($link));
                }
                else {
                    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
                    $count = mysqli_num_rows($res);
                }
            }
            break;
        case 'news':
            if ($link == false) {
                print("Ошибка при подключении к БД");
            }
            else {
                $id = $_GET['id'];
                mysqli_set_charset($link, "utf8");
                $res = mysqli_query($link, sprintf('SELECT text, preview, img, title, date FROM news.nstu_news WHERE id = %d', $id));
                if ($res == false) {
                    print("Неудачное получение данных\n");
                    print(mysqli_error($link));
                }
                else {
                    $row = mysqli_fetch_array($res);
                    $text = $row['text'];
                    $preview = $row['preview'];
                    $img = $row['img'];
                    $title = $row['title'];
                    $date = $row['date'];
                }
            }
            break;
    }
    require('layout.php');

