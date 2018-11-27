<!--//- Critical Path CSS-->
<style>
    @charset "UTF-8";

    html {
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
    }

    nav,
    section {
        display: block
    }

    h1 {
        font-size: 2em;
        margin: .67em 0
    }

    a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    img {
        border-style: none
    }

    button {
        font-family: sans-serif;
        font-size: 100%;
        margin: 0;
        overflow: visible
    }

    button,
    html [type=button] {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner,
    button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    [type=button]:-moz-focusring,
    button:-moz-focusring {
        outline: ButtonText dotted 1px
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    button {
        line-height: 1;
        padding: .6em 1em .4em;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizelegibility;
        color: #fff
    }

    .screen-reader-text {
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden
    }

    div#page {
        overflow: hidden;
        min-height: 100vh
    }

    @font-face {
        font-family: AllerBold;
        src: url(/fonts/Aller/AllerBold.woff2) format("woff2"), url(/fonts/Aller/AllerBold.woff) format("woff")
    }

    @font-face {
        font-family: Aller;
        src: url(/fonts/Aller/Aller.woff2) format("woff2"), url(/fonts/Aller/Aller.woff) format("woff")
    }

    @font-face {
        font-family: dead_stock;
        src: url(/fonts/BrushFonts/dead_stock-webfont.woff2) format("woff2"), url(/fonts/BrushFonts/dead_stock-webfont.woff) format("woff");
        font-weight: 400;
        font-style: normal
    }

    h1 {
        font-weight: 400;
        font-weight: 500;
        line-height: 1.3
    }

    body {
        margin: 0 !important;
        background: #000
    }

    * {
        font-family: Aller, sans-serif
    }

    ::-webkit-scrollbar-track {
        border: 1px solid #000;
        background-color: #F5F5F5
    }

    ::-webkit-scrollbar {
        width: 15px;
        background-color: #F5F5F5
    }

    ::-webkit-scrollbar-thumb {
        background-color: #000
    }

    .btn-2,
    .btn-2a {
        background: 0 0 !important
    }

    .btn-2 {
        -webkit-box-shadow: 0 6px transparent;
        box-shadow: 0 6px transparent;
        margin-bottom: 12px
    }

    .btn-2a {
        border-radius: 0 0 5px 5px
    }

    .hamburger {
        padding: 15px;
        display: inline-block;
        font: inherit;
        color: inherit;
        background-color: transparent;
        border: 0;
        margin: 0;
        overflow: visible
    }

    .hamburger-box {
        width: 40px;
        height: 24px;
        display: inline-block;
        position: relative
    }

    .hamburger-inner {
        display: block;
        top: 50%;
        margin-top: -2px
    }

    .hamburger-inner,
    .hamburger-inner::after,
    .hamburger-inner::before {
        width: 40px;
        height: 4px;
        background-color: #fff;
        border-radius: 0;
        position: absolute
    }

    .hamburger-inner::after,
    .hamburger-inner::before {
        content: "";
        display: block
    }

    .hamburger-inner::before {
        top: -10px
    }

    .hamburger-inner::after {
        bottom: -10px
    }

    .hamburger--spring .hamburger-inner {
        top: 2px
    }

    .hamburger--spring .hamburger-inner::before {
        top: 10px
    }

    .hamburger--spring .hamburger-inner::after {
        top: 20px
    }

    :-moz-full-screen {
        z-index: 50000 !important
    }

    :-ms-fullscreen {
        z-index: 50000 !important
    }

    :-webkit-full-screen {
        z-index: 50000 !important
    }

    :-webkit-full-screen-ancestor:not(iframe) nav.navbar {
        display: none
    }

    :-webkit-full-screen-ancestor:not(iframe) section.hero-section {
        display: none
    }

    ::-webkit-backdrop {
        display: none
    }

    nav.navbar {
        background: 0 0;
        margin: 0 0 20px;
        outline: 0 !important;
        border: none !important;
        position: relative;
        min-height: 50px;
        z-index: 5;
        width: 100%
    }

    @media (max-width:767px) {
        nav.navbar {
            z-index: 100
        }
    }

    nav.navbar button.navbar-toggle {
        display: block !important;
        float: right
    }

    nav.navbar .rollovernav a span,
    nav.navbar a {
        position: relative;
        display: inline-block
    }

    nav.navbar .navbar-collapse {
        border: none;
        width: 100%
    }

    nav.navbar .navbar-collapse .navbar-left {
        float: left
    }

    nav.navbar .navbar-collapse .navbar-right {
        float: right
    }

    nav.navbar a {
        color: #fff;
        font-family: Aller, sans-serif;
        margin: 15px 25px;
        outline: 0 !important;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 400;
        text-shadow: 0 0 1px rgba(3, 3, 3, .3);
        font-size: 1.45em
    }

    nav.navbar .rollovernav a {
        overflow: hidden;
        padding: 0 3px
    }

    nav.navbar .rollovernav a span::before {
        position: absolute;
        font-family: AllerBold, sans-serif;
        top: 100%;
        content: attr(data-hover);
        font-weight: 400;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    @media (min-width:992px) {
        .hamburger {
            visibility: hidden
        }

        .navbar-collapse {
            position: fixed;
            width: 100%;
            z-index: 2
        }
    }

    @media (max-width:991px) {
        .customnav a {
            display: block
        }

        .navbar-collapse {
            border-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .navbar-collapse.collapse {
            display: none !important
        }

        .navbar-nav {
            float: none !important;
            margin: 7.5px -15px
        }
    }

    .navbar-collapse {
        padding-right: 15px;
        padding-left: 15px;
        overflow-x: visible;
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
    }

    @media (min-width:768px) {
        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important
        }
    }

    .navbar-collapse:after,
    .navbar-collapse:before {
        display: table;
        content: " "
    }

    .navbar-collapse:after {
        clear: both
    }

    .collapse {
        display: none
    }

    section.aboutMe div.aboutMe div.img-wrapper div.links a {
        font-size: 30px;
        color: #fff;
        margin: 5px;
        padding: 2.5px 5px;
        background: #000;
        overflow: hidden;
        font-weight: 500;
        z-index: 50;
        position: relative;
        display: inline-block;
        outline: 0;
        vertical-align: bottom;
        text-decoration: none;
        white-space: nowrap;
        text-shadow: 3px 3px 0 #000
    }

    section.aboutMe div.aboutMe div.img-wrapper div.links a::before {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        background-color: #2657eb;
        content: '';
        -webkit-transform: translateY(95%);
        -ms-transform: translateY(95%);
        transform: translateY(95%)
    }

    section.aboutMe div.aboutMe div.img-wrapper div.links a.email-mobile {
        display: none
    }

    @media (max-width:767px) {
        section.aboutMe div.aboutMe div.img-wrapper div.links a {
            font-size: 3.5vmax !important;
            padding: 10px 20px;
            width: 100%
        }

        section.aboutMe div.aboutMe div.img-wrapper div.links a.email-mobile {
            display: block;
            font-size: 60px !important;
            text-align: center;
            padding: 10px 20px;
            margin-bottom: -10px
        }
    }

    section.aboutMe a {
        z-index: 1
    }

    body {
        overflow-x: hidden !important
    }

    section.hero-section {
        width: 100%;
        min-height: 50vh;
        z-index: -1;
        background-color: #040319;
        position: relative;
        height: 60vh;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    section.hero-section div.glitch-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        top: calc(-40px + -20vw);
        margin: 0 auto;
        min-height: calc(160% + 20vw);
        min-width: calc(100% + 25vw);
        background-repeat: repeat
    }

    @media (max-width:767px) {
        section.hero-section div.glitch-container {
            top: calc(-350px + -20vw);
            display: block;
            margin: 0 auto;
            min-height: calc(220% + 200px);
            min-width: calc(100% + 100px)
        }

        section.case-study-section a.case-study-box div.title-card-flex h1.case-study-title {
            margin-left: 20px
        }
    }

    section.case-study-section {
        width: 100%;
        position: relative;
        min-height: 85vh;
        overflow: hidden;
        z-index: 2000;
        padding: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-clip-path: polygon(0 0, 100% 5vw, 100% 100%, 0 100%);
        clip-path: polygon(0 0, 100% 5vw, 100% 100%, 0 100%);
        margin-bottom: -5vw;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: #002771
    }

    section.case-study-section div.overlay {
        position: absolute;
        z-index: 3000;
        width: 100vw;
        height: 110vh;
        -webkit-box-shadow: rgba(0, 0, 0, .85) 1px 7vw 100px inset;
        box-shadow: rgba(0, 0, 0, .85) 1px 7vw 100px inset
    }

    section.case-study-section div.rellax,
    section.case-study-section div.rellax div.img-container {
        position: absolute !important;
        width: calc(100% + 100px);
        height: calc(100% + 100px)
    }

    section.case-study-section div.rellax div.img-container img.section-img {
        position: relative;
        top: -250px;
        right: 300px;
        min-width: calc(100% + 300px);
        min-height: calc(100% + 250px);
        -o-object-fit: cover;
        object-fit: cover;
        z-index: 2000 !important;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    section.case-study-section a.case-study-box {
        color: #fff;
        text-decoration: none;
        z-index: 4000;
        position: relative;
        top: -75px
    }

    section.case-study-section a.case-study-box div.title-card-flex {
        position: relative;
        height: 100%;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        z-index: 4000
    }

    section.case-study-section a.case-study-box div.title-card-flex h1.case-study-title {
        position: relative;
        font-family: dead_stock, AllerBold, Arial #000, sans-serif;
        color: #fff;
        text-align: left;
        font-size: 7vmax;
        text-shadow: 0 2px 2px rgba(0, 0, 0, .35);
        max-width: 90vw;
        padding: 100px 100px 30px 40px;
        top: auto !important;
        left: auto !important;
        z-index: 4000;
        text-decoration: none
    }

    section.case-study-section a.case-study-box div.title-card-flex h1.case-study-title span.title {
        background-color: #000;
        -webkit-box-shadow: .3em 0 0 #000, -5em 0 0 #000, 1em 5px 0 #2657eb, 0 5px 0 #2657eb, 5px 14px 10px rgba(0, 0, 0, .15), 12px 24px 2px rgba(0, 0, 0, .1), 18px 34px 30px rgba(0, 0, 0, .1);
        box-shadow: .3em 0 0 #000, -5em 0 0 #000, 1em 5px 0 #2657eb, 0 5px 0 #2657eb, 5px 14px 10px rgba(0, 0, 0, .15), 12px 24px 2px rgba(0, 0, 0, .1), 18px 34px 30px rgba(0, 0, 0, .1);
        padding: 0;
        font-family: dead_stock, AllerBold, Arial #000, sans-serif
    }

    @media (max-width:768px) {
        div.title-card-flex h1 {
            padding: 40px 0 !important
        }

        div.title-card-flex h1 span {
            word-wrap: break-word
        }
    }

    nav:-moz-full-screen:not(iframe) {
        z-index: 1 !important
    }

    nav:-webkit-full-screen:not(iframe) {
        z-index: 1 !important
    }

    nav:-ms-fullscreen:not(iframe) {
        z-index: 1 !important
    }

</style>
