


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Монолит</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/stylemaket.css">
    
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,800,900" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery.cookie/jquery.cookie.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>
    <!--build:js js/main.js -->
    <script src="js/settings.js"></script>
    <script src="js/logon.js"></script>
    <script src="js/catalog.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/basket.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/upbutton.js"></script>
    <script src="js/jquery-2.2.3.min.js"></script>
    
    <!-- endbuild -->
    <script src="js/init.js"></script>
     <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>

<body>

<?php 
$to = "info@monolit-org.ru";
$tema = "Новый заказ";
$message = "Фамилия: " . $_POST['surname'] . "<br>";
$message .= "Имя: " . $_POST['name'] . '<br>';
$message .= "Отчество: " . $_POST['patronymic'] . "<br>";
$message .= "Телефон: " . $_POST['tel'] . "<br>";
$message .= "E-mail: " . $_POST['email'] . "<br>";
$message .= "Сообщение заказа: " . $_POST['msg'] . "<br>" . "<hr>" . "<br>" . "(Заказ отправлен с сайта)";




$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
$gomail = mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных


 ?>


<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3063002", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3063002;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->




<header class="Header">
    <div class="Container HeaderFlex">
        <div class="Left">
            <a class="Logo" href="index.html">
               <img class="Logo__Image" src="img/logogo.png" style="width: 240px; height: 60px; margin-left: -50px; margin-right: 25px; opacity: 0.8;" alt="logo">
                 <!--<span class="Logo__Text Logo__Text_color_black">М
                <span class="Logo__Text_color_pink_bold">онолит</span>-->
                
                    
                </span>
            </a>
            <form action="#">
                <input class="SearchTxt" type="text" placeholder="Найти на сайте...">
                <div class="BtnExt">
                
                    <div class="DropDownMenu Row Swing-in-top-fwd">
                        <div class="Column">
                            <h4>WOMAN</h4>
                            <ul>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Sweaters/Knits</a></li>
                                <li><a href="#">Jackets/Coats</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Denim</a></li>
                                <li><a href="#">Leggins/Pants</a></li>
                                <li><a href="#">Skirts/Shorts</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                            <h4>MAN</h4>
                            <ul>
                                <li><a href="#">Tees/Tank tops</a></li>
                                <li><a href="#">Shirts/Polos</a></li>
                                <li><a href="#">Sweaters</a></li>
                                <li><a href="#">Sweatshirts/Hoodies</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Jackets/vests</a></li>
                            </ul>
                        </div>
                        <!---->
                    </div>
                </div>
                <input class="SearchBtn" type="submit" value=" ">

            </form>
        </div>
        <div class="Right">
            <div id="rphones">
                 8 (903) 130-43-48 НИКОЛАЙ <br>
                    8 (916) 839-68-55 ТИМУР 
            </div>
           
                </a>
                
</header>
<div id="upbutton"></div>
<nav class="Menu Container">
    <ul>
         <li><a href="ugolki.html" >Уголки</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Уголки:</h4>
                    <ul>
                        <li><a href="detail-ugolki/mebelnie-ugolki.html">-Мебельные уголки</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok.html">-Крепёжный уголок</a></li>
                        <li><a href="detail-ugolki/krepejnij-usilennij-ugolok.html">-Крепёжный усиленный уголок</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-ravnostoronnij.html">-Крепёжный уголок равносторонний</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-s-2-usileniem.html">-Крепёжный уголок с двойным усилением</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-assimetrichnij.html">-Крепёжный уголок ассиметричный</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-pod-135-gradusov.html">-Крепёжный уголок под 135°</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-z-obraznij.html">-Крепёжный уголок Z-образный</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-ankernij.html">-Крепёжный анкерный уголок</a></li>
                        <li><a href="detail-ugolki/krepejnij-ugolok-ravnostoronnij-shirokij.html">-Крепёжный уголок равносторонний, широкий</a></li>
                        <li><a href="detail-ugolki/uglovoi-soedinitel.html">-Угловой соединитель</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="oporu.html">Опоры</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Опоры:</h4>
                    <ul>
                        <li><a href="detail-oporu/skolzyashyaya-opora.html">-Скользящая опора</a></li>
                        <li><a href="detail-oporu/opora-brusa.html">-Опора бруса</a></li>
                        <li><a href="detail-oporu/opora-brusa-zakrutaya.html">-Опора бруса закрытая</a></li>
                        <li><a href="detail-oporu/opora-balki.html">-Опора балки</a></li>
                        <li><a href="detail-oporu/derjatel-balki.html">-Держатель балки</a></li>
                        <li><a href="detail-oporu/skolzashaya-opora-dlya-stropil.html">-Скользящая опора для стропил</a></li>
                        <li><a href="detail-oporu/skolzashaya-opora-dlya-stropil-zakrutaya.html">-Скользящая опора для стропил закрытая</a></li>
                        <li><a href="detail-oporu/zakladnaya-opora.html">-Закладная опора</a></li>
                        <li><a href="detail-oporu/osnovanie-kolonnu.html">-Основание колонны</a></li>
                    </ul>
                </div>
            </div>
        </li>   
        <li><a href="plastinu.html">Пластины</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Пластины:</h4>
                    <ul>
                        <li><a href="detail-plastinu/krepejnaya-plastina.html">-Крепёжная пластина</a></li>
                        <li><a href="detail-plastinu/plastina-soedinitelnaya.html">-Пластина соединительная</a></li>
                        <li><a href="detail-plastinu/gvozdevaya-plastina.html">-Гвоздевая пластина</a></li>
                
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="lentu.html">Ленты</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Ленты:</h4>
                    <ul>
                        <li><a href="detail-lentu/lenta-montajnaya.html">-Лента монтажная</a></li>
                        <li><a href="detail-lentu/lenta-montajnaya-14-mm.html">-Лента монтажная <br> (&Oslash отв. 14мм.)</a></li>
                        <li><a href="detail-lentu/lenta-dlya-ventilyacii_pryamaya.html">-Лента для вентиляции прямая</a></li>
                        <li><a href="detail-lentu/lenta-dlya-ventilyacii_volnoobraznaya.html">-Лента для вентиляции волнообразная</a></li>
                        <li><a href="detail-lentu/perforirovannaya-lenta-dlya-teplogo-pola.html">-Перфорированная лента для тёплого пола</a></li>
                        <li><a href="detail-lentu/tarnaya-lenta.html">-Тарная лента</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="ankeru.html">Анкеры</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Анкеры:</h4>
                    <ul>
                        <li><a href="detail-ankeru/anker-regul-po-vusote.html">-Анкер регулировочный <br> по высоте</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="krepeju.html">Крепежи</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Крепежи:</h4>
                    <ul>
                        <li><a href="detail-krepeji/krepej-dlya-stoek.html">-Крепёж для стоек</a></li>
                        <li><a href="detail-krepeji/okonnue-plastinu.html">-Оконные пластины</a></li>
                        <li><a href="detail-krepeji/podves-pryamoi.html">-Подвес прямой</a></li>
                        <li><a href="detail-krepeji/krab.html">-Краб</a></li>
                        <li><a href="detail-krepeji/shaiba-s-muftoi.html">-Шайба с муфтой</a></li>
                        <li><a href="detail-krepeji/skoba-dlya-vagonki.html">-Скоба для вагонки</a></li>
                        <li><a href="detail-krepeji/krepej-dlya-blokhausa.html">-Крепёж для блокхауса</a></li>
                        <li><a href="detail-krepeji/prujinnij-uzel.html">-Пружинный узел</a></li>
                        <li><a href="detail-krepeji/krepej-dlya-terrasnoi-doski.html">-Крепёж для террасной доски</a></li>
                        <li><a href="detail-krepeji/krepej-dlya-stenovih-panelei-planfix.html">-Крепёж для стеновых панелей "Планфикс"</a></li>
                        <li><a href="detail-krepeji/krepej-dlya-terrasnoi-doski-TWIN.html">-Крепёж для террасной доски "TWIN"</a></li>
                        <li><a href="detail-krepeji/kreplenie-stenovoe.html">-Крепление стеновое</a></li>
                        <li><a href="detail-krepeji/kruchok-vetrovoi.html">-Крючок ветровой</a></li>
                        <li><a href="detail-krepeji/petlya-nakladnaya-cunk.html">-Петля накладная, цинк</a></li>
                        <li><a href="detail-krepeji/petlya-strela.html">-Петля стрела</a></li>
                        <li><a href="detail-krepeji/podveski-mebelnie-cunk.html">-Подвески мебельные, цинк</a></li>
                        <li><a href="detail-krepeji/polkoderjatel.html">-Полкодержатель</a></li>
                        <li><a href="detail-krepeji/proboi-ushko-cunk.html">-Пробой ушко, цинк</a></li>
                        <li><a href="detail-krepeji/ruchka-skoba.html">-Ручка скоба</a></li>
                        <li><a href="detail-krepeji/zadvizhka-cunk.html">-Задвижка, цинк</a></li>
                    </ul>
                </div>
            </div>
        </li>
         <li><a href="fixators.html">Фиксаторы</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Фиксаторы:</h4>
                    <ul>
                        <li><a href="detail-fixators/zvezdochka.html">-Фиксатор арматуры "звездочка"</a></li>
                        <li><a href="detail-fixators/stulchik.html">-Фиксатор арматуры "стульчик"</a></li>
                        <li><a href="detail-fixators/kubik.html">-Фиксатор арматуры "кубик"</a></li>
                        <li><a href="detail-fixators/podstavka-opora.html">-Подставка-опора на сыпучие поверхности, для кубика 35-50</a></li>
                        <li><a href="detail-fixators/truba.html">-Труба ПНД</a></li>
                        <li><a href="detail-fixators/konus.html">-Фиксатор "конус"</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="samorezu.html">Саморезы</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Саморезы:</h4>
                    <ul>
                        <li><a href="detail-samorezu/samorezu-chernie-po-derevy.html">-Саморезы черные по дереву</a></li>
                        <li><a href="detail-samorezu/samorezu-chernie-po-metallu.html">-Саморезы черные по металлу</a></li>
                        <li><a href="detail-samorezu/samorezu-s-pressshaiboi-first.html">-Саморезы с прессшайбой, цинк, наконечник-острый 1</a></li>
                        <li><a href="detail-samorezu/samorezu-s-pressshaiboi-second.html">-Саморезы с прессшайбой, цинк, наконечник-острый 2</a></li>
                        <li><a href="detail-samorezu/samorezu-zheltie-po-derevy.html">-Саморезы желтые по дереву</a></li>
                        <li><a href="/detail-samorezu/samorezu-zheltie-universalnie.html">-Саморезы желтые универсальные</a></li>
                        <li><a href="detail-samorezu/samorezu-krovelnie-cunk.html">-Саморезы кровельные, цинк</a></li>
                        <li><a href="detail-samorezu/samorezu-okonnie-zheltie.html">-Саморезы оконные, желтые</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>   
         <nobr><li><a href="Monolit(price).xlsx" download="Monolit(price).xlsx" style="color: #2BBBAD">Скачать прайс</a></nobr>
           
        </li>   
        
    </ul>
</nav>



<input class="open" id="top-box" type="checkbox" hidden>
       <label class="btn" for="top-box" title="Наше местоположение на карте"></label>
        <div class="top-panel">
             
            <div class="mapmap">
               <iframe src="https://yandex.ru/map-widget/v1/-/CBBmNOQAdA"  frameborder="1" allowfullscreen="true"></iframe>


                
            </div>
        </div>




<div id="phrase"> <br> <br>
	<div id="f-phrase" style="text-align: center; text-decoration: underline;"><h2>Ваша заявка успешно отправлена</h2></div>
	<div id="s-phrase" style="text-align: center; text-decoration: underline;"><h3>В скором времени наши менеджеры свяжутся с вами</h3></div> <br> <br>
</div>








<br>
<div class="Container Product-header">
    <h4>Пока заявка обрабатывается обратите внимание на другие товары</h4>
    <p>Нажмите "Подробно" для детального просмотра основных категорий</p>
</div>
<div class="Products Container">
    <article class="Product">
        <a class="Product__Link" href="ugolki.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/u1.jpg" alt="product1">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Уголки</h2>
                <span class="Product__Price Color_pink">11 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="oporu.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/o4.jpg" alt="product2">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Опоры</h2>
                <span class="Product__Price Color_pink">9 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="plastinu.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/p1.jpg" alt="product3">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Пластины</h2>
                <span class="Product__Price Color_pink">3 вида</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="lentu.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/l5.jpg" alt="product4">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Ленты</h2>
                <span class="Product__Price Color_pink">6 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="ankeru.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/a1.jpg" alt="product5">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Анкеры</h2>
                <span class="Product__Price Color_pink">1 вид</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="krepeju.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/k5.jpg" alt="product6">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Крепежи</h2>
                <span class="Product__Price Color_pink">20 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="fixators.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/f5.jpeg" alt="product7">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Фиксаторы</h2>
                <span class="Product__Price Color_pink">6 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="samorezu.html">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/s5.jpg" alt="product8">
                <div class="Product__AddBtn">
                    <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                    Подробно
                </div>
            </div>
            <div class="Product__Info">
                <h2 class="Product__Name">Саморезы</h2>
                <span class="Product__Price Color_pink">8 видов</span>
            </div>
        </a>
    </article>
</div>
<div class="Container Single-button">
    <a href="products.html">
        <div class="ArrowButton Button">Показать все товары
            <span class="Arrow1"></span>
            <span class="Arrow2"></span>
        </div>
    </a>
</div>
<div class="Features ContainerW">
    <div class="Container RowFeatures">
        <div class="FeatureBox">
            <div><img src="img/feature-pic1.png" alt="feature1"></div>
            <h3>Доставка</h3>
            <p>Доставка курьерской службой СДЭК,<br>или другим удобным для вас способом<br>при заполнении формы обратной связи.</p>
        </div>
        <div class="FeatureBox">
            <div class="Pic"><img src="img/feature-pic2.png" alt="feature2"></div>
<h3>Дисконты/Акции</h3>
                <p>Скидки для постоянных клиентов.</p>

        </div>
        <div class="FeatureBox">
            <div class="Pic"><img src="img/feature-pic3.png" alt="feature3"></div>

             <h3>Гарантия качества</h3>
                <p> Высокое качество представленной продукции.
    Быстрое и качественное обслуживание. <br>
    По желанию доставка в удобное для Вас время.</p>

        </div>
    </div>
</div>

</div>
<div class="FooterMenu Container">
    <div class="Col L1">
        <a class="Logo" href="index.html">
            <!--<img class="Logo__Image" src="img/logo.png" alt="logo">-->
            <span class="Logo__Text Logo__Text_color_black">М
                <span class="Logo__Text_color_pink_bold">онолит</span>
                
            </span>
        </a>
        <p>Наша компания является одной из крупных организаций по продаже строительного крепежа. <br>
Основными направлениями являются производство и реализация крепежных изделий. <br>
В наши задачи входит поддержание широкого ассортимента и обязательного наличия на складе. <br>

Гибкая система скидок и индивидуальный подход к каждому клиенту располагает к длительному совместному сотрудничеству. <br>

 
</p>
    </div>
    <nav class="Col L2">
        <div class="Head">
            Монолит
        </div>
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="#">Магазин</a></li>
            <li><a href="#">О Нас</a></li>
            <li><a href="#">Как мы работаем</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <nav class="Col L3">
        <div class="Head">
            Информация
        </div>
        <ul>
            <li><a href="#">Provacy Policy</a></li>
            <li><a href="#">Как связаться?</a></li>
            <li><a href="#">Как купить?</a></li>
        </ul>
    </nav>
    <nav class="Col L4">
        <div class="Head">
            Категории
        </div>
        <ul>
            <li><a href="ugolki.html">Уголки</a></li>
            <li><a href="oporu.html">Опоры</a></li>
            <li><a href="plastinu.html">Пластины</a></li>
            <li><a href="products.html" style="text-decoration: underline;">Показать все</a></li>
            <li><a href="Monolit(price).xlsx" download="Monolit(price).xlsx" style="color: #2BBBAD; text-decoration: underline;">Скачать прайс</a></li>
        </ul>
            
            
    </nav>
</div>

<!-- Rating@Mail.ru logo -->
<a href="https://top.mail.ru/jump?from=3063002">
<img src="//top-fwz1.mail.ru/counter?id=3063002;t=612;l=1" 
style="border:0;" height="40" width="88" alt="Рейтинг@Mail.ru" /></a>
<!-- //Rating@Mail.ru logo -->


<footer class="Footer">
    <div class="Container">
        <p>&copy; 2018 Monolit All Rights Reserved.</p>
        
    </div>

    <!-- Rating@Mail.ru counter -->

</footer>
</body>



</html>
