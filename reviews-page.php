<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="reviews-guests">
                <h2 id="h2">Отзывы наших гостей</h2>
                <p>Что может быть приятней, когда говорят добрые слова, за работу которую ведёт наш дружный коллектив. С
                    удовольствием делимся с вами отзывами наших гостей</p>
                <div class="review-item">
                    <a href="/img/review.jpg" data-fancybox="gallery">
                        <img src="/img/review.jpg" alt="Отзыв в тетради" width="198px" height="247px"
                            class="review-img">
                    </a>
                    <div class="review-item-text">
                        <p>Огромное спасибо рабюотникам базы, а особенно поварам за прекрасное обслуживание. Отличное
                            меню,
                            разнообразное, вкусное!</p>
                        <p>Приветливые лица, заботливые люди. Чтоб вы так жили, как мы вам желаем!</p>
                        <span class="review-date">14.06.2017</span>
                    </div>
                </div>
                <div class="review-item">
                    <a href="/img/review.jpg" data-fancybox="gallery">
                        <img src="/img/review.jpg" alt="Отзыв в тетради" width="198px" height="247px"
                            class="review-img">
                    </a>
                    <div class="review-item-text">
                        <p>Огромное спасибо рабюотникам базы, а особенно поварам за прекрасное обслуживание. Отличное
                            меню,
                            разнообразное, вкусное!</p>
                        <p>Приветливые лица, заботливые люди. Чтоб вы так жили, как мы вам желаем!</p>
                        <span class="review-date">14.06.2017</span>
                    </div>
                </div>
                <ul class="review-photo gallery">
                    <li>
                        <a href="/img/review-photo.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a>
                    </li>
                    <li><a href="/img/review-photo2.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo2.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a>
                    </li>
                    <li><a href="/img/review-photo3.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo3.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a>
                    </li>
                    <li>
                        <a href="/img/review-photo4.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo4.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a>
                    </li>
                </ul>
            </article>
            <article class="thanks" id="thanks">
                <h2>Благодарности</h2>
                <ul class="thanks-photo gallery">
                    <li><a href="/img/review-photo.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a></li>
                    <li><a href="/img/review-photo.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo2.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a></li>
                    <li><a href="/img/review-photo3.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo3.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a></li>
                    <li><a href="/img/review-photo4.jpg" data-fancybox="gallery">
                            <img src="/img/review-photo4.jpg" alt="Отзыв в тетради" width="198px" height="247px">
                        </a></li>
                </ul>
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