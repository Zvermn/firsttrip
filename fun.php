<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="fun">
                <h2 id="h2">Отдых и развлечния</h2>
                <section class="excursions">
                    <h3>Экскурсии</h3>
                    <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26
                        августа 2018 года в посёлке Сахюрта Ольхонского района</p>
                    <span>Экскурсии от наших партнёров:</span>
                    <ul class="excursions-list">
                        <li>Ольхон от начала до конца</li>
                        <li>Этногравический экскурс</li>
                        <li>Водная экскурсия по побережью</li>
                        <li>Конная прогулка</li>
                    </ul>
                    <div class="excursions-block-photo">
                        <div class="block-photo-img">
                            <ul class="gallery">
                                <li>
                                    <a href="#" data-fancybox="gallery">
                                        <img src="/img/excursion1.jpg" alt="" class="excursion-img">
                                    </a></li>
                                <li>
                                    <a href="#" data-fancybox="gallery">
                                        <img src="/img/excursion2.jpg" alt="" class="excursion-img">
                                    </a></li>
                                <li>
                                    <a href="#" data-fancybox="gallery">
                                        <img src="/img/excursion3.jpg" alt="" class="excursion-img">
                                    </a></li>
                                <li>
                                    <a href="#" data-fancybox="gallery">
                                        <img src="/img/excursion4.jpg" alt="" class="excursion-img">
                                    </a></li>
                                <li>
                                    <a href="#" data-fancybox="gallery">
                                        <img src="/img/excursion5.jpg" alt="" class="excursion-img">
                                    </a></li>
                            </ul>
                        </div>
                        <div class="block-photo-link">
                            <a href="/photogallery.php" class="excursions-photo-link">Смотреть больше фотографий</a>
                        </div>
                    </div>
                </section>
                <section class="sport-area">
                    <h3>Волейбольная площадка</h3>
                    <p>К вашим услугам волейбольная площадка, набор для игры в городки, бадминтон, шахматы, дартс</p>
                </section>
                <section class="meet-cooking">
                    <h3>Жарка мяса на открытом огне</h3>
                    <p>Более 30 мастер-классов пройдут во время арт-фестиваля «Baikal Live», который состоится 24-26
                        августа 2018 года в посёлке Сахюрта Ольхонского района Иркутской области, сообщают организаторы
                        фестиваля. Все три дня его гости смогут не только слушать превосходную музыку, но и заниматься
                        интересными делами.</p>
                </section>
                <input type="submit" value="Бронировать" class="input-popap open-pop-up">
            </article>
            <?php include 'includes/popup.php';?>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
</body>

</html>