
@extends('index')

@section('content')
<title>{{$p->name}} | {{$settings->project_name}}</title>
<link href="/temple/css/productpage.css" rel="stylesheet">
<link href="/temple/css/productpage_menu.css" rel="stylesheet">
<div id="chrome-breadcrumb">
    <div>
        <nav aria-label="breadcrumbs" class="_1MMuO3r">
            <ol class="q0MjRbt">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <span aria-hidden="true">›</span>
                    {{$p->name}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<main id="chrome-app-container">
    <div class="asos-product single-product pg-in-stock" id="asos-product">
        <section id="core-product" class="core-product-container">
            <div class="layout-width">
                <div id="gallery-content" class="gallery-content-wrapper">
                    <div class="product-gallery">
                        <!-- ko if: !isMobile-->
                        <div class="gallery-aside-wrapper">
                            <p id="thumbnailsDescription" data-bind="text: state.resources.pdp_media_gallery_thumbnail_instruction">Нажми на изображение, чтобы увеличить его</p>
                            <ul class="thumbnails" role="region" style="display: none;">
                                <!-- ko foreach: galleryItems-->
                                <!-- ko if: $index() > 0  -->
                                <!-- /ko -->
                                <!-- ko if: $index() > 0  -->
                                <li class="image-thumbnail active" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }" aria-current="true">
                                    <button >
                                        <!-- ko if: $index() === 1 -->
                                        <img  src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-1-white?$S$&amp;wid=40&amp;fit=constrain" alt="Миниатюрное изображение 1 4">
                                        <!-- /ko -->
                                        <!-- ko if: $index() > 1 -->
                                        <!-- /ko -->
                                    </button>
                                </li>
                                <!-- /ko -->
                                <!-- ko if: $index() > 0  -->
                                <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                                    <button data-bind="click: $parent.selectThumbnail.bind($data, $index())">
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() > 1 -->
                                        <img data-bind="attr: { src: url + '?$S$&amp;wid=40&amp;fit=constrain', alt: $parent.getThumbnailAlt($index())}" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-2?$S$&amp;wid=40&amp;fit=constrain" alt="Миниатюрное изображение 2 4">
                                        <!-- /ko -->
                                    </button>
                                </li>
                                <!-- /ko -->
                                <!-- ko if: $index() > 0  -->
                                <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                                    <button data-bind="click: $parent.selectThumbnail.bind($data, $index())">
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() > 1 -->
                                        <img data-bind="attr: { src: url + '?$S$&amp;wid=40&amp;fit=constrain', alt: $parent.getThumbnailAlt($index())}" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-3?$S$&amp;wid=40&amp;fit=constrain" alt="Миниатюрное изображение 3 4">
                                        <!-- /ko -->
                                    </button>
                                </li>
                                <!-- /ko -->
                                <!-- ko if: $index() > 0  -->
                                <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                                    <button data-bind="click: $parent.selectThumbnail.bind($data, $index())">
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() > 1 -->
                                        <img data-bind="attr: { src: url + '?$S$&amp;wid=40&amp;fit=constrain', alt: $parent.getThumbnailAlt($index())}" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-4?$S$&amp;wid=40&amp;fit=constrain" alt="Миниатюрное изображение 4 4">
                                        <!-- /ko -->
                                    </button>
                                </li>
                                <!-- /ko -->
                                <!-- /ko -->
                            </ul>

                        </div>
                        <!-- /ko -->
                        <div class="product-carousel" tabindex="-1" id="product-gallery" role="region"  aria-label="Карусель продуктов">
                            <div class="window" data-bind="swipe" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="selling-fast" data-bind="visible: showSellingFastLabel">
                                    <span class="selling-fast__label" data-bind="text: state.resources.pdp_misc_selling_fast">Успей купить</span>
                                </div>
                                <div class="gallery-images" data-bind="foreach: galleryItems, css: { animate : animate() }, style: { width : galleryWidth, marginLeft : galleryPosition }" style="width: 500%; margin-left: -100%;">
                                    <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="0" aria-hidden="true" style="width: 20%;">
                                        <div class="asos-media spinset imageviewer" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div class="asos-media-players amp-relative">
                                                <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                                    <div class="amp-spinner amp-relative">
                                                        <div class="amp-page amp-spin">

                                                            <div class="amp-page amp-overlay"></div>
                                                            <!-- ko if: !touchDevice -->
                                                            <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                            <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="c7us1t">
                                                                <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                            </button>
                                                            <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="c7us1t">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                            <!-- /ko -->
                                                            <div class="amp-page amp-images">
                                                                <div class="amp-frame">
                                                                    <div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-4?$XXL$&amp;wid=513&amp;fit=constrain" alt="{{$p->name}}" style="visibility: visible; width: 100%; height: 100%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                            <div class="amp-message-container">
                                                                <div class="amp-message-box">
                                                                    <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                                    <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() !== 1 -->
                                        <img class="gallery-image"  alt="{{$p->name}}" style="visibility: hidden;">
                                        <!-- /ko -->
                                    </div>
                                    <div class="image-container zoomable" data-bind="style: { width : $parent.itemWidth}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="1" style="width: 20%;">
                                        <div class="asos-media spinset imageviewer" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div class="asos-media-players amp-relative">
                                                <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                                    <div class="amp-spinner amp-relative">
                                                        <div class="amp-page amp-spin">
 
                                                            <div class="amp-page amp-overlay"></div>
                                                            <!-- ko if: !touchDevice -->
                                                            <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                            <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="kmbpw">
                                                                <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                            </button>
                                                            <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="kmbpw">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                            <!-- /ko -->
                                                            <div class="amp-page amp-images">
                                                                <div class="amp-frame">
                                                                    <div class="fullImageContainer" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;">
                                                                        <img class="img" src="{{$p->photo}}" alt="{{$p->name}}" style="visibility: visible; width: 100%; height: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                            <div class="amp-message-container">
                                                                <div class="amp-message-box">
                                                                    <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                                    <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: $index() === 1 -->
                                        <img class="gallery-image"  alt="{{$p->name}}" style="visibility: hidden;">
                                        <!-- /ko -->
                                        <!-- ko if: $index() !== 1 -->
                                        <!-- /ko -->
                                    </div>
                                    <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="2" aria-hidden="true" style="width: 20%;">
                                        <div class="asos-media spinset imageviewer"  style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div class="asos-media-players amp-relative">
                                                <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                                    <div class="amp-spinner amp-relative">
                                                        <div class="amp-page amp-spin">
                                                            <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                                                                <div class="amp-hint-container">
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <div class="amp-hint-gesture-img sprite drag"></div>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <span data-bind="text: messages.hintDragText">Перетащите для 360-градусного обзора</span>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="amp-page amp-overlay"></div>
                                                            <!-- ko if: !touchDevice -->
                                                            <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                            <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="p7gaec">
                                                                <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                            </button>
                                                            <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="p7gaec">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                            <!-- /ko -->
                                                            <div class="amp-page amp-images">
                                                                <div class="amp-frame">
                                                                    <div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img"  src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-2?$XXL$&amp;wid=513&amp;fit=constrain" alt="{{$p->name}}" style="visibility: visible; width: 100%; height: 100%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                            <div class="amp-message-container">
                                                                <div class="amp-message-box">
                                                                    <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                                    <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() !== 1 -->
                                        <img class="gallery-image" alt="{{$p->name}}" style="visibility: hidden;">
                                        <!-- /ko -->
                                    </div>
                                    <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="3" aria-hidden="true" style="width: 20%;">
                                        <div class="asos-media spinset imageviewer"  style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div class="asos-media-players amp-relative">
                                                <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                                    <div class="amp-spinner amp-relative">
                                                        <div class="amp-page amp-spin">
                                                            <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                                                                <div class="amp-hint-container">
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <div class="amp-hint-gesture-img sprite drag"></div>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <span data-bind="text: messages.hintDragText">Перетащите для 360-градусного обзора</span>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="amp-page amp-overlay"></div>
                                                            <!-- ko if: !touchDevice -->
                                                            <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                            <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="9pyug9">
                                                                <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                            </button>
                                                            <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="9pyug9">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                            <!-- /ko -->
                                                            <div class="amp-page amp-images">
                                                                <div class="amp-frame">
                                                                    <div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-3?$XXL$&amp;wid=513&amp;fit=constrain" alt="{{$p->name}}" style="visibility: visible; width: 100%; height: 100%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
  
                                                        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                            <div class="amp-message-container">
                                                                <div class="amp-message-box">
                                                                    <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                                    <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() !== 1 -->
                                        <img class="gallery-image" alt="{{$p->name}}" style="visibility: hidden;">
                                        <!-- /ko -->
                                    </div>
                                    <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="4" aria-hidden="true" style="width: 20%;">
                                        <div class="asos-media spinset imageviewer" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div class="asos-media-players amp-relative">
                                                <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                                    <div class="amp-spinner amp-relative">
                                                        <div class="amp-page amp-spin">
                                                            <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                                                                <div class="amp-hint-container">
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <div class="amp-hint-gesture-img sprite drag"></div>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                    <div class="amp-hint-gesture amp-first">
                                                                        <span data-bind="text: messages.hintDragText">Перетащите для 360-градусного обзора</span>
                                                                    </div>
                                                                    <div class="amp-clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="amp-page amp-overlay"></div>
                                                            <!-- ko if: !touchDevice -->
                                                            <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                            <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="r9dno7">
                                                                <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                            </button>
                                                            <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="r9dno7">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                            <!-- /ko -->
                                                            <div class="amp-page amp-images">
                                                                <div class="amp-frame">
                                                                    <div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: { src: url + '?$XXL$&amp;wid=513&amp;fit=constrain', alt: $parent.getImageAlt($index()) }, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" src="https://images.asos-media.com/products/belyj-krop-top-bez-rukavov-v-rubchik-bershka/21233934-4?$XXL$&amp;wid=513&amp;fit=constrain" alt="{{$p->name}}" style="visibility: visible; width: 100%; height: 100%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                            <div class="amp-message-container">
                                                                <div class="amp-message-box">
                                                                    <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                                    <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: $index() === 1 -->
                                        <!-- /ko -->
                                        <!-- ko if: $index() !== 1 -->
                                        
                                        <!-- /ko -->
                                    </div>
                                </div>
                               
                                <!-- ko if: isMobile-->
                                <!-- /ko -->
                            </div>
                            
                            <div class="asos-media spinset spinviewer" style="display: none; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="asos-media-players amp-relative">
                                    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
                                        <div class="amp-spinner amp-relative">
                                            <div class="amp-page amp-spin">
                                                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                                                    <div class="amp-hint-container">
                                                        <div class="amp-hint-gesture amp-first">
                                                            <div class="amp-hint-gesture-img sprite drag"></div>
                                                        </div>
                                                        <div class="amp-clear"></div>
                                                        <div class="amp-hint-gesture amp-first">
                                                            <span data-bind="text: messages.hintDragText">Перетащите для 360-градусного обзора</span>
                                                        </div>
                                                        <div class="amp-clear"></div>
                                                    </div>
                                                </div>
                                                <div class="amp-page amp-overlay"></div>
                                                <!-- ko if: !touchDevice -->
                                                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                                                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="jia8bd">
                                                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                                                </button>
                                                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="jia8bd">Нажми, чтобы увеличить. Используй клавиши со стрелками на клавиатуре для панорамирования изображения</p>
                                                <!-- /ko -->
                                                <div class="amp-page amp-images"></div>
                                            </div>
                                            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                                                <div class="amp-message-container">
                                                    <div class="amp-message-box">
                                                        <h2 data-bind="html: messages.errorHeaderText">Ошибка!</h2>
                                                        <p data-bind="html: messages.spinsetErrorMessageText">Возникла непредвиденная ошибка. Пожалуйста, проверьте свое подключение к Интернету и обновите видео.</p>
                                                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked">Обновить</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="asos-media"  style="visibility: hidden;">
                                <!-- ko if : isZeekitEnabled -->
                                <!-- /ko -->
                            </div>
                        </div>
                        <!-- ko if: isMobile-->
                        <!-- /ko -->
                        <div class="zeekit-models-modal" data-bind="component: { name: 'side-modal', params: { showModal: zeekitModelsIframeVisible, data: { zeekitIframe: zeekitModelsUrl, zeekitModelsIframeInitialised: zeekitModelsIframeInitialised } } }">
                            <div class="side-modal-overlay" data-bind="click: closeModal, css: openState"></div>
                            <div class="side-modal" data-bind="css: openState, attr: {'aria-label': data.ariaLabel}" role="region">
                                <!-- ko template: { nodes: $componentTemplateNodes, data: data } -->
                                <!-- ko if : zeekitModelsIframeInitialised -->
                                <!-- /ko -->
                                <!-- /ko -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout-aside">
                    <div id="oos-label">
                        <h3 class="product-out-of-stock-label" data-bind="text:state.resources.pdp_status_out_of_stock"></h3>
                    </div>
                    <div id="aside-content">
                        <div class="product-hero">
                            <h1>{{$p->name}}</h1>


                            <!-- /ko -->
                            <div class="product-price" id="product-price" data-bind="component: { name: &quot;product-price&quot;, params: {state: state, showGermanVatMessage: false, isDisplayPrice: true } }">
                                <div class="grid-row rendered">
                                    <span aria-hidden="true">
                                        <span data-id="rrp-price" data-bind="text: rrpPriceText, visible: showRrpPrice" class="product-prev-price" style="display: none;"></span>
                                        <span data-id="previous-price" data-bind="text: prevPriceText, visible: showPrevPrice" class="product-prev-price" style="display: none;"></span>
                                        <span data-id="from-price" data-bind="visible: showFromLabel, text: fromLabelText, css: { 'price-from-discounted' : isDiscountedPrice }" class="price-from" style="display: none;">От</span>
                                        <span class="current-price-container">

                                            @if(!$p->discount <= 0 && $p->discount < 100)
                                            <span>
                                                <span class="product-prev-price">{{$p->sum}} руб.</span>
                                                <span class="current-price-container">
                                                    <span class="current-price product-price-discounted">{{($p->sum - $p->sum*($p->discount/100))}} руб.</span>
                                                    <span class="product-discount-percent">(-{{$p->discount}}%)</span>
                                                </span>
                                            </span>
                                            @else
                                            <span class="current-price">{{$p->sum}} руб.</span>
                                            @endif

                                            

                                        </span>
                                        <span data-id="german-vat-message" data-bind="text: i18n.pdp_misc_vat_message, visible: showGermanVatMessage" class="product-german-vat" style="display: none;">inc. НДС</span>
                                    </span>
                                </div>
                                <!-- ko if: showPrevPrice -->
                                <!-- /ko -->
                            </div>
                            <!-- ko if: state.productData.isInStock -->
                            <div class="delivery-and-returns" data-bind="component: { name: &quot;delivery-and-returns&quot;, params: {state: state, hideDeliveryLink: false}}">
                                <!-- ko if : !hideDeliveryLink-->
                                <a class="link product-delivery m_open" href="#delivery"><span class="product-delivery-text" >Бесплатные доставка и возвраты*</span></a>
                                <!-- /ko -->
                            </div>
                            <!-- /ko -->
                            <div class="overall-rating" data-bind="component: { name: &quot;product-ratings&quot;, params: { state: state } }">
                                <!-- ko if : shouldRender -->
                                <!-- /ko -->
                            </div>
                        </div>
                        <div class="out-of-stock" data-bind="component: { name: &quot;out-of-stock&quot;, params: {state: state, data: product}}">
                            <!-- ko if: !inStock -->
                            <!-- /ko -->
                        </div>
                        <div id="product-colour" data-bind="component:{
                            name: &quot;product-colour&quot;,
                            params: {
                                hideLabels: false,
                                useShortSelectColourLabel: false,
                                state: state,
                                data: product,
                                hideOnOutOfStock : true,
                                context: &quot;main&quot;,
                                selectorIndex: 0}
                            }">
                            <!-- ko if: render -->
                            <section>
                                <div class="colour-size colour-component">
                                    <div class="grid-row colour-section">
                                        <label for="colourSelect" class="disabled" data-bind="text: colourLabel, visible: !hideLabels">ЦВЕТ:</label>
                                        <span class="product-colour">{{$p->colour}}</span>
                                        <div class="colour-size-select" data-bind="visible: colourDropdownVisible()" style="display: none;">
                                            <select id="main-colour-select-0" data-id="colourSelect" data-bind="optionsCaption: selectColourText,
                        disable: isDisabled,
                        options: data,
                        optionsAfterRender: setColourOptionText,
                        value: colour,
                        css:{ required : noColourSelected()},
                        attr: {
                            'id': colourSelectorId,
                            'aria-describedby': noColourSelected() ? 'selectColourError' : null,
                            'aria-invalid': noColourSelected() ? true : null
                        }">
                                                <option value="">Пожалуйста, выберите из 1 цветов</option>
                                                <option value="">Белый</option>
                                            </select>
                                            <!-- ko if: noColourSelected() -->
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /ko -->
                        </div>
                        <div class="component fit-analytics">
                            <div id="product-size">
                                <!-- ko if: render -->
                               
                                <!-- /ko -->
                            </div>
                            <div class="aside-action">
                                <div id="product-add">
                                    <div class="add-item" data-bind="visible: isVisible">
                                        <div class="is-add-item-saving" data-bind="visible: isBusy" style="display: none;"></div>
                                        <span class="aria-live" aria-role="status" aria-live="polite" aria-label=""></span>
                                        @if(Auth::user())
                                        <a class="add-button" onclick="buy(this); $(`._6iPIuvw[href='/orders'] span`).css('background-image', 'url(/temple/img/buy.png)');" data-id="{{$p->id}}">
                                            <span>Добавить в корзину</span>
                                        </a>
                                        @else
                                        <a href="#chat_rules" class="add-button m_open">
                                            <span>Зарегистрироваться</span>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div id="product-save">
                                    <div class="save-button-wrapper" data-bind="click: componentClicked">
                                        <button type="button" class="_2HTnAzH n8gMtm9" style="bottom: 0;    background-color: #eee;" onclick="prod_f(this);" data-name="{{$p->name}}" data-sum="{{$p->sum}}" data-photo="{{$p->photo}}" data-colour="{{$p->colour}}" data-id="{{$p->id}}">
                                        <span class="_30BqGyh"><i class="far fa-heart" aria-hidden="true"></i></span>
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <!-- ko if: showLowerSection -->
                            <!-- /ko -->
                        </div>
                        <div id="shipping-restrictions" data-bind="component:{
                            name: &quot;shipping-restrictions&quot;,
                            params: { state: state, data: product}
                            }">
  
                        </div>
                    </div>
                    <div class="stock-price-retry-oos " id="aside-content-oos">
                        <div class="out-of-stock" data-bind="component: { name: &quot;out-of-stock&quot;, params: {state: state, data: product}}"></div>
                    </div>
                    <div class="stock-price-retry " id="aside-content-retry">
                        <div data-bind="component: { name: &quot;stock-price-retry&quot;, params: {state: state }}">
                            <!-- ko if : state.showStockPriceRetry -->
                            <!-- /ko -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-description">
            <div class="layout-width">
                <div class="product-details" id="product-details">
                    <div id="product-details-container" class="overflow-container" data-bind="css: { open: isOpen()}, style: {'max-height':containerHeight()}">
                        @if($p->specifications)
                        <div class="col">
                            <div class="product-description">
                                <h2>Информация о товаре</h2>
                                    {!! $p->specifications !!}
                            </div>
                        </div>
                        @endif
                        <div class="col">
                            <div class="product-code">
                                <h2>КОД ТОВАРА</h2>
                                <p>{{$p->id}}</p>
                            </div>
                            @if($p->brand)
                            <div class="brand-description">
                                <h2>Бренд</h2>
                                    {!! $p->brand !!}
                            </div>
                            @endif
                        </div>
                        @if($p->care)
                        <div class="col">
                            <div class="care-info">
                                <h2>УХОД</h2>
                                    {!! $p->care !!}
                            </div>
                        </div>
                        @endif
                        <div class="show-more" data-bind="click:toggle">
                            <div class="fade">
                                <a class="show">ПОКАЗАТЬ БОЛЬШЕ</a>
                                <a class="show" style="display: none;">СКРЫТЬ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="pdp-react-app-ratingsAndReviews" style="clear:both"></div>
    
    <div id="pdp-react-app-carousels">
        <div aria-live="polite" role="status" class="_27VWA"></div>
        <section id="recentlyViewed" aria-labelledby="recentlyViewedTitle" class="Fw01K">
            <div class="_2BD9n">
                <div class="_2s48x">
                    <h1 id="recentlyViewedTitle" class="_3Nd6W">ТАКЖЕ ПОСМОТРИТЕ</h1>
                    
                </div>
                <section data-test-id="recentlyViewedCarousel">
                    <div class="MMAEH">
                        <div class="_2crUR">
                            <ul class="_3065z">
                                @foreach ($rand_p as $rand)
                                <li class="_2fOXR">
                                    <div class="M8YO0">
                                        <a href="/products/{{$rand->id}}" class="i1CPs">
                                            <img src="{{$rand->photo}}" class="_1hDy0">
                                        </a>
                                        <button type="button" class="_2HTnAzH n8gMtm9" onclick="prod_f(this);" data-name="{{$rand->name}}" data-sum="{{$rand->sum}}" data-photo="{{$rand->photo}}" data-colour="{{$rand->colour}}" data-id="{{$rand->id}}" class="_2HTnAzH n8gMtm9"> 
                                            <span class="_30BqGyh">
                                                <i class="far fa-heart" aria-hidden="true"></i>
                                            </span> 
                                        </button>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <style>
    .google-ad {
        width: 100%;
        max-width: 960px;
        margin: 0 auto;
    }

    .google-ad iframe:not([height="0"]) {
        margin: 32px 0;
    }

    @media(min-width: 720px) {
        .google-ad iframe:not([height="0"]) {
            margin: 36px 0;
        }
    }
    .n8gMtm9{
            bottom: 10px;
    }
    .show{
        cursor: pointer;
    }
    ._1hDy0{
            height: 215px;
    }
    </style>
    <div class="google-ad" id="div-gpt-ad-pdp-1" style="">
        <div id="google_ads_iframe_/78607200/WEB/RU/WW/PDP_0__container__" style="border: 0pt none; width: 100%; height: 0%;"></div>
    </div>
</main>

<div class="modal" id="delivery" style="display: none;">
    <div class="asos-product single-product pg-in-stock">
    
  <dialog id="modal" class="modal-delivery-and-returns-content open">
    <div class="modal-window" role="region" aria-label="диалог о способах доставки">
        <div class="loader fullwidth"></div>
        <div class="modal-title">
            <h1>Способы доставки</h1>
            <div class="modal-close">
                <button class="link"><span class="product-close">close</span></button>
            </div>
        </div>
        <div class="modal-scroll">
            <div class="modal-content"><div id="modal-delivery-and-returns-content"><div class="delivery-and-returns-content">

    <!-- ko if: isUsa() --><!-- /ko -->

    <!-- ko if: !isUsa() -->
    <div data-bind="component: { name: 'delivery-and-returns-content-table', params: { data: { content: content, closeModalCallback: closeModalCallback }, state: state } }"><div class="delivery-options">
    <!-- ko if : !isMobile-->
    <hr>
    <!-- ko foreach: content.deliveryGroups -->
    <table>
        <thead>
            <tr class="delivery-and-returns-group-name">
                <th scope="colgroup" colspan="3">
                    <h2 data-bind="text: name">Тип</h2>
                </th>
            </tr>
            <!-- ko if:$index()===0 -->
            <tr class="delivery-and-returns-headings">
                <th scope="col" data-bind="text: $parent.content.deliveryGroupHeaders.type">доставки</th>
                <th scope="col" data-bind="text: $parent.content.deliveryGroupHeaders.when">Когда?</th>
                <th scope="col" data-bind="text: $parent.content.deliveryGroupHeaders.howMuch">Сколько?</th>
            </tr>
            <!-- /ko -->
        </thead>
        <tbody data-bind="foreach: options">
            <tr>
                <th scope="row" class="delivery-type" data-bind="html: type">Стандартная доставка</th>
                <td class="delivery-when" data-bind="html: when">Ожидаемая дата доставки {{date('D, M d Y', time()+14*24*60*60)}}</td>
                <td class="delivery-how-much" data-bind="with: $parents[1].formatHowMuch(howMuch)">
                    <span class="delivery-cost" data-bind="html: price">725,56 руб.</span>
                    <span class="delivery-free-condition" data-bind="html: freeCondition"><strong>бесплатно</strong>– <span>при заказе на сумму от&nbsp;</span>3&nbsp;699,57 руб.</span>
                    <span class="delivery-premier-qualifier" data-bind="html: premierQualifier"></span>
                </td>
            </tr>
        
            <tr>
                <th scope="row" class="delivery-type" data-bind="html: type">Экспресс-доставка</th>
                <td class="delivery-when" data-bind="html: when">Ожидаемая дата доставки {{ date('D, M d Y', time()+14*24*60*60)}}</td>
                <td class="delivery-how-much" data-bind="with: $parents[1].formatHowMuch(howMuch)">
                    <span class="delivery-cost" data-bind="html: price">1&nbsp;649,25 руб.</span>
                    <span class="delivery-free-condition" data-bind="html: freeCondition"><strong>бесплатно</strong>– <span>при заказе на сумму от&nbsp;</span>7&nbsp;649,93 руб.</span>
                    <span class="delivery-premier-qualifier" data-bind="html: premierQualifier"></span>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    
    <table>
        <thead>
            <tr class="delivery-and-returns-group-name">
                <th scope="colgroup" colspan="3">
                    <h2 data-bind="text: name">Нажать и забрать</h2>
                </th>
            </tr>
            <!-- ko if:$index()===0 --><!-- /ko -->
        </thead>
        <tbody data-bind="foreach: options">
            <tr>
                <th scope="row" class="delivery-type" data-bind="html: type">Экспресс-доставка курьером
Пункт выдачи товаров</th>
                <td class="delivery-when" data-bind="html: when">Ожидаемая дата доставки {{ date('D, M d Y', time()+7*24*60*60)}}</td>
                <td class="delivery-how-much" data-bind="with: $parents[1].formatHowMuch(howMuch)">
                    <span class="delivery-cost" data-bind="html: price">1&nbsp;649,25 руб.</span>
                    <span class="delivery-free-condition" data-bind="html: freeCondition"><strong>бесплатно</strong>– <span>при заказе на сумму от&nbsp;</span>7&nbsp;649,93 руб.</span>
                    <span class="delivery-premier-qualifier" data-bind="html: premierQualifier"></span>
                </td>
            </tr>
        
            <tr>
                <th scope="row" class="delivery-type" data-bind="html: type">Стандартная доставка - Пункт самовывоза</th>
                <td class="delivery-when" data-bind="html: when">Ожидаемая дата доставки {{ date('D, M d Y', time()+7*24*60*60)}}</td>
                <td class="delivery-how-much" data-bind="with: $parents[1].formatHowMuch(howMuch)">
                    <span class="delivery-cost" data-bind="html: price">725,56 руб.</span>
                    <span class="delivery-free-condition" data-bind="html: freeCondition"><strong>бесплатно</strong>– <span>при заказе на сумму от&nbsp;</span>3&nbsp;699,57 руб.</span>
                    <span class="delivery-premier-qualifier" data-bind="html: premierQualifier"></span>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>

</div></div>

</div></div></div>
        </div>
        <iframe class="modal-iframe"></iframe>
    </div>
</dialog>
</div>
    </div>

<script>
    $('.fade a').click(function() {

        if($(this).text() == 'ПОКАЗАТЬ БОЛЬШЕ'){
            $("#product-details-container").css({'max-height': '1000px'});
            $(this).fadeOut(500).queue(function() {
                $(".fade a:nth-child(2)").fadeIn(500);
            });
            
        } else {
            $("#product-details-container").css({'max-height': '139px'});
            $(this).fadeOut(500).queue(function() {
                $(".fade a:nth-child(1)").fadeIn(500);
            });
            
        }
        
            
        setTimeout(function() {
                $(".fade a").stop();
            }, 1000);
        
    });
</script>


@endsection
