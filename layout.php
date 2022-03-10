<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" content='width=1000'>
    <title>Новости НГТУ</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="header">
    <div>Новости НГТУ</div>
    <div>
        <a href="<?= sprintf("%slogin", $addr) ?>" class="auth">Войти</a>
        <div class="sep">|</div>
        <a href="<?= sprintf("%sregistration", $addr) ?>" class="auth">Регистрация</a>
    </div>
</div>

<div class="content">
    <?php require(sprintf('%s.php', $name)); ?>
</div>

<div class="footer">
    <p>© Новосибирский государственный технический университет, 1994–2022</p>
    <p>Приемная комиссия +7 (383) 346-02-31</p>
    <p><a href="<?= sprintf("%scontacts", $addr) ?>" class="link">Об авторах</a></p>
</div>

</body>
</html>