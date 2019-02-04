<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Tucson комплектации и цены. Купить хендай туссан");
$APPLICATION->SetTitle("Tucson");
?>

    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_TL.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <style>
            .parallax1 {background:url('/media/images/flat/TL/parallax1.jpg') no-repeat fixed 50% 50% #e3e3e3;}
            .parallax2 {background:url('/media/images/flat/TL/parallax2.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax3 {background:url('/media/images/flat/TL/parallax3.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax4 {background:url('/media/images/flat/TL/parallax4.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax5 {background:url('/media/images/flat/TL/parallax5.jpg') no-repeat fixed 50% 50% #fff;}
            body.mobile .parallax {height:450px;}
            body.mobile .parallax1 {background:url('/media/images/flat/TL/parallax1_mobile.jpg') center top no-repeat #e3e3e3;}
            body.mobile .parallax2 {background:url('/media/images/flat/TL/parallax2_mobile.jpg') center top no-repeat #fff;}
            body.mobile .parallax3 {background:url('/media/images/flat/TL/parallax3_mobile.jpg') center top no-repeat #fff;}
            body.mobile .parallax4 {background:url('/media/images/flat/TL/parallax4_mobile.jpg') center top no-repeat #fff;}
            body.mobile .parallax5 {background:url('/media/images/flat/TL/parallax5_mobile.jpg') center top no-repeat #fff;}
        </style>

        <div class="roadside24">
            <a href="/service/roadside-assistance" target="_blank"></a>
        </div>

        <div style="display: none;">
            <img src="/media/images/flat/TL/performance_graph_1.gif">
            <img src="/media/images/flat/TL/performance_graph_1_text.png">
            <img src="/media/images/flat/TL/performance_graph_2.gif">
            <img src="/media/images/flat/TL/performance_graph_2_text.png">
            <img src="/media/images/flat/TL/performance_graph_3.gif">
            <img src="/media/images/flat/TL/performance_graph_3_text.png">
            <img src="/media/images/flat/TL/performance_graph_4.gif">
            <img src="/media/images/flat/TL/performance_graph_4_text.png">
        </div>

        <div class="roadside24">
            <a href="/service/roadside-assistance" target="_blank"></a>
        </div>
        <div class="wrap" id="wrap">
            <div class="gallery-view-wrap">
                <div class="gallery-view-holder">
                    <div class="gallery-view-slider">
                        <ul></ul>
                    </div>
                    <div class="topline">
                        <img src="/media/images/flat/TL/elements/car-logo-white.png" alt="Логотип Hyundai Tucson">
                        <div class="pagination">
                            <span class="prev"></span>
                            <span class="count"></span>
                            <span class="next"></span>
                        </div>
                        <a class="dl-img" href="#" target="_blank">Скачать</a>
                        <a class="view-close" href="#"></a>
                    </div>
                </div>
            </div>
            <div class="videoPopup">
                <div class="videoContainer">
                    <a class="closeButton" href="#" title="Закрыть">×</a>
                    <iframe class="videoFrame" width="100%" height="" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="container">
                <div class="cubebox" id="cubebox">
                    <div class="cubelist">
                        <div class="items">
                            <div class="item">
                                <div class="item_wrap">
                                    <div class="main mkv">
                                        <div class="title">
                                            <img src="/media/images/flat/TL/elements/car-logo.png" title="Tucson">
                                            <span>Новый Tucson – решайся!</span>
                                        </div>
                                        <div class="title-price">
                                            от 1 369 000  ₽<br>
                                            <a href="/start?model=tucson" class="title-price-notice"><!--В кредит от 10 000 ₽ / месяц--></a>
                                            <!-- 								<div class="title-price-casco">+ каско в подарок!<sup>1</sup></div> -->
                                        </div>
                                        <!--                             <a href="/all-offers/tucson" class="btn-flat">Все предложения</a> -->

                                        <div class="blue-block clearfix">
                                            <div class="blue-block-content">

                                                <div class="blue-block-row">
                                                    <span class="blue-block-val">В кредит от 10 000 ₽</span>
                                                    <span class="blue-block-text">в месяц<sup></sup></span>
                                                </div>

                                                <!--
                                                                                    <div class="blue-block-row">
                                                                                        <span class="blue-block-text"><b>КАСКО</b> в подарок<sup>**</sup></span>
                                                                                    </div>
                                                -->
                                            </div>
                                        </div>

                                        <br clear="all"/>
                                        <div class="title-list">
                                            <ul>
                                                <li>Система полного<br>привода</li>
                                                <li>Макс. мощность<br><strong>185 л.с.</strong></li>
                                            </ul>
                                            <ul>
                                                <li>Функциональный<br>руль</li>
                                                <li>Большой список<br>опций</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="view-360_wrap">
                                        <img class="progress-last-frame" alt="" src="/media/images/common/transparent.gif"/>
                                        <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                        <div class="spritespin" data-model="tucson"></div>
                                    </div>
                                    <div class="view-360-color-selector">
                                        <ul>
                                            <li data-title="Polar White"	data-color="TLr_Polar_White" class="view-360-color-selector__item"><span style="background-color: #e7e7e7;"></span>Polar White</li>
                                            <li data-title="Moon Rock"		data-color="TLr_Moon_Rock" class="view-360-color-selector__item"><span style="background-color: #3a3938;"></span>Moon Rock</li>
                                            <li data-title="Phantom Black"	data-color="TLr_Phantom_Black" class="view-360-color-selector__item"><span style="background-color: #111111;"></span>Phantom Black</li>
                                            <li data-title="Stargazing Blue"		data-color="TLr_Stargazing_Blue" class="view-360-color-selector__item"><span style="background-color: #435575;"></span>Stargazing Blue</li>
                                            <li data-title="Demitasse Brown"		data-color="TLr_Brown" class="view-360-color-selector__item"><span style="background-color: #514332;"></span>Demitasse Brown</li>
                                            <li data-title="Fiery Red"		data-color="TLr_Fiery_Red" class="view-360-color-selector__item"><span style="background-color: #af0101;"></span>Fiery Red</li>
                                            <li data-title="Ara Blue"		data-color="TLr_Ara_Blue" class="view-360-color-selector__item"><span style="background-color: #3d82ad;"></span>Ara Blue</li>
                                            <li data-title="Micron Grey"	data-color="TLr_Micron_Grey" class="view-360-color-selector__item"><span style="background-color: #626263;"></span>Micron Grey</li>
                                            <li data-title="White Sand"		data-color="TLr_White_Sand" class="view-360-color-selector__item"><span style="background-color: #F0EDE6;"></span>White Sand</li>
                                            <li data-title="Platinum Silver"data-color="TLr_Platinum_Silver" class="view-360-color-selector__item"><span style="background-color: #858b91;"></span>Platinum Silver</li>
                                            <li data-title="Intense Copper"		data-color="TLr_Intense_Copper" class="view-360-color-selector__item"><span style="background-color: #783a25;"></span>Intense Copper</li>
                                        </ul>
                                    </div>
                                    <a class="view-360_toggler" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-menu">
                    <div class="submenu">
                        <ul>
                            <li><span class="highlights" data-href="#contents_highlights">Особенности</span></li><!--
				--><li><span class="exterior" data-href="#contents_exterior">Экстерьер</span></li><!--
				--><li><span class="interior" data-href="#contents_interior">Интерьер</span></li><!--
				--><li><span class="performance" data-href="#contents_performance">Динамика</span></li><!--
				--><li><span class="safety" data-href="#contents_safety">Безопасность</span></li><!--
				--><li><span class="convenience" data-href="#contents_convenience">Комфорт</span></li>
                            <!-- parser hidden links -->
                            <li><a class="hidden highlights" href="#contents_highlights">Особенности</a></li>
                            <li><a class="hidden exterior" href="#contents_exterior">Экстерьер</a></li>
                            <li><a class="hidden interior" href="#contents_interior">Интерьер</a></li>
                            <li><a class="hidden performance" href="#contents_performance">Динамика</a></li>
                            <li><a class="hidden safety" href="#contents_safety">Безопасность</a></li>
                            <li><a class="hidden convenience" href="#contents_convenience">Комфорт</a></li>
                        </ul>
                    </div>
                </div>
                <div id="top-menu" class="top-menu">
                    <div class="top-menu__wrap">
                        <div class="information">
                            <div class="cubeitem">
                                <ul>
                                    <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">ОБЗОР</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">ХАРАКТЕРИСТИКИ</a></li><!--
					 --><!-- <li><a class="main-toggler main-toggler__gallery" href="#" data-href="#content-type__gallery" title="Галерея">ГАЛЕРЕЯ</a></li> --><!--
					 --><li><a class="configurator" href="https://www.hyundai.ru/configurator/car/18" title="Цены комплектации">ЦЕНЫ И КОМПЛЕКТАЦИИ</a></li><!--
					 --><li class="broshure-item" title="Каталог"><a data-gtm-havas-model="tucson" href="#" data-model="Tucson" for="brochures_request" class="zing_form_toggler broshure" target="_blank">КАТАЛОГ</a></li><!--
					 --><li>       </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class="content-type content-type__explore on" >
                    <div id="contents_highlights" class="contents_highlights pip">
                        <h2 class="hidden">ОСНОВНЫЕ ЧЕРТЫ</h2>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">ДВИЖИМЫЙ СТРАСТЬЮ.<br />МОЩЬ, КОТОРУЮ СТОИТ ИСПЫТАТЬ</div>
                                <div class="text2">Гармоничный внешний вид и невероятная мощь внутри. <br> Почувствуйте мощь нашего нового компактного городского кроссовера, оцените улучшенную стабильность и динамику, которые придутся кстати во время любого городского приключения.</div>
                            </div>
                            <div class="videos">
                                <div class="videos_wrap">
                                    <div class="list_wrap">
                                        <ul class="list">
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="tJteNAXlBrU"></a></li>
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="D16huvG71GI"></a></li>
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="ONEsf9FLoN0"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="main_wrap">
                                <div class="robust_on_style">
                                    <div class="subject">
                                        <h3>УСОВЕРШЕНСТВОВАННЫЙ ДИЗАЙН, ВЫПОЛНЕННЫЙ В КОНЦЕПЦИИ «СТРУЯЩИХСЯ ЛИНИЙ»</h3>
                                        <p>Смелый и утонченный. Рельефный дизайн автомобиля представляет концепцию <br> «Струящиеся линии 2.0».</p>
                                    </div>
                                    <div class="car">
                                        <img src="/media/images/flat/TL/highlight_style_car.png" data-url="/media/images/flat/TL/highlight_style_car_mobile.png" alt="" />
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li class="thumb1 front">
                                                <a href="#">
										<span class="img_wrap">
											<img src="/media/images/flat/TL/highlight_style_list_1.jpg" data-url="/media/images/flat/TL/highlight_style_list_1_mobile.jpg" alt="Оформление передних фар Tucson" width="410" height="360" />
											<span class="dimd"></span>
										</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb2 side">
                                                <a href="#">
										<span class="img_wrap">
											<img src="/media/images/flat/TL/highlight_style_list_2.jpg" data-url="/media/images/flat/TL/highlight_style_list_2_mobile.jpg" alt="Светодиодные фонари комбинированного типа" width="410" height="360" />
											<span class="dimd"></span>
										</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view">
                                        <ul>
                                            <li class="thumb1 front">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/TL/highlight_style_view_1.jpg" data-url="/media/images/flat/TL/highlight_style_view_1_mobile.jpg" width="1280" height="360" alt="Стильные черты Hyundai Tucson"></div>
                                                <div class="txt">
                                                    <strong>Невероятно смелый <br> и спортивный</strong>
                                                    Классическая шестиугольная решетка радиатора <br> Hyundai в сочетании с высокотехнологичными <br> фарами и рельефным бампером придают <br> автомобилю агрессивный и смелый <br> внешний вид.
                                                </div>
                                            </li>
                                            <li class="thumb2 side">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/TL/highlight_style_view_2.jpg" data-url="/media/images/flat/TL/highlight_style_view_2_mobile.jpg" width="1280" height="360" alt="Повышенная проходимость Hyundai Tucson"></div>
                                                <div class="txt">
                                                    <strong>Спортивный <br>и стремительный</strong>
                                                    Узнаваемые черты, яркая спортивная внешность автомобиля <br>гармонично сочетаются с функциональностью, <br>стабильностью и изяществом.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="highlight_design">
                                    <div class="subject">
                                        <h3>Аэродинамический дизайн</h3>
                                        <p>
                                            Новый Tucson с оптимизированной конструкцией корпуса и устойчивостью на высоких скоростях является симбиозом последних инженерных решений и изящного дизайна нового поколения, что обеспечивает ни с чем не сравнимое удовольствие от вождения. <br> Благодаря дизайну, выполненному в концепции «струящихся линий», улучшенному коэффициенту лобового сопротивления и другим характеристикам автомобиля Вы можете насладиться новым уровнем комфорта и уверенности вождения в любое время.
                                        </p>
                                    </div>
                                    <div class="img_area">
                                        <img src="/media/images/flat/TL/highlight_design.jpg" width="1280" height="640" alt="Обтекаемые изгибы линий кузова" />
                                        <div class="txt_area">
                                            <strong class="txt1">Установлена накладка <br>на передний бампер</strong>
                                            <strong class="txt2">Уменьшен наклон <br>передней стойки</strong>
                                            <strong class="txt3">Установлены <br>аэродинамические пороги</strong>
                                            <strong class="txt4">Установлен <br>задний спойлер</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="highlight_function">
                                    <div class="subject">
                                        <h3>Умные решения, обеспечивающие функциональный комфорт</h3>
                                        <p>
                                            Вам нужна помощь? Позвольте новому Tucson выполнить за Вас всю работу.<br> Электропривод двери багажника автоматически открывает доступ к отсеку, когда Вы находитесь возле нее с ключ-картой более 3 секунд. <br>Кроме того, складывающиеся задние сиденья предоставляют Вам максимальное багажное пространство, которое Вы можете отрегулировать по своему усмотрению.
                                        </p>
                                    </div>
                                    <div class="visual">
                                        <img src="/media/images/flat/TL/highlight_function.jpg" width="940" height="523" alt="Вместительное багажное отделение" />
                                    </div>
                                    <div class="desc_icon_wrap">
                                        <a href="#" class="desc_01"><span>more</span></a>
                                        <a href="#" class="desc_02"><span>more</span></a>
                                        <div class="desc_01">
                                            <strong>Электропривод двери багажника<br> с системой автоматического<br> открывания</strong>
                                        </div>
                                        <div class="desc_02">
                                            <strong>Складывающиеся<br>сиденья (тип 6:4)</strong>
                                        </div>
                                    </div>
                                    <div class="desc_wrap">
                                        <div class="desc_1">
                                            <img src="/media/images/flat/TL/highlight_function_img_01.png" width="249" height="249" alt="Автоматическое открытие багажного отсека" />
                                        </div>
                                        <div class="desc_2">
                                            <img src="/media/images/flat/TL/highlight_function_img_02.png" width="259" height="259" alt="Складываемый ряд задних сидений" />
                                        </div>
                                    </div>
                                </div>
                                <div class="highlight_twin">
                                    <div class="left">
                                        <div class="subject">
                                            <h3>Повышенная безопасность</h3>
                                            <p>Новые активные системы безопасности обеспечивают Tucson отличную защиту.</p>
                                        </div>
                                        <div class="image">
                                            <img src="/media/images/flat/TL/highlight_twin_01.jpg" width="640" height="866" alt="Высокий уровень безопасности" />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="subject">
                                            <h3>Двигатель T-GDi с рабочим объемом 1,6 л и 7-ступенчатой коробкой передач с двойным сцеплением</h3>
                                            <p>Двигатель T-GDi с рабочим объемом 1,6 л. и высокопроизводительная 7-ступенчатая коробка передач с двумя сцеплениями от Hyundai дарят новые ощущения от динамичного вождения, улучшают управляемость автомобиля и увеличивают эффективность расхода топлива.</p>
                                            <span class="caution">Данная КПП доступна в комплектации только с некоторыми типами двигателя.</span>
                                        </div>
                                        <div class="image">
                                            <img src="/media/images/flat/TL/highlight_twin_02.jpg" width="640" height="866" alt="Двигатель Hyundai Tucson" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contents_exterior" class="contents_exterior pip">
                        <!-- new template -->
                        <h2 class="hidden">ВНЕШНИЙ ВИД</h2>
                        <div class="parallax parallax1"><div>ВНЕШНИЙ ВИД</div></div>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">БОЛЬШЕ, ЧЕМ СПОРТ – <br>РОЖДЕН, ЧТОБЫ СТАТЬ РЕКОРДСМЕНОМ</div>
                                <div class="text2">
                                    Ставшая фирменным знаком Hyundai гексагональная решетка радиатора, окруженная оригинальными светодиодными фарами и гармонирующая со струящимися горизонтальными линиями передней части корпуса, <br>не только заявляет о смелом городском характере автомобиля, <br>но и раскрывает его спортивную мощь.
                                </div>
                            </div>
                            <div class="list_wrap">
                                <ul class="list">
                                    <li class="front on"><a href="#"><span class="progress"> </span><span class="txt">Вид спереди</span></a></li>
                                    <li class="side"><a href="#"><span class="progress"> </span><span class="txt">Вид сбоку</span></a></li>
                                    <li class="rear"><a href="#"><span class="progress"> </span><span class="txt">Вид сзади</span></a></li>
                                </ul>
                            </div>
                            <div class="view_wrap">
                                <div class="pos">
                                    <ul class="view">
                                        <li class="front">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/TL/highlight_style_car.png" alt="Фото передней части Hyundai Tucson" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Фары проекционного типа <br> со светодиодными лампами</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Противотуманные фары со светодиодными <br> дневными ходовыми огнями</span></span></div>
                                                        <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_front_sub1_on.jpg" width="540" height="600" alt="Мощные лампы дневных фар" /></div>
                                                            <div class="txt">
                                                                <strong>Фары проекционного типа <br>со светодиодными лампами</strong>
                                                                Обеспечивающие прекрасную видимость многофункциональные светодиодные фары освещают еще больше пространства и делают внешний вид автомобиля более эффектным.
                                                                <div class="toggle on"><a href="#" class="toggle_off" data-img="/media/images/flat/TL/exterior_front_sub1.jpg">Выключить</a><!-- no space --><a href="#" class="toggle_on" data-img="/media/images/flat/TL/exterior_front_sub1_on.jpg">Включить</a></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_front_sub2.jpg" width="540" height="600" alt="Ходовые огни повышенной яркости" /></div>
                                                            <div class="txt">
                                                                <strong>Противотуманные фары со светодиодными <br> дневными ходовыми огнями</strong>
                                                                Светодиодные дневные ходовые огни придают автомобилю современный прогрессивный внешний вид, а интегрированные противотуманные фары обеспечат безопасное движение в любую погоду.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_front_sub3_chrome.jpg" width="540" height="600" alt="Ходовые огни повышенной яркости" /></div>
                                                            <div class="txt">
                                                                <strong>Решетка радиатора</strong>
                                                                Фирменная хромированная гексагональная решетка Hyundai добавляет уникальности изящному и динамичному дизайну автомобиля.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="side">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/TL/exterior_car_side.png" alt="Струящиеся линии кузова" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Панорамная крыша</span></span></div>
                                                        <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Диски</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_side_sub1.jpg" width="540" height="600" alt="Стеклянная панорамная крыша" /></div>
                                                            <div class="txt">
                                                                <strong>Панорамная крыша</strong>
                                                                Панорамная крыша позволит вам получить настоящее удовольствие от езды: Вы сможете насладиться естественным светом, свежим воздухом, почувствовать себя ближе к природе.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_side_sub3.jpg" width="540" height="600" alt="Большой выбор литых дисков" /></div>
                                                            <div class="txt">
                                                                <strong>Диски</strong>
                                                                Продемонстрируйте чувство стиля, выбрав 16, 17 или 19-дюймовые легкосплавные диски.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="rear">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/TL/exterior_car_rear.png" alt="Плавность линий Hyundai Tucson" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Задние светодиодные фонари<br /> комбинированного типа</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Двойной глушитель</span></span></div>
                                                        <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Задняя защитная пластина</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub1_on.jpg" width="540" height="600" alt="Плавность линий заднего стоп-сигнала" /></div>
                                                            <div class="txt">
                                                                <strong>Задние светодиодные фонари <br>комбинированного типа</strong>
                                                                Задние светодиодные фонари комбинированного типа обязательно привлекут внимание благодаря сочетанию последних светодиодных технологий с футуристическим 3D-дизайном.
                                                                <div class="toggle on"><a href="#" class="toggle_off" data-img="/media/images/flat/TL/exterior_rear_sub1.jpg">Выключить</a><a href="#" class="toggle_on" data-img="/media/images/flat/TL/exterior_rear_sub1_on.jpg">Включить</a></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub2.jpg" width="540" height="600" alt="Двойная хромированная выхлопная труба" /></div>
                                                            <div class="txt">
                                                                <strong>Сдвоенные патрубки выхлопной системы</strong>
                                                                Пара сдвоенных трапециевидных патрубков выхлопной системы добавляет элегантности экстерьеру автомобиля.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub3.jpg" width="540" height="600" alt="Линии заднего бампера" /></div>
                                                            <div class="txt">
                                                                <strong>Задняя защитная пластина</strong>
                                                                Мы уделяем внимание каждой детали, и задняя защитная пластина не только служит для безопасности, но и удачно дополняет экстерьер автомобиля.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="morelist">
                            <ul class="clearfix">
                                <li>
						<span class="img">
							<img class="lazy" width="306" height="133" alt="Встроенные повторители поворотного сигнала" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_1.jpg" />
						</span>
						<span class="description">
							<strong>Наружные зеркала с указателями поворота</strong><br />
							Боковые указатели поворота, встроенные в корпуса зеркал, указывают другим водителям, в какую сторону Вы движетесь.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Штампованная колесная арка" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_2.jpg" /></span>
						<span class="description">
							<strong>Штампованная колесная арка</strong><br />
							Прямоугольная конфигурация колесных арок и двухцветный окрас делают внешний вид автомобиля еще более внушительным.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Пороги в спортивном стиле" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_3.jpg" /></span>
						<span class="description">
							<strong>Пороги</strong><br />
                            Пороги придают автомобилю спортивный внешний вид.</span>
                                </li>
                            </ul>
                            <ul class="clearfix">
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Задний стеклоочиститель с омывателем" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_4.jpg" /></span>
						<span class="description">
							<strong>Задний стеклоочиститель-омыватель</strong><br />
                            Установленный задний стеклоочиститель обеспечивает лучшую видимость через заднее стекло в ненастную погоду.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Задний спойлер со встроенным стоп-сигналом" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_5.jpg" /></span>
						<span class="description">
							<strong>Задний спойлер с высоко расположенным стоп-сигналом</strong><br />
							Новый Tucson оснащен задним аэродинамическим спойлером с высоко расположенным стоп-сигналом.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Задний бампер со светоотражателем" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_6.jpg" /></span>
						<span class="description">
							<strong>Светоотражатель заднего бампера</strong><br />
							Светоотражатель заднего бампера сочетает в себе функциональную красоту и практическую необходимость.
						</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="contents_interior" class="contents_interior pip">
                        <h2 class="hidden">САЛОН</h2>
                        <div class="parallax parallax2"><div>САЛОН</div></div>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">КОМПЛЕКСНАЯ СИСТЕМА УПРАВЛЕНИЯ  ДЛЯ ВСЕОБЪЕМЛЮЩИХ ОЩУЩЕНИЙ</div>
                                <div class="text2">Новый Tucson детально проработан эргономически и призван максимизировать удовольствие от вождения.</div>
                            </div>
                            <div class="section1">
                                <div class="car">
                                    <img src="/media/images/flat/TL/interior_color_1.png" width="858" height="461" alt="Интерьер салона в бежевом варианте" />
                                    <img src="/media/images/flat/TL/interior_color_2.png" width="858" height="461" alt="Интерьер салона в черном варианте" />
                                    <img src="/media/images/flat/TL/interior_color_3.png" width="858" height="461" alt="Интерьер салона в сером варианте" />
                                </div>
                                <div class="color">
                                    <div class="txt">ЦВЕТ СИДЕНИЙ</div>
                                    <ul class="chip">
                                        <li class="on"><a href="#"><img src="/media/images/flat/TL/interior_color_icon_1.png" alt="Бежевая обивка салона" /></a></li>
                                        <li><a href="#"><img src="/media/images/flat/TL/interior_color_icon_2.png" alt="Черная обивка салона" /></a></li>
                                    </ul>
                                    <div class="details">
                                        <ul class="detail detail1">
                                            <li class="color_detail1"><span>Кожа</span></li>
                                        </ul>
                                        <ul class="detail detail2">
                                            <li class="color_detail1"><span>Кожа</span></li>
                                        </ul>
                                        <ul class="detail detail3">
                                            <li class="color_detail1"><span>Кожа</span></li>
                                        </ul>
                                        <ul class="detail_txt">
                                            <li>Материал обивки сидений: <br>ткань или кожа, в зависимости от комплектации</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="features">
                                    <strong>Внутреннее пространство</strong>
                                    <p>
                                        С его рельефным дизайном экстерьера и просторным салоном новый Tucson<br> представляет собой сочетание современных технологий с изящным оформлением, <br>конечная цель которого – Ваш комфорт.
                                    </p>
                                </div>
                            </div>
                            <div class="section2">
                                <div class="scene_wrap">
                                    <div class="scene_offset">
                                        <div class="offset2">
                                            <div class="scene_cut">
                                                <div class="scene1">
                                                    <div class="img">
                                                        <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_point_1.jpg" class="lazy" width="1280" height="600" alt="Фото панели Hyundai Tucson" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">11</a></div>
                                                            <div class="plus plus2"><a href="#">12</a></div>
                                                            <div class="plus plus3"><a href="#">13</a></div>
                                                            <div class="plus plus4"><a href="#">14</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scene2">
                                                    <div class="img">
                                                        <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_point_2.jpg" class="lazy" width="1280" height="600" alt="Обивка салона из бежевой кожи" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">21</a></div>
                                                            <div class="plus plus2"><a href="#">22</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <a href="#" class="up"><span>Переднее сидение</span></a><a href="#" class="dn"><span>Заднее сидение</span></a><br />
                                        </div>
                                        <div class="details">
                                            <div class="pop_11">
                                                <div class="details_txt">
                                                    <strong>Панель приборов Supervision с 4.2" экраном</strong>
                                                    <p>Панель приборов Supervision с 4.2" <br>экраном обеспечивает четкий контур приборов, информация с экрана считывается с одного взгляда.</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_11.jpg" width="570" height="600" alt="Фото приборной панели Supervision" />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                            <div class="pop_12">
                                                <div class="details_txt">
                                                    <strong>Многофункциональное рулевое колесо</strong>
                                                    <p>
                                                        В любой момент возьмите управление в свои руки: для Вашего удобства в рулевую колонку встроен нагревательный элемент и многочисленные элементы системы управления.
                                                    </p>
                                                </div>
                                                <div class="visuals">
                                                    <p class="desc1">Удаленное управление <br> аудиосистемой и телефоном</p>
                                                    <p class="desc2">Круиз-контроль</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_12.jpg" width="570" height="600" alt="Система управления на рулевом колесе" />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                            <div class="pop_13">
                                                <div class="details_txt">
                                                    <strong>Навигационная система</strong>
                                                    <p>Находите самые оптимальные маршруты к месту назначения при помощи новейшей системы навигации, которая отличается исключительными удобством и гибкостью.</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_13.jpg" width="570" height="600" alt="Современная система навигации" />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                            <div class="pop_14">
                                                <div class="details_txt">
                                                    <strong>Полностью автоматизированная система кондиционирования воздуха</strong>
                                                    <p>Где бы Вы ни находились в просторном салоне автомобиля, Вы везде сможете насладиться свежим воздухом благодаря системе кондиционирования, которая может работать автоматически для максимального комфорта.</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_14.jpg" width="570" height="600" alt="Автоматическая система кондиционера воздуха" /><br />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                            <div class="pop_21">
                                                <div class="details_txt">
                                                    <strong>Вместимость</strong>
                                                    <p>Обширное пространство для багажа может быть дополнительно увеличено за счет двухступенчатой перегородки и шторки багажного отделения,  благодаря чему в новом Tucson легко поместится любой багаж.</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_21.jpg" width="570" height="600" alt="Пространство багажного отделения" /><br />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                            <div class="pop_22">
                                                <div class="details_txt">
                                                    <strong>Складывающиеся сидения (тип 6:4)</strong>
                                                    <p>Удобны как в случае большого путешествия, так и для небольших поездок. Система складывающихся задних кресел в пропорции 6:4 позволяет взять с собой больше багажа и получить еще больше удовольствия от поездки.</p>
                                                </div>
                                                <img src="/media/images/flat/TL/interior_point_detail_22.jpg" width="570" height="600" alt="Большой объем багажного отделения" /><br />
                                                <span class="close"><a href="#">Закрыть</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="morelist">
                            <ul class="clearfix">
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Система вентиляции задней части салона" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_common_1.jpg" /></span>
						<span class="description">
							<strong>Вентиляция в задней части салона</strong><br />
							Система вентиляции воздуха в задней части салона обеспечивает комфортные условия поездки для пассажиров на задних сидениях.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Встроенная подушка для колена водителя" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_common_2.jpg" /></span>
                        <span class="description">
                            <strong>Подушка для колена водителя</strong><br />
                            Подушка из искусственной кожи на консоли для колена водителя обеспечит дополнительный комфорт.
                        </span>
                                </li>
                                <li>
						<span class="img">
                            <img class="lazy" width="306" height="133" alt="Фото Хендай Туссан в движении" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/tucson_video.png" />
                            <a href="#" title="" class="video_link" data-src="https://www.youtube.com/embed/H5e-AZj2l84?rel=0&amp;controls=0&amp;showinfo=0"></a>
                        </span>
						<span class="description">
							<strong></strong><br />
						</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="contents_performance" class="contents_performance pip">
                        <!-- new template -->
                        <h2 class="hidden">ДВИГАТЕЛЬ</h2>
                        <div class="parallax parallax3"><div>ДВИГАТЕЛЬ</div></div>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">ДИНАМИЧНЫЙ. МОЩНЫЙ. ЭФФЕКТИВНЫЙ</div>
                                <div class="text2">7-ступенчатая коробка передач с двойным сцеплением (DCT), а также двигатель уменьшенного размера <br> делают новый Tucson лидером по ходовым характеристикам и топливной экономичности для головокружительных поездок.</div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li class="on"><a href="#">2.0 MPi</a></li><!-- no space
						--><li><a href="#">1.6 GDi</a></li><!-- no space
						--><li><a href="#">1.6 T-GDi</a></li><!-- no space
						--><li><a href="#">2.0 CRDi</a></li>
                                </ul>
                            </div>
                            <div class="engine_list">
                                <ul>
                                    <li>
                                        <div class="engine1">2.0 MPi <br /><span>Бензиновый двигатель</span></div>
                                        <p>
                                            Бензиновый двигатель 2.0 MPi имеет максимальную мощность 149,6 л.с. при 6 300 об/мин. и крутящий момент 192 Нм при 4 850 об/мин.
                                            <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_graph_1.gif" class="lazy" width="420" height="668" alt="Показатели бензинового двигателя 2.0 MPi" /><br />
                                                <div class="text"><img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_graph_1_text.png" class="lazy" width="420" height="668" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt>Максимальная мощность</dt>
                                                <dd><strong>149.6</strong> <span class="unit">л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt>Максимальный крутящий момент</dt>
                                                <dd><strong>192</strong> <span class="unit">Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">1.6 GDi  <br /><span>Бензиновый двигатель</span></div>
                                        <p>
                                            Бензиновый двигатель 1.6 GDi имеет максимальную мощность 132 л.с. при 6 300 об/мин. и крутящий момент 160.8 Нм при 4 850 об/мин.
                                            <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/flat/TL/performance_graph_2.gif" data-original="/media/images/flat/TL/performance_graph_2.gif" class="lazy" width="420" height="668" alt="" /><br />
                                                <div class="text"><img src="/media/images/flat/TL/performance_graph_2_text.png" data-original="/media/images/flat/TL/performance_graph_2_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 1.6 GDi" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt>Максимальная мощность</dt>
                                                <dd><strong>132</strong> <span class="unit">л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt>Максимальный крутящий момент</dt>
                                                <dd><strong>160.8</strong> <span class="unit">Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">1.6 T-GDi <br /><span>Бензиновый двигатель</span></div>
                                        <p>
                                            Бензиновый двигатель 1.6 T-GDi имеет максимальную мощность 177 л.с при 5 500 об/мин. и крутящий момент 265 Нм при 1 500 ~ 4 500 об/мин.
                                            <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/flat/TL/performance_graph_3.gif" data-original="/media/images/flat/TL/performance_graph_3.gif" class="lazy" width="420" height="668" alt="Показатели бензинового двигателя 1.6 T-GDi" /><br />
                                                <div class="text"><img src="/media/images/flat/TL/performance_graph_3_text.png" data-original="/media/images/flat/TL/performance_graph_3_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 1.6 T-GDi" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt>Максимальная мощность</dt>
                                                <dd><strong>177</strong> <span class="unit">л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt>Максимальный крутящий момент</dt>
                                                <dd><strong>265</strong> <span class="unit">Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">2.0 CRDi  <br /><span>Дизельный двигатель</span></div>
                                        <p>
                                            Дизельный двигатель 2.0 CRDi имеет максимальную мощность 185 л.с при 4 000 об/мин. и крутящий момент 400 Нм при 1 750 ~ 2 750 об/мин.
                                            <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/flat/TL/performance_graph_4.gif" data-original="/media/images/flat/TL/performance_graph_4.gif" class="lazy" width="420" height="668" alt="Показатели дизельного двигателя 2.0 CRDi" /><br />
                                                <div class="text"><img src="/media/images/flat/TL/performance_graph_4_text.png" data-original="/media/images/flat/TL/performance_graph_4_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 2.0 CRDi" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt>Максимальная мощность</dt>
                                                <dd><strong>185</strong> <span class="unit">л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt>Максимальный крутящий момент</dt>
                                                <dd><strong>400</strong> <span class="unit">Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main_wrap">
                            <div class="sub_contents">
                                <div class="list">
                                    <ul>
                                        <li class="on">
                                            <a href="#">
                                                <span class="img"><img src="/media/images/flat/TL/performance_sub_list_1.jpg" width="160" height="130" alt="7-ступенчатая коробка передач с двойным сцеплением" /><span class="dim"> </span></span>
                                                <span class="txt">7-ступенчатая автоматическая коробка передач</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="img"><img src="/media/images/flat/TL/performance_sub_list_2.jpg" width="160" height="130" alt="Управление тягой в повороте" /><span class="dim"> </span></span>
                                                <span class="txt">4WD</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="view">
                                    <ul>
                                        <li class="tab1 on">
                                            <img src="/media/images/flat/TL/performance_sub_view_1.jpg" width="1280" height="740" alt="7-ступенчатая коробка передач с двойным сцеплением (DCT)">
								<span class="text">
									<strong>7-ступенчатая коробка передач с двойным сцеплением (DCT)</strong>
									7-ступенчатая коробка передач с двойным сцеплением обеспечивает исключительную <br>экономию топлива и низкие выбросы углекислого газа, одновременно значительно<br> улучшая динамику разгона.

								</span>
                                        </li>
                                        <li class="tab2">
                                            <img src="/media/images/flat/TL/performance_sub_view_2.jpg" width="1280" height="740" alt="Управление тягой в повороте (ATCC)">
								<span class="text">
									<strong>Управление тягой в повороте (ATCC)</strong>
									Новый Tucson ловко справляется с любыми поворотами благодаря системе управления тягой<br> в поворотах (ATCC) и уникальной в своем роде системе полного привода.
								</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="morelist">
                            <ul class="clearfix">
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Передняя подвеска McPherson" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_common_1.jpg" /></span>
						<span class="description">
							<strong>Передняя подвеска McPherson</strong><br />
							Усовершенствованная конструкция подвески обеспечивает лучшую чувствительность рулевого управления и комфортное вождение.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Многорычажная задняя подвеска" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_common_2.jpg" /></span>
						<span class="description">
							<strong>Многорычажная задняя подвеска</strong><br />
							Значительно доработанная конструкция задней подвески усиливает комфорт при вождении и улучшает стабильность автомобиля во время движения.
						</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="contents_safety" class="contents_safety pip">
                        <!-- new template -->
                        <h2 class="hidden">БЕЗОПАСНОСТЬ</h2>
                        <div class="parallax parallax4"><div>БЕЗОПАСНОСТЬ</div></div>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">БЕЗОПАСНОСТЬ И НАДЕЖНОСТЬ – ТО, О ЧЕМ МЫ ДУМАЕМ В ПЕРВУЮ ОЧЕРЕДЬ</div>
                                <div class="text2">Новый Hyundai Tucson продолжает повышать планку в области обеспечения безопасности интеллектуального вождения, используя самые современные технологии и ужесточая требования к надежности. <br>Это позволяет нам гарантировать Вашу безопасность при поездке на автомобиле Tucson.</div>
                            </div>
                            <div class="scene_wrap">
                                <div class="scene scene1">
                                    <div class="bg"> </div>
                                    <div class="mycar">
                                        <div class="car1"> </div><div class="car2"> </div><div class="car3"> </div><div class="car4"> </div><div class="car5"> </div><div class="car6"> </div><div class="car7"> </div><div class="car8"> </div><div class="car9"> </div><div class="car10"> </div><div class="car11"> </div><div class="car12"> </div><div class="car13"> </div><div class="car14"> </div><div class="car15"> </div>
                                    </div>
                                    <div class="yourcar">
                                        <div class="car1"> </div><div class="car2"> </div><div class="car3"> </div><div class="car4"> </div><div class="car5"> </div><div class="car6"> </div><div class="car7"> </div><div class="car8"> </div><div class="car9"> </div><div class="car10"> </div><div class="car11"> </div>
                                    </div>
                                </div>
                                <div class="scene scene2">
                                    <div class="bg"><div class="bg1"> </div><div class="bg2"> </div></div>
                                    <div class="mycar">
                                        <div class="car"> </div>
                                        <div class="info"><div class="info1"> </div><div class="info2"> </div></div>
                                        <div class="line"><div class="line1"> </div><div class="line2"> </div><div class="line3"> </div><div class="line4"> </div></div>
                                    </div>
                                    <div class="yourcar"><div class="car"> </div></div>
                                </div>
                                <div class="scene scene3">
                                    <div class="bg"><div class="bg1"> </div><div class="bg2"> </div></div>
                                    <div class="mycar">
                                        <div class="car"><div class="car1"> </div><div class="car2"> </div></div>
                                        <div class="line"><div class="line1"> </div><div class="line2"> </div><div class="line3"> </div><div class="line4"> </div></div>
                                    </div>
                                    <div class="info">
                                        <div class="info1"> </div><div class="info2"> </div>
                                    </div>
                                    <div class="red"> </div>
                                </div>
                                <div class="scene scene4">
                                    <div class="bg"> </div>
                                    <div class="mycar">
                                        <div class="car1"> </div><div class="car2"> </div><div class="car3"> </div><div class="car4"> </div><div class="car5"> </div><div class="car6"> </div><div class="car7"> </div><div class="car8"> </div><div class="car9"> </div><div class="car10"> </div><div class="car11"> </div><div class="car12"> </div><div class="car13"> </div><div class="car14"> </div><div class="car15"> </div><div class="car16"> </div>
                                    </div>
                                </div>
                                <div class="text_wrap">
                                    <ul>
                                        <li class="text1">
                                            <strong>Функция автоматического экстренного торможения (AEB)</strong>
                                            <div>
                                                <p>Функция автоматического экстренного торможения (AEB) спроектирована таким образом, чтобы обезопасить Вас от любого потенциального столкновения. Система готова применить тормоза раньше Вас благодаря использованию высокотехнологичного радара и камер, которые<br> оберегают Вас даже в тот момент, когда Вы не смотрите на дорогу.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="text2">
                                            <strong>Система мониторинга слепых зон (BSD)</strong>
                                            <div>
                                                <p>Предупреждая вас об опасностях со всех сторон, система мониторинга слепых зон (BSD) постоянно следит за дорогой благодаря сенсорам, определяющим приближение транспортных средств в слепых зонах сбоку или сзади от вашего автомобиля.</p>
                                            </div>
                                        </li>
                                        <li class="text3">
                                            <strong>Система отслеживания линий разметки (Lane Keeping Assist System)</strong>
                                            <div>
                                                <p>Система отслеживания линий разметки (Lane Keeping Assist System) слегка корректирует положение рулевого колеса, чтобы не допустить случайного схода с полосы.</p>
                                            </div>
                                        </li>
                                        <li class="text4">
                                            <strong>Лампы дополнительной подсветки поворотов (SBL)</strong>
                                            <div>
                                                <p>Указывая вам путь даже в самых темных местах, лампы дополнительной подсветки поворотов (SBL) повысят вашу безопасность в ночное время, обеспечивая лучшую видимость при маневре.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="controls">
                                    <a href="#" class="play">Play</a>
                                    <a href="#" class="stop">Стоп</a>
                                    <a href="#" class="next">Далее</a>
                                </div>
                                <div class="slider_wrap">
                                    <div class="slider" id="safety_slider"></div>
                                    <div class="slider_text">
                                        <ul>
                                            <li class="on">AEB</li>
                                            <li>BSD</li>
                                            <li>LKAS</li>
                                            <li>SBL</li>
                                            <li>END</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ride_and_handling">
                                <div class="bluebox">
                                    <div class="txt">УПРАВЛЕНИЕ АВТОМОБИЛЕМ</div>
                                    <div class="list">
                                        <ul>
                                            <li class="on"><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_1.jpg" width="120" height="100" alt="Система ATCC" /><span class="dim"> </span></span><span class="txt">Управление тягой в повороте (ATCC)</span></a></li>
                                            <li><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_2.jpg" width="120" height="100" alt="Система динамической стабилизации" /><span class="dim"> </span></span><span class="txt">Система динамической стабилизации (VSM)</span></a></li>
                                            <li class="transmission"><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_3.jpg" width="120" height="100" alt="Система помощи при спуске с горы" /><span class="dim"> </span></span><span class="txt">Система помощи при спуске с горы (DBC) и система помощи при старте в гору (НАС)</span></a></li>
                                            <li><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_4.jpg" width="120" height="100" alt="Особо высокопрочная сталь" /><span class="dim"> </span></span><span class="txt">Особо высокопрочная сталь (AHSS)</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="view">
                                        <ul>
                                            <li class="tab1 on">
                                                <img src="/media/images/flat/TL/safety_ride_view_1.jpg" width="1280" height="750" alt="Управление тягой в повороте в действии" />
									<span class="text">
										<strong>Управление тягой в повороте (ATCC)</strong>
										Система ATCC – это система полного привода (AWD) нового поколения, которая эффективно перераспределяет крутящий момент между колесами, улучшая сцепление с дорогой и обеспечивая наилучшую управляемость на поворотах, на которую Вы можете положиться.
									</span>
									<span class="remarks">
										<p class="traction">Система управления тягой</p>
										<p class="braking">Система управления торможением</p>
									</span>
                                            </li>
                                            <li class="tab2">
                                                <img src="/media/images/flat/TL/safety_ride_view_2.jpg" width="1280" height="750" alt="Усилитель рулевого управления" />
									<span class="text">
										<strong>Система динамической стабилизации (VSM)</strong>
										Система динамической стабилизации (VSM) помогает вам ездить с особенной уверенностью по мокрым и скользким дорогам, обеспечивая стабильность  благодаря слаженной работе системы электронного контроля устойчивости (ESC) и электроусилителя рулевого управления (MDPS).
									</span>
									<span class="desc">
										Усилитель рулевого управления помогает предотвратить избыточную или недостаточную поворачиваемость автомобиля  на дорогах с пониженным коэффициентом сцепления.
									</span>
                                            </li>
                                            <li class="tab3">
									<span class="text">
										<strong>Система помощи при спуске с горы (DBC) и система помощи при старте в гору (НАС)</strong>
										Новый Tucson вдохновит вас на приключения, ведь он словно создан для того,  чтобы справиться с движением по любой холмистой местности, обеспечивая контроль торможения на крутых спусках и  автоматическое торможение в случае отката автомобиля назад при подъемах.
									</span>
                                                <div class="car_wrap">
                                                    <div class="car_down"><img src="/media/images/flat/TL/safety_ride_view_3_2.jpg" width="1280" height="750" alt="Помощь при спуске с горы" /></div>
                                                    <div class="car_up"><img src="/media/images/flat/TL/safety_ride_view_3_1.jpg" width="1280" height="750" alt="Система помощи при старте в гору" /></div>
                                                </div>
                                            </li>
                                            <li class="tab4">
                                                <img src="/media/images/flat/TL/safety_ride_view_4.jpg" width="1280" height="750" alt="Высокая жесткость кузова" />
									<span class="text">
										<strong>Особо высокопрочная сталь (AHSS)</strong>
										Новый Tucson демонстрирует лучшую в своем классе жесткость кузова  благодаря увеличенной в нем доле  высокопрочной стали (AHSS) в  и обработки посредством горячей штамповки.
									</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="morelist">
                            <ul class="clearfix">
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="6 встроенных подушек безопасности" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_2.jpg" /></span>
						<span class="description">
							<strong>6 подушек безопасности</strong><br />
							Система из 6 подушек безопасности включает в себя две фронтальные подушки, две боковые передние подушки и две шторки безопасности с обеих сторон по всей длине салона.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Система контроля давления в шинах" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_3.jpg" /></span>
						<span class="description">
							<strong>Система контроля давления в шинах (TPMS)</strong><br />
                            Интеллектуальная система контроля давления в шинах точно определяет, в каком из колес давление упало ниже допустимого.</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Электронный стояночный тормоз" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_4.jpg" /></span>
    					<span class="description">
    						<strong>Электронный стояночный тормоз (EPB)</strong><br />
    						Данное устройство экономит внутреннее пространство автомобиля, а современный дизайн обеспечивает удобство при его использовании.
    						<span class="caution" style="margin: 10px 0 30px;" >Доступно только с автоматической коробкой передач</span>
    					</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="contents_convenience" class="contents_convenience pip">
                        <h2 class="hidden">КОМФОРТ</h2>
                        <div class="parallax parallax5"><div>КОМФОРТ</div></div>
                        <div class="pip_cont">
                            <div class="text_play">
                                <div class="text1">РОСКОШЬ И КОМФОРТ, КОТОРЫЕ ЗАВОДЯТ </div>
                                <div class="text2">Автомобили Hyundai обеспечивают Вам первоклассный комфорт во время ежедневных поездок.<br> Новый компактный городской внедорожник Tucson сделает их еще комфортнее.</div>
                            </div>
                            <div class="main_wrap">
                                <ul class="list_wrap">
                                    <li class="list list1">
                                        <a href="#">
                                            <strong>Система автоматической парковки (PAS)</strong>
                                            <img src="/media/images/flat/TL/convenience_list_01.jpg" width="503" height="309" alt="Современная система автоматической парковки" />
                                        </a>
                                    </li>
                                    <li class="list list2">
                                        <a href="#">
                                            <strong>Электропривод двери багажника с системой автоматического открывания</strong>
                                            <img src="/media/images/flat/TL/convenience_list_02.jpg" width="436" height="309" alt="Багажная дверь с электроприводом" />
                                        </a>
                                    </li>
                                    <li class="list list3">
                                        <a href="#">
                                            <strong>Система регулировки сидений и трансформации задних сидений</strong>
                                            <img src="/media/images/flat/TL/convenience_list_03.jpg" width="370" height="310" alt="Система регулировки задних сидений" />
                                        </a>
                                    </li>
                                    <li class="list list4">
                                        <a href="#">
                                            <strong>Система подогрева и охлаждения сидений</strong>
                                            <img src="/media/images/flat/TL/convenience_list_04.jpg" width="569" height="310" alt="Встроенная система подогрева и охлаждения сидений" />
                                        </a>
                                    </li>
                                </ul>
                                <ul class="view_wrap">
                                    <li class="view view1">
                                        <div class="close"><a href="#">Закрыть</a></div>
                                        <img src="/media/images/flat/TL/convenience_view_01.jpg" width="630" height="620" alt="Действие системы помощи при парковке" />
                                        <div class="text">
                                            <strong>Система автоматической парковки (PAS)</strong>
                                            Сенсоры на переднем и заднем бамперах, которые оценивают расстояние между автомобилем и препятствиями на дороге, оповещая водителя об опасности, когда необходимо, пригождаются при парковке в условиях ограниченного пространства.
                                        </div>
                                    </li>
                                    <li class="view view2">
                                        <div class="close"><a href="#">Закрыть</a></div>
                                        <img src="/media/images/flat/TL/convenience_view_02.jpg" width="630" height="620" alt="Автоматическое открывание багажной двери" />
                                        <div class="text">
                                            <strong>Электропривод двери багажника с системой автоматического открывания</strong>
                                            Багажная дверь открывается автоматически, как только ключ оказывается в зоне обнаружения от 3 секунд и более. Для повышенной безопасности перед  открытием багажной двери срабатывают звуковой сигнал и аварийная сигнализация.
                                        </div>
                                    </li>
                                    <li class="view view3">
                                        <div class="close"><a href="#">Закрыть</a></div>
                                        <img src="/media/images/flat/TL/convenience_view_03_front.jpg" width="630" height="620" alt="Регулировка положения спинки сиденья" />
                                        <div class="text">
                                            <strong class="front on">Система регулировки сидений и трансформации задних сидений</strong>
                                            <strong class="rear">Складывающиеся задние сиденья</strong>
                                            <p class="front on">Чувствуйте себя комфортно благодаря настройке пассажирского кресла в 8 направлениях и водительского кресла в 10 направлениях, а также благодаря дополнительной двусторонней регулировке поясничной поддержки водительского кресла.</p>
                                            <p class="rear">Каждый пассажир может подобрать оптимальную  позицию сиденья, отрегулировав его наклон благодаря удобно расположенному рычагу.</p>
                                            <div class="toggle tabs on"><a href="#" class="toggle_on" data-img="/media/images/flat/TL/convenience_view_03_front.jpg">Передние сиденья</a><!-- no space --><a href="#" class="toggle_off" data-img="/media/images/flat/TL/convenience_view_03_rear.jpg">Задние сиденья</a></div>
                                        </div>
                                    </li>
                                    <li class="view view4">
                                        <div class="close"><a href="#">Закрыть</a></div>
                                        <img src="/media/images/flat/TL/convenience_view_04.jpg" width="630" height="620" alt="Регулируемый обогрев сидений" />
                                        <div class="text">
                                            <strong>Система подогрева и охлаждения сидений</strong>
                                            В жару насладитесь прохладным сухим воздухом благодаря системе воздушной вентиляции или окружите себя теплом благодаря подогреву передних и задних сидений.
                                        </div>
                                    </li>
                                </ul>
                                <div class="dim"> </div>
                            </div>
                        </div>
                        <div class="morelist">
                            <ul class="clearfix">
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Круиз-контроль Tucson" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_1.jpg" /></span>
						<span class="description">
							<strong>Круиз-контроль</strong><br />
							Система поддерживает постоянную скорость, заданную водителем.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Шторка багажного отделения" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_2.jpg" /></span>
						<span class="description">
							<strong>Шторка багажного отделения</strong><br />
							Шторка необходима как для безопасности, так и для удобства: она позволяет скрыть содержимое багажного отделения и предотвратит попадание багажа в салон.
						</span>
                                </li>
                                <li>
                                    <span class="img"><img class="lazy" width="306" height="133" alt="Съемный крючок для сумки и пакетов" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_3.jpg" /></span>
						<span class="description">
							<strong>Крючок для сумки на спинке заднего сидения</strong><br />
							Спинка заднего сидения оснащена съемным крючком, созданным для размещения хозяйственных сумок и пакетов, что еще больше повышает вместимость автомобиля.
						</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-type content-type__specs">
                    <div id="contents_specs" class="contents_specs pip">
                        <div class="specs_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Технические характеристики Hyundai Tucson</h2>
                                <a href="#" class="open-all isWillClose">Свернуть все</a>
                            </div>
                            <div class="specs-listing_wrap">
                                <ul class="specs-listing">
                                    <li class="head-line">
                                        <table>
                                            <tr>
                                                <th>Модификации</th>
                                                <td>2.0 6AT 2WD</td>
                                                <td>2.0 6MT 4WD</td>
                                                <td>2.0 6AT 4WD</td>
                                                <td>1.6 7DCT 4WD</td>
                                                <td>2.0 6AT 4WD</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div class="opened">Двигатель</div>
                                        <table>
                                            <tr>
                                                <th>Мощность<span class="add-blue-color">*</span></th>
                                                <td>149.6 л.с.</td>
                                                <td>149.6 л.с.</td>
                                                <td>149.6 л.с.</td>
                                                <td>177 л.с.</td>
                                                <td>185 л.с.</td>
                                            </tr>
                                            <tr>
                                                <th>Объем двигателя</th>
                                                <td>2 л.</td>
                                                <td>2 л.</td>
                                                <td>2 л.</td>
                                                <td>1.6 л.</td>
                                                <td>2 л.</td>
                                            </tr>
                                            <tr>
                                                <th>Двигатель</th>
                                                <td>Nu 2.0 MPi D-CVVT</td>
                                                <td>Nu 2.0 MPi D-CVVT</td>
                                                <td>Nu 2.0 MPi D-CVVT</td>
                                                <td>Gamma 1.6 Turbo-GDi D-CVVT</td>
                                                <td>R 2.0 Diesel</td>
                                            </tr>
                                            <tr>
                                                <th>Объем, см3</th>
                                                <td>1999</td>
                                                <td>1999</td>
                                                <td>1999</td>
                                                <td>1591</td>
                                                <td>1995</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность,<br>кВт</th>
                                                <td>110</td>
                                                <td>110</td>
                                                <td>110</td>
                                                <td>130</td>
                                                <td>136</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность,<br>л.с.</th>
                                                <td>149.6</td>
                                                <td>149.6</td>
                                                <td>149.6</td>
                                                <td>177</td>
                                                <td>185</td>
                                            </tr>
                                            <tr>
                                                <th>Топливный бак</th>
                                                <td>62</td>
                                                <td>62</td>
                                                <td>62</td>
                                                <td>62</td>
                                                <td>62</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Динамика</div>
                                        <table>
                                            <tr>
                                                <th>Привод</th>
                                                <td>Передний</td>
                                                <td>Полный</td>
                                                <td>Полный</td>
                                                <td>Полный</td>
                                                <td>Полный</td>
                                            </tr>
                                            <tr>
                                                <th>Динамические характеристики</th>
                                                <td>6АКПП</td>
                                                <td>6МКПП</td>
                                                <td>6АКПП</td>
                                                <td>7РКПП</td>
                                                <td>6АКПП</td>
                                            </tr>
                                            <tr>
                                                <th>Тип трансмиссии </th>
                                                <td>Автоматическая</td>
                                                <td>Механическая</td>
                                                <td>Автоматическая</td>
                                                <td>Роботизир.</td>
                                                <td>Автоматическая</td>
                                            </tr>
                                            <tr>
                                                <th>Ускорение<br>0-100 км/ч, сек </th>
                                                <td>11.1</td>
                                                <td>11.3</td>
                                                <td>11.8</td>
                                                <td>9.1</td>
                                                <td>9.5</td>
                                            </tr>
                                            <tr>
                                                <th>Максимальная<br>скорость, км/ч </th>
                                                <td>181</td>
                                                <td>184</td>
                                                <td>180</td>
                                                <td>201</td>
                                                <td>201</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Расход топлива</div>
                                        <table>
                                            <tr>
                                                <th>Городской цикл,<br>л/100 км<span class="add-blue-color">*</span></th>
                                                <td>10.9</td>
                                                <td>10.9</td>
                                                <td>11.8</td>
                                                <td>9.6</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <th>Загородный цикл,<br>л/100 км<span class="add-blue-color">*</span></th>
                                                <td>6.1</td>
                                                <td>6.6</td>
                                                <td>6.2</td>
                                                <td>6.5</td>
                                                <td>5.6</td>
                                            </tr>
                                            <tr>
                                                <th>Смешанный цикл,<br>л/100 км<span class="add-blue-color">*</span></th>
                                                <td>7.9</td>
                                                <td>8.2</td>
                                                <td>8.4</td>
                                                <td>7.7</td>
                                                <td>6.5</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в городском цикле,<br>г/км<span class="add-blue-color">*</span></th>
                                                <td>252</td>
                                                <td>252</td>
                                                <td>273</td>
                                                <td>224</td>
                                                <td>211</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в загородном цикле, г/км</th>
                                                <td>142</td>
                                                <td>154</td>
                                                <td>145</td>
                                                <td>151</td>
                                                <td>147</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в смешанном цикле, г/км</th>
                                                <td>182</td>
                                                <td>190</td>
                                                <td>197</td>
                                                <td>178</td>
                                                <td>170</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Подвеска</div>
                                        <table>
                                            <tr>
                                                <th>Колесная база</th>
                                                <td>2670</td>
                                                <td>2670</td>
                                                <td>2670</td>
                                                <td>2670</td>
                                                <td>2670</td>
                                            </tr>
                                            <tr>
                                                <th>Минимальный дорожный просвет, мм</th>
                                                <td>182</td>
                                                <td>182</td>
                                                <td>182</td>
                                                <td>182</td>
                                                <td>182</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя колея</th>
                                                <td class="w-border" colspan="5">1604 (19") / 1608 (17") / 1620 (16")</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя колея</th>
                                                <td class="w-border" colspan="5">1615 (19") / 1620 (17") / 1631 (16")</td>
                                            </tr>
                                            <tr>
                                                <th>Передний свес</th>
                                                <td>910</td>
                                                <td>910</td>
                                                <td>910</td>
                                                <td>910</td>
                                                <td>910</td>
                                            </tr>
                                            <tr>
                                                <th>Задний свес</th>
                                                <td>895</td>
                                                <td>895</td>
                                                <td>895</td>
                                                <td>895</td>
                                                <td>895</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя подвеска</th>
                                                <td class="w-border" colspan="5">Независимая, пружинная, типа Макферсон, со стабилизатором поперечной устойчивости</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя подвеска</th>
                                                <td class="w-border" colspan="5">Независимая, пружинная, многорычажная, со стабилизатором поперечной устойчивости</td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detailedSpecLink">
                            <a href="/configurator/car/18" onClick="ga('send', 'event', 'knopka', 'click');">Подробные характеристики</a>
                        </div>
                        <div class="spec_message">
                            <div>
                                <span class="add-blue-color">*</span> — Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства<br>
                                <span class="add-blue-color">**</span> — Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101<br>
                                <span class="add-blue-color">***</span> — Согласно сертификату соответствия по Директиве ЕС 92/21/EEC представлено значение межосевого дорожного просвета<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-type content-type__gallery">
                    <div id="contents_gallery" class="contents_gallery pip">
                        <div class="gallery_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Фото Hyundai Tucson</h2>
                                <div class="thumbs-toggler">
                                    <a href="#" data-type="all" class="alive">Все</a>
                                    <a href="#" data-type="exterior">Экстерьер</a>
                                    <a href="#" data-type="interior">Интерьер</a>
                                </div>
                            </div>
                            <ul id="all-gallery-items"style="display: none;"></ul>
                            <div class="gallery-body">
                                <div class="gallery-list-wrap">
                                    <div class="gallery-list-holder">
                                        <div class="gallery-list-slider">
                                            <ul class="clearfix"></ul>
                                        </div>
                                        <div class="slide-prev"></div>
                                        <div class="slide-next"></div>
                                        <div class="slide-paginator">
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prefooter-promo">
                <div class="promo-main">
                    <div class="promo-main_cont">
                        <div class="text-desc">
                            <h2 class="promo-title">Станьте владельцем<br>Tucson уже сегодня</h2>
				<span class="promo-text">Выберите ближайший дилерский центр, пройдите<br>
				тест-драйв и станьте владельцем Hyundai Tucson.<br>
				Для вас всегда есть удобные программы<br>
				кредитования и другие предложения Drive Hyundai.
				</span>
                            <a href="/test-drive/" class="btn-flat">Пройти тест-драйв</a>
                        </div>
                        <img src="/media/images/flat/TL/elements/tucson_promo_pic.png" width="525" height="350" alt="Тест драйв Hyundai Tucson">
                    </div>
                    <div class="promo-grid">
                        <ul class="clearfix">
                            <li><a href="https://www.hyundai.ru/configurator/car/18"><span>Конфигуратор Tucson</span></a></li>
                            <li><a target="_blank" href="https://www.hyundai.ru/media/downloads/accessoires/Tucson_Acc.pdf"><span>Каталог аксессуаров</span></a></li>
                            <li><a href="https://www.hyundai.ru/configurator/car/18#calculator"><span>Рассчитать кредит</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="promo-slider_wrap">
                    <div class="promo-slider_cut">
                        <ul class="promo-slider" style="width: 632px;">
<!--
                            <li>
                                <a href="/SantaFe" class="promo-slider-link">
                                    <img src="https://www.hyundai.ru/media/images/carmodels/SANTA FE_9295b644eb4a3ca7.png" alt="SANTA FE">
                                    <span class="model">SANTA FE</span>
                                    <span class="price">от 1 964 000  ₽</span>
                                </a>
                            </li>
                            <li>
                                <a href="/GrandSantaFe" class="promo-slider-link">
                                    <img src="https://www.hyundai.ru/media/images/carmodels/Grand Santa fe_2625a0ed5fb73033.png" alt="Grand SANTA FE">
                                    <span class="model">Grand SANTA FE</span>
                                    <span class="price">от 2 439 000  ₽</span>
                                </a>
                            </li>
-->
                            <li>
                                <a href="/H-1" class="promo-slider-link">
                                    <img src="https://www.hyundai.ru/media/images/carmodels/H-1_3185b17f6c10d2a9.png" alt="H-1">
                                    <span class="model">H-1</span>
                                    <span class="price">от 2 121 000  ₽</span>
                                </a>
                            </li>
                            <li>
                                <a href="/Elantra" class="promo-slider-link">
                                    <img src="https://www.hyundai.ru/media/images/carmodels/Elantra_7505a0ed5f602de8.png" alt="ELANTRA">
                                    <span class="model">ELANTRA</span>
                                    <span class="price">от 1 019 000  ₽</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
<!--
            <div class="disc-block">
                <p class="dicslamer-casco"><sup>*</sup>Платеж рассчитан в рамках программы Hyundai (Старт) исходя из цены Hyundai Tucson (Primary 2,0л 6MT 2WD) 1 399 000р., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 711 500р., сумма кредита 778595р., срок кредита 36 мес.; процентная ставка 9.9% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.10.18 по 31.10.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru</p>
            </div>
-->
        </div>



        <!--RuTarget-->
        <script type="text/javascript" >
            var _rutarget = window._rutarget || [];
            _rutarget.push({'event': 'showOffer', 'sku': 'Tucson'});
        </script>
        <!--/RuTarget-->
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/pip_flat_TL.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>