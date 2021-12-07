
@extends('index')

@section('content')
    <title>ХОТИТЕ СВЯЗАТЬСЯ С НАМИ? | {{$settings->project_name}}</title>
    <link href="/temple/css/to_contact_us.css" rel="stylesheet">
<!-- 1 -->
<main id="chrome-app-container">
    <div id="react-root">
        <div class="index_appLayout" data-reactroot="">
            <div class="Contact_mainWrapper">
                <div class="Card_card Card_getInTouch" aria-live="polite" aria-relevant="additions text">
                    <div class="
          Hero_heroContainer
          Hero_getInTouch
          
        " style="background-image: url(/temple/img/get-in-touch-header-large.jpg);">
                        <h1 class="Hero_heroText" style="text-transform:uppercase;font-weight:900" id="mainContent">Хотите связаться с нами?</h1>
                    </div>
                    <ul>
                        <li class="CardListAnchorItem_topicItem">
                            <div class="CardListAnchorItem_disabled CardListAnchorItem_anchor">
                                <div class="CardListAnchorItem_imageWrapper"><svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 16.009A4.002 4.002 0 0115.994 12h12.012C30.215 12 32 13.8 32 16.009v7.982A4.002 4.002 0 0128.006 28H17.5L12 32V16.009zM14 28l2.5-2h11.506c1.1 0 1.994-.9 1.994-2.009V16.01A2.003 2.003 0 0028.006 14H15.994c-1.1 0-1.994.9-1.994 2.009V28zm3-8c0-.564.436-1 1-1 .564 0 1 .436 1 1 0 .564-.436 1-1 1-.564 0-1-.436-1-1zm4 0c0-.564.436-1 1-1 .564 0 1 .436 1 1 0 .564-.436 1-1 1-.564 0-1-.436-1-1zm4 0c0-.564.436-1 1-1 .564 0 1 .436 1 1 0 .564-.436 1-1 1-.564 0-1-.436-1-1z" fill="#DDD" fill-rule="evenodd"></path>
                                    </svg></div>
                                <div class="CardListAnchorItem_textWrapper">Начать чат (Чат временно недоступен)</div>
                            </div>
                        </li>
                        <li class="CardListAnchorItem_topicItem"><a class="CardListAnchorItem_anchor" href="mailto:{{$settings->email}}" data-value="Отправить нам письмо" tabindex="0">
                                <div class="CardListAnchorItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44">
                                        <path fill="#2D2D2D" fill-rule="evenodd" d="M32 14v16H12V14h20zm-18.001 4.185L14 28h16v-9.814L22 25l-8.001-6.815zM29.451 16H14.548L22 22.347 29.451 16z"></path>
                                    </svg></div>
                                <div class="CardListAnchorItem_textWrapper">Отправить нам письмо</div>
                            </a></li>

                        <li class="CardListAnchorItem_topicItem"><a class="CardListAnchorItem_anchor" href="{{$settings->Vk}}" data-value="Спросить в ВК" target="_blank" tabindex="0">
                                <div class="CardListAnchorItem_imageWrapper"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#507299" d="M22 42c11.046 0 20-8.954 20-20S33.046 2 22 2 2 10.954 2 22s8.954 20 20 20z"></path>
                                            <path fill="#FFF" d="M20.743 29.941h1.434s.433-.048.655-.292c.203-.224.197-.644.197-.644s-.028-1.969.865-2.258c.88-.286 2.012 1.902 3.21 2.743.907.636 1.596.497 1.596.497l3.205-.046s1.676-.105.881-1.453c-.065-.11-.463-.997-2.383-2.82-2.01-1.907-1.74-1.598.68-4.897 1.475-2.01 2.064-3.236 1.88-3.762-.176-.5-1.26-.368-1.26-.368l-3.609.023s-.267-.037-.466.084c-.194.119-.318.396-.318.396s-.572 1.555-1.333 2.877c-1.607 2.79-2.25 2.938-2.512 2.764-.611-.404-.458-1.622-.458-2.487 0-2.704.4-3.832-.782-4.123-.392-.097-.68-.162-1.684-.172-1.288-.013-2.378.004-2.994.313-.411.206-.728.664-.535.69.239.033.779.15 1.065.548.37.514.357 1.67.357 1.67s.213 3.182-.496 3.577c-.487.272-1.154-.282-2.587-2.813-.734-1.297-1.288-2.73-1.288-2.73s-.106-.268-.297-.411c-.231-.174-.555-.229-.555-.229l-3.429.023s-.515.015-.703.244c-.169.203-.014.624-.014.624s2.685 6.423 5.724 9.66c2.789 2.967 5.954 2.772 5.954 2.772z"></path>
                                        </g>
                                    </svg></div>
                                <div class="CardListAnchorItem_textWrapper">Спросить в ВК</div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
