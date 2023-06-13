<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="some-news">
                <ul class="bread-crumbs">
                    <li><a href="/news.php">Новости </a></li>
                    <li class="active">На Байкале открыли ледовую переправу на Ольхон</li>
                </ul>
                <picture>
                    <source media="(max-width: 768px)" srcset="/img/trip-mini.jpg" width="185px" height="278px">
                    <img src="/img/some-news-img.jpg" alt="" width="310px" height="420px" class="some-news-img">
                </picture>
                <h2 class="some-news-title" id="h2">На Байкале открыли ледовую переправу на Ольхон</h2>
                <h3>Наконец-то это случилось</h3>
                <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26 августа
                    2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы фестиваля.
                    Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься интересными
                    делами.</p>
                <h3>Новое расписание парома</h3>
                <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26 августа
                    2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы фестиваля.
                    Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься интересными
                    делами.</p>
                <a class="link-back-news" href="/news.php">К списку новостей</a>
            </article>
            <?php include 'includes/popup.php';?>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>