

@extends('index')

@section('content')
<!-- 1 -->
 <link rel="stylesheet" href="/temple/css/privacy-policy.css">

    <title>Правила и условия | {{$settings->project_name}}</title>
<main id="chrome-app-container">
    <section class="mu-section">
        <article class="accordion">
            <h1>Правила и условия</h1>
            <dl aria-label="Accordion Control Button Group">
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-350ebd3f-ae9c-4678-8300-309c56670f01" aria-expanded="false" id="accordion-control-350ebd3f-ae9c-4678-8300-309c56670f01">
                        О легальных моментах…
                    </button>
                </dt>
                <dd id="accordion-content-350ebd3f-ae9c-4678-8300-309c56670f01" aria-hidden="true" style="display: none;">
                    <p><span>Мы - </span>{{$settings->project_name}}<span>.</span>com Limited<span> (номер компании - 3584121), компания, зарегистрированная в Англии и Уэльсе. </span>Наш головной офис расположен по адресу Greater London House, Hampstead Road, London NW1 7FB.&nbsp;</p>
                    <p><span>Когда вы покупаете у нас (или открываете доступ к нашим услугам, приложениям и сайтам (нашим «Сайтам»)), применяются эти правила и условия. Они важны для всех нас, так как указывают, что мы можем ожидать друг от друга, а также предоставляют вам полезную информацию. Вы можете узнать больше, заглянув в наш <a href="/faq" target="_self">раздел «Помощь»</a>&nbsp;(который тоже является частью этих правил и условий). Разумеется, если вам понадобится что-либо еще, вы можете <a href="/faq" target="_self">связаться с нашей Службой Поддержки</a>: мы будем рады поговорить с вами!</span></p>
                    <p><span>Мы часто обновляем эти правила и условия и <a href="/faq" target="_self">раздел «Помощь»</a>&nbsp;и иногда редактируем их, так что советуем проверять эти страницы перед тем, как оформлять покупки: к вам будет относиться самый новый набор правил и условий.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-2dcbfed9-c9da-4d54-9ed6-2c40ed13bcc9" aria-expanded="false" id="accordion-control-2dcbfed9-c9da-4d54-9ed6-2c40ed13bcc9">
                        О вас
                    </button>
                </dt>
                <dd id="accordion-content-2dcbfed9-c9da-4d54-9ed6-2c40ed13bcc9" aria-hidden="true" style="display: none;">
                    <p><span>Чтобы делать покупки у нас, вы должны:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><span>быть не младше 16 лет;</span></li>
                        <li><span>иметь кредитную или дебетовую карту, которую мы принимаем (прокрутите эту страницу вниз для подробной информации о текущих платежных провайдерах); и</span></li>
                        <li><span>иметь право использовать эту кредитную или дебетовую карту (напр. эта карта выпущена на ваше имя, или у вас есть разрешение на ее использование)</span></li>
                    </ul>
                    <p><span>Кстати, некоторые товары, предлагаемые через наши Сайты, могут быть рассчитаны на людей старше 18 лет.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-c0e3c8f0-cd13-446a-bae1-f64b9db35750" aria-expanded="false" id="accordion-control-c0e3c8f0-cd13-446a-bae1-f64b9db35750">
                        Размещение заказа
                    </button>
                </dt>
                <dd id="accordion-content-c0e3c8f0-cd13-446a-bae1-f64b9db35750" aria-hidden="true" style="display: none;">
                    <p><span>Когда вы размещаете заказ, вам должно прийти оповещение на электронную почту, подтверждающее ваш заказ. После этого мы проводим стандартную проверку на предварительное разрешение списания, чтобы убедиться, что у вас достаточно денежных средств на карте.</span></p>
                    <p><span>Мы принимаем ваш заказ только тогда, когда оплата принята и мы списали средства с вашей платежной карты (и тогда создается контракт на основе этих условий).</span></p>
                    <p><span>Вы можете попробовать отменить (не изменить) ваш заказ в течение короткого периода времени – срок зависит от выбранного вами способа доставки (это будет упомянуто в вашем письме с подтверждением). Вы не можете изменить свой заказ, вам нужно будет отменить и/или вернуть первоначальный товар/первоначальные товары, а затем перезаказать нужное.</span></p>
                    <p><span>Все заказы зависят от наличия на складе и подтверждения стоимости заказа. Не беспокойтесь, если с заказом возникнут проблемы, мы свяжемся с вами.</span></p>
                    <p><span>В редких случаях нам может понадобиться отказаться от вашего заказа или отменить его, или закрыть или заблокировать ваш аккаунт (даже если до этого мы подтвердили ваш заказ) – например, в тех случаях, когда нам кажется, что с заказом или аккаунтом происходит что-то странное. Если это произошло с вами и вы думаете, что мы совершили ошибку, пожалуйста, не обижайтесь – <a href="/faq" target="_self">свяжитесь с нашей Службой Поддержки</a>, мы будем рады обсудить это с вами.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-8f3425bd-68ba-4ac7-b84d-62c9a976cc61" aria-expanded="false" id="accordion-control-8f3425bd-68ba-4ac7-b84d-62c9a976cc61">
                        Использование системы Klarna
                    </button>
                </dt>
                <dd id="accordion-content-8f3425bd-68ba-4ac7-b84d-62c9a976cc61" aria-hidden="true" style="display: none;">
                    <div>
                        <p><span>Используете систему Klarna, чтобы примерить товар перед покупкой? Здесь действуют немного другие условия.</span></p>
                        &nbsp;
                    </div>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-ed72e258-c918-4eaa-ba3b-c8884d5561c6" aria-expanded="false" id="accordion-control-ed72e258-c918-4eaa-ba3b-c8884d5561c6">
                        Описание и стоимость товаров
                    </button>
                </dt>
                <dd id="accordion-content-ed72e258-c918-4eaa-ba3b-c8884d5561c6" aria-hidden="true" style="display: none;">
                    <p><span>Здесь в головном офисе {{$settings->project_name}} многое происходит, и иногда наши занятые коллеги могут выставить неверную цену или описать товар или промокод неправильно. Если мы найдем ошибку в любом из заказанных вами товаров, мы немедленно сообщим вам и дадим вам возможность либо заново подтвердить заказ (по верной цене), либо отменить его.</span></p>
                    <p><span>Если мы не сможем связаться с вами, мы расценим этот заказ как отмененный. Если вы решите отменить его и вы уже оплатили покупку, мы полностью вернем вам денежные средства.</span></p>
                    <p><span>Цены включают в себя НДС (где применимо).</span></p>
                    <p><span>В зависимости от стоимости заказа и выбранного способа доставки с вас могут затребовать оплату стоимости доставки (смотрите ниже). Такая дополнительная стоимость будет четко указана при оформлении заказа и будет включена в «Общую Стоимость».</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-1033606a-4a05-43ce-9aa6-6b0a028c515a" aria-expanded="false" id="accordion-control-1033606a-4a05-43ce-9aa6-6b0a028c515a">
                        Доставка
                    </button>
                </dt>
                <dd id="accordion-content-1033606a-4a05-43ce-9aa6-6b0a028c515a" aria-hidden="true" style="display: none;">
                    <p><span>Перед завершением заказа вам будет предложено на выбор несколько способов доставки с ожидаемой датой доставки, зависящих от вашего адреса доставки.</span></p>
                    <p><span>Мы очень стараемся укладываться в предложенные сроки доставки, но иногда могут возникать задержки (например, из-за задержек у курьера, логистики или плохой погоды). Мы будем держать вас в курсе в меру своих возможностей, и вы сможете следить за передвижением вашей посылки.</span></p>
                    <p><span><a href="/faq" target="_self">Загляните на нашу страницу по Доставке</a> для более подробной информации. Вы можете <a href="/faq" target="_self">связаться с нашей Службой Поддержки</a>, если у вас будут какие-либо вопросы.</span></p>
                    <p><span>Если ваш заказ отправлен Почтой России, вы соглашаетесь с дополнительными условиями, применимыми в данном случае. <a href="/faq" target="_self">Пройдите сюда, чтобы ознакомиться с информацией об этом</a>.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-3ca8366d-fb5d-4505-8ffc-cbbef7e96f4b" aria-expanded="false" id="accordion-control-3ca8366d-fb5d-4505-8ffc-cbbef7e96f4b">
                        Возвраты
                    </button>
                </dt>
                <dd id="accordion-content-3ca8366d-fb5d-4505-8ffc-cbbef7e96f4b" aria-hidden="true" style="display: none;">
                    <p><span style="background: white; color: black;"><a href="/faq" target="_self">Ознакомьтесь с более подробными условиями возврата&nbsp;здесь</a>.&nbsp;</span></p>
                    <p><strong><span style="background: white; color: black;">Возвращаете неподошедший товар?</span></strong><strong><span style="color: black;"><br>
                            </span></strong><span style="background: white; color: black;">Мы понимаем, иногда вам что-то не очень нравится и вы хотите получить возврат средств. Не беспокойтесь, если товар остался в первоначальном состоянии, мы бесплатно примем ваш возврат, учитывая указанные ниже правила. </span><span style="color: black;"><br>
                            <br>
                        </span><span style="background: white; color: black;">Если вы отправите товар нам обратно с целью вернуть денежные средства в течение 28 дней с момента доставки заказа в пункт назначения, мы оформим полный возврат средств за возвращенный товар на ваш первоначальный способ оплаты. </span><span style="color: black;"><br>
                            <br>
                            <span style="background: white;">Если вы отправите товар нам обратно с целью вернуть денежные средства в течение 29-45 дней с момента доставки заказа в пункт назначения, вместо оформления возврата средств мы выдадим вам подарочный сертификат на сумму, эквивалентную той, которую вы заплатили за товар. </span><br>
                            <br>
                            <span style="background: white;">Мы стараемся оформлять все возвраты средств в течение 14 дней с момента получения возвращенного товара на складе.</span><br>
                            <br>
                            <span style="background: white;">Если в указанные выше сроки вы захотите получить возврат средств за товар, который по какой-то причине не можете вернуть нам, пожалуйста, свяжитесь с нами. В этом случае любой возврат средств осуществляется по нашему усмотрению. </span></span><span style="color: black;"><br>
                            <br>
                        </span><strong><span style="background: white; color: black;">А</span></strong><strong><span style="background: white; color: black;"> </span></strong><strong><span style="background: white; color: black;">что</span></strong><strong><span style="background: white; color: black;"> </span></strong><strong><span style="background: white; color: black;">потом</span></strong><strong><span style="background: white; color: black;">?</span></strong><strong><span style="color: black;"><br>
                            </span></strong><span style="background: white; color: black;">Мы не принимаем возврат неподошедших товаров по истечении указанных выше сроков. Если вы попробуете вернуть нам что-то позже положенного, мы можем решить отправить это вам назад и попросить вас оплатить стоимость пересылки. </span><span style="color: black;"><br>
                            <br>
                            <strong><span style="background: white;">Квитанция об отправке</span><br>
                            </strong><span style="background: white;">Мы очень советуем сохранять почтовую квитанцию в качестве подтверждения осуществления возврата (вы получите ее бесплатно в любом центре возвратов или почтовом отделении). Наш адрес для возвратов: </span></span><span style="background: #ffffff; color: #201f1e;"><strong>Clipper Logistics plc, Barlby Road, Selby, YO8 5BL, UK</strong></span><span style="color: black;"><br>
                            <br>
                            <strong><span style="background: white;">Чистота и порядок</span><br>
                            </strong><span style="background: white;"></span></span></p>
                    <p><span>Гигиена и безопасность всех наших клиентов - это важно, поэтому некоторые товары не подлежат возврату. Это</span><span> </span><span>включает</span><span> </span><span>в</span><span> </span><span>себя</span><span> </span><span>следующее</span>: </p>
                    <ul>
                        <li><span>Товары из категории «Лицо+Тело», если они были открыты, если ими пользовались, если защитная упаковка была надорвана</span></li>
                        <li><span></span>&nbsp;Нижнее белье, если гигиеническая наклейка была снята или если были оторваны ярлыки</li>
                        <li>Купальные костюмы, если гигиеническая наклейка была снята или если были оторваны ярлыки</li>
                        <li>Украшения для пирсинга или серьги, если была нарушена упаковка или защитная печать.</li>
                    </ul>
                    <p><span><strong>Это не влияет на ваши статутные права.</strong></span></p>
                    <p><strong><span style="background: white; color: black;">Первоначальное состояние</span></strong></p>
                    <p><span>Все возвращаемые товары должны быть отправлены нам в первоначальном состоянии, включая любую упаковку, а также ярлыки и наклейки (и брендовые, и {{$settings->project_name}}).</span><br>
                        <br>
                        <span>Обувь: чтобы защитить подошву, примеряйте обувь только на ковровом покрытии. Любая обувь должна быть возвращена в оригинальной коробке (если таковая была) и в отдельных пакетах и пыльниках (если такие были).</span><span><br>
                        </span><br>
                        <span>Все товары при возврате проверяются на складе. Разумеется, вы можете примерить полученный товар, как сделали бы в обычном магазине, но, пожалуйста, не носите его. Когда будете примерять одежду, будьте осторожны (не применяйте силу, чтобы надеть что-то) и следите, чтобы на вас не было косметики, духов, одеколона, дезодоранта или антиперспиранта, так как они могут оставить следы и запахи на товаре.</span><span><br>
                        </span><br>
                        <span>Если товар будет возвращен в ненадлежащем состоянии, поношенным или поврежденным, а также в случаях, где не исполнялись данные выше инструкции, мы можем решить вернуть его вам (и попросить вас оплатить стоимость пересылки). В качестве альтернативы (по нашему усмотрению) мы можем решить уменьшить сумму возвращаемых средств, чтобы отразить уменьшение ценности товара.</span><span><br>
                        </span><br>
                        <span><strong>Это не влияет на ваши статутные права.</strong></span><span style="background: white; color: black;"></span><span style="color: black;"><br>
                            <br>
                        </span><strong><span style="background: white; color: black;">Добросовестное использование</span></strong><strong><span style="color: black;"><br>
                            </span></strong><span style="background: white; color: black;">Если мы заметим что-то необычное в вашей динамике возвратов, что покажется нам подозрительным (например, если мы заподозрим, что кто-то на самом деле носит товары перед тем, как вернуть их нам; или если кто-то заказывает и затем возвращает слишком много, намного больше, чем наши самые верные постоянные клиенты), мы можем принять решение деактивировать ваш аккаунт и любые связанные с ним аккаунты. Если с вами произойдет подобное, а вы посчитаете, что это было сделано по ошибке, пожалуйста, свяжитесь с нашей Службой Поддержки, мы будем рады помочь вам.</span></p>
                    <p><span style="background: white; color: black;">Если ваш аккаунт был заблокирован, а вам нужно сделать возврат, <a href="/faq" target="_self">свяжитесь с нашей Службой Поддержки</a>. Для вас будет создан ярлык для возврата, но стоимость обратной пересылки вам придется оплатить самостоятельно.&nbsp;</span><span style="color: black;"><br>
                        </span></p>
                    <p><strong><span style="background: white; color: black;">Это не влияет на ваши статутные права.</span></strong></p>
                    <p><strong><span style="background: white; color: black;"></span></strong><span style="color: black;"><br>
                        </span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-e00a350a-e982-44d0-b5f1-db6f2990e205" aria-expanded="false" id="accordion-control-e00a350a-e982-44d0-b5f1-db6f2990e205">
                        Промокоды
                    </button>
                </dt>
                <dd id="accordion-content-e00a350a-e982-44d0-b5f1-db6f2990e205" aria-hidden="true" style="display: none;">
                    <p><span>Время от времени мы можем предлагать вам Промокоды, которые вы можете использовать для снижения стоимости определенных товаров. Помните, вам необходимо самостоятельно ввести промокод при оформлении заказа!</span></p>
                    <p><span><a href="/faq" target="_self">Более подробно о Промокодах и правилах их использования вы можете прочитать на страницах нашей Службы Поддержки по этой ссылке</a>, но вот несколько основных моментов, о которых стоит помнить:</span></p>
                    <p><span>У каждого Промокода есть свои правила и условия, которые будут ясно указаны при выдаче этого кода вам (например, на какие товары он применим, одноразовый/многоразовый, сроки действия и т.д.).</span></p>
                    <p><span>Если не указано обратное, Промокоды нельзя использовать для покупки услуги {{$settings->project_name}} Premier, подарочных сертификатов {{$settings->project_name}} и товаров с платформы {{$settings->project_name}} Marketplace.</span></p>
                    <p><span>Если вы получили уникальный Промокод, предназначенный исключительно для вас (например, студенческий Промокод), пожалуйста, держите его в секрете и не позволяйте другим людям его использовать (например, не нужно публиковать его в социальных сетях). Если мы решим, что Промокодом как-либо злоупотребляли (например, его продали, поделились им с другими и т.д.), мы можем отменить ваш Промокод и/или заблокировать или даже закрыть ваш аккаунт без уведомления вас об этом.</span></p>
                    <p><span>Нам не нравится это делать, но если Промокод не может действовать должным образом из-за кого-либо или чего-либо – например, мошенничество, вмешательство, технические накладки или что-либо другое, что находится вне нашего контроля и мешает честной работе Промокода – мы можем отменить, изменить или отложить Промокод.</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-16490927-fe44-42b3-af60-03dd7ae467fc" aria-expanded="false" id="accordion-control-16490927-fe44-42b3-af60-03dd7ae467fc">
                        Подарочные сертификаты и Подарочные карты
                    </button>
                </dt>
                <dd id="accordion-content-16490927-fe44-42b3-af60-03dd7ae467fc" aria-hidden="true" style="display: none;">
                    <p><span>Если вы являетесь счастливым обладателем Подарочного Сертификата {{$settings->project_name}} или Подарочной Карты {{$settings->project_name}}, <a href="/faq" target="_self">загляните на страницы Службы Поддержки</a>, чтобы узнать, как ими пользоваться. Несколько моментов, о которых нужно помнить:</span></p>
                    <p><span>Лучше сразу же привязывать ваш Подарочный Сертификат и Подарочную Карту, чтобы сохранить их в безопасности.</span></p>
                    <p><span>Подарочные Сертификаты и Подарочные Карты нельзя использовать для покупки Подарочных Сертификатов {{$settings->project_name}} и товаров с платформы {{$settings->project_name}} Marketplace.</span></p>
                    <p><span>Если вы покупаете Подарочный Сертификат {{$settings->project_name}} для кого-то, пожалуйста, убедитесь, что вводите их правильный адрес электронной почты! Если вы ошибетесь и сертификат отправится кому-то другому, кто использует его, мы не сможем помочь. Проверяйте все данные дважды и даже трижды перед покупкой.</span></p>
                    <p><span>Кстати, говоря о письмах: иногда вредные (но очень полезные) спам-фильтры отправляют письма от нас в папку «Спам». Так что если вас не поблагодарили за ваш щедрый подарок, советуем вам напомнить о нем – ведь в папке «Спам» человека может ждать приятный сюрприз! </span></p>
                    <p><span>Подарочные Сертификаты, купленные с сайта Великобритании, истекут через два года с даты получения. Подарочные Сертификаты, купленные с сайта США, не имеют срока годности. Срок годности Подарочных Сертификатов, купленных с сайта любой другой страны, истечет через 10 лет с даты получения.&nbsp;&nbsp;</span></p>
                    <p><span>{{$settings->project_name}} оставляет за собой право отменить Подарочный Сертификат по своему усмотрению в случае, если заподозрит мошенничество или злоупотребление.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-d7dbd0b8-5d54-4448-a2c8-169dcc97a7d8" aria-expanded="false" id="accordion-control-d7dbd0b8-5d54-4448-a2c8-169dcc97a7d8">
                        Ваша информация
                    </button>
                </dt>
                <dd id="accordion-content-d7dbd0b8-5d54-4448-a2c8-169dcc97a7d8" aria-hidden="true" style="display: none;">
                    <p><span>Наши <a href="/privacy-policy" target="_self">Правила о Конфиденциальности</a> объясняют, как мы будем использовать данную вами информацию. Если ваши личные данные изменятся, не забудьте обновить информацию в вашем Личном кабинете, чтобы мы могли продолжать предоставлять вам отличный сервис (там же вы можете обновить ваши маркетинговые предпочтения).</span></p>
                    <p><span>Мы в {{$settings->project_name}} обожаем общаться с вами посредством социальных сетей. Однако мы не можем контролировать эти социальные платформы и то, как вы ведете на них свои профильные страницы. Пожалуйста, проверьте свои настройки безопасности, чтобы убедиться, что вы поняли и согласны с тем, как будет использоваться ваша личная информация на этих платформах.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-503f4960-8694-4a05-af58-e84252ba51af" aria-expanded="false" id="accordion-control-503f4960-8694-4a05-af58-e84252ba51af">
                        Чего вам делать не стоит…
                    </button>
                </dt>
                <dd id="accordion-content-503f4960-8694-4a05-af58-e84252ba51af" aria-hidden="true" style="display: none;">
                    <p><span>Мы знаем, что это очевидно, но вы не должны злоупотреблять или как-либо мешать работе нашего сайта, приложений или других услуг («Сайтов») (напр. взламывать, запускать вирусы, троянских коней, червей, логических бомб, или проводить атаки отказа в обслуживании), или как-либо иначе влиять на наши технологии и функциональность или красть данные наших клиентов. Любое из этих действий может быть преступлением, но это также мешает нам предлагать нашим клиентам лучший сервис из возможных, поэтому мы относимся к этому очень серьезно. {{$settings->project_name}} будет докладывать о любом из этих нарушений или действий (и передавать всю информацию о людях, их совершающих) в соответствующие правоохранительные органы.</span></p>
                    <p><span>Мы советуем вам пользоваться антивирусными программами при посещении любого сайта, включая наш. Хотя у нас есть отдельная команда, следящая за тем, чтобы посторонние люди не вмешивались в работу нашего Сайта, мы не можем гарантировать, что он всегда будет защищен от червей, вирусов или вредителей.</span></p>
                    <p><span>О, и вам нельзя пользоваться автоматическими системами или программами для извлечения данных с нашего Сайта (т.е. «анализ экранных данных»).</span></p>
                    <p><span>Хулиганы, имейте в виду: вы соглашаетесь защитить, оградить и освободить компанию {{$settings->project_name}}, ее директоров, должностных лиц, работников, консультантов, агентов и аффилированных лиц от любых претензий третьих лиц, ответственности, убытков и/или расходов (включая юридические расходы, но не ограничиваясь ими), возникших в результате вашего пользования (или злоупотребления) этого Сайта или вашего нарушения Правил и Условий. &nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-d82cebe2-229f-408a-b1f0-be8fe72cc7a5" aria-expanded="false" id="accordion-control-d82cebe2-229f-408a-b1f0-be8fe72cc7a5">
                        Интеллектуальная собственность, Программное обеспечение и Содержание
                    </button>
                </dt>
                <dd id="accordion-content-d82cebe2-229f-408a-b1f0-be8fe72cc7a5" aria-hidden="true" style="display: none;">
                    <p><span>{{$settings->project_name}} владеет либо имеет право пользоваться интеллектуальной собственностью на своем Сайте и его содержанием. Эти права защищены по всему миру. Все данные права оговорены.</span></p>
                    <p><span>Вы имеете право хранить, распечатывать и отображать содержимое нашего Сайта только в целях личного пользования. Вам не позволяется использовать любую часть нашего Сайта в коммерческих целях, если у вас нет нашего полного разрешения.</span></p>
                    <p><span>Вам также нельзя использовать логотип {{$settings->project_name}} или любой бренд или товарный знак {{$settings->project_name}} (или любой похожий по цветовому решению знак) без нашего полного на то разрешения.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-ce950c4d-8d06-48ec-8eaf-88ec89e96217" aria-expanded="false" id="accordion-control-ce950c4d-8d06-48ec-8eaf-88ec89e96217">
                        Ссылки на данный Сайт
                    </button>
                </dt>
                <dd id="accordion-content-ce950c4d-8d06-48ec-8eaf-88ec89e96217" aria-hidden="true" style="display: none;">
                    <p><span>Вы можете размещать ссылки на {{$settings->project_name}} при условии, что вы делаете это некоммерческим, надлежащим и законным образом, не вредя при этом нашей репутации и не пользуясь ей в своих целях.</span></p>
                    <p><span>Пожалуйста, не размещайте ссылки таким образом, который предполагает наличие какой-либо связи, одобрения или разрешения со стороны {{$settings->project_name}}, если таковые отсутствуют.</span></p>
                    <p><span>Данный Сайт нельзя размещать во фреймах на любых других сайтах без нашего разрешения. &nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-d2cee6cb-afcb-40eb-8234-f0d477e0dffa" aria-expanded="false" id="accordion-control-d2cee6cb-afcb-40eb-8234-f0d477e0dffa">
                        Есть претензии или хотите поговорить с нами?
                    </button>
                </dt>
                <dd id="accordion-content-d2cee6cb-afcb-40eb-8234-f0d477e0dffa" aria-hidden="true" style="display: none;">
                    <p><span>Иногда что-то идет не так, и в таком случае вам может понадобиться связаться с нами. Если так случится, пожалуйста, обратитесь к нашей Службе Поддержки, которая поможет вам разрешить любые вопросы, возникшие при использовании наших услуг:</span></p>
                    <p><span><a href="/faq" target="_self">связь по электронной по электронной почте </a><a href="/faq" target="_self">&nbsp;</a><a href="/faq" target="_self">по этой ссылке</a></span></p>
                    <p><span>через Твиттер: @</span>{{$settings->project_name}}<span>_</span>Pomozhet </p>
                    <p><span>спросите в Facebook: <a href="{{$settings->facebook}}">{{$settings->facebook}}</a> </span></p>
                    <p><span>спросите в ВК: <a href="{{$settings->Vk}}">{{$settings->Vk}}</a> </span></p>
                    <p><span>по</span><span> </span><span>почте</span>: {{$settings->project_name}} Customer Care, Hercules Way, Leavesden Park, Leavesden, Watford, WD25 7GR</p>
                    <p><span>Если наша Служба Поддержки не сможет разрешить вашу ситуацию к вашему удовлетворению, вы можете направить вашу жалобу сюда:</span></p>
                    <p><span><br>
                        </span>The Retail ADR<span> (</span><a href="http://www.retailadr.org.uk">www<span>.</span>retailadr<span>.</span>org<span>.</span>uk</a><span>):<br>
                        </span><span style="font-size: 13px;">по</span><span style="font-size: 13px;"> </span><span style="font-size: 13px;">почте</span><span style="font-size: 13px;">: The Retail ADR, 12-14 Walker Avenue, Stratford Office Village, Wolverton Mill, Milton Keynes MK12 5TW (Tel: +44 20 3540 8063)<br>
                        </span><span style="font-size: 13px;">по электронной почте: </span><a href="mailto:Enquiries@cdrl.org.uk" style="font-size: 13px;">Enquiries@cdrl.org.uk</a></p>
                    <p><span>или в</span><span style="font-size: 13px;">&nbsp;Европейский Онлайн Центр Разрешения Споров:<br>
                        </span><a href="http://www.ec.europa.eu/consumers/odr" style="font-size: 13px;">www.ec.europa.eu/consumers/odr</a><span style="font-size: 13px;">.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-8b59cc2f-8eb3-492a-9e38-69c106201ed5" aria-expanded="false" id="accordion-control-8b59cc2f-8eb3-492a-9e38-69c106201ed5">
                        Легальные вопросы
                    </button>
                </dt>
                <dd id="accordion-content-8b59cc2f-8eb3-492a-9e38-69c106201ed5" aria-hidden="true" style="display: none;">
                    <p><span>Мы оставляем за собой право редактировать, прекращать или изменять любую услугу и/или любую другую часть нашего Сайта (включая Правила и Условия) в любое время.</span></p>
                    <p><span>Эти правила и условия, а также наш договор с вами подчиняются английскому закону и исключительной юрисдикции английских судов.&nbsp;</span></p>
                </dd>
                <dt>
                    <button class="accordion__title" aria-controls="accordion-content-e54f6461-8aa5-41f7-a828-e5eaa8c61974" aria-expanded="false" id="accordion-control-e54f6461-8aa5-41f7-a828-e5eaa8c61974">
                        Пользовательский Контент – Правила и Условия
                    </button>
                </dt>
                <dd id="accordion-content-e54f6461-8aa5-41f7-a828-e5eaa8c61974" aria-hidden="true" style="display: none;">
                    <p><span>Мы обратились к вам в социальных сетях и просим разрешения показать ваш контект на наших социальных страничках? Поздравляем! Это значит, мы в восторге от вашего стиля!</span></p>
                    <p><span>Соглашаясь на предоставленную нами возможность показать ваш контект на наших страницах в социальных сетях и отвечая нужным хештегом (например, #Yes{{$settings->project_name}}), вы также соглашаетесь со следующим:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><span>мы можем использовать ваш движок и содержимое («Контент») на {{$settings->project_name}}, collusion.com и/или на любых социальных платформах {{$settings->project_name}} (включая, но не ограничиваясь Instagram, Facebook и Twitter).</span></li>
                        <li><span>мы можем редактировать, обрезать, адаптировать, улучшать или изменять Контент (но {{$settings->project_name}} не будет относиться к вам уничижительным образом).</span></li>
                    </ul>
                    <p><span>Вы обещаете, что вы:</span></p>
                    <ul style="list-style-type: disc;">
                        <li><span>имеете разрешение всех, задействованных в Контенте;</span></li>
                        <li><span>имеете право давать {{$settings->project_name}} указанное выше разрешение; и</span></li>
                        <li><span>вы не моложе 16 лет.</span></li>
                    </ul>
                    <p><span>Если вы (или кто-либо из Контента) попросит нас удалить Контент, мы уберем этот Контент из социальных аккаунтов, которые мы контролируем.</span></p>
                    <p><span>Вы понимаете, что другие пользователи этих социальных платформ тоже могут делиться Контентом и использовать его после того, как он опубликован. В частности, пользователь этих платформ может сделать скриншот Контента и сохранить это изображение на свое устройство, поделиться Контентом в социальных платформах или сайтах, которые содержат Контент (и позволяют делиться Контентом). Если вы не хотите давать разрешение на указанное выше, пожалуйста, не давайте нам согласие на использование вашего Контента.&nbsp;</span></p>
                </dd>
            </dl>
        </article>
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