<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("all-offers");
?>
    <div class="offers__main offers-divider">
        <div class="offers__container offers_divider__content clearfix">

            <h1 class="offers_divider__content__title">Акции</h1>

            <!-- just offers ok let's go -->
			
		
			
			
			
			
			
			
            <div class="offers_divider__content__offers-grid-section clearfix">
		
<div class="insection-offer-unit">
							<a href="/promo/robocar" class="insection-offer-unit__link">
								<img src="https://www.hyundai.ru/media/offers_image/990505a1af48139c9892c4f3e7e5c62f_465%D1%85330.jpg" alt="" class="insection-offer-unit__back-img">
								<div class="insection-offer-unit__info">
									<span class="name">Подарок от Робокара Поли в официальной<br>дилерской сети Hyunday!</span>
	 								<span class="addinfo"></span>
								</div>
							</a>
						</div>
			
			<div class="insection-offer-unit">
							<a href="/promo/trade-in_offer" class="insection-offer-unit__link">
								<img src="https://www.hyundai.ru/media/offers_image/58754491c057742653047046093d240c_Santa_fe+Tucson_preview-banner_1900x530px_Apr2019.jpg" alt="" class="insection-offer-unit__back-img">
								<div class="insection-offer-unit__info">
									<span class="name">Выгода на Hyundai SANTA FE и TUCSON 2018 модельного года.</span>
	 								<span class="addinfo"></span>
								</div>
							</a>
						</div>
			<div class="insection-offer-unit">
							<a href="/promo/cska_sponsorship" class="insection-offer-unit__link">
								<img src="https://www.hyundai.ru/media/offers_image/26022aa0bc9776da777fddd9442846c8_CSKA_preview.jpg" alt="" class="insection-offer-unit__back-img">
								<div class="insection-offer-unit__info">
									<span class="name">Спонсорское соглашение Hyundai x ПФК ЦСКА.</span>
	 								<span class="addinfo"></span>
								</div>
							</a>
						</div>
			
			
			
<!--<div class="insection-offer-unit">
							<a href="/promo/new_elantra_launch" class="insection-offer-unit__link">
								<img src="http://www.hyundai.ru/media/offers_image/b64d447758346c904fa17b1a2dc6987e_New_elantra_launch_preview.jpg" alt="" class="insection-offer-unit__back-img">
								<div class="insection-offer-unit__info">
									<span class="name">Новая ELANTRA.<br>Попади на вечеринку!</span>
	 								<span class="addinfo"></span>
								</div>
							</a>
						</div>-->
                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 5, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        if($arProps['ENABLE_SPEC']['VALUE'] == 'Y'){
                            ?>
                            <div class="insection-offer-unit">
                                <a href="<?= $arFields['CODE'] ?>" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                        }
                    }
                }
                ?>

                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 10, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        if($arProps['ENABLE_SPEC']['VALUE'] == 'Y'){
                            ?>
                            <div class="insection-offer-unit">
                                <a href="<?= $arFields['CODE'] ?>" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                        }
                    }
                }
                ?>

<!--
                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/santa-fe-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/3b6b0e6d05c664a63fd2d85e9af37735_1900x520px_new_mini.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Выгода до 300 000р. на Hyundai Santa fe!</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/elantra-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/e9af6d87b8b138685dc83ab3a302d792_Elantra.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Hyundai Elantra.<br>За 8 000 руб./мес.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/santa-fe-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/23b1a222ff29e8fb318252ccd04a6de1_Leasing_1920x530_small.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Hyundai Leasing Boost</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
-->
               <!-- <div class="insection-offer-unit">
                    <a href="https://www.hyundai.ru/promo/vdnh" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/f19ce211c4adc6df11f26f9574329dd5_Banner_Katok_v2_mob_466x330.png" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Зима на драйве</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>-->

                <div class="insection-offer-unit">
                    <a href="/start_plus" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/2565bfa8d092a3e09bbe2d2beb8c4ffe_start_plus_466x330.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">СТАРТ Плюс</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="/start/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/51e5ce7f6f3744cb2e2496f407f620ba_96dea44c-283a-4015-a949-6914ddcd0455.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Программа Старт.<br>Низкие ежемесячные платежи.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="/special-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/d308a9d099eddef6dc761a31e85c9edc_banner_special_offer_preview.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Специальное предложение для владельцев Hyundai</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
<!--

                <div class="insection-offer-unit">
                    <a href="/promo/major-leasing/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/04cbeb84a054d5e241ea61acbfabdf67_5_19.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Лизинг для физических лиц</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="/promo/leasing_new/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/822f208ac03003ca995030c04d001055_%D0%9B%D0%B8%D0%B7%D0%B8%D0%BD%D0%B3-%D0%B4%D0%BB%D1%8F-%D1%84%D0%B8%D0%B7-%D0%BB%D0%B8%D1%86_%D1%81%D0%BF%D0%B5%D1%86-%D0%BF%D1%80%D0%B5%D0%B4%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5_preview.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Лизинг для физ. лиц <br>Уникальные условия и привилегии.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
-->


                <div class="insection-offer-unit">
                    <a href="/hpromise/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/33ca72985faf6eb1c67f1b0814659f95_hp.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">H-Promise. Автомобили с пробегом.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- service stuff next -->
            <!-- not fully offers -->

            <!-- title -->
            <a id="service-offers" style="padding-top: 30px;"></a>



            <h2 class="offers_divider__content__title">Сервисные программы</h2>

            <div class="offers_divider__content__offers-grid-section clearfix">

<!--                 <div class="insection-offer-unit">
							<a href="/promo/autumn" class="insection-offer-unit__link">
								<img src="http://www.hyundai.ru/media/offers_image/766be949ba7a5f92fc74d6e23aca1ed7_Hyundai_Shell_aug_1500x545.jpg" alt="" class="insection-offer-unit__back-img">
								<div class="insection-offer-unit__info">
									<span class="name">Бесплатная диагностика + 1 литр масла в подарок</span>
	 								<span class="addinfo"></span>
								</div>
							</a>
						</div>
 -->

<!--                 <div class="insection-offer-unit">
                    <a href="/promo/shell" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/dd77b6edbce77f33b7c4c23fd7d6e125_1920x530_Hyundai_Shell.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Новые рекорды с сервисом Hyundai</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div> -->

                <div class="insection-offer-unit">
                    <a href="/promo/shell" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/6ebc6ed21af371078e33b6d1aca29d87_banner_solaris.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Новые рекорды с сервисом Hyundai</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="/pl2/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/2b8987192a392e13d08192bb6520cf4a_pl-2_466x330.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Запчасти Product Line 2
                            <br>Теперь еще дешевле!</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
<!-- 
                <div class="insection-offer-unit">
                    <a href="/promo/santafe_offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/af769b27850993d65279bf07a5090af2_santa-fe_tiser_465_330.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Интересное предложение для владельцев SantaFe!</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>
-->

                <div class="insection-offer-unit">
                    <a href="/service/best/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/8daaf07cffe4b6144d0a02729194ff7f_1.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Лучшее для своих</span>
                            <span class="addinfo">Сервисная акция</span>
                        </div>
                    </a>
                </div>

<!--                 <div class="insection-offer-unit">
                    <a href="/promo/season/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/2d1d0ce07c4559f2076b1f4ca92cb81e_465х330_FIFA2108_banner.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Проверенный Сервис с надежной командой!</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div> -->
            </div>

            <!-- service stuff next -->
            <!-- not fully offers -->

            <!-- title -->
            <a id="service-offers" style="padding-top: 30px;"></a>



            <h2 class="offers_divider__content__title">Спецпредложения</h2>


            <div class="offers_divider__content__offers-grid-section clearfix">

                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 11, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                            ?>
                            <div class="insection-offer-unit">
                                <a href="/offer-service/<?= $arFields['CODE'] ?>/" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['PREVIEW_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                    }
                }
                ?>
            </div>

        </div>

        <!-- prefooter banners -->
        <!--
                <div class="offers__prefooter-banner clearfix">
                    <div class="offers__prefooter-banner__subscribe clearfix">
                        <span class="subscribe-q">Хотите получать информацию об акциях и новостях?</span>
                        <a href="#" class="subscribe-btn">Подписаться</a>
                    </div>
                    <div class="offers__prefooter-banner__biglinks clearfix">
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/configurator.jpg" alt="Configurator">
                                <span class="biglinks__unit__title">Создайте свой<br>Hyundai</span>
                                <a href="#" class="biglinks__unit__link">Конфигуратор</a>
                            </a>
                        </div>
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/dealers.jpg" alt="Dealers">
                                <span class="biglinks__unit__title">Найдите<br>ближайшего<br>дилера</span>
                                <a href="#" class="biglinks__unit__link">Дилеры</a>
                            </a>
                        </div>
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/test-drive.jpg" alt="Test-Drive">
                                <span class="biglinks__unit__title">Попробуйте<br>Hyundai в деле</span>
                                <a href="#" class="biglinks__unit__link">Тест-драйв</a>
                            </a>
                        </div>
                    </div>

                </div>
        -->

        <link rel="stylesheet" type="text/css" href="/media/css_new/newalloffers.css">

        <script>
            $('.objects_box').remove();
        </script>


    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>