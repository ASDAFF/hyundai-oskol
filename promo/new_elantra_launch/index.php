<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акция"); ?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новые рекорды с сервисом Hyundai!"); ?>
<!--
    Контент страницы начнется тут
    -->

<main class="main" data-model="home">
  <style>
    #wrapper {
      background: #f5f5f5 !important;
    }
  </style>

  <div class="offers-container">
    <div class="content_area">
      <!-- hide elantra and ix35 banner-->

      <!-- WARNING -->
      <!-- this checks only img src!! no checking by offer ID -->

      <img
        class="promo-head"
        src="http://www.hyundai.ru/media/offers_image/8dbbed9b0b2898ad56835988851a99bb_New_elantra_launch_big_1.jpg"
        style=""
      />

      <!-- old syntax: -->
      <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/b64d447758346c904fa17b1a2dc6987e_New_elantra_launch_preview.jpg" style=""/> -->

      <!-- end of hiding banner-->

      <div class="offers-content">
        <h1 class="title-offer bordr-btm"><span class="nowrp">Новая ELANTRA. Попади на вечеринку!</span></h1>

        <div class="offer-terms bordr-btm">
          <div class="offers-block">
            <div class="row-inline">
              <p class="offer-terms__text">
                21 - 23 марта 2019 года - главная вечеринка этой весны!<br />
                Hyundai представляет абсолютно новую ELANTRA.<br />
                Встречай! Самое долгожданное событие.<br />
                Только в кругу друзей на эксклюзивной закрытой вечеринке!<br />
                Ты в списке!<br /><br />
                Dress code: After 5 Casual.<br /><br />
                
              </p>
            </div>

            <!-- additional terms as footer -->

            <div class="clearfix"></div>

            <!-- additional terms as footer -->

            <div class="tip-supscript ">
              <p style="font-size: 10px;"></p>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <style>
      .offer-terms__text {
        font-family: "HyundaiSansHead";
        font-size: 18px;
      }

      .request-service-btn {
        align: center;
        -moz-user-select: none;
        background: #103a71 none repeat scroll 0 0;
        border: 2px solid #103a71;
        color: #fff !important;
        display: inline-block;
        font-family: "HyundaiSansHead";
        font-size: 13px;
        font-weight: regular;
        padding: 16px 29px;
        text-align: center;
        text-transform: uppercase;
        transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s,
          border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
        text-decoration: none !important;
        border-radius: 28px;
      }
      .request-service-btn:hover {
        opacity: 0.8;
      }

      .inverse-service-btn {
        -moz-user-select: none;
        background: #transparent none repeat scroll 0 0;
        border: 2px solid #fff;
        color: #1d88ce !important;
        display: inline-block;
        font-family: "Arial", sans-serif;
        font-size: 13px;
        font-weight: bold;
        padding: 16px 29px;
        text-align: center;
        text-transform: uppercase;
        transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s,
          border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
        text-decoration: none !important;
      }
      .inverse-service-btn:hover {
        /*background: rgba(f, 136, 206, 0.8) none repeat scroll 0 0;
            color: #1d88ce !mportant;
            text-decoration: none;
            border: 2px solid #1d88ce;*/
        opacity: 0.8;
      }
    </style>
  </div>

  <!--RuTarget-->
  <script type="text/javascript">
    var _rutarget = window._rutarget || [];
    _rutarget.push({
      event: "otherPage",
      nosync: "true"
    });
  </script>
  <!--/RuTarget-->
</main>

<!--
    Контент страницы закончится тут
    -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
