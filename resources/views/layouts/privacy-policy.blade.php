
@extends('index')

@section('content')
<!-- 1 -->
 <link rel="stylesheet" href="/temple/css/privacy-policy.css">

    <title>Privacy & Cookies | {{$settings->project_name}}</title>
<main id="chrome-app-container">
    <section class="mu-section">
        <div class="header">
            <div class="header__titleWrap">
                <h1 class="header__title" style="color:#000000; ">
                    Конфиденциальностьи cookie-файлы: наши обещания
                </h1>
            </div>
            <div class="header__copyWrap">
                <p class="header__copy" style="color:#000000; ">
                    Мы всегда будем заботиться о безопасности и защищенности ваших данных. Мы вам расскажем, зачем нам нужны ваши данные и как мы будем их использовать. </p>
            </div>
        </div>
    </section>

    <section class="grid">
        <section class="grid-row">
            <section class="grid-column grid-column__width--1 grid-column__position--1">
                <section class="grid-text grid-text__position--center-middle">
                    <section class="grid-text__container">
                        <h2 class="grid-text__title " style="color: #000000; ">
                            1.&nbsp;Торжественноклянемся </h2>
                        <p class="grid-text__copy " style="color: #000000;">
                            Использовать твои данные лишь для того, чтобы сделать взаимодействие снашим сайтом более удобным.
                        </p>
                    </section>
                </section>
            </section>
        </section>
        <section class="grid-row">
            <section class="grid-column grid-column__width--1 grid-column__position--1">
                <section class="grid-text grid-text__position--center-middle">
                    <section class="grid-text__container">
                        <h2 class="grid-text__title " style="color: #000000; ">
                            2. Гарантируем </h2>
                        <p class="grid-text__copy " style="color: #000000;">
                            Мы будем защищать твои данные как наши собственные.
                        </p>
                    </section>
                </section>
            </section>
        </section>
        <section class="grid-row">
            <section class="grid-column grid-column__width--1 grid-column__position--1">
                <section class="grid-text grid-text__position--center-middle">
                    <section class="grid-text__container">
                        <h2 class="grid-text__title " style="color: #000000; ">
                            3. Общение </h2>
                        <p class="grid-text__copy " style="color: #000000;">
                            Мы всегда будем говорить с тобой на твоём языке — все четко и ясно, безсюрпризов.
                        </p>
                    </section>
                </section>
            </section>
        </section>
        <section class="grid-row">
            <section class="grid-column grid-column__width--1 grid-column__position--1">
                <section class="grid-text grid-text__position--center-middle">
                    <section class="grid-text__container">
                        <h2 class="grid-text__title " style="color: #000000; ">
                            4. Никакого спама </h2>
                        <p class="grid-text__copy " style="color: #000000;">
                            Ты решаешь, как и о чем мы тебя информируем.
                        </p>
                    </section>
                </section>
            </section>
        </section>
        <section class="grid-row">
            <section class="grid-column grid-column__width--1 grid-column__position--1">
                <section class="grid-text grid-text__position--center-middle">
                    <section class="grid-text__container">
                        <h2 class="grid-text__title " style="color: #000000; ">
                            5.&nbsp;Тольконеобходимое </h2>
                        <p class="grid-text__copy " style="color: #000000;">
                            Твои данные не будут лежать у нас без причины — если они нам не нужны,мы их удалим.
                        </p>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <section class="mu-section">
        <article class="accordion">
            <p><strong>
                </strong>
            </p>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px;">
                <h2 class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px; text-align: left;"><span style="font-size: 12pt; font-weight: bold; text-align: left; color: windowtext;">Защищая твою конфиденциальность&nbsp;</span></h2>
                <p class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px; text-align: left;">&nbsp;</p>
            </div>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px;">
                <p class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px; text-align: justify;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">В компании {{$settings->project_name}} мы всеми силами стремимся защитить твою конфиденциальность и безопасность. Мы также являются клиентами {{$settings->project_name}}, поэтому полностью осознаем, насколько важна конфиденциальность, и подходим к ее защите очень ответственно.</span></p>
            </div>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px;">
                <p class="Paragraph SCXW46386387 BCX0" style="font-family: 'Segoe UI', 'Segoe UI Web', Arial, Verdana, sans-serif; color: windowtext; background-color: transparent; margin: 0px; padding: 0px; text-align: justify;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><span class="NormalTextRun SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;">Для всех сервисов компании {{$settings->project_name}} контроллером данных — компанией, которая отвечает за защиту твоей конфиденциальности, — выступает компания {{$settings->project_name}}.com&nbsp;</span><span class="SpellingError SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px; border-bottom: 1px solid transparent;">Limited</span><span class="NormalTextRun SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;">.</span></span></p>
                <h3 class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px; text-align: justify;"><span class="NormalTextRun SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br>
                        </span></span></h3>
            </div>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px;">
                <h3 class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-weight: bold; font-family: Calibri, Calibri_MSFontService, sans-serif;">Навигация по этой странице</span></h3>
            </div>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px; font-family: 'Segoe UI', 'Segoe UI Web', Arial, Verdana, sans-serif;">
                <p class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px 0px 0px 18px; padding: 0px;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Как мы используем твои данные</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Кому мы передаем твои данные</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Маркетинговые сообщения</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Отображение рекламы {{$settings->project_name}} онлайн</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Твои данные и страны за пределами Европы</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Хранение данных</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Твои права</span><span class="LineBreakBlob BlobObject DragDrop SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><br class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    </span><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">• Изменения относительно защиты твоей конфиденциальности</span></p>
            </div>
            <div class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px; padding: 0px; font-size: 12px; font-family: 'Segoe UI', 'Segoe UI Web', Arial, Verdana, sans-serif;">
                <p class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px 0px 0px 18px; padding: 0px;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;"><span class="NormalTextRun SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;">•&nbsp;</span><span class="SpellingError SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px; border-bottom: 1px solid transparent;">Cookie</span><span class="NormalTextRun SCXW46386387 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;">-файлы</span></span></p>
            </div>
            <div class="SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12px; font-family: 'Segoe UI', 'Segoe UI Web', Arial, Verdana, sans-serif;">
                <div class="ListContainerWrapper SCXW46386387 BCX0" style="margin: 0px; padding: 0px;">
                    <ul class="BulletListStyle1 SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-family: verdana;">
                        <li class="OutlineElement Ltr BCX0 SCXW46386387" style="margin: 0px 0px 0px 19px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, 'Times New Roman', sans-serif;">
                            <p class="Paragraph SCXW46386387 BCX0" style="color: windowtext; background-color: transparent; margin: 0px; padding: 0px;"><span class="TextRun SCXW46386387 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-family: Calibri, Calibri_MSFontService, sans-serif;">&nbsp;Связаться с нами</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <p></p>
            <dl aria-label="Accordion Control Button Group">
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-fa3f948b-9d3b-49d0-b0bf-05db3ef961bf" aria-expanded="false" id="accordion-control-fa3f948b-9d3b-49d0-b0bf-05db3ef961bf">
                        Как мы используем твои данные
                    </button>
                </dt>
                <dd id="accordion-content-fa3f948b-9d3b-49d0-b0bf-05db3ef961bf" aria-hidden="true" style="display: none;">
                    <p>Мы используем твою информацию разными способами: наши действия зависят от характера этих данных и целей их сбора. В таблице ниже подробно указано, что мы делаем и зачем. </p>
                    <p><span data-contrast="none" class="TextRun SCXW147490547 BCX0" style="margin: 0px; padding: 0px; font-size: 12pt; font-weight: bold; text-align: justify; font-family: Calibri, Calibri_MSFontService, sans-serif;"><span class="NormalTextRun SCXW147490547 BCX0" style="background-color: inherit; margin: 0px; padding: 0px;">Твои личные данные, такие как имя, дата рождения, пол, адрес, адрес электронной почты, имя пользователя социальной сети, ник и номер телефона.</span></span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения закона)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Определяем, что это ты, когда ты заходишь на наш сайт или связываешься с нами </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Проверка твоей личности помогает нам защитить твои данные от мошенников </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">По закону мы должны это делать, и это также важно для нас</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Доставляем тебе заказы</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Будет непросто отправить тебе заказ без имени и контактных данных. </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отправляем тебе сообщения по поводу твоего личного кабинета и наших услуг, например, изменения наших Правил и условий и подтверждения заказов</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы держать тебя в курсе любых изменений в предоставлении услуг {{$settings->project_name}}</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">По закону мы должны это делать, это важная часть наших договорных обязательств перед тобой, кроме того, для нас также важно держать тебя в курсе происходящего</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отправляем тебе сообщения по поводу заказа по смс, электронной почте или через наше приложение </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы быть в курсе, когда придет твой заказ </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Управляем процессом твоего участия в акциях, специальных предложениях или скидочных схемах, в которых ты участвуешь </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы тебе приходили скидки или предложения, которые могут тебе пригодиться, например, Студенческие скидки</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы будем рассматривать это как важную часть наших договорных обязательств, если ты хочешь участвовать в подобных акциях</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Направляем тебя на нужный раздел нашего сайта </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы быстрее показать тебе вещи, которые ты хочешь найти</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно, чтобы ты получил(-а) максимум от покупок в {{$settings->project_name}}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отправляем тебе информацию о наших товарах и услугах</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы хотим держать тебя в курсе событий, чтобы ты мог(-ла) получить самые лучшие товары и услуги </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin: 0cm 5.65pt 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Ты можешь выбрать, какие сообщения ты хочешь получать от нас, и для нас также важно рассказать тебе о наших лучших продуктах и услугах. </span></p>
                                    <p style="margin: 0cm 5.65pt 0.0001pt;">&nbsp;</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Твой размер и тип телосложения (если ты их укажешь)</span></strong></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения права)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы прибегаем к помощи сторонней компании, чтобы составлять рекомендации по товарам, предлагать размеры и сочетания одежды</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы хотим, чтобы тебе понравились сделанные у нас покупки </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно, чтобы наши клиенты всегда могли найти то, что нужно</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Твоя платежная информация</span></strong></p>
                    <p style="margin-left: 35.45pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это выбранный тобой метод оплаты, например, данные твоей карты (не волнуйся, мы не сохраняем код безопасности) </span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения права)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Принимаем платежи и делаем возвраты</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">В конце концов, мы не можем раздавать все наши товары просто так! </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важно для нас, и это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Ведем учет всех платежных операций с тобой</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Нам нужно знать, за что было заплачено (и мы должны сообщить налоговому агенту о своем доходе) </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы обязаны это делать по закону</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">История нашего общения с тобой </span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Что было сообщено нам, например, по электронной почте, через мессенджер, в социальных сетях или в личных сообщениях. Мы записываем также звонки в Службу поддержи, если ты связываешься с нами по телефону.</span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения закона)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Обеспечиваем поддержку и обслуживание клиентов</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Ты же ожидаешь от нашего обслуживания только лучшее!</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная составляющая нашей работы, а также часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Улучшаем предоставляемые тебе обслуживание и поддержку</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы тебе понравилось наше обслуживание!</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно обучать наших сотрудников</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">История покупок, поисков и сохраненных товаров</span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Вещи, которые ты уже приобрел(-а), искал(-а) (в том числе с использованием функции «Поиска по изображению»), сохранил(-а) или добавил(-а) в «Вишлист», а также вещи, о появлении в наличии которых ты попросил(-а) сообщить.</span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения права)</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height: 68.8pt;">
                                <td valign="top" style="height: 68.8pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Помогаем тебе отслеживать понравившиеся вещи, сообщаем о новой доставке и даем возможность рассказать о них</span></p>
                                </td>
                                <td valign="top" style="height: 68.8pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы ты мог быстро увидеть понравившиеся тебе вещи и получить максимум от наших товаров и своего личного кабинета</span></p>
                                </td>
                                <td valign="top" style="height: 68.8pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Зависит от тебя, хочешь ли ты воспользоваться этими сервисами, но мы очень рекомендуем их!</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Работаем с возвратами согласно нашим </span><span><a href="/terms-and-conditions"><span style="font-size: 12pt; font-family: Calibri; color: black;">Правилам и условиям</span></a></span><span style="font-size: 12pt; font-family: Calibri; color: black;"> и предоставляем клиентскую поддержку и обслуживание </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Потому что ты ожидаешь наилучшего обслуживания, а мы не можем сделать возврат, если не знаем, что было куплено! </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Анализируем, какие вещи ты искал(-а), купил(-а) или вернул(-а), и это помогает нам узнать, что тебе нравится. </span></p>
                                    <p style="margin-bottom: 0.0001pt;">&nbsp;</p>
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Что касается «Поиска по изображению»: после того, как мы показали тебе результаты поиска, мы храним фотографию в течение одного месяца отдельно от всех других идентифицирующих тебя данных.</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы показывать тебе то, что тебе понравится, предоставлять наилучшее обслуживание и быть впереди конкурентов. </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно знать твои предпочтения. </span></p>
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;">&nbsp;</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы соотносим твои покупки со ссылками сторонних партнеров, которые могли привести тебя на {{$settings->project_name}} или прорекламировали отдельный продукт, когда ты посещал(-а) их сайт. Мы предоставляем им информацию о соответствующей покупке, чтобы они знали, когда их ссылка сработала.</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">У нас есть несколько представителей, которые направляют к нам новых клиентов или рекламируют наши товары на своих сайтах</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно генерировать новых <br>
                                            клиентов через различные источники</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-left: 35.45pt; text-align: justify;"><strong><span style="font-size: 10.5pt; font-family: Helvetica, sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Информация о твоем телефоне или ноутбуке и о том, как ты используешь наш сайт и приложение</span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Данные, собираемые при твоем просмотре нашего сайта или использовании приложения, в том числе твой IP-адрес и тип устройства, и то, как ты используешь наш сайт и приложение (например, какие страницы ты посещаешь или какие продукты просматриваешь), а также данные о твоем местонахождении (если ты поделишься ими).</span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения права)</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height: 55.7pt;">
                                <td valign="top" style="height: 55.7pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Определяем, что это ты, когда ты заходишь на наш сайт </span></p>
                                </td>
                                <td valign="top" style="height: 55.7pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Если мы помним тебя, мы можем обеспечить наилучшее обслуживание. </span></p>
                                </td>
                                <td valign="top" style="height: 55.7pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно, чтобы ты получил(-а) наилучшее обслуживание </span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Улучшаем наш сайт и настраиваем для тебя опции по умолчанию (например, язык и валюту)</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важно для нас, и гораздо проще для тебя, если мы знаем твой язык и предпочитаемую валюту, и это также помогает нам защитить твою информацию</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно, чтобы ты получил(-а) наилучшее обслуживание </span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отправляем тебе информацию о наших товарах и услугах</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы хотим держать тебя в курсе событий и помогать в поиске нужных вещей.  </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно показать тебе вещи, которые могут тебе понравится, и тем самым улучшить обслуживание </span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Показываем тебе рекламу {{$settings->project_name}}, когда ты гуляешь по сети</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы ты мог(-ла) увидеть наши новинки и предложения, которые могут тебя заинтересовать</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно показать тебе вещи, которые могут тебя заинтересовать</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отслеживаем посетителей нашего сайта и анализируем их поведение</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы защитить наш сайт и улучшить обслуживание</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="margin-right: 5.65pt; margin-left: 5.65pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важно для нас, и мы обязаны это делать по закону.</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Информация из социальных сетей или привязанных к нам аккаунтов</span></strong></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем, когда ты привязываешь свои социальные сети или сторонние аккаунты к нашей системе. Мы сохраняем твой ник в социальных сетях, а также другую информацию, которая стала нам доступной согласно настройкам твоего аккаунта в данной социальной сети</span><span style="font-size: 12pt; color: black;">.</span></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения закона)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы разрешаем тебе привязывать аккаунты социальных сетей к личному кабинету {{$settings->project_name}}, чтобы ты мог(-ла) с легкостью входить в него, не создавая еще один аккаунт.</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы тебе было легче пользоваться {{$settings->project_name}} и покупать понравившиеся вещи!</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно, чтобы ты получил(-а) наилучшее обслуживание </span></p>
                                </td>
                            </tr>
                            <tr style="height: 4.1pt;">
                                <td valign="top" style="height: 4.1pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Анализируем твои предпочтения, оставляемые тобой лайки и влияние твоего стиля на поведение других. </span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Это помогает нам улучшить предлагаемые тебе рекомендации, отправлять тебе приглашения на участия в опросах, программах лояльности и других относящихся к индустрии моды мероприятиях. </span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно знать, что тебе нравится,</span><span> чтобы ты получил</span><span> </span><span style="font-size: 12pt; font-family: Calibri; color: black;">лучшее обслуживание</span></p>
                                </td>
                            </tr>
                            <tr style="height: 4.1pt;">
                                <td valign="top" style="height: 4.1pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Предоставляем рекомендации по товарам</span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы вещи, которые могут тебя заинтересовать, сразу попадались тебе на глаза</span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно показать тебе вещи, которые могут тебя заинтересовать</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt; text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Если ты оставляешь комментарии об {{$settings->project_name}}, тэг {{$settings->project_name}} или публикуешь фотографии в своих социальных сетях&nbsp;&nbsp; </span></strong></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36.25pt;">
                        <tbody>
                            <tr style="height: 4.1pt;">
                                <td valign="top" style="height: 4.1pt; width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения закона)</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height: 4.1pt;">
                                <td valign="top" style="height: 4.1pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Отслеживаем взгляды и мнения наших клиентов </span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Возможно, мы захотим ответить тебе или отреагировать другим образом, в особенности, если тебе что-то не понравилось. </span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно знать, что ты думаешь о нас</span></p>
                                </td>
                            </tr>
                            <tr style="height: 4.1pt;">
                                <td valign="top" style="height: 4.1pt; width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы пользуемся общедоступными источниками информации, чтобы расследовать случаи мошенничества </span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Чтобы предотвратить или обнаружить мошеннические действия против тебя или компании {{$settings->project_name}}, это не самая приятная, но неотъемлемая часть нашей работы</span></p>
                                </td>
                                <td valign="top" style="height: 4.1pt; width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Для нас важно </span><span>защитить наши услуги, защитить тебя и прекратить незаконную </span><span style="font-size: 12pt; font-family: Calibri; color: black;">практику</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-left: 35.45pt;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Твои ответы на опросы, отзывы и конкурсы </span></strong></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения закона)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Время от времени мы просим оставить отзывы о наших товарах или о нашей работе. Как правило, ответы анонимны, но может случиться так, что мы напрямую попросим тебя ответить, например, если ты упомянул(-а), что тебе что-то не понравилось </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Имеет смысл время от времени проверять, насколько ты доволен(-льна) нашими услугами и покупками, и мы можем использовать эту информацию для улучшения нашего обслуживания. </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Ты решаешь, принимать ли в этом участие, лично. </span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Проводим конкурсы, в которых ты решил(-а) поучаствовать, и раздаем призы победителям. При регистрации в конкурсе мы сообщим тебе о том, как используем твои данные.</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Нам же нужно сообщить тебе, что ты выиграл(-а)!</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Если ты согласишься на участие, мы будем рассматривать это как важное договорное обязательство перед тобой.</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-left: 35.45pt;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Другая идентифицирующая тебя информация </span></strong></p>
                    <table border="0" cellspacing="0" cellpadding="0" width="578" style="width: 433.7pt; margin-left: 36pt;">
                        <tbody>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-style: solid; border-width: 1pt; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Что мы делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Зачем мы это делаем</span></strong></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-left: none; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Почему нам нужно это делать (с точки зрения права)</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">При первой твоей покупке у нас мы присвоим тебе уникальный номер (твой индивидуальный номер клиента)</span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Это позволяет нам идентифицировать тебя </span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="width: 155.9pt; padding: 0cm 5.4pt; border-top: none; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Проверяем твою личность </span></p>
                                </td>
                                <td valign="top" style="width: 150.25pt; padding: 0cm 5.4pt; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Иногда нам нужно проверить твою личность, например, чтобы подтвердить, что заказ был оформлен именно тобой, или в случае, если нам была предоставлена информация, что ты являешься студентом</span></p>
                                </td>
                                <td valign="top" style="width: 127.55pt; padding: 0cm; border-top: none; border-left: none; border-right-style: solid; border-bottom-style: solid; text-align: left;">
                                    <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Это важная часть наших договорных обязательств перед тобой</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Тебе не обязательно предоставлять нам все эти персональные данные, но, если ты этого не сделаешь, у тебя могут возникнуть проблемы с покупкой на сайте, и вряд ли ты сможешь получить оптимальное клиентское обслуживание.&nbsp; Но это твой выбор, и мы его уважаем.</span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы также анонимизируем и обобщаем личные данные (чтобы они тебя не идентифицировали) и используем их в таких целях, как, например, тестирование наших ИТ-систем, исследований, анализа данных, улучшения сайта и приложения и разработки новых продуктов и услуг.</span></p>
                    <p style="text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Предотвращение и обнаружение мошенничества</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы используем все указанные выше категории данных, чтобы идентифицировать, предотвратить или отследить мошеннические действия против тебя или против компании {{$settings->project_name}}. Обнаружение и предотвращение мошенничества — это не самая приятная, но абсолютно необходимая часть нашей работы и наших договорных обязательств перед тобой. По закону мы обязаны это делать, и это важно для нас.</span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы также используем данные об Истории покупок, чтобы защитить наши сервисы и выполнить Условия обслуживания в рамках выполнения наших договорных обязательств перед тобой. В ходе этого мы можем прибегать к сгенерированным компьютером решениям для защиты компании {{$settings->project_name}} и нашего Сервиса. Твои права в отношении данного пункта приведены ниже.</span></p>
                    <p style="text-align: justify;"><strong><span style="font-size: 12pt; font-family: Calibri; color: black;">Персонализация твоего обслуживания в {{$settings->project_name}}</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы используем собираемые нами данные, чтобы предоставить тебе лучшее обслуживание, обеспечить отличный шоппинг и показать новинки и бестселлеры, а также услуги, которые могут тебя заинтересовать. </span></p>
                    <div>
                        <div id="_com_1" language="JavaScript"> </div>
                    </div>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-bd4aca9e-d719-45e6-bc6b-141433a22c3d" aria-expanded="false" id="accordion-control-bd4aca9e-d719-45e6-bc6b-141433a22c3d">
                        Передача твоих данных
                    </button>
                </dt>
                <dd id="accordion-content-bd4aca9e-d719-45e6-bc6b-141433a22c3d" aria-hidden="true" style="display: none;">
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы не продаем и не будем продавать <em>никакие</em> твои персональные данные <em>какой бы то ни было </em>третьей стороне — включая твое имя, адрес, адрес электронной почты или данные кредитной карты. Мы хотим заслужить твое доверие и сохранить его, и считаем, что такое отношение необходимо.</span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">При этом мы передаем твои данные следующим категориям компаний, которые предоставляют услуги, необходимые для обслуживания нами клиентов:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">компаниям группы {{$settings->project_name}}, потому что разные части нашей группы выполняют разные функции; </span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">компаниям, которые помогают тебе в выборе покупок и их доставке или возврате, например, платежные системы, склады, упаковщики и компании по доставке товаров;</span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">поставщикам профессиональных услуг, например, маркетинговым агентствам, рекламным партнерам и хостинговым компаниям, которые помогают нам в ведении бизнеса;</span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">партнерам, которые помогают нам войти в контакт с новыми потенциальными клиентами или прорекламировать наши продукты на их сайтах;</span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">бюро кредитных историй, правоохранительным органам и органам по предотвращению случаев мошенничества (чтобы мы могли помочь в борьбе с мошенническими действиями).</span>
                            <p><span style="font-size: 12pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                            <p><span style="font-size: 12pt; font-family: Calibri; color: black;">Ты можешь воспользоваться дополнительными сервисами, и в этом случае, в зависимости от твоего выбора, для выполнения заказанных услуг мы можем передать твои данные следующим категориям компаний:&nbsp; </span></p>
                        </li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">сайтам социальных сетей (например, если твои аккаунты в социальных сетях связаны с нашим личным кабинетом) и другим одобренным тобой компаниям; </span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">консультантам по размерам и покрою, чтобы помочь тебе выбрать подходящий товар;</span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">продавцам на Marketplace, если заказ был размещен там; </span></li>
                        <li><span style="font-size: 12pt; font-family: Calibri; color: black;">другим сторонним платежным системам, если были выбраны их услуги по оплате.</span></li>
                    </ul>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Если ты бы хотел(-а) узнать больше о сторонних организациях, которым мы можем передавать личные данные, или о том, как они будут использовать твои данные, пожалуйста, свяжись с нами указанным ниже способом. </span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; font-family: Calibri; color: black;">Мы также можем передавать сторонним организациям анонимизированную информацию и аналитические материалы о наших клиентах. Перед передачей данных мы удостоверимся, что по ним невозможно тебя идентифицировать.</span></p>
                    <div> </div>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-a7aede5f-a15a-4090-87fe-0e1758c18138" aria-expanded="false" id="accordion-control-a7aede5f-a15a-4090-87fe-0e1758c18138">
                        Маркетинговые сообщения
                    </button>
                </dt>
                <dd id="accordion-content-a7aede5f-a15a-4090-87fe-0e1758c18138" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">При твоем согласии мы отправим тебе маркетинговые сообщения, чтобы держать тебя в курсе наших действий, а также чтобы помочь тебе в выборе наших товаров и услуг.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><strong><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Как отменить подписку на маркетинговые сообщения от {{$settings->project_name}}</span></strong></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span></span><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;"> твоего личного кабинета {{$settings->project_name}}. Существуют и другие способы:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Электронная почта</span></strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">:Ты можешь нажать «отписаться» в любом маркетинговом электронном сообщении.  </span></li>
                        <li><strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Текстовые сообщения</span></strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">:Ты можешь также отправить сообщение с текстом «stop» по номеру, указанному в контактах.</span></li>
                        <li><strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Любой маркетинговый способ</span></strong><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">:Ты можешь связаться с нашей </span><span><a href="/faq"><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Службой поддержки </span></a></span><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">. Мы обновим настройки и удостоверимся, что ты больше не получаешь маркетинговые сообщения от нас.</span></li>
                    </ul>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Отмена маркетинговых сообщений может занять несколько дней с момента твоего отказа, так как нам необходимо обновить всю систему. Просим тебя проявить терпение.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Обрати внимание, отказ от маркетинговых сообщений не означает прекращения служебных оповещений, таких как обновление заказа или уведомления о появлении запрошенного тобой товара на складе.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">&nbsp;</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><strong><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Как отменить подписку на маркетинговые сообщения от {{$settings->project_name}} Marketplace</span></strong></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">На платформе Marketplace действует отдельная система настройки рекламных рассылок для наших главных сайтов и приложений. Все клиенты {{$settings->project_name}} Marketplace могут подписаться на маркетинговые сообщения от Marketplace и/или определенных сторонних организаций.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Ты можешь отказаться от маркетинговых сообщений Marketplace в разделе My Marketplace &gt; My Details на сайте {{$settings->project_name}} Marketplace или нажать «отписаться» в любом электронном письме от Marketplace.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-00eec5f3-a27e-494f-9962-d9016a2f5b1b" aria-expanded="false" id="accordion-control-00eec5f3-a27e-494f-9962-d9016a2f5b1b">
                        Просмотр рекламы на {{$settings->project_name}}
                    </button>
                </dt>
                <dd id="accordion-content-00eec5f3-a27e-494f-9962-d9016a2f5b1b" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Мы используем онлайн-рекламу, чтобы держать тебя в курсе наших действий и помогать тебе в выборе наших товаров.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Ты можешь видеть рекламу {{$settings->project_name}} на других сайтах и в приложениях, например, в социальных сетях. Мы настраиваем рекламу с помощью различных средств интернет-маркетинга, а также рекламной биржи. Мы используем множество рекламных технологий.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Баннеры и рекламные объявления, которые ты видишь, основаны на имеющейся у нас информации о тебе и твоем предыдущем использовании {{$settings->project_name}} (например, истории поиска {{$settings->project_name}} и контенте, который был просмотрен), а также на баннерах или рекламе {{$settings->project_name}}, на которые ты ранее нажимал(-а). </span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Для получения дополнительной информации о нашем использовании рекламных технологий и cookie-файлов ознакомься с </span><span><a href="/privacy-policy-cookies"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">уведомлением о cookie-файлах</span></a></span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-e72b41db-7aa0-4a22-9576-4f72943bdf55" aria-expanded="false" id="accordion-control-e72b41db-7aa0-4a22-9576-4f72943bdf55">
                        Твои данные и страны за пределами Европы
                    </button>
                </dt>
                <dd id="accordion-content-e72b41db-7aa0-4a22-9576-4f72943bdf55" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">{{$settings->project_name}} — это бизнес мирового уровня, ведущий деятельность как внутри, так и за пределами Соединенного Королевства. Мы сотрудничаем с поставщиками и центрами обработки и исполнения заказов, расположенными по всему миру.&nbsp; В некоторых странах не обеспечивается такой же уровень защиты персональных данных, как в Соединенном Королевстве и ЕС. Однако, прежде чем передать твои персональные данные этим организациям, мы удостоверимся в том, что эта информация и твои права находятся под защитой соответствующих законов о защите данных.&nbsp; Свяжись с нами для получения дополнительной информации о защите передаваемой информации.&nbsp;&nbsp;&nbsp; </span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-5a08bdd9-4653-476a-8b49-c901ca0cf06e" aria-expanded="false" id="accordion-control-5a08bdd9-4653-476a-8b49-c901ca0cf06e">
                        Хранение твоей информации
                    </button>
                </dt>
                <dd id="accordion-content-5a08bdd9-4653-476a-8b49-c901ca0cf06e" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Мы будем хранить твою личную информацию до тех пор, пока ты являешься клиентом {{$settings->project_name}}, а также до тех пор, пока мы обязаны это делать по закону.&nbsp;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Если ты больше не хочешь быть клиентом {{$settings->project_name}}, ты можешь связаться с нашей Службой поддержки и подать заявку о закрытии своего личного кабинета. Однако определенную информацию о тебе мы обязаны хранить, в том числе и после удаления твоего личного кабинета. Мы будем хранить только то, что необходимо, и только то, что предписано законодательными и нормативными требованиями для разрешения споров, предотвращения мошенничества и нарушения прав, а также соблюдения наших Правил и условий.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-4c2f6411-a15b-4359-99da-760ea26b0a5e" aria-expanded="false" id="accordion-control-4c2f6411-a15b-4359-99da-760ea26b0a5e">
                        Твои права
                    </button>
                </dt>
                <dd id="accordion-content-4c2f6411-a15b-4359-99da-760ea26b0a5e" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; margin-left: 21.3pt; text-align: left;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">У тебя есть много различных прав в отношении твоих личных данных: </span></p>
                    <ul style="list-style-type: disc;">
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право на получение информации о том, как используются твои личные данные (как это уведомление, например);</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право на доступ к личным данным, которые мы храним о тебе;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право подать запрос на исправление неточных личных данных, которые мы храним о тебе (хотя большую их часть можно обновить через </span><span style="text-decoration: underline; padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">)</span><span>;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право подать запрос на удаление, прекращение использования или сбора твоих при определенных обстоятельствах;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право на прекращение получения прямых маркетинговых сообщений </span> <span>;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право в любое время отозвать согласие на обработку данных, осуществляемую на основе такового согласия; </span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право сделать запрос на передачу или перенос определенной части твоих данных тебе или стороннему поставщику услуг;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">право попросить нас объяснить любое сгенерированное компьютером решение о тебе;</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Право на подачу жалобы в соответствующий регулирующий орган по защите данных (в Великобритании это Управление Уполномоченного по вопросам информации).</span></li>
                    </ul>
                    <p style="margin-bottom: 0.0001pt; margin-left: 21.3pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Если ты хочешь воспользоваться своими правами, подать жалобу или просто задать вопрос, пожалуйста, свяжись с нами. У нас есть 30 дней, чтобы ответить тебе.&nbsp; Наши контактные данные указаны ниже.&nbsp;&nbsp; </span></p>
                    <div> </div>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-b29a5ede-c0df-47d3-8bb2-4f9cfefc733b" aria-expanded="false" id="accordion-control-b29a5ede-c0df-47d3-8bb2-4f9cfefc733b">
                        Изменения в защите конфиденциальности
                    </button>
                </dt>
                <dd id="accordion-content-b29a5ede-c0df-47d3-8bb2-4f9cfefc733b" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Время от времени на данной странице возможны изменения, отражающие обработку твоих данных.</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Значительные изменения будут отражены на сайте {{$settings->project_name}} или других в службах {{$settings->project_name}}, а также посредством других средств связи, таких как электронная почта. Мы хотим быть уверены, что ты в курсе внесенных изменений.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-02b8f589-d333-4eda-9cbe-4461a770bf9f" aria-expanded="false" id="accordion-control-02b8f589-d333-4eda-9cbe-4461a770bf9f">
                        Cookie-файлы
                    </button>
                </dt>
                <dd id="accordion-content-02b8f589-d333-4eda-9cbe-4461a770bf9f" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Мы используем cookie-файлы на нашем сайте. Для дополнительной информации см. </span><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;"><a href="/privacy-policy-cookies/">уведомление о cookie-файлах</a>.</span></p>
                    <p>&nbsp;</p>
                    <div> </div>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-c25ab376-075c-443f-b626-6be3401f9e63" aria-expanded="false" id="accordion-control-c25ab376-075c-443f-b626-6be3401f9e63">
                        Как связаться с нами
                    </button>
                </dt>
                <dd id="accordion-content-c25ab376-075c-443f-b626-6be3401f9e63" aria-hidden="true" style="display: none;">
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt;">Мы всегда рады получить отзывы наших клиентов (особенно если ты считаешь, что мы можем что-то улучшить).</span></p>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt;">Если:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt;">у тебя есть вопрос или отзыв на данную тему,</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt;">ты хочешь, чтобы мы прекратили использовать твои данные,</span></li>
                        <li><span style="font-size: 12pt; letter-spacing: 0.3pt;">ты хочешь воспользоваться своими правами или подать жалобу,</span></li>
                    </ul>
                    <p style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size: 12pt; letter-spacing: 0.3pt;">свяжись с нами или с командой нашей </span><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: black;"><a href="/faq">Службы поддержки,</a>&nbsp;</span><span style="font-size: 12pt; letter-spacing: 0.3pt;">готовой ответить на любой твой вопрос. </span></p>
                    <p><span data-sheets-value="{'1':2,'2':'Мы всегда хотим получать обратную связь от наших клиентов (особенно, если вы чувствуете, что мы разочаровали вас или могли бы сделать лучше).'}" data-sheets-userformat="{'2':8403841,'3':[null,0],'10':2,'11':4,'12':0,'14':[null,2,0],'15':'Arial','16':11,'26':400}"> <span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri, sans-serif;">Ты можешь связаться с нашей </span><span style="font-size: 11pt; font-family: 'Times New Roman';"><a href="/faq"><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">Службой поддержки</span></a></span><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri, sans-serif;"> через сайт {{$settings->project_name}} или написав нам по адресу&nbsp;</span><span style="font-size: 11pt; font-family: 'Times New Roman';"><a href="mailto:{{$settings->email}} "><span style="padding: 0cm; font-size: 12pt; border: 1pt none windowtext; letter-spacing: 0.3pt; font-family: Calibri; color: black;">{{$settings->email}}</span></a></span><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri, sans-serif;">. Также ты можешь написать нам по адресу</span></span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">Data Protection Officer,</span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">{{$settings->project_name}},<br>
                            Greater London House, Hampstead Road,</span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">London,</span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">NW1 7FB</span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">&nbsp;</span></p>
                    <p><span>Или</span></p>
                    <p style="margin-bottom: 0.0001pt;"><span style="font-size: 12pt; letter-spacing: 0.3pt; font-family: Calibri; color: #2d2d2d;">{{$settings->project_name}}<br>
                            <br>
                            Data Protection Officer<br>
                            <br>
                            An der Anhalter Bahn 6<br>
                            <br>
                            14979 Grossbeeren<br>
                            <br>
                            Germany </span></p>
                </dd>
            </dl>
        </article>
    </section>
    <section class="mu-section">
        <div class="documentVersion">
            <span class="documentVersion__versionNumber">v1.0</span>
            <div class="documentVersion__lastUpdated">07.01.2020</div>
        </div>
    </section>
</main>
<script type="text/javascript">
    $('.accordion__title').click(function() {
        console.log();
        if($('#'+$(this).attr("aria-controls")).css('display') == 'none'){
            $('#'+$(this).attr("aria-controls")).fadeIn(600);
        } else {
            $('#'+$(this).attr("aria-controls")).fadeOut(600);
        }
        
    });
</script>
@endsection
