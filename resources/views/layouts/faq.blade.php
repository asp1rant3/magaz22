
@extends('index')

@section('content')
<!-- 1 -->
    <link href="/temple/css/faq.css" rel="stylesheet">
    <title>Служба Поддержки | {{$settings->project_name}}</title>
<style>
    .CardListItem_textWrapper{
        text-decoration: none !important;
    }
</style>
<main id="chrome-app-container">
    <div id="react-root">
        <div class="index_appLayout" data-reactroot="">
            <div class="Homepage_mainWrapper">
                <div style="margin-top:0" class="Card_card Card_container">
                    <div class="Hero_heroContainer Hero_heroHomepage " style="background-image: url(/temple/img/homepage-header-image-large-min.png);">
                        <h1 class="Hero_heroText" style="text-transform:uppercase;font-weight:900" id="searchHeader">Служба Поддержки</h1>
                        <div class="Hero_searchBar">

                        </div>
                    </div>
                </div>

                <div class="Homepage_helpTopicsOuterWrapper">
                    <h2 class="HomepageHeader_header CardHeader_header i__imported_header_0" style="text-transform:uppercase">Разделы &quot;Помощь&quot;</h2>
                    <div>
                        <div class="HelpTopicsHomepage_topicContainer">
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor"  tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="21">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M3.035 18H0V0h21l1 2h5c1.667 2.657 5 7 5 7v9h-3.115c-.164 1.653-1.34 3-3.369 3-2.028 0-3.279-1.424-3.367-3H9.965a3.502 3.502 0 01-6.93 0zm6.63-1.995a3.5 3.5 0 00-6.329-.002M30 13v3h-1.142c-.718-1.305-1.813-1.963-3.285-1.975-1.561-.012-2.702.646-3.424 1.975H22V4h4l4 6v3zm-.651-4l.652 1H24V6h3.325l1.71 2.556.314.444zM2 2h18v14H2V2zm23.5 14a1.5 1.5 0 11-.001 3.001A1.5 1.5 0 0125.5 16zm-19 0a1.5 1.5 0 11-.001 3.001A1.5 1.5 0 016.5 16zm22.535-7.444L27.935 7H25v2h4.332l-.297-.444z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Доставка</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Доставка почтой</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Экспресс-доставка</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Доставка в пункт самовывоза</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor"  tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M11.5 14.5L10.064 16 6 12l4-4 1.5 1.5L9.699 11H20v9H0V3.605L3 0h14l3 3.605V9h-2V6H2v12h16v-5H9.699l1.801 1.5zM9 2H4L2.5 4H9V2zm7 0h-5v2h6.5L16 2z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Вопросы о Возвратах</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Условия Возврата</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Как вернуть товар</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Вы получили мой возврат?</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor" tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M17 0l3 4v16H0V4l3-4h14zm1 6H2v12h16V6zm-.5-2L16 2h-5v2h6.5zM9 2H4L2.5 4H9V2z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Проблемы с Заказами</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Брак</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Неправильный товар</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Недостающий товар</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor"  tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M0 14v-2.588l9-5V4h1a1 1 0 10-1-1H7a3 3 0 114 2.829v.583l9 5V14H0zm10-5.856L3.058 12h13.884L10 8.144z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Вопросы о Товарах</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Таблица размеров и инструкции по уходу</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Наличие товаров</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Поиск товаров</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor" tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M2 2v10h16V2H2zm18-2v14H0V0h20zm-2 3H2v4h16V3z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Оплата, Промокоды и Подарочные сертификаты</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Способы оплаты</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Промокоды и скидки</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Когда произведется оплата?</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="Card_card Card_homepageTopicWrapper">
                                <div>
                                    <div class="CardListItem_homepageTopicItem"><a class="CardListItem_anchor"  tabindex="0">
                                            <div class="CardListItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                    <path fill="#2D2D2D" fill-rule="evenodd" d="M5 10a5 5 0 1110.001.001A5 5 0 015 10zm15-2s-.966-.141-2.341-.318a7.897 7.897 0 00-.602-1.453c.848-1.102 1.428-1.886 1.428-1.886l-2.828-2.828s-.784.583-1.881 1.431a7.85 7.85 0 00-1.452-.603C12.144.964 12 0 12 0H8s-.141.966-.318 2.341a7.897 7.897 0 00-1.453.602c-1.102-.848-1.886-1.428-1.886-1.428L1.515 4.343s.583.784 1.431 1.881a7.856 7.856 0 00-.601 1.446C.962 7.852 0 8 0 8v4s.964.145 2.343.324c.152.503.353.985.597 1.441-.85 1.107-1.425 1.892-1.425 1.892l2.828 2.828s.785-.579 1.886-1.428c.456.244.938.446 1.441.598C7.852 19.038 8 20 8 20h4s.145-.964.324-2.343a7.894 7.894 0 001.441-.597c1.107.85 1.892 1.425 1.892 1.425l2.828-2.828s-.579-.785-1.428-1.887c.245-.457.447-.941.6-1.446C19.036 12.144 20 12 20 12V8z"></path>
                                                </svg></div>
                                            <h3 class="CardListItem_textWrapper">Технические Вопросы</h3>
                                        </a></div>
                                </div>
                                <div class="RelatedFaqWrapper_relatedFaqWrapper">
                                    <ul>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Регистрация</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Отменить заказ</a></li>
                                        <li><a href="#" class="RelatedFaqWrapper_relatedFaqItem">Изменить заказ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="Card_card Card_container">
                    <h2 class="HomepageHeader_header CardHeader_header i__imported_header_0" style="text-transform:uppercase">Хотите связаться с нами?</h2>
                    <div class="Card_card Card_half">
                        <div class="GetInTouch_buttonContainer"><a href="/to_contact_us" class="Button_buttonLargeWhite Button_button" style="text-transform:uppercase;font-weight:900">Связаться с нами</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
