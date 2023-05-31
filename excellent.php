<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="excellent">
                <h2>Ваша заявка <span class="numb-request">№6733</span> успешно отправлена</h2>
                <h3>Мы свяжемся с вами в ближайшее время для,<br>
                    подтверждения брони на размещение!</h3>
                <p>Багодарим, за проявленный интерес!</p>
                <a href="/index.php" class="link-main-page">Вернуться на главную</a>
                <picture>
                    <source media="(max-width: 360px)" srcset="/img/cat-mini2.jpg" width="255" height="255">
                    <source media="(max-width: 768px)" srcset="/img/cat-mini.jpg" width="355" height="355">
                    <img src="/img/cat.jpg" alt="Довольный кот" width="491" height="491">
                </picture>
            </article>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>