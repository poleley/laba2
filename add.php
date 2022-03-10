<div class="news">
    <form action="add_script.php" method="post" enctype="multipart/form-data" class="addNewsForm">
        <p class="title">
            <input type="text" name="title" placeholder="Название новости" class="addTitle">
        </p>
        <p class="previewAdd">
            <textarea name="preview" placeholder="Превью" class="addPreview" rows="3"></textarea>
        </p>
        <input type="file" name="img" class="inputFile">
        <p>
            <textarea name="text" placeholder="Текст новости" class="addText" rows="12"></textarea>
        </p>
        <button type="submit" class="addNews">Добавить новость</button>
    </form>
    <div class="backToMain">
        <p><a href="<?= sprintf("%smain&page=1", $addr) ?>" class="link">Назад к новостям</a></p>
    </div>
</div>