<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuscripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarifa Suscripciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
    <script type="text/javascript">
        // <![CDATA[
        var meta = document.createElement('meta');
        meta.setAttribute("property", "og:url");
        meta.setAttribute("content", location.href);
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(meta);
        // ]]>
    </script>

    <link rel="stylesheet" href="/css/d737340.css" type="text/css"/>

    </style>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3" style="padding-right:0;">
                    <a class="logo2 center-block hidden-sm hidden-xs" href="/" ></a>
                    <a class="logo3 center-block visible-sm" href="/" ></a>
                </div>
                <div class="col-lg-9 ">
                    <nav class="navbar" role="navigation" style="margin-bottom:0;" >
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header visible-xs">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo2" href="/"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        
                        <!-- /.navbar-collapse -->
                        <!-- /.container -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
        $(document).ready(function () {
            $(".dropdown").mouseenter(function (event) {
                $(this).addClass('open');
            });
            $(".dropdown").mouseleave(function () {
                $(this).removeClass("open");
            });

            $(".caret-down-mobil").click(function (event) {
                var dropdown = $(this).closest('.dropdown');
                $(".dropdown .caret-down-mobil>i").removeClass('fa-caret-up');
                $(".dropdown .caret-down-mobil>i").addClass('fa-caret-down');
                $(".dropdown").removeClass('open');
                if (!dropdown.hasClass('open')) {
                    $("i", this).removeClass('fa-caret-down');
                    $("i", this).addClass('fa-caret-up');
                    dropdown.addClass('open');
                }
                event.stopPropagation();
            });

            $(".select-langue").change(function () {
                $(location).attr('href', $(this).val());
            });

            /*$(".dropdown>a").click(function(event){
             $(location).attr('href',$(this).attr('href'));
             });
         
             $(".dropdown-menu>.row>div").click(function(event){
             $(location).attr('href',$("a",this).attr('href'));
             });*/
        })
    </script>

    <main id="content" class="pricehead" role="main">
        <div class="container container-price-table">

            <div class='row-title'>
            </div>
            <div class='row-switch'>
                <div class='cell-switch'>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="switch" value="mensual" id="one">
                        <label for="one" class="switch-label switch-label-off">mensual</label>
                        <input type="radio" class="switch-input" name="switch" value="anual " id="two" checked>
                        <label for="two" class="switch-label switch-label-on">anual </label>
                        <span class="slider"></span>
                    </div>
                </div>
            </div>

            <div class="plans col-lg-9 col-md-11 col-sm-7 col-xs-12">
                <div class="col-md-3 col-sm-12 plan round-left" style="background-color:rgba(255, 255, 255, 0.55);">
                    <p class="plan-title price_hidden">FREE</p>
                    <p class="plan-price"><span class="price_hidden plan-price-currency">.</span><span class="plan-price-amount">FREE</span><span class="price_hidden plan-unit">.</span><span class="price_hidden plan-unit-bis"> .</span></p>
                    <a href="/registro/" class="plan-button">Suscribase</a>
                    <p class="desc-plan">150 Respuestas / Mes</p>
                    <p class="desc-plan">0 Emails / Mes</p>
                    <ul class="plan-features round-left">
                        <li class="plan-feature plan-feature-users">1 Usuario</li>
                        <li class="plan-feature">Encuestas ilimitadas</li>
                        <li class="plan-feature">Preguntas ilimitadas</li>
                        <li class="plan-feature">Respuestas actualizadas en tiempo real</li>
                        <li class="plan-feature">Informes automaticos</li>
                        <li class="plan-feature">Exportacion de datos</li>
                        <li class="plan-feature plan-feature-details text-center" style="border-bottom-left-radius:10px;"><div><a href="/registro-estudiantes/">Estudiante? Clic aqui</a></div></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-12 plan plan-pro" style="border-left: none;">
                    <p class="plan-title">PRO</p>
                    <p class="plan-price"><span class="plan-price-currency">$</span><span class="plan-price-amount-pro">19</span><span class="plan-price-per-month">/ Mes</span><span class="plan-unit">anual </span><span class="plan-unit-bis plan-unit-bis-per-month" style="display: none;"></span><span class="plan-unit-bis plan-unit-bis-annual">Facturacion anual  228$</span></p>
                    <a href="/registro-trial/" class="plan-button">14 dias gratis</a>
                    <p class="desc-plan">Respuestas Ilimitadas</p>
                    <p class="desc-plan">2 000 Emails / Mes</p>
                    <ul class="plan-features">
                        <li class="plan-feature plan-feature-users">1 Usuario</li>
                        <li class="plan-feature text-capitalize">Funcionalidades FREE</li>
                        <li class="plan-feature">+ Diseno a medida
                        </li>
                        <li class="plan-feature">+ Cuestionarios dinamicos</li>
                        <li class="plan-feature">+ Analisis de datos</li>
                        <li class="plan-feature">+ Soporte en linea</li>
                        <li class="plan-feature plan-feature-details text-center" style="margin-bottom: -1px;"><div><a href="/funcion-de-lista/">Lista completa de caracteristicas aqui</a></div></li>
                    </ul>
<!--                    <div class="col-sm-12 text-center">
                        <p class="account_upgrade"> ¿Ya es cliente?<a href="http://www.evalandgo.es/payment/annual/9/"> Suscribase </a></p>
                    </div>-->
                </div>


                <div class="col-md-3 col-sm-12 plan plan-opti round-left round-right" style="margin-top:-15px;">
                    <p class="plan-title plan-opti-title">PRO+</p>
                    <p class="plan-price plan-opti-price"><span class="plan-price-currency">$</span><span class="plan-price-amount-pro-plus">39</span><span class="plan-price-per-month">/ Mes </span><span class="plan-unit">anual </span><span class="plan-unit-bis plan-unit-bis-per-month" style="display: none;"></span><span class="plan-unit-bis plan-unit-bis-annual"> Facturacion anual  468$ </span></p>
                    <a href="/registro-trial/" class="plan-button plan-opti-button">14 dias gratis</a>
                    <p class="desc-plan">Respuestas Ilimitadas</p>
                    <p class="desc-plan" style="margin: 0 0 11px;">10 000 Emails / Mes</p>
                    <ul class="plan-features" style="height:223px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
                        <li class="plan-feature plan-feature-users plan-feature-users-opti">1 Usuario</li>
                        <li class="plan-feature text-capitalize">Funcionalidades PRO</li>
                        <li class="plan-feature" style="padding-bottom:2px">+ Opciones avanzadas <br>Multilingue, cuotas, agrupaciones...</li>
                        <li class="plan-feature">+ Informes dinamicos</li>
                        <li class="plan-feature plan-feature-details plan-feature-details-opti text-center"><div><a href="/funcion-de-lista/">Lista completa de caracteristicas aqui</a></div></li>
                    </ul>
                    <!--<p class="account_upgrade_opti"> ¿Ya es cliente? <a href="http://www.evalandgo.es/payment/annual/10/"> Suscribase </a></p>-->
                </div>


                <div class="col-md-3 col-sm-12 plan round-right">
                    <p class="plan-title">Empresa</p>
                    <p class="plan-price"><span class="plan-price-currency">$</span><span class="plan-price-amount">990</span> <span class="plan-unit">anual </span><span class="price_hidden plan-unit-bis"> . </span></p>
                    <a href="/contact/" class="plan-button">contactenos</a>
                    <p class="desc-plan">Respuestas Ilimitadas</p>
                    <p class="desc-plan">30 000 Emails / Mes</p>
                    <ul class="plan-features round-right">
                        <li class="plan-feature plan-feature-users">3 Usuarios</li>
                        <li class="plan-feature text-capitalize">Funcionalidades PRO+</li>
                        <li class="plan-feature">+ Trabajo en equipo</li>
                        <li class="plan-feature">+ Un webinario de dos horas con un experto</li>
                        <li class="plan-feature">+ Diseno personalizado</li>
                        <li class="plan-feature">+ Marca blanca</li>
                        <li class="plan-feature plan-feature-details text-center" style="border-bottom-right-radius:10px; margin-bottom: 0"><div><a href="http://localhost/encuestas/web/index.php?r=site%2Fcontact">Contactenos para una cotizacion personalizada</a></div></li>
                    </ul>
                </div>
            </div>

            <div class='row-title'>

            </div>
        </div>


            <script>
            var url = $(location).attr('href');

            if (url.indexOf(".pt") >= 0) {
                $(".plan-feature-details a").first().html(".").addClass("price_hidden");
            }

            $(".switch-input").change(function () {
                var typePlan = $(".switch-input:checked").val();
                var id = $(".switch-input:checked").attr('id');
                $(".plan-opti .plan-unit, .plan-pro .plan-unit").html(typePlan);

                if (id == "one") {
                    $(".plan-price-amount-pro-plus").html(49);
                    $(".plan-price-amount-pro").html(29);
                    $(".plan-pro .account_upgrade a").attr("href", Routing.generate('redirection_payment', {type: "monthly", pack: "9"}));
                    $(".plan-opti .account_upgrade_opti a").attr("href", Routing.generate('redirection_payment', {type: "monthly", pack: "10"}));
                    $(".plan-unit-bis-annual").hide();
                    $(".plan-unit-bis-per-month").show();

                }
                if (id == "two") {
                    $(".plan-price-amount-pro-plus").html(39);
                    $(".plan-price-amount-pro").html(19);
                    $(".plan-pro .account_upgrade a").attr("href", Routing.generate('redirection_payment', {type: "annual", pack: "9"}));
                    $(".plan-opti .account_upgrade_opti a").attr("href", Routing.generate('redirection_payment', {type: "annual", pack: "10"}));
                    $(".plan-unit-bis-per-month").hide();
                    $(".plan-unit-bis-annual").show();
                }
            });

            $('#page_pricing_redirect_per_month').click(function (event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 'middle');
                $(".switch-label-off").trigger('click');
            });
        </script>

    </main>

    <!--botones free y prueba gratis-->
    <div class="content-section-c" style="position:relative; overflow: hidden;">
        <div class="clock-svg2"></div>
        <div class="container">
            <div class="row group-account">
                <div class="col-sm-12">
                    <div class="row">
                        <h3 style="font-size:42px; font-weight: bold; margin-bottom:60px;">¡Usted tambien comienza su encuesta ahora!<br/><small style="color:white;font-size:32px;"> ¡Esto le llevara solamente algunos segundos!</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 ">
                            <div class="col-sm-6 text-center">
                                <a href="/cliente/create" class="btn btn-lg btn-block btn-danger pro-free">
                                    Abre une cuenta FREE
                                </a> 
                                <div class="text-account">
                                    Gratis - Funciones basicas
                                </div> 
                            </div>
                            <div class="col-sm-6 text-center">
                                <a href="/cliente/create" class="btn btn-lg btn-block btn-primary pro-plus">
                                    Abra una cuenta PRO
                                </a>
                                <div class="text-account">
                                    14 dias de prueba gratuita
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </div>






    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
            google.load("feeds", "1");

            function initialize() {

                var trunc = function (str) {
                    var n = 45;
                    return str.substr(0, n - 1) + ((str.length > n) ? '...' : '');
                };


                var locale = 'es';
                var url = '';

                if (locale === 'fr') {
                    url = 'fr/blog/feed/rss'
                } else {
                    url = 'blog/feed/rss'
                }

                var url = "http://help.evalandgo.com/" + url;

                var feed = new google.feeds.Feed(url);
                feed.setNumEntries(4);
                feed.load(function (result) {
                    var $container = $("#feed");
                    if (!result.error) {
                        for (var i = 0; i < result.feed.entries.length; i++) {
                            var entry = result.feed.entries[i];
                            var $entry = $("<li></li>").addClass('menu-item blog-entry');

                            var $link = $('<a>', {
                                text: trunc(entry.title),
                                href: entry.link,
                                target: '_blank'
                            });

                            $entry.append($link);
                            $container.append($entry);
                        }
                    }
                    if ($container.children().length === 0) {
                        $('#blog_no_article').show();
                        $(".info-blog").hide();
                    }
                });
            }
            google.setOnLoadCallback(initialize);
    </script>
    <div id="js_footer">

        <script>
            var code;
            code = 'UA-35222014-1';

            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', code, 'auto');
            ga('require', 'displayfeatures');
            ga('require', 'linkid', 'linkid.js');
            ga('send', 'pageview');

        </script>
        <!-- Code Google de la balise de remarketing -->
        <!--------------------------------------------------
        Les balises de remarketing ne peuvent pas être associées aux informations personnelles ou placées sur des pages liées aux catégories à caractère sensible. Pour comprendre et savoir comment configurer la balise, rendez-vous sur la page http://google.com/ads/remarketingsetup.
        --------------------------------------------------->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 953656728;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953656728/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>                    <script type="text/javascript" src="/js/c90dbe6.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    </div>
</body>
</html> 	