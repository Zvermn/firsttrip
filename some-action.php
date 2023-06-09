<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="some-action">
                <ul class="bread-crumbs">
                    <li><a href="/actions.php">События </a></li>
                    <li class="active">Дети против родителей</li>
                </ul>
                <picture>
                    <source media="(max-width: 768px)" srcset="/img/trip-mini.jpg" width="185px" height="278px">
                    <img src="/img/trip.jpg" alt="" width="310px" height="420px" class="some-action-img">
                </picture>
                <h2 id="h2">Дети против родителей</h2>
                <span class="subtitle">Семейное соревновательное мероприятие на берегу Байкала</span>
                    <h3>Что нас ждёт?</h3>
                    <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26
                        августа 2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы
                        фестиваля. Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься
                        интересными делами.</p>
                    <h3>Что берём с собой</h3>
                    <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26
                        августа 2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы
                        фестиваля. Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься
                        интересными делами.</p>
                    <h3>Призы от наших партнёров</h3>
                    <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26
                        августа 2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы
                        фестиваля. Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься
                        интересными делами.</p>
                <input type="submit" value="Бронировать" class="input-popap open-pop-up">
            </article>
            <?php include 'includes/popup.php';?>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>