
@extends('account')

@section('content')
<link href="/temple/css/order.css" rel="stylesheet">
<title>Корзина | {{$settings->project_name}}</title>
<?php $sum_all =0; ?>
<style>
    .loading-loadingContainer-2jySs{
        min-height: auto !important;
    }
</style>
<div class="_1qfLHRc1-rw9Klb8Z3NFbN _2aJXAI2ma9KgrDlb4ZFGF3 undefined">
    <h1><span class="_1b5Uk1dfLr1v6SwgJdVcJQ _1pS4foYSK0PGNJ8Ptnv20y">Мои заказы</span></h1>
</div>


@if($b > 0)
<script>
    console.log({!! $products_user !!});
</script>


<div id="bagApp">
    <div class="bag-app is-not-error-page is-recognised has-bag-items">
        <div class="bag-holder" style="display: flex;">
            <div class="bag-contents-wrapper">
                <div class="bag-contents-holder bag-contents-holder--items">

                    <bag-messages class="bag-messages-panel-product" params="messages: panelMessages.product">
                        <div class="bag-messaging-looper" data-bind="foreach: messages"></div>
                    </bag-messages>
                    <bag-item-list params="
                                items: bag.items,
                                subscriptionAlmostExpired: subscriptionAlmostExpired,
                                productsStockInfo: productsStockInfo">
                        <ul class="bag-items" data-bind="foreach: items">
                            <?php $sum_all = 0; ?>
                            @foreach ($products_user as $p)
                            <li class="bag-item-holder">
                                <div class="bag-item-padding">
                                    <div class="bag-item-border">
                                        <div class="bag-item-zoomer">
                                            <bag-item-product class="bag-item bag-item--product">
                                                <div class="bag-item-generic bag-item-container bag-item-container--product bag-item-generic--showing">
                                                    <div class="bag-item__left">
                                                        <bag-item-image class="bag-item-image">
                                                            <span class="bag-item-image">
                                                                <a href="/products/{{$p->id}}">
                                                                    <img class="bag-item-image-img" src="{{$p->photo}}">
                                                                </a>
                                                            </span>
                                                        </bag-item-image>
                                                    </div>
                                                    <div class="bag-item-descriptions">
                                                        <bag-price class="bag-item-price">
                                                            <div class="bag-item-price-holder">
                                                                @if(!$p->discount <= 0 && $p->discount < 100)
                                                                <span class="bag-item-price bag-item-price--current">{{($p->sum - $p->sum*($p->discount/100))}} руб.</span>
                                                                <?php $sum_all = $sum_all+ ($p->sum - $p->sum*($p->discount/100)); ?>
                                                                @else
                                                                <span class="bag-item-price bag-item-price--current">{{$p->sum}} руб.</span>
                                                                <?php $sum_all = $sum_all+ $p->sum; ?>
                                                                @endif
                                                            </div>
                                                        </bag-price>
                                                        <p class="bag-item-name">
                                                            <a href="/products/{{$p->id}}">{{$p->name}}</a>
                                                        </p>
                                                        
                                                        <bag-move-to-saved class="bag-item-save"> <button onclick="prod_f(this);" data-id="{{$p->id}}" class="bag-item-moveToSaved">Добавить в избранное</button>
                                                        </bag-move-to-saved>
                                                    </div>
                                                    <bag-edit-actions class="bag-item-actions-holder" >
                                                    </bag-edit-actions>
                                                    <bag-messages >
                                                        <div class="bag-messaging-looper" ></div>
                                                    </bag-messages>
                                                </div>
                                            </bag-item-product>
                                            <bag-remove class="bag-item-remove-holder" >
                                                <div class="bag-item-generic bag-item-generic--showing">
                                                    @if(!$p->discount <= 0 && $p->discount < 100)
                                                    <button class="bag-item-remove" onclick="del_buy(this);" data-id="{{$p->id}}" data-sum="{{($p->sum - $p->sum*($p->discount/100))}}"></button>
                                                    @else
                                                    <button class="bag-item-remove" onclick="del_buy(this);" data-id="{{$p->id}}" data-sum="{{$p->sum}}"></button>
                                                    @endif
                                                    
                                                </div>
                                            </bag-remove>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </bag-item-list>
                    <h3 class="bag-subtotal">
                        <span class="bag-subtotal-subtotal">Всего</span>
                        <span class="bag-subtotal-price">{{$sum_all}} руб.</span>
                    </h3>
                </div>
                <div class="bag-main-bottom-panel">
                    <bag-subscription-options >
                    </bag-subscription-options>
                    <bag-delivery-information params="bag: bag"><a class="
        bag-panel-link
        bag-panel-link--delivery
    " data-bind="
        attr: { 
            title: translations.deliveryInfo.title, 
            href: deliveryInfoLink() 
        }
    " target="_blank" title="БЕСПЛАТНАЯ СТАНДАРТНАЯ ДОСТАВКА*" href="https://www.asos.com/ru/customer-service/delivery/">
                            <div class="
            bag-panel-container
            bag-panel-container--delivery
        ">
                                <h4 class="bag-panel-title" data-bind="text: translations.deliveryInfo.title">БЕСПЛАТНАЯ СТАНДАРТНАЯ ДОСТАВКА*</h4>
                                <p class="bag-panel-content" data-bind="text: translations.deliveryInfo.text">Также доступны более быстрые опции</p>
                            </div>
                        </a>
                        <a class=" bag-panel-link bag-panel-link--returns" target="_blank" href="https://www.asos.com/ru/customer-service/returns/" title="45 ДНЕЙ">
                        </a>
                        <!--
    TODO: Removed until we have the ability to localise for all countries
    <p class="bag-delivery-info-disclaimer" data-bind="text: translations.deliveryInfo.disclaimer"></p>
-->
                    </bag-delivery-information>
                </div>
                <!-- /ko -->
                <!-- /ko -->
            </div>
            <div class="bag-secondary-content-wrapper" data-bind="
                css: {
                'bag-secondary-content-wrapper--fixed': fixSecondaryContent,
                'bag-secondary-content-wrapper--fixed--max': stopFixSecondaryContent
                },
                style: { top: secondaryContentFixedPosition }" style="top: 10px;">
                <div class="bag-contents-holder bag-contents-holder--total">
                    <!-- ko if: beingEdited -->
                    <!-- /ko -->
                    <!-- ko ifnot: loading -->
                    <bag-total class="bag-total-holder-root bag-total-holder-root--main" params="
                                    subTotal: bag.summary.totalPrice.text,
                                    delivery: bag.delivery,
                                    items: bag.items,
                                    deliveryAddress:
                                    bag.deliveryAddress,
                                    quickLink: false,
                                    canShowDelivery: canShowDelivery
                                ">
                        <div class="bag-total-wrapper">
                            <div class="bag-total-holder bag-title-holder bag-title-holder--total" data-bind="
            css: {
                'bag-total-holder--quickLink': quickLink,
                'bag-total-holder--german': displayVatMessage
            }
        ">
                                <span class="bag-title-quicklink bag-title-quicklink--meta">
                                    <h2 class="bag-title bag-title--total">Итого</h2>
                                    <p class="bag-total-title-holder bag-total-title-holder--subtotal">
                                        <span class="bag-total-title bag-total-title--subtotal">Всего</span>
                                        <span class="bag-total-price bag-total-price--subtotal" >{{$sum_all}} руб.</span>
                                    </p>
                                </span>
                                <!-- ko if: canShowDelivery -->
                                <bag-delivery-options params="delivery: delivery">
                                    <p class="bag-total-title-holder bag-total-title-holder--delivery">
                                        <span class="bag-total-title bag-total-title--delivery">Доставка</span>
                                        
                                    </p>
                                    <!-- ko if: displaySaleTax -->
                                    <!-- /ko -->
                                    <!-- ko if: deliveryOptionsAvailable -->
                                    <div class="delivery-dropdown-holder">
                                        <span class="bag-item-selector--desktop">
                                            <select class="bag-item-selector" tabindex="-1" style="    height: 50px;">
                                                <option value="13">Стандартная доставка (бесплатно)</option>
                                                <option value="24">Экспресс-доставка курьером
                                                    Пункт выдачи товаров (бесплатно)</option>
                                                <option value="21">Стандартная доставка - Пункт самовывоза (бесплатно)</option>
                                                <option value="17">Экспресс-доставка (бесплатно)</option>
                                            </select>
                                        </span>

                                    </div>
                                    <!-- /ko -->
                                </bag-delivery-options>
                                <!-- /ko -->
                                <span class="bag-title-quicklink bag-title-quicklink--checkout">
                                    <p class="bag-total-button-holder">
                                        <a href="#" class="bag-total-button bag-total-button--checkout bag-total-button--checkout--total">ОПЛАТИТЬ</a>
                                    </p>
                                </span>
                            </div>
                        </div>
                    </bag-total>
                    <bag-payment-options params="bag: bag">
                        <div class="bag-payment-options">
                            <div class="bag-payment-options-title" data-bind="
            localeText: {key: 'lang_payment_options_title'}
        ">МЫ ПРИНИМАЕМ:</div>
                            <!-- ko ifnot: loading -->
                            <img class="bag-payment-options-image" src="/temple/img/single.png">

                        </div>
                    </bag-payment-options>
                    <!-- <div class="bag-discount-message">Есть купон на скидку? Введите его на следующем этапе.</div> -->
                    <bag-messages class="bag-messages-panel-totals" params="messages: panelMessages.totals">
                        <div class="bag-messaging-looper" data-bind="foreach: messages"></div>
                    </bag-messages>

                </div>
            </div>

        </div>
        <bag-expired-items-message-block>
                <div class="bag-view-saved-items-holder">
                    <h2 class="bag-expired-items-header">Ищете сохраненные товары?</h2>
                    <p class="bag-expired-items-text">Не беспокойтесь! Вы можете найти их в Избранном.</p>
                    <a class="view-saved-items-btn" href="/saved-lists">СМОТРЕТЬ ВСЕ СОХРАНЕННЫЕ ТОВАРЫ</a>
                </div>
            </bag-expired-items-message-block>
    </div>
</div>
@else 
<div class="loading-loadingContainer-2jySs">
    <div class="_5M2UV7oot4WAc-Qy1sSJ1">
        <div class="margin-container-addMargin-KMO5Q">
            <div class="card-card-3DNYN" data-auto-id="cardWrapper">
                <div class="card-section-panel-BcNjY card-section-topPadding-2p3l2 card-section-bottomPadding-K3SMN card-section-leftPadding-2p443 card-section-rightPadding-4gNBt" data-auto-id="card">
                    <div class="FIRwEukkWoFvSoZN5ARsT"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDQiIGhlaWdodD0iNDQiIHZpZXdCb3g9IjAgMCA0NCA0NCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjEgMTcuNjY3VjE1aDFhMSAxIDAgMTAtMS0xaC0yYTMgMyAwIDExNCAyLjgzdi44MzdMMzQgMjV2MkgxMHYtMmwxMS03LjMzM3pNMjIgMjBsLTggNWgxNmwtOC01eiIgZmlsbD0iIzJEMkQyRCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+" alt="" class="_3k0M8OWUnx2v2WhFad8EVE _23TZb0hnfxZrbOrqYcIOzX">
                        <h2 class="_2h7tM8psdzN6GH5Inr9jYb">У вас на данный момент нет заказов</h2>
                        <p class="_1oWk0TEEM0vkE5-RaIq0UP"><span>Приступайте к шопингу на {{$settings->project_name}} как можно скорее…</span></p>
                        <div class=""><a class="button-button-2JMYQ button-primary-1-Z5a button-large-3FkYz" role="button" rel="noreferrer noopener" href="/"><span class="button-content-1ybTG">Начать шоппинг</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif 
<script>
    var sum_all = {!! $sum_all !!};
	$('.DrvAPUms9TXGB7LgSTgFW').removeClass("_1r0vUu7pnBDIUGnfQzhxky");
	$('.DrvAPUms9TXGB7LgSTgFW[href="/orders"]').addClass("_1r0vUu7pnBDIUGnfQzhxky");
</script>
@endsection
