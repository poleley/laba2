<div class="news">
    <div class="title"><?= $title; ?></div>
    <div class="preview">
        <?= $preview; ?>
    </div>
    <div class="text1">
        <img src="<?= $img; ?>">
        <div class="text"><?= $text; ?></div>
    </div>
    <div class="date">
        <?= $date; ?>
    </div>
    <div class="backToMain">
        <p class="buttonsRow">
            <a href="<?= sprintf("%smain&page=1", $addr) ?>" class="link">Назад к новостям</a>
            <a href="<?= sprintf("%sedit&id=%d", $addr, $_GET['id']) ?>" class="link">Редактировать</a>
        </p>
    </div>
</div>
