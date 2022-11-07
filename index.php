<?php
// список языков
/*$sites = array(
    "en" => "https://dev02.top/marketolog/en",
	"uk" => "https://dev02.top/marketolog/ua",
);

// получаем язык
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


// перенаправление на субдомен
header('Location: ' . $sites[$lang]);
*/
?>
<?php
	
	require "./assets/less/lessc.inc.php";
	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";

	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }

	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);

	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}

	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/script.js"></script>

    <!-- bxSlider Javascript file -->
    <script src="./assets/js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="./assets/css/jquery.bxslider.css" rel="stylesheet" />
    <script>
        $(document).ready(function() {
            $('.slider_block').bxSlider({

                slideMargin: 75,
                minSlides: 1,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 211
            });

            $('.slider2').bxSlider({
                pause: 5000,
                //auto: 'true',
                touchEnabled: false,
                slideMargin: 59,
                minSlides: 1,
                maxSlides: 3,
                moveSlides: 1,
                slideWidth: 430,
                adaptiveHeight: true
            });
            $('.slideblock1').bxSlider({
                // auto: 'true',
                slideMargin: 0,
                minSlides: 1,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 211
            });

        });

    </script>


</head>

<body onscroll="scrolldown()">
    <div class="wrapper">
        <img src="assets/img/btn-call.png" id="scrollbtn" alt="" class="btn-call" data-toggle="modal" data-target="#myModal">
        <header>
            <div id="mobile_menu" class="mobile_menu visible-xs visible-sm visible-sm">
                <div class="container">
                    <div class="faq">
                        <span class="tofaq">FAQ</span>
                    </div>
                    <div class="soc">
                        <span>Следите за нами</span>
                        <a href=""><img src="assets/img/fb.png" alt=""></a>
                        <a href=""><img src="assets/img/yt.png" alt=""></a>
                    </div>
                    <div class="callback">
                        <button data-toggle="modal" data-target="#myModal">Свяжитесь со мной</button>
                    </div>
                    <div class="lang">
                        <span>RU</span>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="visible-xs visible-sm" id="burger-menu">
                    <div class="box box_item1"></div>
                    <div class="box box_item2"></div>
                    <div class="box box_item3"></div>
                </button>
                <div class="menu">
                    <div class="left_b">
                        <div class="logo">
                            <a href="">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right_b">
                        <div class="soc">
                            <span>Следите за нами</span>
                            <a href=""><img src="assets/img/fb.png" alt=""></a>
                            <a href=""><img src="assets/img/yt.png" alt=""></a>
                        </div>
                        <div class="faq">
                            <span class="tofaq">FAQ</span>
                        </div>
                        <div class="callback">
                            <button data-toggle="modal" data-target="#myModal">Свяжитесь со мной</button>
                        </div>
                        <div class="lang">
                            <span>RU</span>
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <h1><span>Эффективный</span> директор <br>
                        по <span>маркет</span>ингу <br>
                        для вашего бизнеса
                    </h1>
                    <div class="video" data-toggle="modal" data-target="#video1">
                        <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                        <span>Смотреть видео-приветствие</span>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1 ">
            <div class="container">
                <h2 class="center"><span>Наша</span> экспертиза</h2>
                <div class="slider_block">
                    <div class="slide">
                        <div class="popup_block">
                            Чувствуете, что тратите бюджет впустую? Нужен грамотный мониторинг трат, совмещенный с маркетинг-аудитом компании. Уверены, Вам всегда есть куда потратить несколько "лишних" десятков тысяч доларов :)
                        </div>
                        <img class="mt" src="assets/img/s2.png" alt="">
                        <p>СНИЖЕНИЕ ЗАТРАТ<br>В БИЗНЕСЕ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">Форс-мажорные обстоятельства рушат планы, и бизнес катится в пропасть? Вдох, выдох, Маркетолог#2. Мы вместе найдем эффективные Решения, которые помогут</div>
                        <img src="assets/img/s1.png" alt="">
                        <p>АНТИ-КРИЗИСНОЕ<br>УПРАВЛЕНИЕ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">Консультации бывают как бесплатные, так и платные - все зависит от целей и ожидаемого результата для Вашего бизнеса!</div>
                        <img class="mt" src="assets/img/s3.png" alt="">
                        <p>ПРОФЕССИОНАЛЬНЫЙ<br>КОНСАЛТИНГ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Полноценное исследование - рынка, ресурсов, аудитории вашего продукта, конкурентов - либо все вместе взятое для успеха будущей маркетинговой стратегии!
                        </div>
                        <img src="assets/img/s4.png" alt="">
                        <p>МАРКЕТИНГ<br>АУДИТ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            У нас есть цель? Значит, обязана быть стратегия! Индивидуально для Вашего бизнеса, с учетом его особенностей, потребностей и Ваших желаний!
                        </div>
                        <img class="mt" src="assets/img/s5.png" alt="">
                        <p>Маркетинг<br>СТРАТЕГИЯ </p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Готовы запускать рекламную кампанию? Убедитесь, что бюджет распределен верно - и ожидаемый результат - тот, что вам нужен! Получите грамотный медиа-план сейчас!
                        </div>
                        <img src="assets/img/s6.png" alt="">
                        <p>Медиа<br>планирование</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть цель и стратегия? Пора действовать! Проектное управление для компаний "под ключ" так, как будто у вас собственный штат "волков рынка"! Готовы?
                        </div>
                        <img class="mt" src="assets/img/s7.png" alt="">
                        <p>ПРОЕКТНОЕ<br>УПРАВЛЕНИЕ</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Полное управление маркетингом Вашей компании - индивидуально, под ключ, с высокой долей ответственности за результат!
                        </div>
                        <img src="assets/img/s8.png" alt="">
                        <p>Маркетинг-директор<br>на аутсорсе</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть нерегулярные задачи, требующие глубокого понимания вашего бизнеса и компании? Готовы взять на поддержку, окружить Ваш бизнес заботой и любовью!
                        </div>
                        <img class="mt" src="assets/img/s9.png" alt="">
                        <p>Маркетинг поддержка<br>компаний, проектов</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Хотите инвестировать средства в новый бизнес? Гораздо лучше потратить тысячи долларов на маркетинговые исследования, чем потерять десятки и сотни тысяч на бизнесе, который "не взлетит"
                        </div>
                        <img src="assets/img/s10.png" alt="">
                        <p>Тест<br>бизнес-идеи</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Профессионально создаем уверенное "лицо" для бренда и бизнеса! Выделяйтесь среди конкурентов, привлекайте клиентов, будьте в тренде!
                        </div>
                        <img class="mt" src="assets/img/s11.png" alt="">
                        <p>Профессиональный<br>ребрендинг</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Сомневаетесь в эффективности Вашей команды маркетологов? Доверьте проверку компетенций профессионалам! Проведем оценку, и предоставим развернутые результаты и рекомендации!
                        </div>
                        <img src="assets/img/s12.png" alt="">
                        <p>Оценка компетенций<br>маркетинг-персонала</p>
                    </div>
                    <div class="slide">
                        <div class="popup_block">
                            Есть эффективная команда - и требуется рост ее компетенций? Составим индивидуальные программы развития, и проконтролируем результат!
                        </div>
                        <img class="mt" src="assets/img/s13.png" alt="">
                        <p>Корпоративное<br>обучение и развитие</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <h2 class="center"><span>Проблемы</span> и решения</h2>
                <div class="desc center">Нажмите на Проблему, чтобы увидеть Решение</div>

                <div class="drop_block">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Найм директора по марктетингу - сложный и дорогостоящий процесс
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="list">Мы доступны <b>"здесь и сейчас"</b> - нужно только подписать договор сотрудничества</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Кандидата на позицию директора по маркетингу трудно оценить с точки зрения компетенций
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Наши компетенции можно оценить по нашим проектам, либо на переговрах. К тому же, мы прописываем ответственность в договорах</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        У собственника бизнеса и директора по маркетингу, как правило, разные взгляды на вопросы ввиду разного опыта
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Многие из нашей команды уже имеют опыт создания и ведения собственного бизнеса. Так же, мы работаем с большим количеством компаний - что дает нам возможность понимать собственников лучше</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree1">
                                        Директору по маркетингу "в штате" нужна долгая адаптация к продукту Компании
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Мы "вступаем в бой" практически сразу, в первую очередь решая срочные и "нейтральные" к продукту вопросы, проводя аудит маркетинга в компании. Это позволяет показывать эффективность уже с пеорвой недели сотрудничества</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2">
                                        Для ТОП-менеджера необходимо создавать правильную инфраструктуру - отделы, подразделения, выделять огромные бюджеты
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Выступая на стороне компании, мы подбираем оптимальные Решения для бизнеса - привлекаем аутсорс-специалистов либо помогаем оценивать кандидатов для приема в штат. Иными словами снимаем головную боль с собственника - уменьшаем затраты - и увеличиваем эффективность</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3">
                                        Нужно обеспечить рабочее место - стол, стул, кабинет, ноутбук
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">У нас есть свой офис - и мы встречаемся в офисе Клиента только в редких случаях, по особым потребностям</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4">
                                        У штатных экспертов достаточно быстро замыливается глаз на продукт, которым они "живут"
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="list">Работаем постоянно с большим количеством проектов - и можем принести в Бизнес такие Решения, которые всегда будут актуальными для его роста</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6">
                        <div class="block">
                            <div class="t1"><span>Как</span> мы работаем</div>
                            <div class="t2">В этом видео основатель компании "Маркетолог#2" Юрий Будилов<br>поэтапно рассказывает весь путь работы компании с бизнесом,<br>то есть с клиентскими проектами</div>
                        </div>
                        <div class="video" data-toggle="modal" data-target="#video2">
                            <img src="assets/img/video_header.png" alt="" class="wow pulse" data-wow-iteration="300">
                            <span>Смотреть видео об этапах работы </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <h2 class="center"><span>Этапы</span> нашей работы</h2>
                <div class="hidden-sm">
                    <div class="block">
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.1s">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Знакомство</b> <br> с проектом, компанией, бизнесом</p>
                        </div>
                        <div class="item wow fadeIn" data-wow-delay="0.3s">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Консультация —</b><br> исследование<br> проблемы/задачи</p>
                        </div>
                        <div class="item mob_bef wow fadeIn" data-wow-delay="0.5s">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Маркетинг-аудит —</b><br>проекта,<br> процессов, компании</p>
                        </div>
                        <div class="item sr wow fadeIn" data-wow-delay="0.7s">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Стратегия —</b><br>проработка<br> road map до мелочей</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="item bleft mob_4 wow fadeIn" data-wow-delay="1.5s">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Пост-поддержка —</b> чтобы результат<br>был долгим!</p>
                        </div>
                        <div class="item bleft mob_bef mob_3 wow fadeIn" data-wow-delay="1.3s">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Фиксируем результат!</b><br>— с гарантией<br> выполнения</p>
                        </div>
                        <div class="item bleft mob_2 wow fadeIn" data-wow-delay="1.1s">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Проектное управление —</b> с погружением<br> "под ключ"</p>
                        </div>
                        <div class="item sl mob_bef mob_1 wow fadeIn" data-wow-delay="0.9s">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Планирование —</b> результатов,<br> постановка целей</p>
                        </div>
                    </div>
                </div>
                <div class="visible-sm">
                    <div class="block justcen">
                        <div class="item mob_bef mob_1 tabl_bef">
                            <img src="assets/img/s41.png" alt="">
                            <p><b>Знакомство</b> <br> с проектом, компанией, бизнесом</p>
                        </div>
                        <div class="item mob_2 tabl_bef">
                            <img src="assets/img/s42.png" alt="">
                            <p><b>Консультация —</b><br> исследование<br> проблемы/задачи</p>
                        </div>
                        <div class="item mob_bef mob_3">
                            <img src="assets/img/s43.png" alt="">
                            <p><b>Маркетинг-аудит —</b><br>проекта,<br> процессов, компании</p>
                        </div>
                        <div class="item sr mob_4 tabl_bef">
                            <img src="assets/img/s44.png" alt="">
                            <p><b>Стратегия —</b><br>проработка<br>road map до мелочей</p>
                        </div>

                        <div class="item bleft mob_8 ">
                            <img src="assets/img/s45.png" alt="">
                            <p><b>Пост-поддержка —</b> чтобы результат<br>был долгим!</p>
                        </div>
                        <div class="item bleft mob_bef mob_7 tabl_bef">
                            <img src="assets/img/s46.png" alt="">
                            <p><b>Фиксируем результат!</b><br>— с гарантией<br>выполнения</p>
                        </div>
                        <div class="item bleft mob_6">
                            <img src="assets/img/s47.png" alt="">
                            <p><b>Проектное управление —</b> с погружением<br>"под ключ"</p>
                        </div>
                        <div class="item sl mob_bef mob_5 tabl_bef">
                            <img src="assets/img/s48.png" alt="">
                            <p><b>Планирование —</b> результатов,<br>постановка целей</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <h2 class="center"><span>Теперь то же самое,</span> только в цифрах</h2>
                <div class="block">
                    <div class="item">
                        <div class="t1 it1 rotateIn wow" data-wow-duration="1s" data-wow-delay="1s">

                        </div>
                        <span>12+</span>
                        <div class="t2">
                            Лет опыта в маркетинге
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it2 rotateIn wow" data-wow-duration="1s" data-wow-delay="2s">

                        </div>
                        <span>75+</span>
                        <div class="t2">
                            Инструментов для бизнеса
                        </div>
                    </div>
                    <div class="item">
                        <div class="t1 it3 rotateIn wow" data-wow-duration="1s" data-wow-delay="3s">

                        </div>
                        <span>220+</span>
                        <div class="t2">
                            Реализованных проектов
                        </div>
                    </div>
                </div>

                <div class="form_block">
                    <div class="t1">
                        Подайте заявку сейчас и получите специальное предложение!
                    </div>
                    <div class="t2">
                        Индивидуальная встреча-консультация с экспертом, с целью оптимизации маркетинг-процессов в Вашем бизнесе
                    </div>

                    <div class="form">
                        <form action="">
                            <div class="inpb">
                                <input class="name" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="inpb">
                                <input class="phone" type="text" placeholder="Ваш телефон*">
                            </div>
                            <div class="inpb">
                                <input class="email" type="text" placeholder="Ваш E-mail">
                            </div>
                            <div class="inpbutton">
                                <button>Отправить заявку</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec6">
            <div class="container">
                <h2 class="center"><span>Отзывы</span> о нас</h2>
                <div class="block">
                    <div class="slider2">
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s61.png" alt="">
                            </div>
                            <p>
                                <b>Елизавета Шепетильникова</b><br>
                                Знакомы с компанией "Маркетолог#2" уже несколько лет и сотрудничаем в разных проектных направлениях: от организации и проведения тренингов для ТОП-руководителей нашей организации до проектного сопровождения наших мероприятий, создания нового сайта, развития проектов в социальных сетях и многих других задач. Так что смело рекомендую "Маркетолог#2" к сотрудничеству, ведь они дейстивтельно мастера своего дела
                            </p>
                            <a href="https://www.facebook.com/lissashch" target="_blank">Senior Adviser/EdUSA Ukraine</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s62.png" alt="">
                            </div>
                            <p>
                                <b>Денис Чернобаев</b> <br>
                                При том, что я лично знал ребят еще с тех пор, когда они были маленькой веб-студией в Одессе - очень долго, года три, не решался обратиться за помощью. Будучи предпринимателем, ты всегда все стараешься сделать и вытянуть самостоятельно. Только сейчас понимаю, как сильно ошибался раньше. Буквально за пару месяцев мы сделали значительный прорыв: провели ребрендинг, разработали стратегию развития и начали ее внедрять. Готовим к запуску целый пул активностей в интернет-рекламе, печатаем полиграфию и брендированный мерч для наших клиентов. В общем, все бурлит! Кстати, если нужно видео для бизнеса - обращайтесь - мы с радостью поможем! :-)
                            </p>
                            <a href="https://www.facebook.com/tiberianSunny" target="_blank">Bona Idea Production / Owner</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s63.jpg" alt="">
                            </div>
                            <p>
                                <b>Вадим Керничий</b><br>
                                Познакомились с компанией благодаря случаю: жена искала что-то на YouTube и случайно попала на канал компании "Маркетолог#2". Мы посмотрели несколько видео и поняли, что очень мало понимаем в маркетинге, поэтому решили обратиться за консультацией. Наш проект длился 5 месяцев. Не смотря на то, что за весь период работы непосредственно с командой "Маркетолог#2" мы виделись только один раз, все задачи по проекту были выполнены четко и в оговоренные срок. Огромное "Спасибо" стоит сказать за то, что команда "толкает" сторону заказчика, когда мы забывали что-то сделать со свеой стороны.
                            </p>
                            <b>BORO / Founder</b>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s64.png" alt="">
                            </div>
                            <p>
                                <b>Виктор Войцеховский</b><br>
                                Мы просто попытались найти в компанию маркетолога. А нашли команду, которая перевернула наше представление о мире Маркетинга с головы на ноги. Самое сложное было - просто начать доверять на 100% ребятам - мы справились за два месяца. Жаль, что не в первый же день - тогда результаты были бы раньше! Сейчас, по окончанию 5-месячного контракта подписали пролонгацию договора еще на 5 месяцев. Наш бизнес растет, обновляем команду, переехали в новый красивый офис и продолжаем день за днем оптимизировать бизнес-процессы. Большое спасибо за дружбу и эффективное партнерство!
                            </p>
                            <a href="https://www.facebook.com/viktor.voytsekhovskiy" target="_blank">LASTICK / Основатель, собственник</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s65.png" alt="">
                            </div>
                            <p>
                                <b>Евгений Урвачев</b><br>
                                Мы работаем с командой Маркетолог#2" всего несколько месяцев. За это время успели сработаться, привыкнуть друг к другу. Определенную часть задач, которую я планировал сделать на протяжении нескольких лет, мы смогли осилисть всего за три месяца. Они делаеют не просто как у "кого-то" или "как на картинке", а предлагают решения, которые будут действительно полезными для бизнеса. На один мой вопрос я сразу получаю 10 уточняющих вопросов от них. Эта команда действительно работает на результат, с правильными человеческими отношениями, а не с целью быстро что-то продать. Очень важный момент в том, что ребята отстаивают свой профессионализм, не позволяют клиенту брать верховенство. Благодаря этому развитие бизнеса идет по правильному руслу.
                            </p>
                            <a href="https://www.facebook.com/profile.php?id=100006009993905" target="_blank">BBF / CEO</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s66.png" alt="">
                            </div>
                            <p>
                                <b>Катерина Энтель</b><br>
                                То, что мне очень понравилось в этой команде - ребята не дают расслабиться. Они поставили цель, к которой приведут твою компанию, и не слезут с тебя, пока ты им не дашь какую-то информацию для дальнейшей работы. Это дает очень хороший результат. Они быстро дают обратную связь, задают миллион вопросов, чтобы вникнуть в суть, иногда пишут уже глубоким вечером. Очень важно осознавать то, что они болеют твоим бизнесом так же, как и ты. Благодаря этому очень скоро возникает ощущение легкости, взаимопонимания, как будто мы сотрудничаем уже много лет. Конечно, бывают моменты, когда мы спорим. Но это разговор двух профессионалов - каждого в своей отрасли. А Маркетолог#2 - это точно профессионалы в сфере маркетинга!
                            </p>
                            <a href="https://www.facebook.com/kotya.entel" target="_blank">Constanta / Co-founder</a>
                        </div>
                        <div class="item_block">
                            <div class="img">
                                <img src="assets/img/s67.png" alt="">
                            </div>
                            <p>
                                <b>Максим Пасынок</b><br>
                                Ребята быстро погрузились внутрь компании, глубоко изучили бизнес-процессы, разработали маркетинг стратегию. Мы и снимали ролики о компании, и работали со всеми нужными видами рекламы, и даже реструктурировали отдел продаж. Благодаря этому у нас повысился уровень возвращаемости клиентов, мы уже открыли новый розничный магазин. С нами даже начала работать одна крупная компания в В2В-сегменте. Раньше мы вообще не понимали, что такое Маркетинг, но это изменилось после знакомства с командой Маркетолог#2.
                            </p>
                            <a href="https://www.facebook.com/maxim.konors" target="_blank">KONORS / Co-owner</a>
                        </div>
                    </div>
                </div>
                <div class="button_block">
                    <button data-toggle="modal" data-target="#videoall"><span>Смотреть видео-отзывы</span> <img src="assets/img/mini_play.png" alt=""></button>
                </div>
            </div>
        </section>
        <section class="sec7">
            <div class="container">
                <h2 class="center"><span>Наши</span> друзья, клиенты и партнеры</h2>

                <div class="block">
                    <div class="slider3 center">
                        <div class="slideblock1">
                            <div class="slide"><img src="assets/img/partners/1.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/2.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/3.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/4.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/5.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/6.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/7.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/8.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/9.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/10.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/11.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/12.jfif" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/13.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/14.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/15.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/16.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/17.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/18.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/19.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/20.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/21.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/22.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/23.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/24.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/25.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/26.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/27.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/28.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/29.jfif" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/30.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/31.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/32.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/33.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/34.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/35.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/36.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/37.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/38.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/39.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/40.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/41.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/42.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/43.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/44.png" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/45.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/46.jfif" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/47.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/48.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/49.jpg" alt=""></div>
                            <div class="slide"><img src="assets/img/partners/50.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="sec8">
            <div class="container">
                <h2 class="center"><span>Часто</span> задаваемые вопросы</h2>
                <div class="desc hidden-xs hidden-sm center">Кликайте на интересующий вопрос слева - читайте ответ справа!</div>
                <div class="desc visible-xs visible-sm center">Кликайте на интересующий вопрос и читайте ответ!</div>

                <div class="block">
                    <div class="left_b">
                        <div class="list ls1 active">
                            <span>Так вы занимаетесь рекламой или продвижением?</span>
                            <div style="display:block;" class="contmobblock coco1 hidden-lg">
                                <p>Увы, из-за повального нашествия ""гуру инфобизнеса"" многие понятия и термины в реальном мире часто путают с вымыслом</p>

                                <p>Управление маркетингом - это построение бизнес-процессов, Promotion (продвижение) - часть маркетинга, а реклама - часть продвиждения</p>

                                <p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же, включая вопросы позиционирования, продвижения - и рекламы</p>

                                <p>Если по порядку - то это: маркетинг-аудит, согласование концепции развития, утверждение стратегии, бюджетирование и активные действия. Однако, все может отличаться - в зависимости от особенностей и задач Вашего бизнеса</p>
                            </div>
                        </div>
                        <div class="list ls2"><span>Можете помочь с рекламой в интернете?</span>
                            <div class="contmobblock coco2 hidden-lg">
                                <p>У нас большой опыт работы с проектами в интернет-продвижении: от разработки концепции будущего сайта - до реализации маркетинговых стратегий онлайн, для любой аудитории - это около 180 проектов на сегодняшний день.</p>
                                <p>Однако, мы не являемся агентством интернет-продвижения - которое выполняет задачи на аутсорсе. Под разработанную - и согласованную с Заказчиком стратегию мы помогаем оценить специалистов при подборе в штат. Привлекаем нужных на аутсорсе (если нет необходимости держать в компании штатную единицу), и даже выстраиваем правильное взаимодействие с агентствами. Да что там - можем целую мини-студию для съемки видео на YouTube в вашем офисе организовать. Одним словом - были бы задачи - а как их выполнить - это уже наша забота</p>
                            </div>
                        </div>
                        <div class="list ls3"><span>Сколько стоит ваша работа? </span>
                            <div class="contmobblock coco3 hidden-lg">
                                <p>Бюджеты относительны. Все зависит от задач, их объемов и ответственности, которые ложатся на нашу компанию</p>
                                <p>Мы беремся за проекты сроком от 3 месяцев, и стоимостью от $1000 за проект - но поверьте, эти цифры ничего не скажут вам& При этом максимальная стоимость проекта, с которым мы работали оценивалась в $120.000 за несколько месяцев его реализации</p>
                                <p>Да, много переменных. Да, можно оплачивать поэтапно. И еще много всего</p>
                                <p>Что насчет пообщаться лично, и прояснить ситуацию лучше?</p>
                            </div>
                        </div>
                        <div class="list ls4"><span>Сколько проектов вы уже выполнили? </span>
                            <div class="contmobblock coco4 hidden-lg">
                                <p>Уже где-то писали - но повторимся: сегодня у нас за плечами более 180 маркетинг-проектов в интернет-продвижении, и около 40 компаний, в которых мы помогали выстраивать бизнес-процессы ""под ключ""</p>
                                <p>С одной стороны - в каждом бизнесе работают примерно одинаковые модели развития и роста. С другой - каждому бизнесу нужен свой, индивидуальный подход</p>
                                <p>Виртуозно совмещая оба момента, и добавляя психологию изменений для Собственников мы и получаем отличные результаты для наших клиентов!</p>
                            </div>
                        </div>
                        <div class="list ls5"><span>Мне не нужны сотрудники в штат - как быть? </span>
                            <div class="contmobblock coco5 hidden-lg">
                                <p>Условия нашей будущей работы будут зависеть от вводных, которые мы получим от Собственника/Заказчика еще на старте проекта.</p>
                                <p>Не в штат - значит, не в штат.</p>
                                <p>Многие маркетологи и маркетинг-директора боятся работать с удаленными сотрудниками/фрилансерами. Наша сильная сторона - навыки и опыт эффективного построения такой работы. Называйте это "профессиональной фишкой", Ок? )</p>
                            </div>
                        </div>
                        <div class="list ls6"><span>Как давно существует ваша компания? </span>
                            <div class="contmobblock coco6 hidden-lg">
                                <p>Под названием "Маркетолог#2" мы работаем более двух лет. Однако суммарный опыт в маркетинге и построении бизнес-процессов более 12 лет</p>
                                <p>Наш практический опыт - очень разный, при этом достаточно глубокий: ивент-бизнес, BTL (промоакции), FMCG ритейл и построение комбинированных бизнес-систем, организация бизнеса по части спорта, туризма, проката спортивного снаряжения и экстремального отдыха, и даже опыт работы в качестве агентства интернет-продвижения - и многие другие примеры</p>
                                <p>Однако, поверьте: к Вашему бизнесу мы подойдем индивидуально, "с чистого листа"</p>
                            </div>
                        </div>
                        <div class="list ls7"><span>Нам нужно провести ребрендинг</span>
                            <div class="contmobblock coco7 hidden-lg">
                                <p>С радостью поможем. Разработаем концепцию бренда, привлечем лучших дизайнеров (по крайней мере тех - которые поместятся в бюджет), и буквально вдохнем Новую Жизнь в позиционирование Вашей компании.</p>
                                <p>Конечно же, работы будут включать в себя разработку фирменного стиля для всех Точек Контакта Вашей Компании с аудиторией - а значит, все будет выглядеть профессионально</p>
                                <p>Мы любим детали: лаконичность форм, правильно подобранные цвета (несущие правильный смысл), шрифты и прочие мелочи. Дьявол в мелочах, знаете такую фразу?</p>
                            </div>
                        </div>
                        <div class="list ls8"><span>Нам срочно нужен сайт</span>
                            <div class="contmobblock coco8 hidden-lg">
                                <p>У Вас два варианта.</p>
                                <p>Первый - позвонить в первую попавшуюся веб-студию - они с радостью помогут Вам потушить любой пожар за ваши деньги</p>
                                <p>Второй - осознать, что сайт - это сложный структурный механизм, через который должны быть пропущены ценности компании, ее продукты и удобство получения информации для клиетов. А еще сайт должен отвечать огромному числу технических требований - о которых Вам вряд ли расскажут в студиях по многим причинам. Если вы решили подойти к процессу осознанно - лучше на первое время сделать сайт-заглушку, визитку - и пройти весь путь правильно: аудит компании, стратегия, ценности, продукты, дифференциация от рынка - а уже потом ""упаковывать"" веб-представленность. Мы работаем по такому варианту, так как отвечаем за результаты</p>
                            </div>
                        </div>
                        <div class="list ls9"><span>Есть что-то, чем вы не занимаетесь?</span>
                            <div class="contmobblock coco9 hidden-lg">
                                <p>Вопрос почти провокационный )</p>
                                <p>По части нашей специализации - Управлению Маркетингом, наша задача - Управлять Процессами, а не "Делать Руками". Естественно, что с привлечениями специалистов и подрядчиков нам под силу практически любая задача. ОДНАКО если окажется так, что задачи Вашего бизнеса находятся Вне Нашей Компетенции - мы честно и открыто признаемся в этом - и постараемся рекомендовать проверенных и надежных партнеров для вас</p>
                                <p>Принцип простой: или делай свою работу великолепно, или не делай ее вообще</p>
                            </div>
                        </div>

                    </div>
                    <div class="right_b">
                        <div class="cont_block">
                            <p>Увы, из-за повального нашествия "гуру инфобизнеса" многие понятия и термины в реальном мире часто путают с вымыслом</p>

                            <p>Управление маркетингом - это построение бизнес-процессов, Promotion (продвижение) - часть маркетинга, а реклама - часть продвиждения</p>

                            <p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же, включая вопросы позиционирования, продвижения - и рекламы</p>

                            <p>Если по порядку - то это: маркетинг-аудит, согласование концепции развития, утверждение стратегии, бюджетирование и активные действия. Однако, все может отличаться - в зависимости от особенностей и задач Вашего бизнеса</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="block hidden-sm hidden-md">
                    <div class="logo">
                        <a href="">
                            <img src="assets/img/logofooter.png" alt="">
                        </a>
                    </div>
                    <div class="urik">
                        <a href="">Юридическая поддержка</a>
                    </div>
                    <div class="cont">
                        <a href="javascript:void(0);"><img src="assets/img/m1.png" alt=""><span>Киев, Глубочицкая, 32В</span></a>
                        <a href="javascript:void(0);"><img src="assets/img/m2.png" alt=""><span>marketolog2.com</span></a>
                    </div>
                    <div class="soc">
                        <a href="">
                            <img src="assets/img/ffb.png" alt="">
                        </a>
                        <a href="">
                            <img src="assets/img/fyt.png" alt="">
                        </a>
                    </div>
                    <div class="totop">
                        <img src="assets/img/top.png" alt="">
                    </div>
                </div>
                <div class="block visible-sm visible-md">
                    <div class="dflexx">
                        <div class="logo">
                            <a href="">
                                <img src="assets/img/logofooter.png" alt="">
                            </a>
                        </div>
                        <div class="urik">
                            <a href="https://www.akingump.com/en/" target="_blank">Юридическая поддержка</a>
                        </div>
                    </div>
                    <div class="dflexx my2flex">
                        <div class="cont">
                            <a><img src="assets/img/m1.png" alt=""><span>Киев, Глубочицкая, 32В</span></a>
                            <a><img src="assets/img/m2.png" alt=""><span>marketolog2.com</span></a>
                        </div>
                        <div class="soc">
                            <a href="">
                                <img src="assets/img/ffb.png" alt="">
                            </a>
                            <a href="">
                                <img src="assets/img/fyt.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="totop">
                        <img src="assets/img/top.png" alt="">
                    </div>
                </div>
            </div>
        </footer>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Подайте заявку сейчас <br>
                        и получите <span>спец</span>иальное <br> предложение!
                    </h4>
                </div>
                <div class="modal_body">
                    <div class="subtitle center">
                        Индивидуальная встреча-консультация <br> с экспертом, с целью оптимизации <br> маркетинг-процессов в Вашем бизнесе
                    </div>

                    <div class="form">
                        <form action="sender.php" method="post">
                            <div class="inpb">
                                <input class="name" name="name" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="inpb">
                                <input class="phone" name="phone" type="text" placeholder="Ваш телефон*" required>
                            </div>
                            <div class="inpb">
                                <input class="email" name="post" type="text" placeholder="Ваш E-mail">
                            </div>
                            <div class="inpbutton">
                                <button type="button" class="send">Отправить заявку</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="myThx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Благодарим за Вашу активность, мы свяжемся с Вами в ближайшее время!
                    </h4>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade videoblock" id="video1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade videoblock" id="video2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade videoblock" id="videoall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal_content">
                <div class="modal_header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close.png" alt="">
                    </button>
                </div>
                <div class="modal_body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video1 embed-responsive-item" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>

    <script>
        $('#video1').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/huwmmLh_41k?autoplay=1');
        });
        $('#video1').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#video2').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/KNmfFGh5peE?autoplay=1');
        });
        $('#video2').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });
        $('#videoall').on('show.bs.modal', function(e) {
            $(this).find('.video1').attr('src', 'https://www.youtube.com/embed/-x45ed7aFTQ?autoplay=1');
        });
        $('#videoall').on('hidden.bs.modal', function(e) {
            $(this).find('.video1').attr('src', '');
        });

        var burgerCtr = document.querySelector("#burger-menu");
        var menuCtr = document.querySelector("#mobile_menu");
        burgerCtr.addEventListener("click", function() {
            this.classList.toggle("active");
            menuCtr.classList.toggle("show_mobile_menu");
        });

        jQuery('body').on('scroll', function() {
            console.log('www');
        });

        var scrolling = document.querySelector("#scrollbtn");

        function scrolldown() {
            scrolling.classList.toggle("animbtn");
        }

    </script>
    <script type="text/javascript" id="b24_form" data-name="bWFya2V0b2xvZzIuYml0cml4MjQudWFAMV84bzBhaC5odG1s" src="https://sip.evro-tel.com.ua/html/bitrix24/js/sipiko_b24_lead.js"></script>
</body>

</html>
