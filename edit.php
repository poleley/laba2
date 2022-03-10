<?php
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
?>
<div class="news">
    <form action="<?= "edit_script.php?id=".$id ?>" class="addNewsForm" method="post" enctype="multipart/form-data">
        <p class="title">
            <input type="text" name="title" class="addTitle" value="<?= $title ?>">
        </p>
        <p class="previewAdd">
            <textarea name="preview" class="addPreview" rows="3"><?= $preview ?></textarea>
        </p>
        <input type="file" name="img" class="inputFile">
        <p>
            <textarea name="text" class="addText" rows="12"><?= $text ?></textarea>
        </p>
        <button type="submit" class="addNews">Сохранить новость</button>
    </form>
    <div class="backToMain">
        <p><a href="<?= sprintf("%smain&page=1", $addr) ?>" class="link">Назад к новостям</a></p>
    </div>
</div>