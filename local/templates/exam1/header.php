<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.css"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js"); ?>
    <? $APPLICATION->AddHeadString(
        '<link rel="icon" type="image/vnd.microsoft.icon"  href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico">'
    ); ?>
    <? $APPLICATION->AddHeadString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico">'); ?>
    <? $APPLICATION->ShowHead(); ?>
</head>

<body>
<? $APPLICATION->ShowPanel();
$date = date("H");

if ($date >= 9 && $date <= 18) {
    $contactDate = '<a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>';
} else {
    $contactDate = '<a href="mailto:ilya.yakusheff@yandex.ru" class="phone">ilya.yakusheff@yandex.ru</a>';
}
?>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="/index.php" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <?= $contactDate; ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_exam1", 
	array(
		"FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "/login/?register=yes",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_exam1"
	),
	false
);?>

            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu_exam1", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

    <!-- /nav -->
    <? if ($APPLICATION->GetCurPage(true) != "/index.php") { ?>
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
       
    <? } ?>
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <? if ($APPLICATION->GetCurPage(true) != "/index.php") { ?>
                        <header>
                            <h1><? $APPLICATION->ShowTitle("/"); ?></h1>
                        </header>
                        <hr>
                    <? } ?>
                    <? if ($APPLICATION->GetCurPage(true) == "/index.php") { ?>
                        <p>Если вы используете базовую редакцию продукта - «Компания», то можете перейти на редакцию
                            «Совместная работа», и ваш портал приобретет все возможности для осуществления
                            горизонтальных коммуникаций и управлению Экстранетом.
                            Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах,
                            вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал,
                            проводить внутри компании видеоконференции
                            и делать многое другое.</p>
                        <p>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого
                            перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся
                            возможности визуального проектирования бизнес-процессов
                            и управления списками, включая списки в рабочих группах. Кроме того, вы сможете
                            анализировать посещаемость своего портала</p>
                        <p>При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново.
                            С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи
                            разработчиков.</p>
                        <h2>Выставка новых образцов</h2>
                        <hr>
                        <div class="article-text-block">
                            <figure class="pic-block">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/pic01.jpg" alt="">
                            </figure>
                            <p>Ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и
                                управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над
                                проектами в рабочих группах, вести учет и планирование
                                времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри
                                компании видеоконференции и делать многое другое.</p>
                            <h3>Заголовок</h3>
                            <p><i>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого
                                    перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся
                                    возможности визуального проектирования бизнес-процессов и управления списками,
                                    включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость
                                    своего портала</i>
                            </p>
                            <p><span class="att-text">При переходе вся информация на портале сохранится.</span>
                                <br>Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы
                                получите новые модули продукта и установите их без помощи разработчиков.</p>
                        </div>
                    <? } ?>

