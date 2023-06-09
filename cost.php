<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php';?>

<body>
    <div class="wrap">
        <?php include 'includes/header.php';?>
        <main>
            <article class="cost">
                <section>
                    <h2 class="cost-title" id="h2">Размещение</h2>
                    <a href="#" download="#" class="cost-price-dwn">Скачать прайс</a>
                    <table class="cost-living-table">
                        <thead>
                            <tr>
                                <th>Период:</th>
                                <th>01 июн - 30 июн</th>
                                <th>01 июл - 14 авг</th>
                                <th>15 авг - 30 сен</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>При 5-х местном размещении</td>
                                <td>900</td>
                                <td>1000</td>
                                <td>900</td>
                            </tr>
                            <tr>
                                <td>При 4-х местном размещении</td>
                                <td>950</td>
                                <td>1050</td>
                                <td>950</td>
                            </tr>
                            <tr>
                                <td>При 3-х местном размещении</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                            </tr>
                            <tr class="cost-living-table-row-last">
                                <td>При 2-х местном размещении</td>
                                <td>1100</td>
                                <td>1250</td>
                                <td>1100</td>
                            </tr>
                            <tr>
                                <td>Завтрак</td>
                                <td>300</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Обед</td>
                                <td>500</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Ужин</td>
                                <td>450</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Комплексное</td>
                                <td>1250</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>При проживании без питания вы можете пользоваться специально отведенной кухней для
                        самостоятельного
                        приготовления пищи.</p>
                </section>
                <section>
                    <h2>Дополнительные услуги</h2>
                    <table class="services-table">
                        <tr>
                            <td>Русская баня</td>
                            <td>1000 руб. / час (до 5 чел)</td>
                        </tr>
                        <tr>
                            <td>Автостоянка</td>
                            <td>150 руб. / сут.</td>
                        </tr>
                        <tr>
                            <td>Тёплый душ</td>
                            <td>Бесплатно</td>
                        </tr>
                        <tr>
                            <td>Аренда места под палатку</td>
                            <td>500 руб. / сут. с человека</td>
                        </tr>
                    </table>
                </section>
                <section class="discounts">
                    <h2>Скидки</h2>
                    <table>
                        <tr>
                            <td>Дети до 3 лет без отдельного спального места</td>
                            <td>Бесплатно</td>
                        </tr>
                        <tr>
                            <td>Для детей до 10 лет</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td>Для групп свыше 10 человек</td>
                            <td>от 5%</td>
                        </tr>
                    </table>
                </section>
                <section class="reservation">
                    <h2>Бронирование</h2>
                    <p>Предоплата при пронировании составляет 20% от стоимости услуг.</p>
                    <p>Для бронирования воспользуйтесь кнопокой ниже или позвоните по телефону:
                    </p>
                    <a href="tel:+73952561026" class="footer-tel-link reservation-tel-link">+7 (3952) 56-10-26</a>
                    <input type="submit" value="Бронировать" class="input-popap reservation-input-popap open-pop-up"
                        id="input-popap">
                    <p>Условия отмены брони :</p>
                    <ul class="conditions-rexervation-list">
                        <li>При отказе от брони более чем за 2 недели до заезда 100% предоплаты возвращаются.</li>
                        <li>При отказе от брони менее чем за одну неделю удерживается 10% стоимости услуг.</li>
                        <li>При отказе от брони менее чем за двое суток удерживается 25 % стоимости услуг.</li>
                    </ul>
                </section>
            </article>
            <?php include 'includes/popup.php';?>
        </main>
        <?php include 'includes/footer.php';?>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>