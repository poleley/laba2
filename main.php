<?php for($i = 0; $i < $count; $i++): ?>
<div class="newsList">
        <div class="title"><?= $data[$i]['title'] ?></div>
        <div class="preview">
            <?= $data[$i]['preview'] ?>
            <p class="buttonsRow">
                <a href="<?= sprintf("%snews&id=%d", $addr, ($page - 1) * 4 + 1 + $i) ?>" class="link">Подробнее</a>
                <a href="<?= sprintf("delete.php?id=%s", ($page - 1) * 4 + 1 + $i) ?>" class="link">Удалить</a>
            </p>
        </div>
        <div class="date"><?= $data[$i]['date'] ?></div>
</div>
<?php endfor; ?>
<p>
    <a href="<?= sprintf("%sadd", $addr) ?>" class="link">Добавить новость</a>
</p>
<!--<p class="page_list">-->
<!--    <div class="page_list">-->
<!--    --><?php //for()
//    </div>
//</p>

