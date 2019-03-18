<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Победная выгода на автомобили Hyundai");
?>


    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <style>
            #wrapper {
                background: #f5f5f5 !important;
            }
        </style>

        <script type="text/javascript">
            var dealersData = [{"name":"\u041c\u043e\u0441\u043a\u0432\u0430 \u0438 \u041f\u043e\u0434\u043c\u043e\u0441\u043a\u043e\u0432\u044c\u0435","dealers":[{"id":267,"name":"GN service","code":"C40AF01156"},{"id":223,"name":"Hyundai City Store \u0410\u0412\u0418\u041b\u041e\u041d","code":"C40AF11027"},{"id":260,"name":"INCHCAPE","code":"C40AF01155"},{"id":189,"name":"Major","code":"C40AF11090"},{"id":218,"name":"Major \u041c\u041a\u0410\u0414 18 \u043a\u043c","code":"C40AF21090"},{"id":217,"name":"Major \u041c\u041a\u0410\u0414 47 \u043a\u043c","code":"C40AF31090"},{"id":228,"name":"\u0410\u0412\u0410\u041d\u0422\u0410\u0419\u041c \u0421\u041f","code":"C40AF01112"},{"id":14,"name":"\u0410\u0413-\u041c\u043e\u0442\u043e\u0440\u0441 \u0411\u0430\u043b\u0430\u0448\u0438\u0445\u0430","code":"C40AF01038"},{"id":28,"name":"\u0410\u0432\u0430\u043d\u0442\u0430-\u0417\u0430\u043f\u0430\u0434","code":"C40AF01144"},{"id":27,"name":"\u0410\u0432\u0438\u043b\u043e\u043d","code":"C40AF01027"},{"id":241,"name":"\u0410\u0432\u0440\u043e\u0440\u0430","code":"C40AF01115"},{"id":48,"name":"\u0410\u0432\u0442\u043e\u0413\u0415\u0420\u041c\u0415\u0421","code":"C40AF11038"},{"id":64,"name":"\u0410\u0432\u0442\u043e\u0421\u043f\u0435\u0446\u0426\u0435\u043d\u0442\u0440 \u0412\u043d\u0443\u043a\u043e\u0432\u043e","code":"C40AF01002"},{"id":39,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0414\u043c\u0438\u0442\u0440\u043e\u0432\u043a\u0430","code":"C40AF20328"},{"id":38,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u041c\u0430\u0440\u044c\u0438\u043d\u043e","code":"C40AF10328"},{"id":161,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0421\u043e\u043a\u043e\u043b\u044c\u043d\u0438\u043a\u0438","code":"C40AF30328"},{"id":225,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u0411\u0443\u0442\u043e\u0432\u043e","code":"C40AF01138"},{"id":210,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u041b\u043e\u0441\u0438\u043d\u044b\u0439 \u041e\u0441\u0442\u0440\u043e\u0432","code":"C40AF01101"},{"id":168,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u041f\u043e\u0434\u043e\u043b\u044c\u0441\u043a","code":"C40AF01060"},{"id":192,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0421\u0438\u0442\u0438 \u042e\u0433","code":"C40AF01091"},{"id":172,"name":"\u0410\u043a\u0440\u043e\u0441","code":"C40AF01070"},{"id":74,"name":"\u0410\u043a\u0446\u0435\u043d\u0442-\u0410\u0432\u0442\u043e \u041c\u043e\u0441\u043a\u0432\u0430","code":"C40AF00354"},{"id":94,"name":"\u041a\u0412\u0418\u0421\u0422","code":"C40AF00996"},{"id":257,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0412\u043e\u043b\u043e\u043a\u043e\u043b\u0430\u043c\u043a\u0430","code":"C40AF01150"},{"id":256,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u041b\u044e\u0431\u0435\u0440\u0446\u044b","code":"C40AF01149"},{"id":185,"name":"\u041a\u043e\u0440\u0441\u0413\u0440\u0443\u043f\u043f","code":"C40AF01153"},{"id":145,"name":"\u041e\u0440\u0435\u0445\u043e\u0432\u043e-\u0410\u0432\u0442\u043e\u0426\u0435\u043d\u0442\u0440","code":"C40AF01116"},{"id":136,"name":"\u0420\u0422\u0420-\u0410\u0432\u0442\u043e","code":"C40AF01157"},{"id":141,"name":"\u0420\u043e\u043b\u044c\u0444 \u0410\u043b\u0442\u0443\u0444\u044c\u0435\u0432\u043e","code":"C40AF10120"},{"id":140,"name":"\u0420\u043e\u043b\u044c\u0444 \u0421\u0438\u0442\u0438","code":"C40AF40120"},{"id":142,"name":"\u0420\u043e\u043b\u044c\u0444 \u0425\u0438\u043c\u043a\u0438","code":"C40AF20120"},{"id":139,"name":"\u0420\u043e\u043b\u044c\u0444 \u042e\u0433","code":"C40AF30120"},{"id":131,"name":"\u0421\u0418\u041c","code":"C40AF00132"},{"id":265,"name":"\u0424\u0430\u0432\u043e\u0440\u0438\u0442 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01158"},{"id":52,"name":"\u0425\u0435\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u041a\u0443\u043d\u0446\u0435\u0432\u043e","code":"C40AF01063"},{"id":242,"name":"\u0426\u0435\u043d\u0442\u0440 \u0417\u0435\u043b\u0435\u043d\u043e\u0433\u0440\u0430\u0434","code":"C40AF01128"}]},{"name":"\u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433","dealers":[{"id":244,"name":"\u0410\u0432\u0430\u043d\u0433\u0430\u0440\u0434","code":"C40AF01129"},{"id":187,"name":"\u0410\u0432\u0442\u043e\u043f\u043e\u043b\u0435","code":"C40AF01147"},{"id":183,"name":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e","code":"C40AF00233"},{"id":199,"name":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e \u0416\u0443\u043a\u043e\u0432\u0430","code":"C40AF10233"},{"id":263,"name":"\u0414\u0430\u043a\u0430\u0440 \u0422\u0430\u043b\u043b\u0438\u043d\u0441\u043a\u043e\u0435","code":"C40AF01151"},{"id":173,"name":"\u041c\u0430\u043a\u0441\u0438\u043c\u0443\u043c","code":"C40AF01062"},{"id":23,"name":"\u0420\u041e\u041b\u042c\u0424 \u041b\u0430\u0445\u0442\u0430","code":"C40AF01028"},{"id":191,"name":"\u0420\u043e\u043b\u044c\u0444 \u041e\u043a\u0442\u044f\u0431\u0440\u044c\u0441\u043a\u0430\u044f","code":"C40AF11028"}]},{"name":"\u0410\u0431\u0430\u043a\u0430\u043d","dealers":[{"id":85,"name":"\u041c\u0435\u0434\u0432\u0435\u0434\u044c","code":"C40AF01001"}]},{"name":"\u0410\u0440\u0445\u0430\u043d\u0433\u0435\u043b\u044c\u0441\u043a","dealers":[{"id":56,"name":"\u0414\u0438\u043d\u0430\u043c\u0438\u043a\u0430","code":"C40AF00342"}]},{"name":"\u0410\u0441\u0442\u0440\u0430\u0445\u0430\u043d\u044c","dealers":[{"id":177,"name":"\u0410\u0413\u0410\u0422-\u041f\u043b\u044e\u0441","code":"C40AF00332"}]},{"name":"\u0411\u0430\u0440\u043d\u0430\u0443\u043b","dealers":[{"id":70,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0410\u041d\u0422","code":"C40AF00278"}]},{"name":"\u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":249,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434","code":"C40AF01136"},{"id":164,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u041e\u0441\u043a\u043e\u043b","code":"C40AF01029"},{"id":58,"name":"\u0422\u0420\u0418\u041d\u0418\u0422\u0418 \u041c\u041e\u0422\u041e\u0420\u0421","code":"C40AF00355"}]},{"name":"\u0411\u043b\u0430\u0433\u043e\u0432\u0435\u0449\u0435\u043d\u0441\u043a","dealers":[{"id":20,"name":"\u0410\u0442\u0438\u043a-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01069"}]},{"name":"\u0411\u0440\u044f\u043d\u0441\u043a","dealers":[{"id":35,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF50328"}]},{"name":"\u0412\u0435\u043b\u0438\u043a\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","dealers":[{"id":49,"name":"\u0410\u0412\u041d","code":"C40AF01007"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u0432\u043e\u0441\u0442\u043e\u043a","dealers":[{"id":163,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF01050"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u043a\u0430\u0432\u043a\u0430\u0437","dealers":[{"id":231,"name":"\u0418\u0440\u0430\u0432\u0442\u043e","code":"C40AF01111"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440","dealers":[{"id":126,"name":"\u0422\u0435\u0445\u0446\u0435\u043d\u0442\u0440 \u0413\u0440\u0430\u043d\u0434","code":"C40AF01053"}]},{"name":"\u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":103,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u043f\u0440.\u041b\u0435\u043d\u0438\u043d\u0430 ","code":"C40AF01016"},{"id":105,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u0448.\u0410\u0432\u0438\u0430\u0442\u043e\u0440\u043e\u0432","code":"C40AF00256"},{"id":234,"name":"\u0410\u0440\u043a\u043e\u043d\u0442 \u041c","code":"C40AF01123"}]},{"name":"\u0412\u043e\u043b\u043e\u0433\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":13,"name":"\u041f\u0440\u0430\u0439\u043c \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01125"},{"id":193,"name":"\u0421\u0435\u0432\u0435\u0440\u043d\u044b\u0439","code":"C40AF01079"}]},{"name":"\u0412\u043e\u0440\u043e\u043d\u0435\u0436","dealers":[{"id":219,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF60328"},{"id":155,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00971"},{"id":143,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e","code":"C40AF00945"},{"id":243,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u0421\u0435\u0432\u0435\u0440","code":"C40AF01135"}]},{"name":"\u0413\u0440\u043e\u0437\u043d\u044b\u0439","dealers":[{"id":233,"name":"\u041b\u0438\u0434\u0435\u0440 \u0410\u0432\u0442\u043e","code":"C40AF01109"}]},{"name":"\u0418\u0432\u0430\u043d\u043e\u0432\u043e","dealers":[{"id":68,"name":"\u0411\u043b\u043e\u043a \u0420\u043e\u0441\u043a\u043e","code":"C40AF00309"}]},{"name":"\u0418\u0436\u0435\u0432\u0441\u043a","dealers":[{"id":79,"name":"\u041a\u041e\u041c\u041e\u0421-\u0410\u0432\u0442\u043e","code":"C40AF00243"},{"id":194,"name":"\u041a\u041e\u041c\u041e\u0421-\u0410\u0432\u0442\u043e","code":"C40AF01086"},{"id":253,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF11035"}]},{"name":"\u0418\u0440\u043a\u0443\u0442\u0441\u043a","dealers":[{"id":176,"name":"\u0425\u0435\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u0418\u0440\u043a\u0443\u0442\u0441\u043a","code":"C40AF00350"}]},{"name":"\u0419\u043e\u0448\u043a\u0430\u0440-\u041e\u043b\u0430","dealers":[{"id":45,"name":"\u0410\u0432\u0442\u043e\u043a\u043e\u043c","code":"C40AF00950"}]},{"name":"\u041a\u0430\u043b\u0438\u043d\u0438\u043d\u0433\u0440\u0430\u0434","dealers":[{"id":86,"name":"\u0414\u0438\u043d\u0430\u043c\u0438\u043a\u0430","code":"C40AF00299"}]},{"name":"\u041a\u0430\u043b\u0443\u0433\u0430","dealers":[{"id":96,"name":"\u041a\u0430\u043b\u0443\u0433\u0430-\u0410\u0432\u0442\u043e","code":"C40AF00343"}]},{"name":"\u041a\u0435\u043c\u0435\u0440\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":236,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF70328"},{"id":214,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u041a\u0435\u043c\u0435\u0440\u043e\u0432\u043e","code":"C40AF01106"},{"id":266,"name":"\u041a\u0430\u0440\u0442\u0435\u043b\u044c \u0410\u0432\u0442\u043e","code":"C40AF01154"}]},{"name":"\u041a\u0438\u0440\u043e\u0432","dealers":[{"id":154,"name":"\u0422\u0421\u041a \u041c\u043e\u0442\u043e\u0440","code":"C40AF00181"}]},{"name":"\u041a\u043e\u0441\u0442\u0440\u043e\u043c\u0430","dealers":[{"id":171,"name":"\u041b\u0438\u0434\u0435\u0440 \u0410\u0432\u0442\u043e","code":"C40AF01061"}]},{"name":"\u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439","dealers":[{"id":91,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF00182"},{"id":11,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF01047"},{"id":162,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF01055"},{"id":190,"name":"\u0425\u0451\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u0410\u0432\u0442\u043e\u0445\u043e\u043b\u0434\u0438\u043d\u0433","code":"C40AF01087"},{"id":17,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01032"},{"id":108,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01009"},{"id":16,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01031"}]},{"name":"\u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a","dealers":[{"id":84,"name":"\u041c\u0435\u0434\u0432\u0435\u0434\u044c-\u0421\u0435\u0432\u0435\u0440\u0410\u0432\u0442\u043e","code":"C40AF00326"},{"id":113,"name":"\u0425\u0435\u043d\u0434\u044d-\u0446\u0435\u043d\u0442\u0440 \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a","code":"C40AF01019"}]},{"name":"\u041a\u0443\u0440\u0433\u0430\u043d","dealers":[{"id":207,"name":"\u0421\u0430\u0442\u0443\u0440\u043d-\u0420","code":"C40AF01098"}]},{"name":"\u041a\u0443\u0440\u0441\u043a","dealers":[{"id":144,"name":"\u041e\u0440\u0438\u043e\u043d \u0410\u0432\u0442\u043e","code":"C40AF00295"}]},{"name":"\u041b\u0438\u043f\u0435\u0446\u043a","dealers":[{"id":81,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00318"},{"id":220,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e","code":"C40AF01113"}]},{"name":"\u041c\u0430\u0445\u0430\u0447\u043a\u0430\u043b\u0430","dealers":[{"id":262,"name":"\u0410\u0432\u0442\u043e\u043b\u044e\u043a\u0441 \u041a\u0430\u0440","code":"C40AF01141"}]},{"name":"\u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a","dealers":[{"id":88,"name":"\u0410\u0432\u0442\u043e \u0411\u0440\u043e\u043a\u0435\u0440 \u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a","code":"C40AF01081"}]},{"name":"\u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","dealers":[{"id":77,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u041b\u0430\u0440\u0438\u043d\u0430","code":"C40AF00985"},{"id":76,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u043c \u0448\u043e\u0441\u0441\u0435","code":"C40AF00352"},{"id":75,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u0420\u043e\u0434\u0438\u043e\u043d\u043e\u0432\u0430","code":"C40AF00272"},{"id":152,"name":"\u041d\u0438\u0436\u0435\u0433\u043e\u0440\u043e\u0434\u0435\u0446","code":"C40AF01131"}]},{"name":"\u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a","dealers":[{"id":36,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF00328"},{"id":198,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01095"}]},{"name":"\u041d\u043e\u044f\u0431\u0440\u044c\u0441\u043a","dealers":[{"id":252,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01139"}]},{"name":"\u041e\u043c\u0441\u043a","dealers":[{"id":255,"name":"\u0410\u043b\u044c\u044f\u043d\u0441","code":"C40AF01142"},{"id":104,"name":"\u0415\u0432\u0440\u0430\u0437\u0438\u044f \u043f\u043b\u044e\u0441","code":"C40AF00997"},{"id":117,"name":"\u0424\u0435\u043d\u0438\u043a\u0441-\u0410\u0432\u0442\u043e","code":"C40AF00998"}]},{"name":"\u041e\u0440\u0435\u043b","dealers":[{"id":67,"name":"\u0412\u043e\u0437\u0440\u043e\u0436\u0434\u0435\u043d\u0438\u0435","code":"C40AF01017"}]},{"name":"\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":209,"name":"\u0410\u0432\u0442\u043e\u0441\u0430\u043b\u043e\u043d-2000","code":"C40AF01097"},{"id":166,"name":"\u041a\u0430\u0441\u043a\u0430\u0434-\u041c","code":"C40AF01049"},{"id":146,"name":"\u041e\u0440\u0435\u043d\u0420\u041e\u041b\u042c\u0424","code":"C40AF00092"},{"id":227,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01122"}]},{"name":"\u041f\u0435\u043d\u0437\u0430","dealers":[{"id":212,"name":"\u0410\u0432\u0442\u043e\u043c\u0430\u0441\u0442\u0435\u0440","code":"C40AF01103"},{"id":128,"name":"\u0421\u0443\u0440\u0430-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00302"}]},{"name":"\u041f\u0435\u0440\u043c\u044c","dealers":[{"id":226,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01117"},{"id":237,"name":"\u0414\u0410\u0412-\u0410\u0412\u0422\u041e","code":"C40AF01118"},{"id":132,"name":"\u0421\u0438\u043b\u044c\u0432\u0435\u0440 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01010"}]},{"name":"\u041f\u0435\u0442\u0440\u043e\u0437\u0430\u0432\u043e\u0434\u0441\u043a","dealers":[{"id":213,"name":"\u041a-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01107"}]},{"name":"\u041f\u0441\u043a\u043e\u0432","dealers":[{"id":153,"name":"\u041d\u0410\u0421-2","code":"C40AF00987"}]},{"name":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0411\u0430\u0448\u043a\u043e\u0440\u0442\u043e\u0441\u0442\u0430\u043d","dealers":[{"id":247,"name":"\u0410\u043b\u044c\u0444\u0430-\u0421\u0435\u0440\u0432\u0438\u0441 \u0417\u0443\u0431\u043e\u0432\u043e","code":"C40AF01137"},{"id":186,"name":"\u0413\u041a \u041c\u0438\u0440","code":"C40AF01076"},{"id":22,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF21035"},{"id":121,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF31035"},{"id":116,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00168"}]},{"name":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0422\u0430\u0442\u0430\u0440\u0441\u0442\u0430\u043d","dealers":[{"id":165,"name":"\u041a\u0410\u041d \u0410\u0412\u0422\u041e","code":"C40AF01052"},{"id":195,"name":"\u041a\u0410\u041d \u0410\u0412\u0422\u041e","code":"C40AF01093"},{"id":208,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF10234"},{"id":123,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00234"},{"id":21,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF01035"},{"id":120,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF01036"}]},{"name":"\u0420\u043e\u0441\u0442\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":51,"name":"\u0410\u0410\u0410 \u043c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01018"},{"id":59,"name":"\u0414\u0435\u043b\u044c\u0442\u0430 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00986"},{"id":259,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0420\u043e\u0441\u0442\u043e\u0432","code":"C40AF01145"},{"id":157,"name":"\u041c\u043e\u0434\u0443\u0441 (\u043f\u0440\u043e\u0441\u043f. \u0428\u043e\u043b\u043e\u0445\u043e\u0432\u0430)","code":"C40AF00336"},{"id":83,"name":"\u041c\u043e\u0434\u0443\u0441 (\u0443\u043b. \u041a\u0430\u0448\u0438\u0440\u0441\u043a\u0430\u044f)","code":"C40AF00362"},{"id":240,"name":"\u0421\u043e\u043a\u043e\u043b \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01160"},{"id":127,"name":"\u0422\u0435\u043c\u043f \u0410\u0432\u0442\u043e","code":"C40AF01054"}]},{"name":"\u0420\u044f\u0437\u0430\u043d\u044c","dealers":[{"id":47,"name":"\u0410\u0432\u0442\u043e\u0438\u043c\u043f\u043e\u0440\u0442","code":"C40AF00957"},{"id":179,"name":"\u0420\u0435\u0433\u0438\u043e\u043d 62","code":"C40AF01073"}]},{"name":"\u0421\u0430\u043c\u0430\u0440\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":33,"name":"\u0410\u0432\u0442\u043e\u0441\u0430\u043b\u043e\u043d \u0410\u0440\u0433\u043e","code":"C40AF00013"},{"id":80,"name":"\u0410\u0432\u0442\u043e\u0444\u0430\u043d","code":"C40AF00241"},{"id":254,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0410\u041b\u042c\u0424\u0410","code":"C40AF01143"},{"id":224,"name":"\u0410\u0440\u0435\u043d\u0430 \u0410\u0432\u0442\u043e","code":"C40AF01114"},{"id":135,"name":"\u0421\u0430\u043c\u0430\u0440\u0441\u043a\u0438\u0435 \u0410\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0438","code":"C40AF00993"},{"id":110,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01084"}]},{"name":"\u0421\u0430\u0440\u0430\u043d\u0441\u043a","dealers":[{"id":235,"name":"\u0410\u0413\u0410\u0422","code":"C40AF01126"}]},{"name":"\u0421\u0430\u0440\u0430\u0442\u043e\u0432","dealers":[{"id":78,"name":"\u0410\u0413\u0410\u0422","code":"C40AF01057"},{"id":109,"name":"\u042d\u043b\u0432\u0438\u0441","code":"C40AF00956"},{"id":248,"name":"\u042d\u043b\u0432\u0438\u0441 \u041f\u0440\u0435\u043c\u0438\u0443\u043c","code":"C40AF01133"}]},{"name":"\u0421\u0432\u0435\u0440\u0434\u043b\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":42,"name":"\u0410\u0432\u0442\u043e-\u041b\u0438\u0434\u0435\u0440 \u0426\u0435\u043d\u0442\u0440","code":"C40AF00323"},{"id":41,"name":"\u0410\u0432\u0442\u043e-\u041b\u0438\u0434\u0435\u0440 \u043d\u0430 \u0428\u0435\u0444\u0441\u043a\u043e\u0439","code":"C40AF00999"},{"id":215,"name":"\u041b\u0430\u043a\u0438 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01110"},{"id":151,"name":"\u041e\u043a\u0430\u043c\u0438 \u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF01048"},{"id":24,"name":"\u041e\u043a\u0430\u043c\u0438 \u0417\u0430\u043f\u0430\u0434","code":"C40AF01034"},{"id":149,"name":"\u041e\u043a\u0430\u043c\u0438 \u0422\u0430\u0433\u0438\u043b","code":"C40AF00989"},{"id":264,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF10223"}]},{"name":"\u0421\u0438\u043c\u0444\u0435\u0440\u043e\u043f\u043e\u043b\u044c","dealers":[{"id":196,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440-\u041c","code":"C40AF01092"}]},{"name":"\u0421\u043c\u043e\u043b\u0435\u043d\u0441\u043a ","dealers":[{"id":148,"name":"\u041e\u043a\u0442\u0430\u043d-\u0412","code":"C40AF00967"}]},{"name":"\u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439","dealers":[{"id":261,"name":"\u0410\u0432\u0442\u043e\u0436\u0438\u0437\u043d\u044c","code":"C40AF01140"},{"id":160,"name":"\u0414\u0440\u0438\u043c \u041a\u0430\u0440","code":"C40AF01043"},{"id":92,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF00288"},{"id":258,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c","code":"C40AF01146"},{"id":158,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00319"},{"id":156,"name":"\u041c\u043e\u0434\u0443\u0441 ","code":"C40AF00141"}]},{"name":"\u0421\u044b\u043a\u0442\u044b\u0432\u043a\u0430\u0440","dealers":[{"id":188,"name":"\u0426\u0435\u043d\u0442\u0440 \u041a\u041e\u041c\u0418","code":"C40AF01083"}]},{"name":"\u0422\u0430\u043c\u0431\u043e\u0432","dealers":[{"id":180,"name":"\u0422\u0430\u043c\u0431\u043e\u0432-\u0410\u0432\u0442\u043e","code":"C40AF01075"}]},{"name":"\u0422\u0432\u0435\u0440\u044c","dealers":[{"id":197,"name":"\u0412\u0430\u0436\u043d\u0430\u044f \u043f\u0435\u0440\u0441\u043e\u043d\u0430 - \u0410\u0432\u0442\u043e","code":"C40AF01100"}]},{"name":"\u0422\u043e\u043c\u0441\u043a","dealers":[{"id":246,"name":"\u042d\u043b\u043a\u0435 \u041c\u043e\u0442\u043e\u0440","code":"C40AF01134"}]},{"name":"\u0422\u0443\u043b\u0430","dealers":[{"id":46,"name":"\u0410\u0432\u0442\u043e\u043a\u043b\u0430\u0441\u0441-\u041b\u0430\u0443\u0440\u0430","code":"C40AF00310"}]},{"name":"\u0422\u044e\u043c\u0435\u043d\u044c","dealers":[{"id":40,"name":"\u0410\u0432\u0442\u043e\u041c\u0430\u043a\u0441","code":"C40AF00002"},{"id":66,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01082"}]},{"name":"\u0423\u043b\u0430\u043d-\u0423\u0434\u044d","dealers":[{"id":232,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u043d\u0430 \u0428\u0430\u043b\u044f\u043f\u0438\u043d\u0430","code":"C40AF01121"}]},{"name":"\u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a","dealers":[{"id":238,"name":"\u0410\u0432\u0442\u043e\u0440\u0430\u0439-\u0417\u0430\u0432\u043e\u043b\u0436\u044c\u0435","code":"C40AF01127"},{"id":32,"name":"\u041c\u043e\u0442\u043e\u043c","code":"C40AF00227"}]},{"name":"\u0425\u0430\u0431\u0430\u0440\u043e\u0432\u0441\u043a","dealers":[{"id":250,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF11050"}]},{"name":"\u0425\u0430\u043d\u0442\u044b-\u041c\u0430\u043d\u0441\u0438\u0439\u0441\u043a\u0438\u0439 \u0410\u041e","dealers":[{"id":134,"name":"\u0421\u0438\u0431\u043a\u0430\u0440","code":"C40AF00034"},{"id":167,"name":"\u0421\u0438\u0431\u043a\u0430\u0440 \u0421\u0435\u0432\u0435\u0440","code":"C40AF10034"},{"id":133,"name":"\u0421\u0438\u0431\u043a\u0430\u0440+","code":"C40AF00369"}]},{"name":"\u0427\u0435\u0431\u043e\u043a\u0441\u0430\u0440\u044b","dealers":[{"id":124,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00953"}]},{"name":"\u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":97,"name":"\u0418\u0441\u0442\u0435\u043d \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00961"},{"id":184,"name":"\u041f\u043b\u0430\u043d\u0435\u0442\u0430 \u0410\u0432\u0442\u043e","code":"C40AF01078"},{"id":44,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF00223"},{"id":43,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF00273"}]},{"name":"\u042e\u0436\u043d\u043e-\u0421\u0430\u0445\u0430\u043b\u0438\u043d\u0441\u043a","dealers":[{"id":251,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF21050"}]},{"name":"\u042f\u043a\u0443\u0442\u0441\u043a","dealers":[{"id":221,"name":"\u0412\u043e\u0441\u0442\u043e\u043a\u0435\u0432\u0440\u043e\u0422\u0435\u0445\u043d\u0438\u043a\u0430","code":"C40AF01105"}]},{"name":"\u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","dealers":[{"id":245,"name":"\u0410\u0432\u0442\u043e\u041b\u0438\u0433\u0430 \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","code":"C40AF01130"},{"id":159,"name":"\u0421\u0418\u041c \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","code":"C40AF01051"}]}];
        </script>

        <div class="offers-container">
            <div class="content_area">
                <!-- hide elantra and ix35 banner-->

                <!-- WARNING -->
                <!-- this checks only img src!! no checking by offer ID -->

                <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/765529bc8c5f9bbeab84c69a60cd83fb_Sonata+Tucson_offer-banner_1500x545px_Oct2018.jpg" style=""/>

                <!-- old syntax: -->
                <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/765529bc8c5f9bbeab84c69a60cd83fb_Sonata+Tucson_preview-banner_1500x545px_Oct2018.jpg" style=""/> -->

                <!-- end of hiding banner-->

                <div class="offers-content">

                    <h1 class="title-offer bordr-btm"><span class="nowrp">Победная выгода на автомобили Hyundai</span></h1>

                    <div class="offer-terms bordr-btm">
                        <div class="offers-block">
                            <div class="row-inline">
                                <p class="offer-terms__text">
                                    При сдаче автомобиля Hyundai с пробегом в Трейд-ин у вас есть возможность получить 140 000 рублей выгоды при покупке новой Hyundai Sonata и 80 000 рублей при покупке нового Hyundai Tucson!<br><br>
                                    При сдаче автомобиля с пробегом любого бренда (кроме российского) в Трейд-ин у вас есть возможность получить 120 000 рублей выгоды при покупке новой Hyundai Sonata и 30 000 рублей при покупке нового Hyundai Tucson!
                                </p>
                            </div>


                            <div class="offer-actions clearfix">
                                <div class="row row-left">
                                    <img src="http://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Sonata_LF_Grand_Blue_afcdde9626d976bc331aec9b108e83e4/13.png" alt="Hyundai Sonata" width="440" height="180">
                                </div>
                                <div class="row row-right">
                                    <div class="offer-actions__button-span">
                                        <a href="/configurator/car/24/modification" class="offer-actions__button config">Конфигуратор</a>



                                        <div id="brochure_requester"><a data-gtm-havas-model="sonata" href="#" data-model="Sonata" for="brochures_request"  target="_blank" class="zing_form_toggler offer-actions__button brosh">Брошюра</a></div>
                                    </div>




                                </div>




                                <div class="offer-actions__button-span">
                                    <a href="/configurator/car/24/modification#calculator" class="offer-actions__button credit">Кредит</a>
                                    <a href="/test-drive/" class="offer-actions__button testdrive">Тест-драйв</a>
                                </div>
                                <a class="offer-actions__description" href="/Sonata/">Описание модели ></a>
                            </div>


                            <div class="offer-actions clearfix">
                                <div class="row row-left">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/TLe_Olivine_Grey_186065c0161324d16c838acd26cd4bf2/14.png" alt="Hyundai Tucson" width="440" height="180">
                                </div>
                                <div class="row row-right">
                                    <div class="offer-actions__button-span">
                                        <a href="/configurator/car/26/modification" class="offer-actions__button config">Конфигуратор</a>



                                        <div id="brochure_requester"><a data-gtm-havas-model="tucson" href="#" data-model="Tucson" for="brochures_request"  target="_blank" class="zing_form_toggler offer-actions__button brosh">Брошюра</a></div>
                                    </div>




                                </div>




                                <div class="offer-actions__button-span">
                                    <a href="/configurator/car/26/modification#calculator" class="offer-actions__button credit">Кредит</a>
                                    <a href="/test-drive/" class="offer-actions__button testdrive">Тест-драйв</a>
                                </div>
                                <a class="offer-actions__description" href="/Tucson">Описание модели ></a>
                            </div>

                            <!-- additional terms as footer -->

                            <div class="clearfix"></div>

                            <!-- additional terms as footer -->

                            <div class="clearfix"></div>

                            <div class="tip-supscript ">
                                <p style="font-size: 10px;">
                                    *Предложение ограничено, действительно с 01.03.2019 по 31.03.2019, не оферта.<br>
                                    Подробности во всех официальных дилерских центрах Hyundai.
                                </p>
                            </div>

                            <div class="tip-supscript ">
                                <p style="font-size: 10px;">

                                </p>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        </div>

        <!--
        <a class="fast-menu-button fast-menu-button--child" data-role="credit-open">
            <span class="fast-menu-button__text">Заявка на кредит</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="svg"><use xlink:href="#fast-menu-test-drive"></use></svg>
        </a>
        -->

        <!-- <a href="#" data-role="credit-open">Форма кредита</a> -->

        <script id="service-request-template" data-classlist="test-drive-modal" type="text/sp-template">
            <div class="service-request__body">
                <div class="common-modal-holder">
                    <div class="common-modal-context">
                        <div class="common-modal__header">
                            <span class="common-modal__title">Записаться на тест-драйв</span> <a href="#" class="close"></a>
                        </div>

                        <div class="common-modal__body">
                            <form class="test-drive-form" data-form-id="service-request">
                                <input type="hidden" name="code" value="HMCIS0005826">
                                <div class="common-modal__content">
                                    <div class="test-drive-col">
                                        <div class="test-drive-subtitle">
                                            Ваша модель
                                        </div>

                                        <div class="list-component list-component--dealers">
	                            <span value="" class="selected-item list-item">
	                            	<span class="textVal">Новая SONATA</span>
	                            	<input type="hidden" class="dataInput" name="model" value="Sonata">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="Sonata"             	class="list-item" >Новая SONATA</li>
                                                    <li value="Solaris New"            	class="list-item" >SOLARIS</li>
                                                    <li value="Elantra"            	class="list-item" >ELANTRA</li>
                                                    <li value="Creta"            	class="list-item" >CRETA</li>
                                                    <li value="Tucson"            	class="list-item" >TUCSON</li>
                                                    <li value="New Tucson"            	class="list-item" >Новый TUCSON</li>
                                                    <li value="Santa Fe"            	class="list-item" >SANTA FE</li>
                                                    <li value="New Santa Fe"            	class="list-item" >Новый SANTA FE</li>
                                                    <li value="H-1"            	class="list-item" >H-1</li>

                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="test-drive-subtitle" style="margin-top: 20px;">
                                            Дилер
                                        </div>

                                        <div class="list-component list-component--dealers" data-dealer-refresh="1">
	                            <span value="0" class="selected-item list-item">
	                            	<span class="textVal">Москва и Подмосковье</span>
	                            	<input type="hidden" class="dataInput" name="city" value="0">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="0" class="list-item">Москва и Подмосковье</li>
                                                    <li value="1" class="list-item">Санкт-Петербург</li>
                                                    <li value="2" class="list-item">Абакан</li>
                                                    <li value="3" class="list-item">Архангельск</li>
                                                    <li value="4" class="list-item">Астрахань</li>
                                                    <li value="5" class="list-item">Барнаул</li>
                                                    <li value="6" class="list-item">Белгородская область</li>
                                                    <li value="7" class="list-item">Благовещенск</li>
                                                    <li value="8" class="list-item">Брянск</li>
                                                    <li value="9" class="list-item">Великий Новгород</li>
                                                    <li value="10" class="list-item">Владивосток</li>
                                                    <li value="11" class="list-item">Владикавказ</li>
                                                    <li value="12" class="list-item">Владимир</li>
                                                    <li value="13" class="list-item">Волгоградская область</li>
                                                    <li value="14" class="list-item">Вологодская область</li>
                                                    <li value="15" class="list-item">Воронеж</li>
                                                    <li value="16" class="list-item">Грозный</li>
                                                    <li value="17" class="list-item">Иваново</li>
                                                    <li value="18" class="list-item">Ижевск</li>
                                                    <li value="19" class="list-item">Иркутск</li>
                                                    <li value="20" class="list-item">Йошкар-Ола</li>
                                                    <li value="21" class="list-item">Калининград</li>
                                                    <li value="22" class="list-item">Калуга</li>
                                                    <li value="23" class="list-item">Кемеровская область</li>
                                                    <li value="24" class="list-item">Киров</li>
                                                    <li value="25" class="list-item">Кострома</li>
                                                    <li value="26" class="list-item">Краснодарский край</li>
                                                    <li value="27" class="list-item">Красноярск</li>
                                                    <li value="28" class="list-item">Курган</li>
                                                    <li value="29" class="list-item">Курск</li>
                                                    <li value="30" class="list-item">Липецк</li>
                                                    <li value="31" class="list-item">Махачкала</li>
                                                    <li value="32" class="list-item">Мурманск</li>
                                                    <li value="33" class="list-item">Нижний Новгород</li>
                                                    <li value="34" class="list-item">Новосибирск</li>
                                                    <li value="35" class="list-item">Ноябрьск</li>
                                                    <li value="36" class="list-item">Омск</li>
                                                    <li value="37" class="list-item">Орел</li>
                                                    <li value="38" class="list-item">Оренбургская область</li>
                                                    <li value="39" class="list-item">Пенза</li>
                                                    <li value="40" class="list-item">Пермь</li>
                                                    <li value="41" class="list-item">Петрозаводск</li>
                                                    <li value="42" class="list-item">Псков</li>
                                                    <li value="43" class="list-item">Республика Башкортостан</li>
                                                    <li value="44" class="list-item">Республика Татарстан</li>
                                                    <li value="45" class="list-item">Ростовская область</li>
                                                    <li value="46" class="list-item">Рязань</li>
                                                    <li value="47" class="list-item">Самарская область</li>
                                                    <li value="48" class="list-item">Саранск</li>
                                                    <li value="49" class="list-item">Саратов</li>
                                                    <li value="50" class="list-item">Свердловская область</li>
                                                    <li value="51" class="list-item">Симферополь</li>
                                                    <li value="52" class="list-item">Смоленск </li>
                                                    <li value="53" class="list-item">Ставропольский край</li>
                                                    <li value="54" class="list-item">Сыктывкар</li>
                                                    <li value="55" class="list-item">Тамбов</li>
                                                    <li value="56" class="list-item">Тверь</li>
                                                    <li value="57" class="list-item">Томск</li>
                                                    <li value="58" class="list-item">Тула</li>
                                                    <li value="59" class="list-item">Тюмень</li>
                                                    <li value="60" class="list-item">Улан-Удэ</li>
                                                    <li value="61" class="list-item">Ульяновск</li>
                                                    <li value="62" class="list-item">Хабаровск</li>
                                                    <li value="63" class="list-item">Ханты-Мансийский АО</li>
                                                    <li value="64" class="list-item">Чебоксары</li>
                                                    <li value="65" class="list-item">Челябинская область</li>
                                                    <li value="66" class="list-item">Южно-Сахалинск</li>
                                                    <li value="67" class="list-item">Якутск</li>
                                                    <li value="68" class="list-item">Ярославль</li>
                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-component list-component--dealers dealers-block">
	                            <span value="C40AF01156" class="selected-item list-item">
	                            	<span class="textVal">GN service</span>
	                            	<input type="hidden" class="dataInput" name="dealer" value="C40AF01156">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="C40AF01156" class="list-item">GN service</li>
                                                    <li value="C40AF11027" class="list-item">Hyundai City Store АВИЛОН</li>
                                                    <li value="C40AF01155" class="list-item">INCHCAPE</li>
                                                    <li value="C40AF11090" class="list-item">Major</li>
                                                    <li value="C40AF21090" class="list-item">Major МКАД 18 км</li>
                                                    <li value="C40AF31090" class="list-item">Major МКАД 47 км</li>
                                                    <li value="C40AF01112" class="list-item">АВАНТАЙМ СП</li>
                                                    <li value="C40AF01038" class="list-item">АГ-Моторс Балашиха</li>
                                                    <li value="C40AF01144" class="list-item">Аванта-Запад</li>
                                                    <li value="C40AF01027" class="list-item">Авилон</li>
                                                    <li value="C40AF01115" class="list-item">Аврора</li>
                                                    <li value="C40AF11038" class="list-item">АвтоГЕРМЕС</li>
                                                    <li value="C40AF01002" class="list-item">АвтоСпецЦентр Внуково</li>
                                                    <li value="C40AF20328" class="list-item">Автомир Дмитровка</li>
                                                    <li value="C40AF10328" class="list-item">Автомир Марьино</li>
                                                    <li value="C40AF30328" class="list-item">Автомир Сокольники</li>
                                                    <li value="C40AF01138" class="list-item">Авторусь Бутово</li>
                                                    <li value="C40AF01101" class="list-item">Авторусь Лосиный Остров</li>
                                                    <li value="C40AF01060" class="list-item">Авторусь Подольск</li>
                                                    <li value="C40AF01091" class="list-item">Автоцентр Сити Юг</li>
                                                    <li value="C40AF01070" class="list-item">Акрос</li>
                                                    <li value="C40AF00354" class="list-item">Акцент-Авто Москва</li>
                                                    <li value="C40AF00996" class="list-item">КВИСТ</li>
                                                    <li value="C40AF01150" class="list-item">КЛЮЧАВТО Волоколамка</li>
                                                    <li value="C40AF01149" class="list-item">КЛЮЧАВТО Люберцы</li>
                                                    <li value="C40AF01153" class="list-item">КорсГрупп</li>
                                                    <li value="C40AF01116" class="list-item">Орехово-АвтоЦентр</li>
                                                    <li value="C40AF01157" class="list-item">РТР-Авто</li>
                                                    <li value="C40AF10120" class="list-item">Рольф Алтуфьево</li>
                                                    <li value="C40AF40120" class="list-item">Рольф Сити</li>
                                                    <li value="C40AF20120" class="list-item">Рольф Химки</li>
                                                    <li value="C40AF30120" class="list-item">Рольф Юг</li>
                                                    <li value="C40AF00132" class="list-item">СИМ</li>
                                                    <li value="C40AF01158" class="list-item">Фаворит Моторс</li>
                                                    <li value="C40AF01063" class="list-item">Хендэ Центр Кунцево</li>
                                                    <li value="C40AF01128" class="list-item">Центр Зеленоград</li>
                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="test-drive-col">


                                        <div class="test-drive-subtitle">
                                            Ваши данные
                                        </div>


                                        <div class="test-drive-form__row test-drive-form__row--has-radios">
                                            <label class="mdl-input-label mdl-radio-label">
                                                <input value="Mr." class="mdl-radio" type="radio" name="salutation" checked="checked">
                                                <span class="mdl-radio-tick">Уважаемый</span>
                                            </label>
                                            <label class="mdl-input-label mdl-radio-label">
                                                <input value="Ms." class="mdl-radio" type="radio" name="salutation">
                                                <span class="mdl-radio-tick">Уважаемaя</span>
                                            </label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="name" placeholder="Имя" class="mdl-input  capitalize non_numeric" type="text"> <span class="mdl-input-warn-hepler">Заполните поле</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="surname" placeholder="Фамилия" class="mdl-input  capitalize non_numeric" type="text"> <span class="mdl-input-warn-hepler">Заполните поле</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="phone" placeholder="+7" class="mdl-input" data-mask="+7 ### ###-##-##" data-previous-value="" type="tel"> <span class="mdl-input-warn-hepler">Формат email name@email.ru</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="email" placeholder="E-Mail" class="mdl-input" type="email"> <span class="mdl-input-warn-hepler">Формат email name@email.ru</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label mdl-checkbox-label">
                                                <input name="agreement" class="mdl-checkbox" type="checkbox">
                                                <span class="mdl-checkbox-tick"></span>
                                                Я согласен на обработку <a class="test-drive-form__rules js-p-rules-open" href="#">персональных данных</a></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <button type="submit" class="button button--ripple mdl-submit test-drive-form__submit">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </script>



        <script id="credit-template" data-classlist="test-drive-modal" type="text/sp-template">
            <div class="service-request__body">
                <div class="common-modal-holder">
                    <div class="common-modal-context">
                        <div class="common-modal__header">
                            <span class="common-modal__title">Заявка на кредит</span> <a href="#" class="close"></a>
                        </div>

                        <div class="common-modal__body">
                            <form class="test-drive-form" data-form-id="credit-request">
                                <input type="hidden" name="code" value="HMCIS0005826">
                                <div class="common-modal__content">
                                    <div class="test-drive-col">
                                        <div class="test-drive-subtitle">
                                            Ваша модель
                                        </div>

                                        <div class="list-component list-component--dealers">
	                            <span value="" class="selected-item list-item">
	                            	<span class="textVal">Новая SONATA</span>
	                            	<input type="hidden" class="dataInput" name="model" value="Sonata">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="Sonata"             	class="list-item" >Новая SONATA</li>
                                                    <li value="Solaris New"            	class="list-item" >SOLARIS</li>
                                                    <li value="Elantra"            	class="list-item" >ELANTRA</li>
                                                    <li value="Creta"            	class="list-item" >CRETA</li>
                                                    <li value="Tucson"            	class="list-item" >TUCSON</li>
                                                    <li value="New Tucson"            	class="list-item" >Новый TUCSON</li>
                                                    <li value="Santa Fe"            	class="list-item" >SANTA FE</li>
                                                    <li value="New Santa Fe"            	class="list-item" >Новый SANTA FE</li>
                                                    <li value="H-1"            	class="list-item" >H-1</li>

                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="test-drive-subtitle" style="margin-top: 20px;">
                                            Дилер
                                        </div>

                                        <div class="list-component list-component--dealers" data-dealer-refresh="1">
	                            <span value="0" class="selected-item list-item">
	                            	<span class="textVal">Москва и Подмосковье</span>
	                            	<input type="hidden" class="dataInput" name="city" value="0">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="0" class="list-item">Москва и Подмосковье</li>
                                                    <li value="1" class="list-item">Санкт-Петербург</li>
                                                    <li value="2" class="list-item">Абакан</li>
                                                    <li value="3" class="list-item">Архангельск</li>
                                                    <li value="4" class="list-item">Астрахань</li>
                                                    <li value="5" class="list-item">Барнаул</li>
                                                    <li value="6" class="list-item">Белгородская область</li>
                                                    <li value="7" class="list-item">Благовещенск</li>
                                                    <li value="8" class="list-item">Брянск</li>
                                                    <li value="9" class="list-item">Великий Новгород</li>
                                                    <li value="10" class="list-item">Владивосток</li>
                                                    <li value="11" class="list-item">Владикавказ</li>
                                                    <li value="12" class="list-item">Владимир</li>
                                                    <li value="13" class="list-item">Волгоградская область</li>
                                                    <li value="14" class="list-item">Вологодская область</li>
                                                    <li value="15" class="list-item">Воронеж</li>
                                                    <li value="16" class="list-item">Грозный</li>
                                                    <li value="17" class="list-item">Иваново</li>
                                                    <li value="18" class="list-item">Ижевск</li>
                                                    <li value="19" class="list-item">Иркутск</li>
                                                    <li value="20" class="list-item">Йошкар-Ола</li>
                                                    <li value="21" class="list-item">Калининград</li>
                                                    <li value="22" class="list-item">Калуга</li>
                                                    <li value="23" class="list-item">Кемеровская область</li>
                                                    <li value="24" class="list-item">Киров</li>
                                                    <li value="25" class="list-item">Кострома</li>
                                                    <li value="26" class="list-item">Краснодарский край</li>
                                                    <li value="27" class="list-item">Красноярск</li>
                                                    <li value="28" class="list-item">Курган</li>
                                                    <li value="29" class="list-item">Курск</li>
                                                    <li value="30" class="list-item">Липецк</li>
                                                    <li value="31" class="list-item">Махачкала</li>
                                                    <li value="32" class="list-item">Мурманск</li>
                                                    <li value="33" class="list-item">Нижний Новгород</li>
                                                    <li value="34" class="list-item">Новосибирск</li>
                                                    <li value="35" class="list-item">Ноябрьск</li>
                                                    <li value="36" class="list-item">Омск</li>
                                                    <li value="37" class="list-item">Орел</li>
                                                    <li value="38" class="list-item">Оренбургская область</li>
                                                    <li value="39" class="list-item">Пенза</li>
                                                    <li value="40" class="list-item">Пермь</li>
                                                    <li value="41" class="list-item">Петрозаводск</li>
                                                    <li value="42" class="list-item">Псков</li>
                                                    <li value="43" class="list-item">Республика Башкортостан</li>
                                                    <li value="44" class="list-item">Республика Татарстан</li>
                                                    <li value="45" class="list-item">Ростовская область</li>
                                                    <li value="46" class="list-item">Рязань</li>
                                                    <li value="47" class="list-item">Самарская область</li>
                                                    <li value="48" class="list-item">Саранск</li>
                                                    <li value="49" class="list-item">Саратов</li>
                                                    <li value="50" class="list-item">Свердловская область</li>
                                                    <li value="51" class="list-item">Симферополь</li>
                                                    <li value="52" class="list-item">Смоленск </li>
                                                    <li value="53" class="list-item">Ставропольский край</li>
                                                    <li value="54" class="list-item">Сыктывкар</li>
                                                    <li value="55" class="list-item">Тамбов</li>
                                                    <li value="56" class="list-item">Тверь</li>
                                                    <li value="57" class="list-item">Томск</li>
                                                    <li value="58" class="list-item">Тула</li>
                                                    <li value="59" class="list-item">Тюмень</li>
                                                    <li value="60" class="list-item">Улан-Удэ</li>
                                                    <li value="61" class="list-item">Ульяновск</li>
                                                    <li value="62" class="list-item">Хабаровск</li>
                                                    <li value="63" class="list-item">Ханты-Мансийский АО</li>
                                                    <li value="64" class="list-item">Чебоксары</li>
                                                    <li value="65" class="list-item">Челябинская область</li>
                                                    <li value="66" class="list-item">Южно-Сахалинск</li>
                                                    <li value="67" class="list-item">Якутск</li>
                                                    <li value="68" class="list-item">Ярославль</li>
                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-component list-component--dealers dealers-block">
	                            <span value="C40AF01156" class="selected-item list-item">
	                            	<span class="textVal">GN service</span>
	                            	<input type="hidden" class="dataInput" name="dealer" value="C40AF01156">
	                            	<svg tabindex="-1" aria-visible="false" class="ic-svg"><use xlink:href="#ic-dropdown-corner"></use></svg>
	                            </span>

                                            <div class="list-component-holder vb vb-invisible" >
                                                <ul class="list vb-content" style="display: block; overflow-x: hidden; overflow-y: scroll; height: 100%; width: 100%; box-sizing: content-box; padding-right: 20px;">
                                                    <li value="C40AF01156" class="list-item">GN service</li>
                                                    <li value="C40AF11027" class="list-item">Hyundai City Store АВИЛОН</li>
                                                    <li value="C40AF01155" class="list-item">INCHCAPE</li>
                                                    <li value="C40AF11090" class="list-item">Major</li>
                                                    <li value="C40AF21090" class="list-item">Major МКАД 18 км</li>
                                                    <li value="C40AF31090" class="list-item">Major МКАД 47 км</li>
                                                    <li value="C40AF01112" class="list-item">АВАНТАЙМ СП</li>
                                                    <li value="C40AF01038" class="list-item">АГ-Моторс Балашиха</li>
                                                    <li value="C40AF01144" class="list-item">Аванта-Запад</li>
                                                    <li value="C40AF01027" class="list-item">Авилон</li>
                                                    <li value="C40AF01115" class="list-item">Аврора</li>
                                                    <li value="C40AF11038" class="list-item">АвтоГЕРМЕС</li>
                                                    <li value="C40AF01002" class="list-item">АвтоСпецЦентр Внуково</li>
                                                    <li value="C40AF20328" class="list-item">Автомир Дмитровка</li>
                                                    <li value="C40AF10328" class="list-item">Автомир Марьино</li>
                                                    <li value="C40AF30328" class="list-item">Автомир Сокольники</li>
                                                    <li value="C40AF01138" class="list-item">Авторусь Бутово</li>
                                                    <li value="C40AF01101" class="list-item">Авторусь Лосиный Остров</li>
                                                    <li value="C40AF01060" class="list-item">Авторусь Подольск</li>
                                                    <li value="C40AF01091" class="list-item">Автоцентр Сити Юг</li>
                                                    <li value="C40AF01070" class="list-item">Акрос</li>
                                                    <li value="C40AF00354" class="list-item">Акцент-Авто Москва</li>
                                                    <li value="C40AF00996" class="list-item">КВИСТ</li>
                                                    <li value="C40AF01150" class="list-item">КЛЮЧАВТО Волоколамка</li>
                                                    <li value="C40AF01149" class="list-item">КЛЮЧАВТО Люберцы</li>
                                                    <li value="C40AF01153" class="list-item">КорсГрупп</li>
                                                    <li value="C40AF01116" class="list-item">Орехово-АвтоЦентр</li>
                                                    <li value="C40AF01157" class="list-item">РТР-Авто</li>
                                                    <li value="C40AF10120" class="list-item">Рольф Алтуфьево</li>
                                                    <li value="C40AF40120" class="list-item">Рольф Сити</li>
                                                    <li value="C40AF20120" class="list-item">Рольф Химки</li>
                                                    <li value="C40AF30120" class="list-item">Рольф Юг</li>
                                                    <li value="C40AF00132" class="list-item">СИМ</li>
                                                    <li value="C40AF01158" class="list-item">Фаворит Моторс</li>
                                                    <li value="C40AF01063" class="list-item">Хендэ Центр Кунцево</li>
                                                    <li value="C40AF01128" class="list-item">Центр Зеленоград</li>
                                                </ul>

                                                <div class="vb-dragger" style="position: absolute;">
                                                    <div class="vb-dragger-styler"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="test-drive-col">


                                        <div class="test-drive-subtitle">
                                            Ваши данные
                                        </div>


                                        <div class="test-drive-form__row test-drive-form__row--has-radios">
                                            <label class="mdl-input-label mdl-radio-label">
                                                <input value="Mr." class="mdl-radio" type="radio" name="salutation" checked="checked">
                                                <span class="mdl-radio-tick">Уважаемый</span>
                                            </label>
                                            <label class="mdl-input-label mdl-radio-label">
                                                <input value="Ms." class="mdl-radio" type="radio" name="salutation">
                                                <span class="mdl-radio-tick">Уважаемaя</span>
                                            </label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="name" placeholder="Имя" class="mdl-input  capitalize non_numeric" type="text"> <span class="mdl-input-warn-hepler">Заполните поле</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="surname" placeholder="Фамилия" class="mdl-input  capitalize non_numeric" type="text"> <span class="mdl-input-warn-hepler">Заполните поле</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="phone" placeholder="+7" class="mdl-input" data-mask="+7 ### ###-##-##" data-previous-value="" type="tel"> <span class="mdl-input-warn-hepler">Формат email name@email.ru</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label"><input name="email" placeholder="E-Mail" class="mdl-input" type="email"> <span class="mdl-input-warn-hepler">Формат email name@email.ru</span></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <label class="mdl-input-label mdl-checkbox-label">
                                                <input name="agreement" class="mdl-checkbox" type="checkbox">
                                                <span class="mdl-checkbox-tick"></span>
                                                Я согласен на обработку <a class="test-drive-form__rules js-p-rules-open-common" href="#">персональных данных</a></label>
                                        </div>

                                        <div class="test-drive-form__row">
                                            <button type="submit" class="button button--ripple mdl-submit test-drive-form__submit">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </script>


        <!--RuTarget-->
        <script type="text/javascript">
            var _rutarget=window._rutarget||[];
            _rutarget.push({
                'event':'otherPage',
                'nosync': 'true'
            });
        </script>
        <!--/RuTarget-->

        <div class="svg-root" style="position: absolute; width: 0; height: 0; visibility: hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none" aria-hidden="true">

                <symbol version="1.1" id="canister" viewBox="0 0 542 542">
                    <path class="st1" d="M297,183.3c1.5-3.2,1.3-6.9-0.6-10.2l-3.5-6.2c-2.7-4.9-8.6-8.4-14-8.5c-25-0.4-50.5,0.3-75.5,1.9
				c-6.5,0.4-11.8,5.9-12.1,12.4c-0.4,7.9-0.7,16-1,24.1c-0.1,3.6,1.3,6.9,4,9c1.9,1.6,4.4,2.5,7,2.5c0.9,0,1.9-0.1,2.9-0.3
				c33.6-8.1,60.6-14,85-18.6C292.6,188.6,295.5,186.4,297,183.3z M202.1,199.7c-0.9,0.2-1.7,0.3-2.6-0.4c-0.6-0.5-0.9-1.3-0.9-2.2
				c0.3-8,0.6-16.1,1-24c0.1-2.2,2.1-4.3,4.3-4.4c20.2-1.3,40.6-2,60.9-2c4.7,0,9.3,0,14,0.1c2.4,0,5.6,2,6.8,4.2l3.5,6.3
				c0.5,0.9,0.6,1.8,0.3,2.5c-0.3,0.6-1,1.1-1.9,1.3C262.9,185.6,235.8,191.6,202.1,199.7z"/>
                    <path class="st1" d="M394.8,175.5l-39.2-42.3c-2.1-2.3-5-3.6-8.5-3.7c-2.9,0-5.7,1.1-7.9,3.1L322.5,148c-2.3,2.1-3.6,5-3.7,8.1
				c-0.1,2.3,0.6,5.6,2,7.2l3,3.2l-5,4.7c-8.7-9.9-16.8-19.1-20.2-23.1c-3.3-3.9-9.1-6.7-14-6.8c-35.2-0.9-70.7,0.6-105.9,4.6
				c-6.3,0.7-11.4,6-11.9,12.3c-5.5,68.2-5.5,137.3,0,205.5c0.5,6.3,5.6,11.6,11.9,12.3c28.4,3.2,57.3,4.8,86,4.8s57.6-1.6,86-4.8
				c6.3-0.7,11.4-6,11.9-12.3c0.7-9.2,1.4-18.5,1.9-27.8c0-0.2,0.1-0.3,0.1-0.5c0-0.1-0.1-0.2-0.1-0.3c0.5-9.1,1-18.2,1.3-27.3
				c0.6-17.3,0.8-34.7,0.7-52.1c0-0.2,0.1-0.3,0.1-0.5s-0.1-0.4-0.1-0.6c0-7.6,0-15.1-0.2-22.6c-0.1-4.6-2.5-10.3-5.7-13.9
				c-2.3-2.5-4.6-5-6.9-7.6l5.8-5.4l0.6,0.7c3,3.3,5.8,4.8,9.2,4.9c0.1,0,0.4,0,0.5,0c2.9,0,5.7-1.1,7.9-3.1l16.7-15.4
				C398.9,187.6,399.2,180.2,394.8,175.5z M357.8,232c0.1,6.3,0.1,12.6,0.1,18.8h-9.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2h9.5
				c0,3.9,0.1,7.8,0.1,11.7h-9.6c-2.3,0-4.2,1.9-4.2,4.2c0,2.3,1.9,4.2,4.2,4.2h9.4c-0.1,3.9-0.2,7.8-0.3,11.7h-9.1
				c-2.3,0-4.2,1.9-4.2,4.2c0,2.3,1.9,4.2,4.2,4.2h9c-0.1,2.7-0.1,5.4-0.2,8c0,1.2-0.1,2.4-0.2,3.7h-8.6c-2.3,0-4.2,1.9-4.2,4.2
				s1.9,4.2,4.2,4.2h8.2c-0.2,3.9-0.3,7.8-0.5,11.7h-7.7c-2.3,0-4.2,1.9-4.2,4.2c0,2.3,1.9,4.2,4.2,4.2h7.2c-0.5,7.8-1,15.6-1.6,23.4
				c-0.2,2.2-2.2,4.3-4.4,4.6c-56.1,6.3-113.9,6.3-170,0c-2.2-0.3-4.2-2.4-4.4-4.6c-5.4-67.8-5.4-136.4,0-204.2
				c0.2-2.2,2.2-4.3,4.4-4.6c28.2-3.2,56.8-4.8,85.2-4.8c6.5,0,13,0.1,19.5,0.3c2.5,0.1,6.1,1.8,7.8,3.9c3.8,4.5,13.4,15.4,23.2,26.5
				l0,0l0,0c4.8,5.4,9.6,10.8,13.8,15.6l9.7,11c0.1,0.1,0.2,0.3,0.3,0.4c0.4,0.4,0.8,0.8,1.1,1.3l0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.2
				c4.6,5.1,9.3,10.2,13.8,15.1C356.1,225.6,357.8,229.4,357.8,232z M347.9,204.1c-0.5-0.5-0.9-1-1.4-1.5L335.4,190
				c-3.4-3.9-7.3-8.2-11.1-12.6l5.2-4.9l24.2,26.1L347.9,204.1z M388.5,185.8l-16.7,15.4c-0.6,0.6-1.3,0.9-2.1,0.9v4.2l-0.1-4.2
				c-0.5,0-1.3-0.1-3.3-2.2l-38.6-41.5c-0.1-0.2-0.3-1.1-0.3-1.9c0-0.9,0.4-1.6,1-2.2l16.7-15.4c0.6-0.5,1.3-0.8,2.3-0.8l0,0
				c0.9,0,1.6,0.4,2.2,1l39.2,42.4C389.8,182.5,389.8,184.6,388.5,185.8z"/>
                    <path class="st1" d="M262.2,239.7c-27.3,0-49.6,22.2-49.6,49.5c0,27.3,22.2,49.5,49.6,49.5s49.6-22.2,49.6-49.5
				S289.6,239.7,262.2,239.7z M262.2,330.4c-22.7,0-41.1-18.5-41.1-41.1s18.5-41.1,41.1-41.1s41.1,18.5,41.1,41.1
				C303.4,312,284.9,330.4,262.2,330.4z"/>
                    <path class="st1" d="M258.6,261c-2.8,4.7-16.8,28.7-16.8,38.3c0,11.3,9.2,20.4,20.4,20.4c11.3,0,20.4-9.2,20.4-20.4
				c0-9.6-14-33.6-16.8-38.3C264.3,258.4,260.1,258.4,258.6,261z M262.2,311.3c-6.6,0-12-5.4-12-12c0-4.4,6.2-17.2,12-27.7
				c5.8,10.5,12,23.3,12,27.7C274.2,305.9,268.9,311.3,262.2,311.3z"/>
                </symbol>

                <symbol id="ic-dropdown-corner" viewBox="0 0 10 6">
                    <polygon points="10,1.2 8.7,0 5,3.5 1.3,0 0,1.2 5,6 "/>
                </symbol>

                <symbol id="ic-dl-arrow" viewBox="0 0 70 70">
                    <g transform="translate(0,-952.36218)">
                        <path d="M35,965.2c-0.9,0-1.7,0.8-1.7,1.7v17.4l-6.7-6.3c-0.6-0.7-1.8-0.7-2.4,0c-0.6,0.7-0.4,1.8,0.1,2.4l9.5,9
					c0.8,0.6,1.5,0.6,2.3,0l9.5-9c0.6-0.6,0.8-1.8,0.1-2.4c-0.6-0.7-1.9-0.6-2.4,0l-6.7,6.3v-17.4C36.7,966,35.9,965.2,35,965.2z
					 M25.5,992.1c-0.9,0-1.7,0.8-1.7,1.7s0.8,1.7,1.7,1.7h19c0.9,0,1.7-0.8,1.7-1.7s-0.8-1.7-1.7-1.7H25.5z"/>
                    </g>
                </symbol>

                <symbol id="play-svg-ic" viewBox="0 0 512 512">
                    <path d="M116.9,369.6c-0.8,0-1.5-0.2-2.2-0.6c-1.6-0.8-2.6-2.5-2.6-4.2V44.8c0-1.8,1-3.4,2.5-4.2c0.7-0.4,1.5-0.6,2.2-0.6
	c1,0,1.9,0.3,2.7,0.8l238.1,160c1.3,0.9,2.1,2.4,2.1,4c0,1.6-0.8,3.1-2.1,4l-238.1,160C118.8,369.3,117.9,369.6,116.9,369.6z
	 M121.7,355.8l224.7-151l-224.7-151V355.8z"/>
                </symbol>

                <symbol id="fast-menu-test-drive" viewBox="0 0 542 542">
                    <g>
                        <path class="st0" d="M142.7,160.8L142.7,160.8c1.8,0,3.9-0.5,6.8-1.5l1.3,0.3l87,87l1.4-1.3c0.5-0.5,1.4-1.2,2.2-1.9
					c2.1-1.8,2.4-2.1,2.7-2.4l1.1-1.4l-9.8-9.8c-25.3-25.3-50.6-50.6-76-75.9c-1.3-1.3-1.9-2.4-1-4.4c2.1-4.7,1.4-9.3-1.9-12.8
					c-6.5-6.8-13.3-13.4-19.9-19.8c-2.1-2-4.1-4-6.2-6.1l-1.4-1.4l-21.1,21.2l24.4,24.4C136.1,158.7,138.9,160.8,142.7,160.8z
					 M122.2,131.1l0.1-1.6l5.9-6.1l1.4-0.3c0,0,0,0,0.1,0.1c5.6,5.5,11.1,11.1,16.7,16.6c2.6,2.6,3.6,3.7,3.6,4.9s-1,2.3-3.6,4.8
					c-1.2,1.1-2,1.8-3,1.8c-0.9,0-1.8-0.7-2.9-1.8c-6-5.9-11.9-11.9-17.8-17.8C122.5,131.5,122.3,131.3,122.2,131.1z"/>
                        <path class="st0" d="M341.7,292.6l-22.8-22.7c-2-2-3.4-2.8-4.7-2.8c-1.4,0-2.8,0.8-4.8,2.8c-0.4,0.5-0.8,0.9-1.2,1.4l-0.1,0.1
					c-0.1,0.1-0.1,0.2-0.2,0.3l-1.7,0.1l-3-3.1c-1.8-1.9-3-3-4.8-5l-1.3-1.4l-0.1,0.1l-0.2-0.2c13.5-13.5,26.6-26.6,39.4-39.5
					c4.6-4.6,10.2-6.8,18.1-7h0.6c4.7-0.1,9.5-0.3,14-1.2c14.3-3,27.1-12,35.1-24.8s10.4-28.3,6.8-42.5c-0.8-2.9-1.6-4.7-4.1-5.3
					c-0.4-0.1-0.9-0.2-1.3-0.2c-2,0-3.4,1.4-4.7,2.7c-7.6,7.6-15.7,15.7-23.7,23.7c-3.1,3.1-5.9,3.1-9,0c-4.2-4.2-8.4-8.4-12.5-12.5
					l-0.5-0.5c-3.5-3.5-3.5-6.1,0-9.6c4.8-4.8,9.6-9.7,14.4-14.5l9-9.1c2.1-2.1,3-4.2,2.5-6c-0.5-1.7-2.3-3.1-5.1-3.8
					c-6.6-1.7-13.5-2.1-20.6-1.3c-27.5,3.3-49.1,28.5-48.3,56.1v0.9c0,0.6,0,1.2,0.1,1.8c0.5,6.4-1.5,11.6-6.4,16.5
					c-37.7,37.5-76.4,76.1-114.9,114.8c-4.9,4.9-10.8,7.2-18.6,7.3c-3.6,0-7.4,0.1-11.1,0.6c-15.1,2.1-28.8,10.9-37.6,24.3
					c-8.8,13.3-11.5,29.4-7.5,44.1c0.9,3.3,2.6,5.2,4.9,5.2c2,0,3.8-1.4,5-2.6c3.9-3.9,7.9-7.9,11.8-11.8c3.9-3.9,7.8-7.8,11.7-11.7
					c1.1-1.1,2.9-2.6,4.8-2.6c2,0,3.6,1.5,4.8,2.6c3.8,3.8,7.7,7.7,11.5,11.5l0.9,0.9c3.8,3.9,3.8,6.3,0,10.2c-2.6,2.6-5.1,5.1-7.7,7.7
					l-0.8,0.8c-5.1,5-10.3,10.3-15.4,15.4c-1.6,1.6-2.3,3.6-1.8,5.3c0.4,1.7,1.9,2.9,4.1,3.5c3.8,1,7.4,1.9,11.1,2c0.9,0,1.8,0,2.7,0
					c20.3,0,36.3-8.8,47.7-26.1c6.4-9.8,9.3-21.3,8.4-34.1c-0.4-5.6,1.4-10.4,5.6-14.6c14-14,27.6-27.5,40.8-40.6l1,0.9
					c2,1.9,4.4,4.3,6.6,6.5l2.2,2.2l-0.1,1.7c-0.2,0.1-0.3,0.2-0.5,0.3c-0.8,0.6-1.5,1.1-2.2,1.7c-2.8,2.8-2.8,5.2-0.1,8
					c2.4,2.4,4.8,4.9,7.2,7.3l78.1,78.1c5.7,5.7,12.3,8.7,19.1,8.7c6.8,0,13.5-3,19.3-8.8l3.3-3.3c3.2-3.2,6.4-6.3,9.5-9.5
					c10.5-10.7,10.5-26.1-0.1-36.6C383.4,334.4,362.6,313.5,341.7,292.6z M320.4,287.3L286,321.7h-1.6l-5.6-5.2v-1.7l34.6-34.6h1.7
					l5.4,5.4L320.4,287.3z M397.7,385.1L397.7,385.1c-3,3.1-6.1,6.1-9.1,9.1l-3.7,3.7c-8.1,8-16.9,8.1-24.9,0.1l-16.8-16.8
					c-16.3-16.3-32.5-32.5-48.8-48.8c-0.4-0.4-0.9-0.6-1.5-0.9l-0.2-1.7l35.5-35.6l1.6-0.1c0.3,0.3,0.7,0.6,1,0.9l12.8,12.8
					c18.1,18,36.1,36.1,54.1,54.2C404.3,368.9,404.3,378.3,397.7,385.1z M204.6,353.1c2.4,26.2-16,44.9-34.5,49.2c-2.9,0.7-6,1-9,1.4
					l-1,0.1c-0.8,0.1-1.6-0.4-2-1.1s-0.2-1.7,0.4-2.2c1.9-1.9,3.7-3.8,5.6-5.6l0.3-0.3c3-3,6.4-6.4,9.6-9.7c6.7-6.7,6.6-15.8,0-22.6
					c-4.9-5-9.4-9.4-13.6-13.6c-3.3-3.3-7.2-5-11.3-5s-8,1.7-11.3,5c-4.1,4-8.1,8.1-12.1,12.1l-3.4,3.4c-0.6,0.6-1.5,0.8-2.2,0.4
					c-0.8-0.4-1.2-1.1-1.1-2l0.1-0.9c0.3-2.9,0.6-5.7,1.2-8.5c4.8-20.9,23.3-35.5,45-35.5h1.3c3.9,0,7.9-0.4,12-1.1
					c4.3-0.8,8.2-3,12-6.8c42.4-42.4,80.6-80.6,119.6-119.6c5.2-5.2,7.5-11.7,6.9-19.2c-1.1-13.7,2.6-25.5,11.1-35.2
					c8.8-10,19.7-15.2,33.3-15.9h0.1c0.8,0,1.5,0.5,1.8,1.2s0.2,1.6-0.4,2.2c-2.1,2.1-4.1,4.1-6.2,6.2l-0.1,0.1c-3,3-5.9,5.9-8.9,8.9
					c-6.8,6.9-6.7,16.1,0.1,23c4.1,4.1,8.8,8.9,13.4,13.4c3.3,3.3,7.2,5,11.3,5c4.1,0,8-1.7,11.3-5c3.3-3.2,6.6-6.5,9.9-9.8l1-1
					c1.5-1.5,2.9-2.9,4.4-4.4c0.6-0.6,1.4-0.7,2.2-0.4c0.7,0.3,1.2,1,1.2,1.9c-0.2,7.2-1.5,13-4.2,18.1c-8.8,17.3-23,26.2-42.1,26.5
					h-1.4c-3.2,0-6.5,0.1-9.6,0.6c-5.3,0.8-10.1,3.4-14.3,7.6c-35.4,35.4-77,77.1-119,118.9C206.2,338.7,203.8,345.1,204.6,353.1z
					 M289.6,269.4l8.8,8.8v1.7L278.3,300h-1.7l-8.8-8.9C275.2,283.7,282.5,276.5,289.6,269.4z"/>
                    </g>
                </symbol>
            </svg>
        </div>
    </main>


    <!--
    Контент страницы закончится тут
    -->


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>