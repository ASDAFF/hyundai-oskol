<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Запись на сервис");
?>

    <link type="text/css" href="https://www.hyundai.ru/media/css/newalloffers.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/forms/service-request.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <!-- based on new offers template-->

        <script type="text/javascript">
            var currentModel = '';
        </script>
        <script type="text/javascript">
            var currentDealerName = '';
        </script>
        <script type="text/javascript">
            var currentDealerCity = '';
        </script>

        <!-- Progress Bar -->

        <div class="layout-black">
            <div class="progress-ring-wrap">
                <canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas>
            </div>
        </div>

        <!-- Progres Bar Ends -->

        <!-- configuring main part -->
 <div class="offers__main test-drive-main ">
    <div class="offers__container test-drive-content">
        <h1 class="offers__content-title skyblue">Запись на сервис</h1>
        <div class="info-gather__body clearfix">
	        <div class="fleft">
            <div class="info-gather__col info-gather__col__car fleft">
                <h2 class="info-gather__col__title">Автомобиль</h2>
            <!-- cars -->
            	<!-- car models-->
                <div class="carlistdropdown">
                    <div id="dropdown-carlisting" class="drop-it-down" tabindex="0">
                        <ul class="dropdown-list first">
                            <li  data-value="" class="dropdown-item first">Выберите модель*</li>
                        </ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
	                            <li data-model="Solaris"            	class="dropdown-item " >SOLARIS</li>
	                            <li data-model="Creta"            	class="dropdown-item " >CRETA</li>

                                <li data-model="Accent"                 class="dropdown-item ">Accent</li>

                                <li data-model="Coupe"					class="dropdown-item ">Coupe</li>


                                <li data-model="Elantra"            	class="dropdown-item " >ELANTRA</li>

                                <li data-model="Equus"              	class="dropdown-item ">EQUUS</li>
                                <li data-model="Genesis"            	class="dropdown-item " >Genesis</li>
								<li data-model="Genesis Coupe"      	class="dropdown-item " >Genesis Coupe</li>
                                <li data-model="Getz"               	class="dropdown-item " >Getz</li>
                                <li data-model="Grandeur"               class="dropdown-item " >Grandeur</li>
                                <li data-model="H-1"                 	class="dropdown-item ">H-1</li>
                                <li data-model="i20"                	class="dropdown-item " >i20</li>
                                <li data-model="i30"                	class="dropdown-item " >i30</li>
                                <li data-model="i40"                	class="dropdown-item " >i40</li>
                                <li data-model="ix35"               	class="dropdown-item " >ix35</li>
                                <li data-model="ix55"               	class="dropdown-item " >ix55</li>
                                <li data-model="Matrix"                 class="dropdown-item ">Matrix</li>
                                <li data-model="Santa Fe"     	class="dropdown-item " >SANTA FE</li>
                                <li data-model="Grand Santa Fe"     	class="dropdown-item " >Grand SANTA FE</li>
                                <li data-model="Sonata"             	class="dropdown-item " >SONATA</li>
                                <li data-model="Tucson"             	class="dropdown-item " >TUCSON</li>

<!--                                 <li data-model="Centennial"				class="dropdown-item ">Centennial</li> -->

                                <li data-model="Sonata"					class="dropdown-item ">NF/SONATA</li>
                                <li data-model="Terracan"				class="dropdown-item ">Terracan</li>
                                <li data-model="Trajet"                 class="dropdown-item ">Trajet</li>

                                <li data-model="Veloster"           	class="dropdown-item " >Veloster</li>

                                <li data-model="Verna"					class="dropdown-item ">Verna/Accent</li>
<!--                                 <li data-model="XG"                 	class="dropdown-item ">XG</li> -->
                                <li data-model="Other"					class="dropdown-item ">Другая модель</li>
                            </ul>
                        </div>
                    </div>
                </div>
            	<!-- year-->
                <!--
<div class="yearlistdropdown">
                    <div id="dropdown-yearlisting" class="drop-it-down" tabindex="0">
                        <ul class="dropdown-list first"><li  data-value="" class="dropdown-item first">Год выпуска*</li></ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
	                            <li data-value="2018" class="dropdown-item">2018</li>
	                            <li data-value="2017" class="dropdown-item">2017</li>
                                <li data-value="2016" class="dropdown-item">2016</li>
                                <li data-value="2015" class="dropdown-item">2015</li>
                                <li data-value="2014" class="dropdown-item">2014</li>
                                <li data-value="2013" class="dropdown-item">2013</li>
                                <li data-value="2012" class="dropdown-item">2012</li>
                                <li data-value="2011" class="dropdown-item">2011</li>
                                <li data-value="2010" class="dropdown-item">2010</li>
                                <li data-value="2009" class="dropdown-item">2009</li>
                                <li data-value="2008" class="dropdown-item">2008</li>
                                <li data-value="2007" class="dropdown-item">2007</li>
                                <li data-value="2006" class="dropdown-item">2006</li>
                                <li data-value="2005" class="dropdown-item">2005 и старше</li>
                            </ul>
                        </div>
                    </div>
                </div>
-->
            	<!-- engine type -->
                <!--
<div class="typelistdropdown">
                    <div id="dropdown-typelisting" class="drop-it-down" tabindex="0">
                        <ul class="dropdown-list first"><li  data-value="" class="dropdown-item first">Тип записи</li></ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
                                <li data-value="service" class="dropdown-item">Техническое обслуживание</li>
                                <li data-value="body" class="dropdown-item">Кузовной ремонт</li>
                            </ul>
                        </div>
                    </div>
                </div>
-->
            	<!-- engine capacity -->
<!--
                <div class="capacitylistdropdown">
                    <div id="dropdown-capacitylisting" class="drop-it-down">
                        <ul class="dropdown-list first"><li  data-value="" class="dropdown-item first">Объем двигателя*</li></ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
                                <li data-value="1.2" class="dropdown-item">1.2</li>
                                <li data-value="1.4" class="dropdown-item">1.4</li>
                                <li data-value="1.6" class="dropdown-item">1.6</li>
                                <li data-value="1.8" class="dropdown-item">1.8</li>
                                <li data-value="2.0" class="dropdown-item">2.0</li>
                                <li data-value="2.2" class="dropdown-item">2.2</li>
                                <li data-value="2.4" class="dropdown-item">2.4</li>
                                <li data-value="2.6" class="dropdown-item">2.6</li>
                                <li data-value="2.8" class="dropdown-item">2.8</li>
                                <li data-value="3.0" class="dropdown-item">3.0</li>
                                <li data-value="3.2" class="dropdown-item">3.2</li>
                                <li data-value="3.4" class="dropdown-item">3.4</li>
                                <li data-value="3.6" class="dropdown-item">3.6</li>
                                <li data-value="3.8" class="dropdown-item">3.8</li>
                                <li data-value="4.0" class="dropdown-item">4.0</li>
                                <li data-value="4.2" class="dropdown-item">4.2</li>
                                <li data-value="4.4" class="dropdown-item">4.4</li>
                                <li data-value="4.6" class="dropdown-item">4.6</li>
                                <li data-value="4.8" class="dropdown-item">4.8</li>
                                <li data-value="5.0" class="dropdown-item">5.0</li>
                            </ul>
                        </div>
                    </div>
                </div>
-->
            	<!-- mileage -->
                <!--
<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Имя.">
                    <input type="text" name="mileage" id="mileage" placeholder="Пробег автомобиля">
                </div>
-->
            	<!-- vin -->
<!--
                <div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Имя.">
                    <input type="text" name="vin" id="vin" placeholder="VIN номер">
                </div>
-->
            </div>
            <div class="info-gather__col info-gather__col__dealer fleft">
                <h2 class="info-gather__col__title">Выбор дилера</h2>
                <div class="dealercitylistdropdown">
                    <div id="dropdown-dealercitylisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
                        <ul class="dropdown-list first"><li  data-value="" class="dropdown-item first">Выберите город</li></ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
								<li  data-value="" class="dropdown-item divider">&mdash;</li>
																										<li data-value="122" class="dropdown-item">Абакан</li>
																										<li data-value="116" class="dropdown-item">Альметьевск</li>
																										<li data-value="35" class="dropdown-item">Архангельск</li>
																										<li data-value="51" class="dropdown-item">Астрахань</li>
																										<li data-value="39" class="dropdown-item">Барнаул</li>
																										<li data-value="36" class="dropdown-item">Белгород</li>
																										<li data-value="14" class="dropdown-item">Благовещенск</li>
																										<li data-value="24" class="dropdown-item">Брянск</li>
																										<li data-value="32" class="dropdown-item">Великий Новгород</li>
																										<li data-value="112" class="dropdown-item">Владивосток</li>
																										<li data-value="119" class="dropdown-item">Владикавказ</li>
																										<li data-value="70" class="dropdown-item">Владимир</li>
																										<li data-value="56" class="dropdown-item">Волгоград</li>
																										<li data-value="121" class="dropdown-item">Волжский</li>
																										<li data-value="114" class="dropdown-item">Вологда</li>
																										<li data-value="84" class="dropdown-item">Воронеж</li>
																										<li data-value="120" class="dropdown-item">Грозный</li>
																										<li data-value="18" class="dropdown-item">Екатеринбург</li>
																										<li data-value="38" class="dropdown-item">Иваново</li>
																										<li data-value="43" class="dropdown-item">Ижевск</li>
																										<li data-value="96" class="dropdown-item">Иркутск</li>
																										<li data-value="29" class="dropdown-item">Йошкар-Ола</li>
																										<li data-value="67" class="dropdown-item">Казань</li>
																										<li data-value="48" class="dropdown-item">Калининград</li>
																										<li data-value="52" class="dropdown-item">Калуга</li>
																										<li data-value="69" class="dropdown-item">Кемерово</li>
																										<li data-value="83" class="dropdown-item">Киров</li>
																										<li data-value="95" class="dropdown-item">Кострома</li>
																										<li data-value="12" class="dropdown-item">Краснодар</li>
																										<li data-value="46" class="dropdown-item">Красноярск</li>
																										<li data-value="64" class="dropdown-item">Курган</li>
																										<li data-value="77" class="dropdown-item">Курск</li>
																										<li data-value="45" class="dropdown-item">Липецк</li>
																										<li data-value="27" class="dropdown-item">Магнитогорск</li>
																										<li data-value="128" class="dropdown-item">Махачкала</li>
																										<li data-value="50" class="dropdown-item">Минеральные Воды</li>
																										<li data-value="106,125,98,110,129,19,107,102,103,124,111" class="dropdown-item active">Москва и Подмосковье</li>
																										<li data-value="49" class="dropdown-item">Мурманск</li>
																										<li data-value="66" class="dropdown-item">Набережные Челны</li>
																										<li data-value="100" class="dropdown-item">Нефтекамск</li>
																										<li data-value="74" class="dropdown-item">Нижневартовск</li>
																										<li data-value="42" class="dropdown-item">Нижний Новгород</li>
																										<li data-value="81" class="dropdown-item">Нижний Тагил</li>
																										<li data-value="55" class="dropdown-item">Новокузнецк</li>
																										<li data-value="13" class="dropdown-item">Новороссийск</li>
																										<li data-value="25" class="dropdown-item">Новосибирск</li>
																										<li data-value="127" class="dropdown-item">Ноябрьск</li>
																										<li data-value="57" class="dropdown-item">Омск</li>
																										<li data-value="37" class="dropdown-item">Орел</li>
																										<li data-value="79" class="dropdown-item">Оренбург</li>
																										<li data-value="117" class="dropdown-item">Орск</li>
																										<li data-value="72" class="dropdown-item">Пенза</li>
																										<li data-value="73" class="dropdown-item">Пермь</li>
																										<li data-value="40" class="dropdown-item">Петрозаводск</li>
																										<li data-value="82" class="dropdown-item">Псков</li>
																										<li data-value="85" class="dropdown-item">Пятигорск</li>
																										<li data-value="33" class="dropdown-item">Ростов-на-Дону</li>
																										<li data-value="31" class="dropdown-item">Рязань</li>
																										<li data-value="23" class="dropdown-item">Самара</li>
																										<li data-value="17" class="dropdown-item">Санкт-Петербург</li>
																										<li data-value="54" class="dropdown-item">Саранск</li>
																										<li data-value="11" class="dropdown-item">Саратов</li>
																										<li data-value="115" class="dropdown-item">Симферополь</li>
																										<li data-value="80" class="dropdown-item">Смоленск </li>
																										<li data-value="7" class="dropdown-item">Сочи</li>
																										<li data-value="58" class="dropdown-item">Ставрополь</li>
																										<li data-value="113" class="dropdown-item">Старый Оскол</li>
																										<li data-value="16" class="dropdown-item">Стерлитамак</li>
																										<li data-value="92" class="dropdown-item">Сургут</li>
																										<li data-value="101" class="dropdown-item">Сыктывкар</li>
																										<li data-value="99" class="dropdown-item">Тамбов</li>
																										<li data-value="62" class="dropdown-item">Тверь</li>
																										<li data-value="44" class="dropdown-item">Тольятти</li>
																										<li data-value="21" class="dropdown-item">Томск</li>
																										<li data-value="30" class="dropdown-item">Тула</li>
																										<li data-value="26" class="dropdown-item">Тюмень</li>
																										<li data-value="20" class="dropdown-item">Улан-Удэ</li>
																										<li data-value="22" class="dropdown-item">Ульяновск</li>
																										<li data-value="8" class="dropdown-item">Уфа</li>
																										<li data-value="108" class="dropdown-item">Хабаровск</li>
																										<li data-value="68" class="dropdown-item">Чебоксары</li>
																										<li data-value="28" class="dropdown-item">Челябинск</li>
																										<li data-value="9" class="dropdown-item">Череповец</li>
																										<li data-value="123" class="dropdown-item">Шахты</li>
																										<li data-value="126" class="dropdown-item">Южно-Сахалинск</li>
																										<li data-value="118" class="dropdown-item">Якутск</li>
																										<li data-value="86" class="dropdown-item">Ярославль</li>
								                            </ul>
                        </div>
                    </div>
                </div>
                <!-- try to insert dealers after selecting sity -->
                <div class="dealerlistdropdown">
                    <div id="dropdown-dealerlisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
                        <ul class="dropdown-list first"><li  data-value="" class="dropdown-item first">Выберите дилера</li></ul>
                        <div class="nano">
                            <ul class="dropdown-list nano-content">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //dealers -->
                    <div class="selected-dealer__wrap">
                        <div id="selected-dealer"></div>
                    </div>
                <a class="show-map skyblue dashedskyblue" href="#">Показать на карте</a>
            </div>
            <br clear="all"/>
            <div class="info-gather__row info-gather__row--comment fleft">
	            <!--
<h2 class="info-gather__col__title">Опишите ваш запрос</h2>
                <div class="controls__wrap add-comment-wrap" data-content="">
                    <textarea type="" name="comment" id="сomment" placeholder="Введите комментарий" autocapitalize="sentences" maxlength="255"></textarea>
                </div>
-->
            </div>
            </div>
            <div class="info-gather__col info-gather__col__personal fleft">
                <h2 class="info-gather__col__title">Ваши данные</h2>
                <div class="selectMr__wrap">
                    <input type="radio" class="selectMr__option" name="mrOrms" value="Mr." id="Mr." checked="true"><label for="Mr.">Уважаемый</label>
                    <input type="radio" class="selectMr__option" name="mrOrms" value="Ms." id="Ms."><label for="Ms.">Уважаемая</label>
                </div>
                <div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Имя.">
                    <input type="text" name="name" id="name" placeholder="Имя">
                </div>
                <div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Фамилию.">
                    <input type="text" name="surname" id="surname" placeholder="Фамилия">
                </div>
                <div class="controls__wrap" data-content="Пожалуйста, &#xa; введите телефон">
                    <input type="text" name="phone" id="phone" maxlength="32" placeholder="+7 (___) ___-__-__">
                </div>
                <div class="controls__wrap" data-content="Введен &#xa; некорректный E-mail.">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                </div>
<!--                 <a class="add-comment skyblue dashedskyblue" href="#">Добавить комментарий</a> -->

				<div class="legal-info fleft">
	                <input type="checkbox" class="agree_rules" id="agree_rules"><label for="agree_rules">Я согласен на обработку данных</label>
	                <a href="#" class="show-legal skyblue dashedskyblue">Смотреть правила</a>
	            </div>

	            <div class="send-req fright">Отправить заявку</div>
            </div>
        </div><!-- //info-gather__body -->
		<!-- map canvas -->
		<div class="map_canvas_wrap">
			<div class="map-overlayed"></div>
            <div id="map_canvas" class=""></div>
            <div class="closeMap">&times;</div>
		</div>
        <div class="overlayed legal-wrap">
            <div class="test-drive-popup test-drive-popup__legal">
                <h2 class="skyblue">Правила обработки<br>персональных данных</h2>
                <div class="clearfix legal_info_">
                    <p class="offers__text fleft">
                        Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе
                        на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
                        <br><br>
                        Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон;
                        для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания;
                        для рекламных, исследовательских, информационных,
                    </p>
                    <p class="offers__text fleft">
                        а также иных целей, в том числе, путем осуществления
                        со мной прямых контактов по различным средствам связи.
                        <br><br>
                        Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш.,
                        д. 20, литер А).
                        <br><br>
                        Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица,
                        д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва,
                        ул. Новослободская, д. 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3),
                        ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5),
                        а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                    </p>
                </div>
                <div class="closeIt">&times;</div>
            </div>
        </div>
        <!-- req response -->
        <div class="overlayed response-wrap">
            <div id="test-drive-response">
                <h2 class="skyblue"></h2>
                <p class="text">Пожалуйста, ожидайте звонка для<br/>подтверждения заявки и согласования визита.</p>
                <div class="closeIt">&times;</div>
            </div>
        </div>

    </div><!-- offers__main test-drive-main-->

</div><!-- offers__container test-drive-content -->


        <!-- underscore templates -->
        <script type="text/html" id="dealerTemplate">
            <div class="dealer-info">
                <div class="pop_body">
                    <div class="dealer-name"><%= name %></div>
                    <div class="pop_text pop_text__test-drive">
                        <span class="dealer-address"><%= address %></span>
                        <span class="dealer-phone"><%= phone %></span>
                        <span class="dealer-site"><%= site %></span>
                    </div>
                    <div class="test-drive___select-dealer-btn">
                        <a href="#" class="test-drive___select-dealer-btn__act-link" data-name="<%= name %>" data-address="<%= address %>"data-code="<%= code %>">Выбрать дилера</a>
                    </div>
                </div>
            </div>
        </script>
        <script type="text/html" id="dealerListTemp">
            <li class="dropdown-item" data-id="<%= id %>"><%= name %></li>
        </script>
        <script type="text/html" id="dealerTemplateInfo">
            <span class="dealer-address"><%= address %></span>
            <span class="dealer-phone"><%= phone %></span>
            <span class="dealer-site"><%= site %></span>
        </script>

        <script>
            // object box bugfix
            //$('.objects_box').remove();
        </script>

        <script type="text/javascript" >
            var _rutarget = window._rutarget || [];
            _rutarget.push({'event': 'otherPage', 'tag': 'service_request'});
        </script>
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://maps.google.ru/maps/api/js?key=AIzaSyCg3II6UgahN4akFiKCe1Vjrm4wRMBPp8A"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="js/service-request.js?v=1"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/forms/test-drive-ring.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>