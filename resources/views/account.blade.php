<!DOCTYPE html>

<html lang="ru-RU">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="/temple/js/jqeri.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/temple/css/my-account.css" rel="stylesheet" type="text/css">

    <style id="at-mbox-default-style">
    .mboxDefault {
        visibility: hidden;
    }
    </style>
    <style>
    .at-element-marker {
        visibility: visible;
    }
    </style>
    <style type="text/css">
    

    @keyframes button-fullPageLoadingAnimation-1mMff {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .button-button-2JMYQ {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0;
        border: 0;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        max-width: 330px;
        text-align: center;
        text-transform: uppercase
    }

    .button-button-2JMYQ:hover,
    .button-button-2JMYQ:focus {
        text-decoration: none;
    }

    .button-button-2JMYQ:disabled {
        pointer-events: none;
    }

    .button-content-1ybTG {
        display: block;
    }

    .button-disabled-3RuTi {
        pointer-events: none;
    }

    .button-large-3FkYz {
        font-size: 1.6rem;
        letter-spacing: 0.2rem;
        line-height: 2.4rem;
        padding: 10px;
        width: 100%;
    }

    .button-small-3weda {
        font-size: 1.4rem;
        letter-spacing: 0.05rem;
        line-height: 2rem;
        min-width: 112px;
        padding: 6px calc(2 * 4px);
    }

    .button-medium-1rtvH {
        font-size: 1.6rem;
        letter-spacing: 0.2rem;
        line-height: 2.4rem;
        width: 100%;
        min-width: 144px;
        padding: calc(2 * 4px) calc(2 * 4px);
    }

    .button-withIcon-2AkQO {
        overflow: visible;
        padding-left: 50px;
        padding-right: 50px;
        position: relative;
    }

    .button-icon-3YnjB {
        border-radius: 2px;
        display: inline-block;
        float: left;
        height: 20px;
        width: auto;
        left: 10px;
        position: absolute;
        top: 50%;
        margin-top: calc(0px - 20px / 2);
    }

    .button-secondary-Kl-s5 {
        background: #fff;
        border: 2px solid #ddd;
        color: #2d2d2d
    }

    .button-secondary-Kl-s5:hover,
    .button-secondary-Kl-s5:focus {
        background: #eee;
    }

    .button-secondary-Kl-s5.button-disabled-3RuTi {
        color: #fff
    }

    .button-secondary-Kl-s5.button-disabled-3RuTi:hover,
    .button-secondary-Kl-s5.button-disabled-3RuTi:focus {
        background: #fff;
    }

    .button-secondary-Kl-s5.button-small-3weda {
        padding: calc(6px - 2px) calc(calc(2 * 4px) - 2px);
    }

    .button-secondary-Kl-s5.button-medium-1rtvH {
        padding: calc(calc(2 * 4px) - 2px) calc(calc(2 * 4px) - 2px);
    }

    .button-primary-1-Z5a,
    .button-error-AKK5q {
        background: #2d2d2d;
        color: #fff
    }

    .button-primary-1-Z5a:hover:enabled,
    .button-primary-1-Z5a:focus:enabled,
    .button-error-AKK5q:hover:enabled,
    .button-error-AKK5q:focus:enabled {
        background: #000;
    }

    .button-primary-1-Z5a.button-disabled-3RuTi,
    .button-error-AKK5q.button-disabled-3RuTi {
        background: #ddd;
    }

    .button-disabled-3RuTi {
        background: #ddd;
    }

    .button-primary-1-Z5a.button-small-3weda {
        background: #eee;
        border: 0;
        color: #2d2d2d
    }

    .button-primary-1-Z5a.button-small-3weda:hover,
    .button-primary-1-Z5a.button-small-3weda:focus {
        background: #ddd;
    }

    .button-primary-1-Z5a.button-small-3weda.button-disabled-3RuTi {
        background: #f8f8f8;
        color: #777;
    }

    .button-highlighted-2vhzK {
        background: #018849;
        color: #fff
    }

    .button-highlighted-2vhzK:hover:enabled,
    .button-highlighted-2vhzK:focus:enabled {
        background: #006637;
    }

    .button-highlighted-2vhzK.button-disabled-3RuTi {
        background: #ddd;
    }

    @media (min-width: 640px) {
        .button-button-2JMYQ.button-large-3FkYz:not(.button-withIcon-2AkQO) {
            padding: 10px calc(7 * 4px);
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes content-wrapper-fullPageLoadingAnimation-2fwi0 {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .content-wrapper-contentWrapper-3Scrh {
        min-width: 320px;
        max-width: calc(960px - (2 * 10px));
        min-height: 1px;
    }

    .content-wrapper-contentWrapper-3Scrh.content-wrapper-chromeless-3OZd1 {
        margin: 0 auto;
        max-width: calc(calc(calc(960px / 12) * 8) - (2 * 10px));
    }

    .content-wrapper-paddingSmall-1y7hE {
        padding-left: 5px;
        padding-right: 5px;
    }

    .content-wrapper-paddingMedium-3egUB {
        padding-left: 8px;
        padding-right: 8px;
    }

    @media (min-width: 720px) {
        .content-wrapper-contentWrapper-3Scrh {
            margin: 0 10px;
        }
    }

    @media (min-width: 960px) {
        .content-wrapper-contentWrapper-3Scrh {
            margin: 0 auto;
            width: 100%;
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes margin-container-fullPageLoadingAnimation-G79Ny {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    @media (min-width: 480px) {
        .margin-container-addMargin-KMO5Q {
            margin: 0 calc(4 * 4px);
        }
    }

    @media (min-width: 640px) {
        .margin-container-addMargin-KMO5Q {
            margin: 0 calc(6 * 4px);
        }
    }

    @media (min-width: 720px) {
        .margin-container-addMargin-KMO5Q {
            margin: 0;
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes card-section-fullPageLoadingAnimation-1vL7k {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .card-section-panel-BcNjY.card-section-gutter-1yCt4 {
        padding-left: calc(4 * 4px);
        padding-right: calc(4 * 4px);
    }

    .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-topPadding-2p3l2 {
        padding-top: calc(4 * 4px);
    }

    .card-section-panel-BcNjY.card-section-topPadding-2p3l2 {
        padding-top: calc(6 * 4px);
    }

    .card-section-panel-BcNjY.card-section-bottomPadding-K3SMN {
        padding-bottom: calc(6 * 4px);
    }

    .card-section-panel-BcNjY.card-section-leftPadding-2p443 {
        padding-left: calc(4 * 4px);
    }

    .card-section-panel-BcNjY.card-section-rightPadding-4gNBt {
        padding-right: calc(4 * 4px);
    }

    .card-section-panel-BcNjY.card-section-collapsed-_p56X {
        padding-top: calc(6 * 4px);
        padding-bottom: calc(6 * 4px);
    }

    @media (min-width: 640px) {
        .card-section-panel-BcNjY.card-section-topPadding-2p3l2 {
            padding-top: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-leftPadding-2p443 {
            padding-left: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-rightPadding-4gNBt {
            padding-right: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(7 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-topPadding-2p3l2 {
            padding-top: calc(5 * 4px);
        }
    }

    @media (min-width: 720px) {
        .card-section-panel-BcNjY.card-section-topPadding-2p3l2 {
            padding-top: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-leftPadding-2p443 {
            padding-left: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-rightPadding-4gNBt {
            padding-right: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(6 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-topPadding-2p3l2 {
            padding-top: calc(6 * 4px);
        }
    }

    @media (min-width: 960px) {
        .card-section-panel-BcNjY.card-section-topPadding-2p3l2 {
            padding-top: calc(8 * 4px);
        }

        .card-section-panel-BcNjY.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(8 * 4px);
        }

        .card-section-panel-BcNjY.card-section-leftPadding-2p443 {
            padding-left: calc(8 * 4px);
        }

        .card-section-panel-BcNjY.card-section-rightPadding-4gNBt {
            padding-right: calc(8 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-bottomPadding-K3SMN {
            padding-bottom: calc(8 * 4px);
        }

        .card-section-panel-BcNjY.card-section-singleCard-1eEPl.card-section-topPadding-2p3l2 {
            padding-top: calc(8 * 4px);
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes card-fullPageLoadingAnimation-a5r97 {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .card-card-3DNYN {
        background-color: #fff;
    }

    .card-collapsed-1GERK {
        background-color: #eee;
        color: #ddd;
        border: #ddd 1px solid;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes horizontal-rule-fullPageLoadingAnimation-2CtrP {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .horizontal-rule-horizontalRule-26AIE {
        height: 1px;
        line-height: 1px;
        position: relative;
    }

    .horizontal-rule-horizontalRule-26AIE:before {
        background-color: #ddd;
        content: '';
        display: block;
        height: 1px;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .horizontal-rule-horizontalRule-26AIE.horizontal-rule-overspill-2sxvO:before {
        left: calc(0 - calc(2 * 4px));
        right: calc(0 - calc(2 * 4px))
    }

    @media (min-width: 960px) {
        .horizontal-rule-horizontalRule-26AIE.horizontal-rule-overspill-2sxvO:before {
            left: calc(0 - calc(3 * 4px));
            right: calc(0 - calc(3 * 4px))
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes heading-fullPageLoadingAnimation-3iAP1 {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .heading-h1-2jKSB,
    .heading-h2-13Yuw,
    .heading-h3-SjAqV,
    .heading-h4-2SohQ,
    .heading-h5-11Tyh {
        font-weight: bold;
        margin: 0;
        display: inherit;
        text-transform: uppercase;
    }

    .heading-h1-2jKSB {
        font-size: 2rem;
        line-height: 2.2rem;
        font-style: normal;
        font-stretch: normal;
        letter-spacing: 0.28rem;
        text-align: center;
    }

    .heading-h2-13Yuw {
        font-size: 1.8rem;
        line-height: 2.2rem;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: 0.25rem;
    }

    .heading-h3-SjAqV {
        font-size: 1.6rem;
        line-height: 2.4rem;
        letter-spacing: 0.2rem;
    }

    .heading-h4-2SohQ {
        font-size: 1.4rem;
        line-height: 2.4rem;
        letter-spacing: 0.2rem;
    }

    .heading-h5-11Tyh {
        font-size: 1.2rem;
        line-height: 1.8rem;
        letter-spacing: 0.17rem;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes paragraph-fullPageLoadingAnimation-3dfeU {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .paragraph-paragraph-21Lbj {
        font-size: 1.6rem;
        letter-spacing: 0.05rem;
        line-height: 2.4rem;
    }

    .paragraph-paragraph-21Lbj+.paragraph-paragraph-21Lbj {
        margin-top: calc(2 * 4px);
    }

    .paragraph-small-3R3Qb {
        font-size: 1.4rem;
        line-height: 2.1rem;
    }

    .paragraph-secondary-3_yfg {
        color: #666;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes checkbox-fullPageLoadingAnimation-3FOzh {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .checkbox-label-3Qrot {
        box-sizing: content-box;
        display: block;
        max-width: 330px;
        position: relative;
    }

    .checkbox-labelText-1tMZU {
        cursor: pointer;
        display: inline-block;
        vertical-align: middle;
        margin-left: calc(9 * 4px);
        line-height: 2.4rem;
    }

    .checkbox-checkboxInput-3Rxyl,
    .checkbox-checkboxInput-3Rxyl+.checkbox-labelText-1tMZU:before {
        cursor: pointer;
        display: inline-block;
        height: 24px;
        left: 0;
        position: absolute;
        top: 0;
        vertical-align: middle;
        width: 24px;
    }

    .checkbox-checkboxInput-3Rxyl+.checkbox-labelText-1tMZU:before {
        background-color: #fff;
        border: 1px solid #777;
        content: '';
        display: block;
    }

    .checkbox-checkboxInput-3Rxyl {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 0 transparent none;
        margin: 0;
    }

    .checkbox-checkboxInput-3Rxyl+.checkbox-labelText-1tMZU:after {
        content: '';
        height: 13px;
        left: 4px;
        position: absolute;
        top: 6px;
        width: 16px;
    }

    .checkbox-checkboxInput-3Rxyl:disabled+.checkbox-labelText-1tMZU {
        cursor: default;
        margin-left: 0;
        opacity: 0.5;
    }

    .checkbox-checkboxInput-3Rxyl:disabled,
    .checkbox-checkboxInput-3Rxyl:disabled+.checkbox-labelText-1tMZU:before {
        display: none;
    }

    .checkbox-checkboxInput-3Rxyl:disabled,
    .checkbox-checkboxInput-3Rxyl:disabled+.checkbox-labelText-1tMZU:after {
        display: none;
    }

    .checkbox-hasMargin-doW5N {
        margin: calc(5 * 4px) 0
    }

    @media (min-width: 640px) {
        .checkbox-hasMargin-doW5N {
            margin: 30px 0
        }
    }

    .checkbox-hidden-3TJdZ {
        display: none;
    }

    @keyframes checkbox-fadein-3NpZB {
        from {
            opacity: 0;
            transform: scale(0.4);
        }

        to {
            opacity: 1;
            transform: scale(1.1);
        }
    }

    .checkbox-checkboxInput-3Rxyl:checked+.checkbox-labelText-1tMZU:after {
        animation: checkbox-fadein-3NpZB 0.2s;
        animation-fill-mode: forwards;
        background: #fff no-repeat center center url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxM3B4IiB2aWV3Qm94PSIwIDAgMTYgMTMiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MiAoMzY3ODEpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPkQzRTBGNDM3LUYwNUItNEQ2Qi1BMjQ3LUYwQjk3RjYwREEzQTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iSW5wdXQtZmllbGRzLVdlYiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI1My4wMDAwMDAsIC0zMTAyLjAwMDAwMCkiIGZpbGw9IiMyQjJCMkIiPgogICAgICAgICAgICA8ZyBpZD0iVG9nZ2xlcy0mYW1wOy1MaXN0cyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuMDAwMDAwLCAyOTc0LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwMi4wMDAwMDAsIDQxLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnIGlkPSJXZWIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExOC4wMDAwMDAsIDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxnIGlkPSJDaGVjay1Cb3giPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGcgaWQ9IkNoZWNrLWJveC1UaWNrZWQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMDAwMDAwLCA4MC4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOC42OTI3MTMxLDE2Ljg5OTQ5NDkgTDUuNDE0MjEzNTYsMTMuNjIwOTk1NCBMNCwxNS4wMzUyMDkgTDcuOTM0MTk5NDUsMTguOTY5NDA4NCBMOC41ODk4OTkzNiwxOS42MjUxMDgzIEwxOS45MDM2MDc5LDguMzExMzk5ODIgTDE4LjU5MjIwOCw3IEw4LjY5MjcxMzEsMTYuODk5NDk0OSBaIiBpZD0iU2hhcGUtQ29weS05Ij48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==);
    }

    .checkbox-checkboxInput-3Rxyl:focus,
    .checkbox-checkboxInput-3Rxyl:focus+.checkbox-labelText-1tMZU:before {
        border-color: #0770cf;
        outline: none;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes emoji-fullPageLoadingAnimation-1pKko {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .emoji-emoji-18KO_ {
        width: 88px;
        height: 88px;
        display: block;
        margin: calc(6 * 4px) auto;
    }

    .emoji-bottomOnly-ZB7Cj {
        margin: 0 auto calc(3 * 4px);
    }

    @media (min-width: 640px) {
        .emoji-emoji-18KO_:not(.emoji-bottomOnly-ZB7Cj) {
            margin-top: 75px;
            margin-bottom: calc(8 * 4px);
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes spinner-fullPageLoadingAnimation-3IDPS {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    @keyframes spinner-rotate-IT12k {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .spinner-spinner-2s9xA {
        position: relative;
        margin: auto
    }

    .spinner-spinner-2s9xA:before,
    .spinner-spinner-2s9xA:after {
        content: '';
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 50%;
        background-repeat: no-repeat;
        margin: auto;
        position: absolute;
        background-color: #fff;
    }

    .spinner-spinner-2s9xA:before {
        width: 100%;
        height: 100%;
        animation: spinner-rotate-IT12k 2s linear infinite;
        background-image: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.2)), linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)), linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), linear-gradient(to left, rgba(0, 0, 0, 0.6), #000);
        background-position: top left, top right, bottom right, bottom left;
        background-size: 50% 50%;
    }

    .spinner-spinner-2s9xA:after {
        width: 82%;
        height: 82%;
    }

    .spinner-small-ABnkf {
        width: 22px;
        height: 22px;
    }

    .spinner-large-egViI {
        width: 66px;
        height: 66px
    }

    .spinner-large-egViI:after {
        width: 82%;
        height: 82%;
        background-size: 43% 43%;
        background-position: 48% 48%;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNXB4IiB2aWV3Qm94PSIwIDAgMjQgMjUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0ibG9hZGluZyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUwLjAwMDAwMCwgLTQ1LjAwMDAwMCkiIGZpbGw9IiMyRDJEMkQiPgogICAgICAgICAgICA8ZyBpZD0iYSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAuMDAwMDAwLCA0NS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJTaGFwZSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9IlBhZ2UtMSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMi4wOTQzOTg0LDE5Ljk5OTY2OTcgQzguNTUwMDIzNzYsMTkuOTk5NjY5NyA1LjMwMzQxNTg3LDE3LjIyOTQwMDUgNS4zMDM0MTU4NywxMi4yNjczOTExIEM1LjMwMzQxNTg3LDguMzczMDk2MDUgNy43MzY4NjcxMiw0LjU5OTYwMzEzIDEyLjExNzIwNjEsNC41OTk2MDMxMyBDMTQuMDE0OTkzOSw0LjU5OTYwMzEzIDE4LjgyNTE5NCw1LjI0NTQ1Mzk4IDE4LjgyNTE5NCwxMi4yNjczOTExIEMxOC44MjUxOTQsMTkuMzA3MjU5NyAxMy44MDI0MzkyLDE5Ljk5OTY2OTcgMTIuMDk0Mzk4NCwxOS45OTk2Njk3IEwxMi4wOTQzOTg0LDE5Ljk5OTY2OTcgTDEyLjA5NDM5ODQsMTkuOTk5NjY5NyBaIE0yNCwxLjAxNTE3ODEyIEMyNCwwLjc5NTI4MDUzOCAyMy44MTg0ODksMC42MTU2NTAzMjIgMjMuNTk4MDE0OSwwLjYxNTY1MDMyMiBMMTkuMzE4NzI2NiwwLjYxNTY1MDMyMiBDMTkuMDk3OTM1NywwLjYxNTY1MDMyMiAxOC45MTcwNTgyLDAuNzk1MjgwNTM4IDE4LjkxNzA1ODIsMS4wMTUxNzgxMiBMMTguOTE3MDU4MiwyLjEzMDA4MDkgQzE4LjkxNzA1ODIsMi4zMTc1NzU4NCAxOC43OTAzNDksMi4zODIzODExNCAxOC42MzY3MTQsMi4yNzM1MzM0MSBDMTcuMTE0MzAyMywxLjE3NjU2MjE5IDE0Ljg2MjY3ODgsMCAxMi4xNTMwMDE0LDAgQzEwLjYzMDU4OTcsMCA5LjE3NjI4NDI2LDAuMjY2MTQyMTQyIDcuODMwOTQ4NzMsMC43OTA1NjE3MDcgQzYuNDgzNzEyNTgsMS4zMTUyOTU4NiA1LjIwNTIxNjIsMi4xMTQ5ODA2NCA0LjAzMDMwNDYyLDMuMTY3OTA5NDEgQzIuNjkyMjU0OTEsNC4zNzU5MzA1MSAxLjY3NDQ2MjgxLDUuNzUzNTE0OTMgMS4wMDczMzg1OCw3LjI2MDcwOTk4IEMwLjMzODMxMzcxLDguNzY4ODQ4NzggMCwxMC40NTMxNTczIDAsMTIuMjY3MzkxMSBDMCwxMy45NjA1MDgxIDAuMjk5OTg0MTYyLDE1LjU0NjY2NDkgMC44OTEwODI4MzcsMTYuOTgxODE5MSBDMS40ODI0OTgyOCwxOC40MTY2NTg3IDIuMzgyNDUwNzcsMTkuNzQ0MjIzNiAzLjU2Njg2NTUzLDIwLjkyNzA3NzUgQzQuNzUxNTk3MDcsMjIuMTEwODc1MyA2LjA3NTcwODc4LDIzLjAxMDI4NDcgNy41MDI0NTQ5OCwyMy42MDA3Njc5IEM4LjkyNzkzNDEyLDI0LjE5MDkzNjUgMTAuNDk5NzYyNCwyNC40ODk3OTU5IDEyLjE3NDg1ODgsMjQuNDg5Nzk1OSBDMTUuMDU1OTEwNCwyNC40ODk3OTU5IDE3LjIxNzI1MzYsMjMuMjcyMDIyNiAxOC42MzI1OTYsMjIuMTY0MDQwOCBDMTguNzg5MDgxOSwyMi4wNDY2OTkxIDE4LjkxNzA1ODIsMjIuMTA5OTMxNSAxOC45MTcwNTgyLDIyLjMwNDAzMjggTDE4LjkxNzA1ODIsMjMuNDczOTg4NiBDMTguOTE3MDU4MiwyMy42OTM1NzE2IDE5LjA5NzkzNTcsMjMuODczMjAxOCAxOS4zMTg3MjY2LDIzLjg3MzIwMTggTDIzLjU5ODAxNDksMjMuODczMjAxOCBDMjMuODE4NDg5LDIzLjg3MzIwMTggMjQsMjMuNjkzNTcxNiAyNCwyMy40NzM5ODg2IEwyNCwxLjAxNTE3ODEyIEwyNCwxLjAxNTE3ODEyIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+Cg==);
    }

    :disabled .spinner-spinner-2s9xA:after {
        background: #ddd;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes retry-button-fullPageLoadingAnimation-17ijI {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .retry-button-submitFailureMessage-3m2Pw {
        display: block;
        line-height: 2.4rem;
        margin-bottom: calc(4 * 4px);
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes error-wrapper-fullPageLoadingAnimation-6Wo5l {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .error-wrapper-hasError-Zh2Wy {
        background-color: #fae7ec;
        padding: calc(6 * 4px);
        transition: all 0.5s;
    }

    .error-wrapper-errorWrapper-3e83Y {
        padding-left: calc(4 * 4px);
        padding-right: calc(4 * 4px);
    }

    @media (min-width: 640px) {
        .error-wrapper-errorWrapper-3e83Y {
            padding-left: calc(6 * 4px);
            padding-right: calc(6 * 4px);
        }
    }

    @media (min-width: 960px) {
        .error-wrapper-errorWrapper-3e83Y {
            padding-left: calc(8 * 4px);
            padding-right: calc(8 * 4px);
        }
    }

    .error-wrapper-errorAppear-1pyXu {
        opacity: 0;
    }

    .error-wrapper-errorAppear-1pyXu.error-wrapper-errorAppearActive-3FUO1 {
        opacity: 1;
        transition: opacity 0.5s ease-in;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes notification-fullPageLoadingAnimation-2opr3 {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .notification-notification-1TLVE {
        background-repeat: no-repeat;
        background-position: 0 5px;
        color: #2d2d2d;
        line-height: 2.4rem;
        padding: 0;
    }

    .notification-hasBackground-2Pr0c {
        background-color: #f8f8f8;
        padding: 14px 18px;
    }

    .notification-notification-1TLVE.notification-hasBackground-2Pr0c {
        background-position: calc(4 * 4px) 16px
    }

    @media (min-width: 640px) {
        .notification-notification-1TLVE.notification-hasBackground-2Pr0c {
            background-position: calc(6 * 4px) 16px
        }
    }

    @media (min-width: 720px) {
        .notification-notification-1TLVE.notification-hasBackground-2Pr0c {
            background-position: calc(8 * 4px) 16px
        }
    }

    .notification-hasIcon-2umph.notification-success-2VcUr {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMThweCIgaGVpZ2h0PSIxOHB4IiB2aWV3Qm94PSIwIDAgMTggMTgiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MS4yICgzNTM5NykgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+RUM2NjkwNkYtN0EzMC00QkZDLUI2REUtMUJCMkI5REY1Q0FGPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBza2V0Y2h0b29sLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJJY29ucyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTQ0NC4wMDAwMDAsIC02MjIuMDAwMDAwKSIgZmlsbD0iIzJEMkQyRCI+CiAgICAgICAgICAgIDxnIGlkPSJBbGVydCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDQ5MS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJBTEVSVCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuMDAwMDAwLCAzNC4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iSWNvbnMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIuMDAwMDAwLCA0Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICAgICAgPGcgaWQ9IlNlbGVjdGVkLUl0ZW0iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQxNC4wMDAwMDAsIDUxLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGcgaWQ9Imljb25fc2VsZWN0ZWRfaXRlbSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTgsMTUgQzQuMTM0MDA2NzUsMTUgMSwxMS44NjU5OTMyIDEsOCBDMSw0LjEzNDAwNjc1IDQuMTM0MDA2NzUsMSA4LDEgQzExLjg2NTk5MzIsMSAxNSw0LjEzNDAwNjc1IDE1LDggQzE1LDExLjg2NTk5MzIgMTEuODY1OTkzMiwxNSA4LDE1IFogTTgsLTEgQzMuMDI5NDM3MjUsLTEgLTEsMy4wMjk0MzcyNSAtMSw4IEMtMSwxMi45NzA1NjI3IDMuMDI5NDM3MjUsMTcgOCwxNyBDMTIuOTcwNTYyNywxNyAxNywxMi45NzA1NjI3IDE3LDggQzE3LDMuMDI5NDM3MjUgMTIuOTcwNTYyNywtMSA4LC0xIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik04LjI5MjY5OTAyLDkuMzA1MzU3MzIgTDYuNjU2MjAwNSw5LjMwNTM1NzMyIEw2LjY1NjIwMDUsMTEuMzA1MzU3MyBMOS4yMTk5OTg3MiwxMS4zMDUzNTczIEwxMC4xNDcyOTg0LDExLjMwNTM1NzMgTDEwLjE0NzI5ODQsMy4zMDUzNTczMiBMOC4yOTI2OTkwMiwzLjMwNTM1NzMyIEw4LjI5MjY5OTAyLDkuMzA1MzU3MzIgWiIgaWQ9IlNoYXBlIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4LjQwMTc0OSwgNy4zMDUzNTcpIHJvdGF0ZSgtMzE1LjAwMDAwMCkgdHJhbnNsYXRlKC04LjQwMTc0OSwgLTcuMzA1MzU3KSAiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+);
    }

    .notification-success-2VcUr.notification-hasBackground-2Pr0c {
        background-color: #cceede;
    }

    .notification-hasIcon-2umph.notification-error-Mgby1 {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMThweCIgaGVpZ2h0PSIxOHB4IiB2aWV3Qm94PSIwIDAgMTggMTgiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MS4yICgzNTM5NykgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+OTgyNTc3NDQtMTg4Qi00OUUxLUI0ODMtMkVCNzAyNkFGMDU0PC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBza2V0Y2h0b29sLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJJY29ucyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTY1Mi4wMDAwMDAsIC02MjEuMDAwMDAwKSIgZmlsbD0iIzJEMkQyRCI+CiAgICAgICAgICAgIDxnIGlkPSJBbGVydCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDQ5MS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJBTEVSVCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuMDAwMDAwLCAzNC4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iSWNvbnMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIuMDAwMDAwLCA0Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICAgICAgPGcgaWQ9Ik1pbnVzIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MjIuMDAwMDAwLCA1MC4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxnIGlkPSJpY29uX21lc3NhZ2Vfd2FybmluZyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LDggQzE1LDExLjg2NTk5MzIgMTEuODY1OTkzMiwxNSA4LDE1IEM0LjEzNDAwNjc1LDE1IDEsMTEuODY1OTkzMiAxLDggQzEsNC4xMzQwMDY3NSA0LjEzNDAwNjc1LDEgOCwxIEMxMS44NjU5OTMyLDEgMTUsNC4xMzQwMDY3NSAxNSw4IFogTTE3LDggQzE3LDMuMDI5NDM3MjUgMTIuOTcwNTYyNywtMSA4LC0xIEMzLjAyOTQzNzI1LC0xIC0xLDMuMDI5NDM3MjUgLTEsOCBDLTEsMTIuOTcwNTYyNyAzLjAyOTQzNzI1LDE3IDgsMTcgQzEyLjk3MDU2MjcsMTcgMTcsMTIuOTcwNTYyNyAxNyw4IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik03LDEwIEw3LDEyIEw5LDEyIEw5LDEwIEw3LDEwIFogTTksNSBMOSwzIEw3LDMgTDcsNSBMOCw5IEw4LDkgTDksNSBaIiBpZD0iISI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=);
    }

    .notification-error-Mgby1.notification-hasBackground-2Pr0c {
        background-color: #fae7ec;
    }

    .notification-hasIcon-2umph.notification-promotion-1vMMa {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE4cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE4IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IHNrZXRjaHRvb2wgNDEuMiAoMzUzOTcpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPkJEODlENkNDLUQ2MUEtNEE1MS04MEE5LTJGMjNCMTkzNjM1MzwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iU3ltYm9scyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9ImRlc2t0b3AvdG9hc3QvbWVzc3NhZ2UiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0yNi4wMDAwMDAsIC0xOS4wMDAwMDApIiBmaWxsPSIjMkQyRDJEIj4KICAgICAgICAgICAgPGcgaWQ9Im1lc3NzYWdlIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJpY29uL2FsZXJ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4wMDAwMDAsIDYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImFsZXJ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4wMDAwMDAsIDEzLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOSwxNiBDNS4xMzQwMDY3NSwxNiAyLDEyLjg2NTk5MzIgMiw5IEMyLDUuMTM0MDA2NzUgNS4xMzQwMDY3NSwyIDksMiBDMTIuODY1OTkzMiwyIDE2LDUuMTM0MDA2NzUgMTYsOSBDMTYsMTIuODY1OTkzMiAxMi44NjU5OTMyLDE2IDksMTYgWiBNOSwwIEM0LjAyOTQzNzI1LDAgLTkuOTkyMDA3MjJlLTE2LDQuMDI5NDM3MjUgMCw5IEMxLjg4NzM3OTE0ZS0xNSwxMy45NzA1NjI3IDQuMDI5NDM3MjUsMTggOSwxOCBDMTMuOTcwNTYyNywxOCAxOCwxMy45NzA1NjI3IDE4LDkgQzE4LDQuMDI5NDM3MjUgMTMuOTcwNTYyNywwIDksMCBaIiBpZD0iaWNvbi1zaGFwZSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44Nyw3LjUwNSBMNy44NywxNCBMOS43LDE0IEw5LjcsNy41MDUgTDcuODcsNy41MDUgWiBNNy42OSw0Ljc2IEM3LjY5LDUuMzYgOC4xODUsNS44NTUgOC43ODUsNS44NTUgQzkuMzg1LDUuODU1IDkuODgsNS4zNiA5Ljg4LDQuNzYgQzkuODgsNC4xNiA5LjM4NSwzLjY2NSA4Ljc4NSwzLjY2NSBDOC4xODUsMy42NjUgNy42OSw0LjE2IDcuNjksNC43NiBaIiBpZD0iaSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+);
    }

    .notification-promotion-1vMMa.notification-hasBackground-2Pr0c {
        background-color: #cde2f5;
    }

    .notification-hasIcon-2umph.notification-alert-3TMFr {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE4cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE4IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IHNrZXRjaHRvb2wgNDEuMiAoMzUzOTcpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPkJEODlENkNDLUQ2MUEtNEE1MS04MEE5LTJGMjNCMTkzNjM1MzwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iU3ltYm9scyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9ImRlc2t0b3AvdG9hc3QvbWVzc3NhZ2UiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0yNi4wMDAwMDAsIC0xOS4wMDAwMDApIiBmaWxsPSIjMkQyRDJEIj4KICAgICAgICAgICAgPGcgaWQ9Im1lc3NzYWdlIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJpY29uL2FsZXJ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4wMDAwMDAsIDYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImFsZXJ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMy4wMDAwMDAsIDEzLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOSwxNiBDNS4xMzQwMDY3NSwxNiAyLDEyLjg2NTk5MzIgMiw5IEMyLDUuMTM0MDA2NzUgNS4xMzQwMDY3NSwyIDksMiBDMTIuODY1OTkzMiwyIDE2LDUuMTM0MDA2NzUgMTYsOSBDMTYsMTIuODY1OTkzMiAxMi44NjU5OTMyLDE2IDksMTYgWiBNOSwwIEM0LjAyOTQzNzI1LDAgLTkuOTkyMDA3MjJlLTE2LDQuMDI5NDM3MjUgMCw5IEMxLjg4NzM3OTE0ZS0xNSwxMy45NzA1NjI3IDQuMDI5NDM3MjUsMTggOSwxOCBDMTMuOTcwNTYyNywxOCAxOCwxMy45NzA1NjI3IDE4LDkgQzE4LDQuMDI5NDM3MjUgMTMuOTcwNTYyNywwIDksMCBaIiBpZD0iaWNvbi1zaGFwZSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44Nyw3LjUwNSBMNy44NywxNCBMOS43LDE0IEw5LjcsNy41MDUgTDcuODcsNy41MDUgWiBNNy42OSw0Ljc2IEM3LjY5LDUuMzYgOC4xODUsNS44NTUgOC43ODUsNS44NTUgQzkuMzg1LDUuODU1IDkuODgsNS4zNiA5Ljg4LDQuNzYgQzkuODgsNC4xNiA5LjM4NSwzLjY2NSA4Ljc4NSwzLjY2NSBDOC4xODUsMy42NjUgNy42OSw0LjE2IDcuNjksNC43NiBaIiBpZD0iaSI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+);
    }

    .notification-alert-3TMFr.notification-hasBackground-2Pr0c {
        background-color: #ffebcc;
    }

    .notification-generic-11U5C {
        background-color: rgba(45, 45, 45, 0.9);
        color: #fff;
    }

    .notification-hasIcon-2umph {
        padding-left: calc(8 * 4px);
        position: relative;
        text-align: left;
    }

    .notification-hasIcon-2umph.notification-hasBackground-2Pr0c {
        padding-left: calc(19px + 12px)
    }

    @media (min-width: 640px) {
        .notification-hasIcon-2umph.notification-hasBackground-2Pr0c {
            padding-left: calc(19px + 12px)
        }
    }

    @media (min-width: 720px) {
        .notification-hasIcon-2umph.notification-hasBackground-2Pr0c {
            padding-left: calc(19px + 12px)
        }
    }

    .notification-hasIcon-2umph.notification-hasBackground-2Pr0c .notification-content-3eIdO {
        margin-left: calc(4 * 4px)
    }

    @media (min-width: 640px) {
        .notification-hasIcon-2umph.notification-hasBackground-2Pr0c .notification-content-3eIdO {
            margin-left: calc(6 * 4px)
        }
    }

    @media (min-width: 720px) {
        .notification-hasIcon-2umph.notification-hasBackground-2Pr0c .notification-content-3eIdO {
            margin-left: calc(8 * 4px)
        }
    }
    </style>
    <style type="text/css">
    .responsive-picture-picture-8rauY {
        display: block;
        max-width: 100%;
    }

    .responsive-picture-picture-8rauY img {
        display: block;
        width: 100%;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes loading-fullPageLoadingAnimation-2pIFp {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .loading-leave-2oNAA {
        opacity: 1;
    }

    .loading-leave-2oNAA.loading-leaveActive-2X8Z7 {
        opacity: 0.01;
        transition: opacity 300ms ease-in;
    }

    .loading-loadingContainer-2jySs {
        position: relative;
        min-height: 500px;
    }

    .loading-small-gu1FO {
        min-height: 300px;
    }

    .loading-loadingScreen-1UQQL {
        background: rgba(255, 255, 255, 0.85);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 10px;
        z-index: 10;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }

    @media (min-width: 480px) {
        .loading-loadingScreen-1UQQL {
            margin: 0 calc(4 * 4px);
        }
    }

    @media (min-width: 640px) {
        .loading-loadingScreen-1UQQL {
            margin: 0 calc(6 * 4px);
        }
    }

    @media (min-width: 720px) {
        .loading-loadingScreen-1UQQL {
            margin: 0;
        }
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes card-with-heading-fullPageLoadingAnimation-2Ic6Y {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .card-with-heading-cardWrapper-2_LWE {
        margin-bottom: calc(3 * 4px);
    }

    .card-with-heading-contentPadding-35u60 {
        margin-top: calc(5 * 4px)
    }

    @media (min-width: 640px) {
        .card-with-heading-contentPadding-35u60 {
            margin-top: calc(6 * 4px)
        }
    }

    .card-with-heading-headingWrapper-n26GJ {
        padding-bottom: calc(4 * 4px);
        text-transform: uppercase
    }

    @media (min-width: 640px) {
        .card-with-heading-headingWrapper-n26GJ {
            padding-bottom: calc(6 * 4px)
        }
    }

    .card-with-heading-headingWrapper-n26GJ.card-with-heading-collapsed-28c6T {
        padding-bottom: 0;
    }

    .card-with-heading-headerWrapper-1tl3l .card-with-heading-headingWrapper-n26GJ {
        padding-bottom: calc(2 * 4px);
    }

    .card-with-heading-headerWrapper-1tl3l {
        padding-bottom: calc(6 * 4px);
    }

    .card-with-heading-description-CJlPt {
        line-height: 2.4rem;
        max-width: 550px;
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes card-with-steps-fullPageLoadingAnimation-1R_Pi {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .card-with-steps-step-1PZM3:not(:first-child) {
        margin-top: calc(4 * 4px);
    }

    .card-with-steps-outer-2QaAL {
        display: flex;
        align-items: center;
    }

    .card-with-steps-children-2g6bQ {
        padding-left: calc(4 * 4px);
    }

    .card-with-steps-icon-3J6uL {
        position: relative;
        height: 44px;
        flex: 0 0 44px;
    }

    .card-with-steps-icon-3J6uL.card-with-steps-border-2qLds {
        border: 2px solid #2d2d2d;
        border-radius: 50%;
    }

    .card-with-steps-icon-3J6uL img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>
    <style type="text/css">
    /* stylelint-disable at-rule-empty-line-before */
    :root {

        /* Grid */

        /* Images */

        /* Paddings */
        /* 4px */
        /* 8px */
        /* 12px */
        /* 16px */
        /* 20px */
        /* 24px */
        /* 28px */
        /* 32px */
        /* 36px */
        /* 40px */
        /* 44px */
        /* 48px */
        /* 64px */

        /* Fonts */

        /* h5 */

        /* h4 */

        /* h3 */

        /* h2 */

        /* h1 */

        /* editorial */

        /* body */

        /* small */

        /* small interactive - e.g. small buttons & tags */

        /* Main Colour Palette */

        /* Notification Color Palette */

        /* animation */

        /* navigation component */
    }

    @keyframes status-bar-fullPageLoadingAnimation-yNL_a {
        0% {
            background-color: #eee;
        }

        50% {
            background-color: #ddd;
        }

        100% {
            background-color: #eee;
        }
    }

    .status-bar-statusBar-1Z9bj {
        height: 8px;
    }

    .status-bar-statusBarContainer-1mG30 {
        width: 100%;
        height: 12px;
        border-radius: 8px;
        border: 2px solid;
        margin-top: calc(2 * 4px);
    }
    </style>


</head>

<body>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <div id="app">
        <div>
            <div class="_1i7AwEqlfElL-36DfE9Cel" data-auto-id="home">
                <div class="_24GWA5EsUZMOhirN8VeE9e">
                    <div class="_6pV8j9TX-yoZbwKlb9CDJ">
                        <header class="-veUxlu3diRdk6O75JPRP" role="banner">
                            <div class="content-wrapper-contentWrapper-3Scrh content-wrapper-paddingSmall-1y7hE content-wrapper-paddingMedium-3egUB">
                                <div class="uZfXWHrsWYBkJQ4dkKrR4">
                                    <div class="_1qUAetLsa20bSFmmaVlFxt _3Op_r6InxZu_FG0g4eLr_s _3JmqNu8LpxAYrPkDhtwmGu _3NcLKwI7-ogUfv83O_hT_x">
                                        <div class="_1GKz9RaGAZBZcbPRAuh3y4"><a class="pu3E_nDR5c4Q7QfG0pC9U" href="/" style="text-decoration: none;"><p style="
        color: #2d2d2d;
    font-weight: bold;
    font-size: 22px;
    text-align: center;
    margin-top: 22px;
">{{$settings->project_name}}</p></a></div>
                                    </div>
                                    <div class="_1qUAetLsa20bSFmmaVlFxt Rf7jnh0ITWK3XfBM2a5_A _3OM_U_RLICho7p4AZ8BE8B RUX1cwoVtpiVYTjAWEDTY">
                                        <div class="_1GKz9RaGAZBZcbPRAuh3y4">
                                            <div class="pu3E_nDR5c4Q7QfG0pC9U _3RGW8djk5VL2T05KU1ZXil"><span class="WkTCjySeTZVCmsExD5tWL">Личный Кабинет</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="h8t14XykSkSFariEC6vcr">
                            <div class="Dx1984eIRXRaJrfglndrR">
                                <div class="content-wrapper-contentWrapper-3Scrh">
                                    <div class="uZfXWHrsWYBkJQ4dkKrR4 dV0i4x0Wo3BSzTwyTtOr">
                                        <div class="_1qUAetLsa20bSFmmaVlFxt _1ODHlp8ewalEaRQuT0S-W4 _25U6kXVgYQ0WIMusf530fB">
                                            <div class="_2aFEhih1r7339OH3p1m1jh">
                                                <div class="gHg5CWtrz9fUTDjp1n5GH">
                                                    <div class="M_GDpfOmI5COC4Ndbhfwj"></div>
                                                    <div class="_1fhqSO0H8d0_vjvM4OEhj- uGkYzQLRhN9f4QPyRAib9">
                                                        <div class="_32JYoo2qJqMyweR78vfOgB">
                                                            <h1 class="c7miiU7Q-FOKf36UEPOPu"><span class="_1N3qgwgmiHoW7gbJtOiB0z">Здравствуйте, {{$u->name}}</span>{{$u->name[0]}}</h1>
                                                        </div>
                                                        <div class="csPe1tYX-Oc-L6SjmkiPz">
                                                            <div class="_2vtG7BClw3EbNffVOFoOVD">
                                                                <div class="_1Fpk1bEOpUDTKKFdGhPH3N" aria-hidden="true"><span>Здравствуйте,</span></div>
                                                                <div class="_2roWJCL3cYLWn-WGjDB73j"><span style="    overflow: hidden;
    display: block;
    white-space: nowrap;
    text-overflow: ellipsis;">{{$u->name}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <nav data-auto-id="main-nav">
                                                <ul class="xInf02uotG1ny6CKXawnQ FUXplQxd64BHL_VXoHbOO">
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW _1r0vUu7pnBDIUGnfQzhxky" href="/my-account">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cGF0aCBmaWxsPSIjMkQyRDJEIiBkPSJNMTAgMmE0IDQgMCAxMDAgOCA0IDQgMCAwMDAtOHptMCAxMGE2IDYgMCAxMTAtMTIgNiA2IDAgMDEwIDEyem03LjY3OCA4TDE5IDE4LjQ2OGE2LjgwOSA2LjgwOSAwIDAwLS4yMDctLjQ2OEguMjA3Yy0uMDc1LjE1NC0uMTQ0LjMxLS4yMDcuNDY4TDEuMzIyIDIwaC4yODJjLjU2NC0yLjc5MiAzLjgxNC01IDcuODk2LTVzNy4zMzIgMi4yMDggNy44OTYgNWguMjgyek0wIDIwaDIwYy0uNTUzLTQuMDA2LTQuODE5LTctMTAtN1MuNTUzIDE1Ljk5NCAwIDIweiIvPjwvc3ZnPg==" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Просмотр учетной записи</span></div>
                                                        </a></li>
                                                </ul>
                                                <ul class="xInf02uotG1ny6CKXawnQ">
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" href="/orders">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTE4IDQuNjY3TDE2IDJINEwyIDQuNjY3VjE4aDE2VjQuNjY3ek0wIDRsMy00aDE0bDMgNHYxNkgwVjR6Ii8+PHBhdGggZD0iTTAgNGgyMHYySDB6Ii8+PHBhdGggZD0iTTkgMS4xMTFoMnY0SDl6Ii8+PC9nPjwvc3ZnPg==" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Мои заказы</span></div>
                                                        </a></li>
                                                </ul>
                                                <ul class="xInf02uotG1ny6CKXawnQ">
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" href="/my-details">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDIyIDE4Ij48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTIgMTZoMThWMkgydjE0ek0wIDBoMjJ2MThIMFYweiIvPjxwYXRoIGQ9Ik0xMiA1aDR2MWgtNHptMCAzaDZ2MWgtNnptMCAzaDZ2MWgtNnpNOSA3YTIgMiAwIDExLTQgMCAyIDIgMCAwMTQgMHptLTIgM2MtMS41NTQgMC0yLjgzNCAxLjI4My0zIDNoNmMtLjE2Ni0xLjcxNy0xLjQ0Ni0zLTMtM3oiLz48L2c+PC9zdmc+" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Моя информация</span></div>
                                                        </a></li>
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" href="/change-password">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDE2IDIwIj48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0xNiA3aC0zVjVjMC0yLjgtMi4yLTUtNS01UzMgMi4yIDMgNXYySDB2MTNoMTZWN3ptLTQuOSAwSDQuOVY1YzAtMS43IDEuNC0zLjEgMy4xLTMuMSAxLjcgMCAzLjEgMS40IDMuMSAzLjF2MnpNMiA5aDEydjlIMlY5eiIvPjxlbGxpcHNlIGN4PSI4IiBjeT0iMTMuNSIgcng9IjIiIHJ5PSIyLjUiLz48L2c+PC9zdmc+" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Изменить пароль</span></div>
                                                        </a></li>
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" href="/contact-preferences">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTIgMTR2MmwyLjctMmgxMS4zMDZjMS4xIDAgMS45OTQtLjkgMS45OTQtMi4wMDlWNC4wMUEyLjAwMyAyLjAwMyAwIDAwMTYuMDA2IDJIMy45OTRDMi44OTQgMiAyIDIuOSAyIDQuMDA5VjE0em0zLjMzMyAyTDAgMjBWNC4wMDlBNC4wMDIgNC4wMDIgMCAwMTMuOTk0IDBoMTIuMDEyQzE4LjIxNSAwIDIwIDEuOCAyMCA0LjAwOXY3Ljk4MkE0LjAwMiA0LjAwMiAwIDAxMTYuMDA2IDE2SDUuMzMzeiIvPjxwYXRoIGQ9Ik02IDlhMSAxIDAgMTEwLTIgMSAxIDAgMDEwIDJ6bTQgMGExIDEgMCAxMTAtMiAxIDEgMCAwMTAgMnptNCAwYTEgMSAwIDExMC0yIDEgMSAwIDAxMCAyeiIvPjwvZz48L3N2Zz4=" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Предпочтительные способы связи</span></div>
                                                        </a></li>
                                                </ul>
                                                <ul class="xInf02uotG1ny6CKXawnQ">
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" rel="noreferrer noopener" target="_blank" href="/faq">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTEwIDJhOCA4IDAgMTAwIDE2IDggOCAwIDAwMC0xNnptMCAxOEM0LjQ3NyAyMCAwIDE1LjUyMyAwIDEwUzQuNDc3IDAgMTAgMHMxMCA0LjQ3NyAxMCAxMC00LjQ3NyAxMC0xMCAxMHoiLz48cGF0aCBkPSJNOSA4LjUwNXY2aDJ2LTZIOXpNOSA2YzAgLjU0OC40NTIgMSAxIDFzMS0uNDUyIDEtMS0uNDUyLTEtMS0xLTEgLjQ1Mi0xIDF6Ii8+PC9nPjwvc3ZnPg==" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Нужна помощь?</span></div>
                                                        </a></li>

                                                </ul>
                                                <ul class="xInf02uotG1ny6CKXawnQ">
                                                    <li class="_3XxW3HT1oAUNjCVJjj4Eil"><a class="DrvAPUms9TXGB7LgSTgFW" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            <div class="_3YOz7nvTOluEUKZ6vwVeh5">
                                                                <div class="_2PTnzmaJNAhH9KkeUbYraC"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIxNyIgdmlld0JveD0iMCAwIDIwIDE3Ij48ZyBmaWxsPSIjMkQyRDJEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0xOS45NjUuMXYxNi44aC05LjQ0MXYtMi4wNjdoNy4zODhzLjA0LTEyLjY4OSAwLTEyLjY4OWgtNy4zODhWLjFoOS40NDF6Ii8+PHBhdGggZD0iTTIuMTQzIDkuNTV2LTIuMWgxMS41MjR2Mi4xeiIvPjxwYXRoIGQ9Ik0xLjUyNSAxMC4wMzRsLS4wMDIuMDAyTC4wNDIgOC41NTRsLjAwMS0uMDAxLS4wMDEtLjAwMkwxLjUyMyA3LjA3bC4wMDIuMDAxIDMuNzE0LTMuNzE0TDYuNzIxIDQuODQgMy4wMDcgOC41NTNsMy43MTQgMy43MTQtMS40ODIgMS40ODEtMy43MTQtMy43MTR6Ii8+PC9nPjwvc3ZnPg==" alt="" class="_3k0M8OWUnx2v2WhFad8EVE"></div>
                                                            </div>
                                                            <div class="_3VF3HxCxwyIelbCYO3EPjU"><span>Выйти</span></div>
                                                        </a></li>
                                                </ul>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                            </nav>
                                        </div>
                                        <div class="_1qUAetLsa20bSFmmaVlFxt _1ODHlp8ewalEaRQuT0S-W4 RUX1cwoVtpiVYTjAWEDTY dV0i4x0Wo3BSzTwyTtOr _3w0hmEbkEqD7a09HZmeMg4">
                                            <main class="_6pV8j9TX-yoZbwKlb9CDJ _3dtEe0XflmWV18vd9zaImg" id="main" role="main">
                                                 @yield('content')
                                            </main>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="content-wrapper-contentWrapper-3Scrh">
                            <div class="Ko5ddt6-x1qZTFPYvvO6E">
                                <div class="_1BqbxeszQjBOzloVjfwps0">
                                    <div class="uZfXWHrsWYBkJQ4dkKrR4">
                                        <div class="_1qUAetLsa20bSFmmaVlFxt _1ODHlp8ewalEaRQuT0S-W4 _25U6kXVgYQ0WIMusf530fB">&nbsp;</div>
                                        <div class="_1qUAetLsa20bSFmmaVlFxt _1ODHlp8ewalEaRQuT0S-W4 RUX1cwoVtpiVYTjAWEDTY">
                                            <div style="min-height: 0px;">
                                                <div class="_1rLkL9Ndz5DvasKRvYityo sticky" style="transform: translateZ(0px); width: 619.984px; top: 247px; position: fixed;">
                                                    <div class="_18AKakSKFAsBVL6vyV9P5H">
                                                        <div class="_1U8QUObmaln1ELA2GIuc4H">
                                                            <div data-auto-id="NotificationArea">
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_2M5drODjWSJ4soZI-0yiN_">
                        <footer class="NvPFhcV8Lsfj73-LrXU5L" role="contentinfo">
                            <div class="content-wrapper-contentWrapper-3Scrh">
                                <div class="btR0scuV0fpDs8hwvyNwX"><a class="_25qHJBBL64dfi5bHLDTnBn _1Bsb7rMuXLHY2X6eVAjlKi" href="/"><span>Главная</span></a></div>
                                <div class="btR0scuV0fpDs8hwvyNwX _3d_4mP506JCpwvSgbMm1PM"><a class="_1Bsb7rMuXLHY2X6eVAjlKi" rel="noreferrer noopener" target="_blank" href="/terms-and-conditions"><span>Правила и условия</span></a><a class="_1Bsb7rMuXLHY2X6eVAjlKi" rel="noreferrer noopener" target="_blank" href="/privacy-policy"><span>Конфиденциальность и cookie-файлы</span></a></div>
                                <div class="btR0scuV0fpDs8hwvyNwX _1LyUGMLMwD9IwImqbWWRA">
                                    <div><span>© {{$settings->project_name}} 2020</span></div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    function prod_f(e){
        
        $.ajax({
            url: '/saved-lists_save',
            data: {
                'id': $(e).data('id'),
            },
            type: 'POST',
            success: function(data){
                    if(data.success == true){
                        $(e).attr("disabled", true);
                    } else{
                        console.log("error");
                    }
                },
            error: function (msg) {
                console.log(msg);
            }
        });  
    }

    function del_buy(e){
        
        $.ajax({
            url: '/del_buy',
            data: {
                'id': $(e).data('id'),
            },
            type: 'delete',
            success: function(data){
                    if(data.success == true){
                        $(e).closest('.bag-item-holder').fadeOut(500);
                        sum_all = sum_all - $(e).data('sum');
                        $(".bag-subtotal-price, .bag-total-price--subtotal").text(sum_all+" руб.");
                    } else{
                        console.log("error");
                    }
                },
            error: function (msg) {
                console.log(msg);
            }
        });  
    }
    </script>
</body>

</html>