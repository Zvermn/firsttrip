<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="contacts">
                <h2 id="h2">Контакты</h2>
                <p>Местонахождение: Иркутская обл., Ольхонский р-он, о. Ольхон, база отдыха Первая Экспедиция (между
                    поселками Хужир и Харанцы).</p>
                <span>Адрес офиса: г. Иркутск, ул. Седова, 48, офис 406.</span>
                <span>Тел./факс: <a href="tel:+73952561026">(3952) 56-10-26.</a></span>
                <span>Телефоны:
                    <a href="tel:+79500555983">89500555983,</a>
                    <a href="tel:+79500555985">89500555985.</a>
                </span>
                <span>E-mail: <a href="mailto:info@one-exp.ru" class="contacts-email-link">info@one-exp.ru</a></span>
                <span>Сайт: <a href="http://olkhon-tour.ru" class="contacts-site-link">www.olkhon-tour.ru</a></span>
                <p>Заявку на бронирование можете отправить на наш электронный адрес, оформить по контактным телефонам
                    или через форму на сайте.</p>
                <input type="submit" value="Бронировать" class="input-popap open-pop-up">
            </article>
            <?php include 'includes/popup.php';?>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>