<!DOCTYPE html>
<html lang="ru-RU">
<!-- не -->

<head class="at-element-marker">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <link href="/temple/css/client.sitechrome.8850fd.css" rel="stylesheet">
    <link href="/temple/css/c_s.fa0b82.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/temple/css/styles-a515006874.css">
    <script src="/temple/js/jqeri.js"></script>
    <script src="https://kit.fontawesome.com/8fb77f0765.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <div id="chrome-header">
        <header>
            <div class="_3FDhT9y VTBBowk" data-testid="topbar">
                <div class="_2jtZkvR">
                    <ul class="_1sqB8tC">
                        <li><a href="/faq" data-testid="help" class="_1cQFCx2">Помощь и FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="_1I2c49V headroom-wrapper" style="height: 60px; background: #2d2d2d;">
                <div id="chrome-sticky-header" class="headroom headroom--pinned headroom--scrolled">
                    <div class="_3wSz5e5">
                        <div class="_25fsaDO _2zC79ar" data-testid="header"><button class="_31ffwSC _1aufEaZ" aria-label="Открыть навигационное меню" tabindex="0" data-testid="burger-menu-button"></button><a style="    text-decoration: none;" class="_24SZgSx _6DZZlcW" href="/" data-testid="asoslogo">
                                <p style=" color: #ffff; font-weight: bold; font-size: 22px; text-align: center; margin-top: 22px;">{{$settings->project_name}}</p>
                            </a>
                            <ul class="_1gfpvjl _2Q6RfP3" data-testid="floornav" style="display: none;">
                                <li><a class="TO7hyVB _3B0kHbC _3AH1eDT" data-testid="women-floor" href="https://www.asos.com/ru/women/" aria-label="Товары для женщин">ДОРОГИЕ</a></li>
                                <li><a class="TO7hyVB _3B0kHbC _3AH1eDT" data-testid="men-floor" href="https://www.asos.com/ru/men/" aria-label="Товары для мужчин">ДЕШЁВЫЕ</a></li>
                            </ul>
                            <div class="_36m0W_u">
                                <div class="_1Pn6oie"></div>
                                <form action="/search" method="get" class="_3j_6oNg">
                                    <div class="h-7-BEq">
                                        <label for="chrome-search">
                                            <span class="BtNRzoN _3wDTlhS">Поиск товаров, брендов и новостей из мира телефонов</span>
                                            <input type="search" name="search" class="Cyuazsm _1LCOtZ3 SJwm9Lx" placeholder="Искать" maxlength="150">
                                            <span class="_2ARPr_X">Поиск:</span>
                                        </label>
                                        <button class="kH5PAAC" type="submit">
                                            <svg viewBox="0 0 17 17" role="img">
                                                <title id="search-icon">Поиск</title>
                                                <path fill="currentColor" fill-rule="nonzero" d="M7.65 15.3a7.65 7.65 0 1 1 5.997-2.9c-.01.012 3.183 3.297 3.183 3.297l-1.22 1.18s-3.144-3.283-3.154-3.275A7.618 7.618 0 0 1 7.65 15.3zm0-2a5.65 5.65 0 1 0 0-11.3 5.65 5.65 0 0 0 0 11.3z"></path>
                                            </svg>
                                        </button>
                                        <section class="NOZiOAo"></section>
                                    </div>
                                </form>
                            </div>
                            <ul class="_3fERfnD" data-testid="widgets">
                                <li class="_3Wo6fpk mD8oZFx">
                                    <div>
                                        <div>
                                            <div id="myAccountDropdown" class="_3iG3MJz" role="presentation">
                                                <button type="button" class="_6iPIuvw _2SSHFPv">
                                                    <span type="accountUnfilled" class="_3iH_8F6 -rhP1cz gBrrjX4 _2nHArcS"></span>
                                                </button>
                                                <div class="Gmnwu_e" data-testid="myaccount-dropdown" id="myaccount-dropdown2">
                                                    <div class="_33s2s-y">
                                                        <div class="Z8dxicz">
                                                            <div class="_3dfrZFm">
                                                                @if(Auth::user())
                                                                <div class="_3hSCfS2"><span class="tiqiyps">Привет {{$u->name}}</span><span class="k3_c4ux"><a class="_1336dMe _1uUU2Co _1336dMe _1uUU2Co" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Выйти</a></span></div>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                                @else
                                                                <div class="_3hSCfS2">
                                                                    <span class="k3_c4ux">
                                                                        <a class="_1336dMe _1uUU2Co _1336dMe _1uUU2Co m_open" href="#login">Войти</a>
                                                                        <div class="_3xmyjOP"></div>
                                                                        <a class="_1336dMe _1uUU2Co _1336dMe _1uUU2Co m_open" href="#chat_rules">Регистрация</a>
                                                                    </span>
                                                                </div>
                                                                <button icon="_1xgEXu7" class="_6iPIuvw" tabindex="-1" data-testid="myaccount-close-btn" aria-label="Закрыть" type="button">
                                                                    <span class="_1xgEXu7 -rhP1cz gBrrjX4 _2nHArcS"></span>
                                                                </button>
                                                                @endif
                                                            </div>
                                                            @if(Auth::user())
                                                            <ul class="_12ChTgQ">
                                                                <li><a href="/my-account" class="yPAUReS IAtMKef _2LRr-ij CjZA9Ep" tabindex="-1">Личный кабинет</a></li>
                                                                <li><a href="/orders" class="yPAUReS IAtMKef _2LRr-ij _37wOqxg" tabindex="-1" data-testid="myorders-link">Мои заказы</a></li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="_3Wo6fpk"><a type="a" href="/saved-lists" icon="_26lJ0fq" icontype="heartUnfilled" data-testid="savedItemsIcon" class="_6iPIuvw _2SSHFPv" aria-label="Отложено"><span type="heartUnfilled" class="_26lJ0fq -rhP1cz gBrrjX4 _2nHArcS"></span></a></li>
                                @if(Auth::user())
                                <li class="_3Wo6fpk"><a type="a" href="/orders" icon="AckDUvD" icontype="bagUnfilled" class="_6iPIuvw _2SSHFPv"><span @if($b> 0) style="background-image: url(/temple/img/buy.png);" @endif type="bagUnfilled" class="AckDUvD -rhP1cz gBrrjX4 _2nHArcS"></span>0</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                    <div id="sc-sticky-header-portal"></div>
                </div>
            </div>
        </header>
    </div>
    <!--     <section class="hyiii">
        <div>
            <div class="src-GlobalBanner-Column-Column_column" style="background-color: rgb(35, 35, 35);">
                <div class="src-GlobalBanner-Unit-Unit_unit src-GlobalBanner-Unit-Unit_unitCenter">
                    <div class="src-GlobalBanner-Content-Content_content" style="font-size: 14px; color: rgb(255, 255, 255);"><span class="src-GlobalBanner-Content-Content_copy"><strong>Привет! Впервые тут?<br>

                                Получи скидку -{{$promo[0]->pros}}% на свой первый заказ в {{$settings->project_name}}! Используй промокод: {{$promo[0]->promo}}
</strong>
                            <div id="gtx-trans" style="position: absolute; left: -85px; top: -25px;">
                                <div class="gtx-trans-icon">&nbsp;</div>
                            </div>
                        </span></div>
                </div>
            </div>
        </div>
    </section> -->
    @yield('content')
    </div>
    </div>
    </main>
    <div id="overlay"></div>
    <div class="modal" id="login">
        <div id="register-form" class="form form-register js-form tran1  ">
            <h1 class="qa-use-email last-child">ВОЙТИ ЧЕРЕЗ ЭЛЕКТРОННУЮ ПОЧТУ</h1>
            <div class="form form-login">
                <form id="signInForm" method="POST" action="{{ route('login') }}">
                    @csrf <fieldset>
                        <div class="mobile-spacer">
                            <div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="qa-email-label" for="EmailAddress" id="EmailLabel">Адрес электронной почты</label>
                            <div class="input-wrapper" aria-labelledby="EmailLabel">
                                <input class="qa-lastname-textbox" id="EmailAddress" name="email" type="email" maxlength="100" type="text" value="">
                                @error('email')
                                <span class="field-validation-valid qa-email-validation">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="field">
                            <label class="qa-password-label" for="Password" id="PasswordLabel">Пароль</label>
                            <div class="input-wrapper" aria-labelledby="PasswordLabel">
                                <input id="Password" class="qa-password-textbox" name="password" type="password">
                                @error('password')
                                <span class="field-validation-valid qa-email-validation">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="submit">
                            <input type="submit" return="false" value="Войти" class="g-recaptcha qa-submit qa-css3-transition-finished">
                        </div>
                        <!-- 
                        <div class="forgotten-password">
                            <a class="qa-forgot-password adobeTrackedButton" style="    color: #2d2d2d; cursor: pointer;" >Забыли пароль?</a>
                        </div> -->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="chat_rules">
        <div id="register-form" class="form form-register js-form tran1  ">
            <h1 class="qa-use-email last-child">Зарегистрироваться, указав адрес электронной почты</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset>
                    <div class="field">
                        <label class="qa-email-label" for="Email" id="EmailLabel">Адрес электронной почты</label>
                        <div class="input-wrapper" aria-labelledby="EmailLabel">
                            <input class="qa-lastname-textbox" id="Email" name="email" type="email" maxlength="100" type="text" value="{{ old('email') }}">
                            @error('email')
                            <span class="field-validation-valid qa-email-validation">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="field">
                        <label class="qa-firstname-label" for="FirstName" id="FirstNameLabel">Имя</label>
                        <div class="input-wrapper" aria-labelledby="FirstNameLabel">
                            <input class="qa-firstname-textbox" id="FirstName" maxlength="100" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text">
                            @error('name')
                            <span class="field-validation-valid qa-firstname-validation">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="field">
                        <label class="qa-password-label" for="password_reg" id="PasswordLabel">Пароль</label>
                        <div class="input-wrapper" aria-labelledby="PasswordLabel">
                            <input id="password_reg" class="qa-password-textbox" type="password" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="field-validation-valid qa-email-validation">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="field">
                        <label class="qa-password-label" for="password_reg2" id="PasswordLabel2">Повторите пароль</label>
                        <div class="input-wrapper" aria-labelledby="PasswordLabel2">
                            <input id="password_reg2" class="qa-password-textbox" name="password_confirmation" type="password" required autocomplete="new-password">
                            <span class="field-validation-valid qa-password-validation" data-valmsg-for="Password" data-valmsg-replace="true" id="passwordValidationMessage"></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <span class="field-validation-valid qa-tandc-validation" data-valmsg-for="TermsAndConditions" data-valmsg-replace="true"></span>
                    <div class="terms">
                        <label>
                            <span class="qa-tandc-label">
                                Чтобы использовать ASOS, тебе должно быть 16 лет или больше.<br>
                                Создавая личный кабинет, вы соглашаетесь с нашими</span>
                            <a href="http://www.asos.com/ru/terms-and-conditions/" id="terms-and-conditions" class="qa-tandc-link" data-st-tagname="id-register-termsAndConditions-click" target="_blank" rel="noopener">Условиями использования</a> &amp; <a target="_blank" href="/privacy-policy" id="privacy-policy" class="qa-privacypolicy-link" data-st-tagname="id-register-privacyPolicy-click" rel="noopener">Политикой Конфиденциальности</a>
                        </label>
                    </div>
                    <div class="submit">
                        <input type="submit" return="false" value="Зарегистрироваться" class="g-recaptcha qa-submit qa-css3-transition-finished">
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div id="chrome-footer">
        <footer class="QgXuFU4" data-testid="footer" data-reactroot="">
            <div class="_1pKlxSp">
                <div class="tlbAWm8">
                    <div class="_3oMZ131" data-testid="social-links-bar"><a class="_119KPCL _2NargtT" href="{{$settings->facebook}}" target="_blank" rel="noopener noreferrer" data-testid="social-link" aria-label="Facebook"><span class="_2kp5rGp" aria-hidden="true">Facebook</span></a><a class="_119KPCL _1Yb89Mi" href="{{$settings->Vk}}" target="_blank" rel="noopener noreferrer" data-testid="social-link" aria-label="Instagram"><span class="_2kp5rGp" aria-hidden="true">Instagram</span></a><a class="_119KPCL _2FaCbHq" href="{{$settings->Instagram}}" target="_blank" rel="noopener noreferrer" data-testid="social-link" aria-label="Vk"><span class="_2kp5rGp" aria-hidden="true">Vk</span></a></div>
                </div>
                <div class="_3MhG77c"></div>
                <ul class="Oz24g0e"></ul>
                <div class="_3RUU0vJ">
                    <div class="IIfXyce">
                        <details class="_1Rkc4-5" open="" data-testid="footer-links">
                            <summary class="_2tSOCeL _3b2aD_j" tabindex="-1">Помощь и информация</summary><a class="_1OV98kg _3b2aD_j _3b2aD_j _20yDehE" href="/faq">Помощь</a><a class="_1OV98kg _3b2aD_j _3b2aD_j _20yDehE" href="/orders">Отследить заказ</a>
                        </details>
                        <details class="_1Rkc4-5" open="" data-testid="footer-links">
                            <summary class="_2tSOCeL _3b2aD_j" tabindex="-1">Подробнее об ASOS</summary><a class="_1OV98kg _3b2aD_j _3b2aD_j _20yDehE" href="/terms-and-conditions/">Правила и условия</a><a class="_1OV98kg _3b2aD_j _3b2aD_j _20yDehE" href="/accessibility/">Доступность</a>
                        </details>
                    </div>
                </div>
            </div>
            <div class="_1Ev2rfP _1H7KbM7">
                <div class="_2ACiVrR" data-testid="legalbar">
                    <p class="_3UHB4oU">©
                        <!-- -->2020
                        <!-- --> {{$settings->project_name}}</p>
                    <ul class="_35pEoqY">
                        <li><a class="_1J94hL-" href="/privacy-policy">Конфиденциальность и cookie-файлы</a></li>
                        <li><a class="_1J94hL-" href="/terms-and-conditions/">Правила и условия</a></li>
                        <li class="_1tuIBvc"><a class="_1J94hL-" href="/accessibility/">Доступность</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <div id="chrome-welcome-mat"></div>
    <div id="chrome-info-banner"></div>
    <script charset="UTF-8">
    var inproccess = false;
    $('body').delegate('.m_open', 'click', function(e) {
        e.preventDefault();
        if (!inproccess) {
            $('.modal').fadeOut(200);
            inproccess = true;
            $('#overlay').fadeIn(300);
            $('#full_container').addClass('blurred');
            t_id = $(this).attr('href');

            target = $(t_id.replace('/', ''));
            target.css({
                'margin-left': target.outerWidth() / 2 * -1,
                'margin-top': target.outerHeight() / 2 * -1,
                'position': 'fixed'
            });
            /*if ($(window).scrollTop() < 100) { 
                target.css('top', 100+$(window).height()/2);
            } else {
                target.css('top', $(window).scrollTop()+$(window).height()/2);
            }            */

            target.fadeIn(300);
            setTimeout(function() {
                inproccess = false;
            }, 450);

        }
    });

    $('body').delegate('#overlay, .close, .modal-delivery-and-returns-content', 'click', function(e) {
        if (!inproccess) {
            inproccess = true;
            $('#overlay').fadeOut(400);
            $('.modal').fadeOut(200);
            inproccess = false;
        }
    });


    @if(Auth::user())

    function prod_f(e) {
        var prod = [];
        prod.push({ 'id': $(e).data('id'), 'name': $(e).attr('data-name'), 'sum': $(e).attr('data-sum'), 'photo': $(e).attr('data-photo'), 'colour': $(e).attr('data-colour') });

        $.ajax({
            url: '/saved-lists_save',
            data: {
                'id': $(e).data('id'),
            },
            type: 'POST',
            success: function(data) {
                if (data.success == true) {
                    $(e).html(`<span class="_30BqGyh"><i class="fas fa-heart" aria-hidden="true"></i></span>`);
                } else {
                    console.log("error");
                }
            },
            error: function(msg) {
                console.log(msg);
            }
        });
    }

    function buy(e) {
        $.ajax({
            url: '/buy_add',
            data: {
                'id': $(e).data('id'),
            },
            type: 'POST',
            success: function(data) {
                if (data.success == true) {
                    $(e).attr("disabled", true);
                } else {
                    console.log("error");
                }
            },
            error: function(msg) {
                console.log(msg);
            }
        });
    }

    localStorage.removeItem('prod');
    @else

    function prod_f(e) {
        var prod = [];
        if (localStorage.getItem('prod')) {
            prod = JSON.parse(localStorage.getItem('prod'));
        }
        prod.push({ 'id': $(e).data('id'), 'name': $(e).attr('data-name'), 'sum': $(e).attr('data-sum'), 'photo': $(e).attr('data-photo'), 'colour': $(e).attr('data-colour') });
        localStorage.setItem('prod', JSON.stringify(prod));
        $(e).html(`<span class="_30BqGyh"><i class="fas fa-heart" aria-hidden="true"></i></span>`);
    }
    @endif

    </script>
</body>

</html>
