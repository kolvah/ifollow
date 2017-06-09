<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ifollow
 */

get_header(); ?>
    <!-- open .header -->

    <!-- end html_open.html-->

    <!-- start header.html-->
    <section class="header">
        <div class="container">
            <div class="header__wrap">
                <span class="header__logo">ifollowing</span>
                <button class="toggle_mnu">
        <span class="sandwich">
          <span class="sw-topper"></span>
          <span class="sw-bottom"></span>
          <span class="sw-footer"></span>
        </span>
                </button>
                <ul>
                    <li><a href="#goservices" class="smoothScroll">Преимущества</a></li>
                    <li><a href="#gousing" class="smoothScroll">Для кого  </a></li>
                    <li><a href="#goconect" class="smoothScroll">Покупка </a></li>
                    <li><a href="" class="smoothScroll">Задать вопрос </a></li>
                    <li><a href="#modal1" class="open_modal">Войти</a></li>
                </ul>

                <span class="header__title">сделаем популярным</span>
                <p>Теперь это все, что нужно знать</p>
                <div class="header__price">
                    <div class="header__price_item">
                        <span class="digits">1000</span>
                        <span class="rub">рублей</span>
                    </div>
                    <div class="header__price_item">
                        <span class="digits">10000</span>
                        <span class="follover">подписчиков</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="rocket-man">
            <img src="<?= get_template_directory_uri() ?>/img/rocket-man.png" alt="">
        </div>
        <div class="clouds-wrap">
            <img src="<?= get_template_directory_uri() ?>/img/oblako.png" alt="">
        </div>
    </section>

    <!-- end header.html-->

    <!-- start services.html-->
    <section class="services" id="goservices">
        <div class="container">
            <div class="services__item">
                <div class="services__item_circle">
                    <img src="<?= get_template_directory_uri() ?>/img/icons/mailbox.png" alt="">
                </div>
                <span>Без списаний</span>
                <p>Если люди отпишутся от аккаунта, мы компенсируем новыми привлечёнными подписчиками</p>
            </div>
            <div class="services__item">
                <div class="services__item_circle">
                    <img src="<?= get_template_directory_uri() ?>/img/icons/humanoid.png" alt="">
                </div>
                <span>Без ботов</span>
                <p>На вас подписываются реальные люди привлечённые из социальных
                    сетей и других ресурсов</p>
            </div>
            <div class="services__item">
                <div class="services__item_circle">
                    <img src="<?= get_template_directory_uri() ?>/img/icons/toy.png" alt="">
                </div>
                <span>Без забот</span>
                <p>Вы не тратите время на релкаму,
                    подписчики будут увеличиваться
                    на 10 000 каждый месяц</p>
            </div>
        </div>
    </section>

    <!-- end services.html-->

    <!-- start using.html-->
    <section class="using" id="gousing">
        <div class="container">
            <div class="using__wrap">
                <h2>Использование</h2>
                <div class="using__wrap_form">
                    <h3>Личное или коммерческое</h3>
                    <p>Сервис подходит для личного использования или коммерческих аккаунтов для продвижения товаров, услуг или целого бренда.</p>
                    <p>Каждый месяц 10000 подписчиков будут добавляться на выбранную
                        страницу или канал. Чем больше у вас подписчиков, тем больше
                        вы привлекаете рекламодателей, пользователей или клиентов.</p>
                    <p>Сервис гарантирует прирост подписчиков и компенсирует списания.</p>
                    <span>1000 руб \ мес. = 10000 подписчиков \ мес.</span>
                    <a href="">подключить</a>
                </div>
            </div>

        </div>
        <div class="using-pic">
            <img src="<?= get_template_directory_uri() ?>/img/mob.png" alt="">
        </div>
    </section>

    <!-- end using.html-->

    <!-- start conect.html-->
    <section class="conect" id="goconect">
        <div class="container">
            <h2>Подключить</h2>
            <form id="paymentForm" action="" class="conect__left">
                <div class="conect__left_wrap">
                    <div class="conect__left_soc">
                        <span>Социальная сеть</span>
                        <div class="item js-social-account" data-type="vk">
                            <i class="fa fa-vk fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="item js-social-account" data-type="youtube">
                            <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="item js-social-account" data-type="instagram">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="item js-social-account" data-type="twitter">
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                        </div>
                        <input type="hidden" name="social_account">
                    </div>
                    <div class="conect__left_row">
                        <span>Ссылка на аккаунт</span>
                        <input type="text" name="account_link">
                    </div>
                    <div class="conect__left_row">
                        <span>E-mail</span>
                        <input type="email" name="email">
                    </div>
                    <div class="conect__left_payment">
                        <span>Способ оплаты</span>
                        <div class="item js-payment-type" data-type="qiwi">
                            <img src="<?= get_template_directory_uri() ?>/img/icons/favicon-192x192.png" alt="">
                        </div>
                        <div class="item js-payment-type" data-type="wm">
                            <img src="<?= get_template_directory_uri() ?>/img/icons/wmlogo_vector_blue.png" alt="">
                        </div>
                        <div class="item js-payment-type" data-type="yandex">
                            <img src="<?= get_template_directory_uri() ?>/img/icons/yad.png" alt="">
                        </div>
                        <div class="item js-payment-type" data-type="card">
                            <img src="<?= get_template_directory_uri() ?>/img/icons/001-money.png" alt="">
                        </div>
                        <input type="hidden" name="payment_type">
                    </div>
                </div>
                <div class="conect__left_info">
                    <p>Выберите социальную сеть и вставьте ссылку чтобы увидеть подробности</p>
                    <button class="js-send-form"><span>ОПЛАТИТЬ 1000₽</span></button>
                </div>
            </form>
            <div class="conect__right">
                <p>Ifollowing — первый магазин который продает
                    ежемесячную подписку на продвижение
                    аккаунта, с гарантией результата. </p>
                <p>Каждый день к вам будут подписываться
                    новые привлеченные пользователи. </p>
                <p>В течение месяца к вам добавится
                    10 000 подписчиков.</p>
                <p>
                    Продвижение доступно для аккаунтов
                    вконтакте, youtube, instagram и twitter
                </p>
                <p>После оплаты мы отправим логин и пароль
                    для личного кабинета на e-mail.</p>
            </div>
        </div>
    </section>

    <!-- end conect.html-->

    <!-- start news-wrap.html-->
    <section class="news-wrap">
        <div class="container">
            <div class="news-wrap__item">
                <span class="date">01.12.2016</span>
                <h4>Lorem ipsum dolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque fuga quidem!</p>
            </div>
            <div class="news-wrap__item">
                <span class="date">01.12.2016</span>
                <h4>Lorem ipsum dolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque fuga quidem!</p>
            </div>
            <div class="news-wrap__item">
                <span class="date">01.12.2016</span>
                <h4>Lorem ipsum dolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque fuga quidem!</p>
            </div>
        </div>
    </section>

    <!-- end news-wrap.html-->


    <!-- start footer.html-->
    <section class="footer">
        <div class="container">
            <div class="footer__logo">ifollowing</div>
            <p><a href="">ifollowing.ru</a>      <span> 2017</span>    <span> © Все права защищены</span></p>
        </div>
    </section>
    <div id="modal1" class="modal_div">
        <span class="modal_close"></span>
        <h2>Вход</h2>
        <div class="login-wrap">
            <form action="">
                <div class="login-wrap__row">
                    <span>E-mail</span>
                    <input type="text">
                </div>
                <div class="login-wrap__row">
                    <span>Пароль</span>
                    <input type="text">
                </div>
                <div class="login-wrap__row">
                    <button>Войти</button>
                    <a href="">Напомнить пароль</a>
                </div>
                <p>Пароль в личный кабинет отправляется на ваш e-mail сразу после оплаты подписки.</p>
            </form>
        </div>
    </div>
    <div id="overlay"></div>

<?php get_footer();
