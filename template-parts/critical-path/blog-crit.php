<!--//- Critical Path CSS-->
<style>
    @charset "UTF-8";

    html {
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    article,
    header,
    nav,
    section {
        display: block
    }

    h1 {
        font-size: 2em;
        margin: 0.67em 0
    }

    main {
        display: block
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
        line-height: 1.15;
        margin: 0
    }

    button {
        overflow: visible
    }

    button {
        text-transform: none
    }

    button,
    html [type="button"] {
        -webkit-appearance: button
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    button:-moz-focusring,
    [type="button"]:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    button {
        line-height: 1;
        padding: .6em 1em .4em
    }

    .screen-reader-text {
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden
    }

    .entry-content:before,
    .entry-content:after {
        content: "";
        display: table;
        table-layout: fixed
    }

    .entry-content:after {
        clear: both
    }

    .hentry {
        margin: 0 0 1.5em
    }

    .byline,
    .updated:not(.published) {
        display: none
    }

    .single .byline {
        display: inline
    }

    .entry-content {
        margin: 1.5em 0 0
    }

    div#page {
        overflow: hidden;
        min-height: 100vh
    }

    @font-face {
        font-family: 'AllerBold';
        src: url("/fonts/Aller/AllerBold.woff2") format("woff2"), url("/fonts/Aller/AllerBold.woff") format("woff")
    }

    @font-face {
        font-family: 'AllerLite';
        src: url("/fonts/Aller/AllerLite.woff2") format("woff2"), url("/fonts/Aller/AllerLite.woff") format("woff")
    }

    @font-face {
        font-family: 'Aller';
        src: url("/fonts/Aller/Aller.woff2") format("woff2"), url("/fonts/Aller/Aller.woff") format("woff")
    }

    @font-face {
        font-family: 'dead_stock';
        src: url("/fonts/BrushFonts/dead_stock-webfont.woff2") format("woff2"), url("/fonts/BrushFonts/dead_stock-webfont.woff") format("woff");
        font-weight: normal;
        font-style: normal
    }

    h1 {
        font-weight: normal;
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

    p {
        position: relative;
        color: white;
        font-size: 2vmax;
        font-family: AllerLite, sans-serif
    }

    *::-webkit-scrollbar-track {
        border: 1px solid black;
        background-color: #F5F5F5
    }

    *::-webkit-scrollbar {
        width: 15px;
        background-color: #F5F5F5
    }

    *::-webkit-scrollbar-thumb {
        background-color: #000000
    }

    div.entry-content p {
        margin-top: 50px
    }

    p a {
        background: white;
        color: black;
        overflow: hidden;
        font-weight: 500;
        z-index: 50;
        position: relative;
        display: inline-block;
        outline: none;
        vertical-align: bottom;
        text-decoration: none;
        white-space: nowrap
    }

    p a::before {
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

    button {
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizelegibility;
        color: white
    }

    .btn-2 {
        background: transparent !important;
        -webkit-box-shadow: 0 6px transparent;
        box-shadow: 0 6px transparent;
        margin-bottom: 12px
    }

    .btn-2a {
        background: transparent !important;
        border-radius: 0 0 5px 5px
    }

    .hamburger {
        padding: 15px 15px;
        display: inline-block;
        font: inherit;
        color: inherit;
        text-transform: none;
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
    .hamburger-inner::before,
    .hamburger-inner::after {
        width: 40px;
        height: 4px;
        background-color: white;
        border-radius: 0px;
        position: absolute
    }

    .hamburger-inner::before,
    .hamburger-inner::after {
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

    *:-webkit-full-screen {
        z-index: 50000 !important
    }

    *:-moz-full-screen {
        z-index: 50000 !important
    }

    *:-ms-fullscreen {
        z-index: 50000 !important
    }

    *:-webkit-full-screen {
        z-index: 50000 !important
    }

    *:-webkit-full-screen-ancestor:not(iframe) nav.navbar {
        display: none
    }

    *:-webkit-full-screen-ancestor:not(iframe) section.hero-section {
        display: none
    }

    *::-webkit-backdrop {
        display: none
    }

    nav.navbar {
        background: transparent;
        margin: 0;
        outline: none !important;
        border: none !important;
        position: relative;
        min-height: 50px;
        margin-bottom: 20px;
        z-index: 5;
        width: 100%
    }

    @media (max-width: 767px) {
        nav.navbar {
            z-index: 100
        }
    }

    nav.navbar button.navbar-toggle {
        display: block !important;
        float: right
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
        color: white;
        font-family: Aller, sans-serif;
        position: relative;
        display: inline-block;
        margin: 15px 25px;
        outline: none !important;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: normal;
        text-shadow: 0 0 1px rgba(3, 3, 3, 0.3);
        font-size: 1.45em
    }

    nav.navbar .rollovernav a {
        overflow: hidden;
        padding: 0 3px
    }

    nav.navbar .rollovernav a span {
        position: relative;
        display: inline-block
    }

    nav.navbar .rollovernav a span::before {
        position: absolute;
        font-family: AllerBold, sans-serif;
        top: 100%;
        content: attr(data-hover);
        font-weight: normal;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    @media (min-width: 992px) {
        .hamburger {
            visibility: hidden
        }

        .navbar-collapse {
            position: fixed;
            width: 100%;
            z-index: 2
        }
    }

    @media (max-width: 991px) {
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
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1)
    }

    @media (min-width: 768px) {
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

    .navbar-collapse:before,
    .navbar-collapse:after {
        display: table;
        content: " "
    }

    .navbar-collapse:after {
        clear: both
    }

    .collapse {
        display: none
    }

    .container {
        width: 100%;
        padding: 0 !important
    }

    body {
        overflow-x: hidden !important
    }

    section.blog-hero-section {
        height: 60vh !important;
        z-index: -1
    }

    section.hero-section {
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 60vh;
        position: relative;
        min-height: 50vh;
        z-index: -1
    }

    section.hero-section div.overlay {
        position: absolute;
        top: -60%;
        width: 100vw;
        height: 250vh;
        z-index: -1
    }

    section.hero-section div.img-container {
        position: absolute !important;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        min-width: calc(100% + 200px);
        min-height: calc(100% + 200px)
    }

    section.hero-section div.img-container img.hero-img {
        position: relative;
        min-width: calc(100% + 200px);
        min-height: calc(100% + 200px);
        top: calc(-30px - 5vw) !important;
        z-index: -5 !important;
        -o-object-fit: cover;
        object-fit: cover
    }

    section.hero-section div.title-card-flex {
        position: relative;
        top: -5vw;
        height: 100%;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        z-index: 2;
        -webkit-transform: rotate(-5deg);
        -ms-transform: rotate(-5deg);
        transform: rotate(-5deg)
    }

    section.hero-section div.title-card-flex h1 {
        position: relative !important;
        color: white;
        background: black;
        min-width: 80vw;
        max-width: 90vw;
        margin: 50px 10px 25px 50px;
        padding: 0 !important;
        text-align: center;
        -ms-flex-item-align: center;
        align-self: center;
        z-index: 2;
        -webkit-transform: scale(1, 0.75) rotate(-5deg);
        -ms-transform: scale(1, 0.75) rotate(-5deg);
        transform: scale(1, 0.75) rotate(-5deg);
        -webkit-box-shadow: 1em 7px 10px rgba(0, 0, 0, 0.15), 1.5em 14px 7px rgba(0, 0, 0, 0.1), 20px 24px 30px rgba(0, 0, 0, 0.1);
        box-shadow: 1em 7px 10px rgba(0, 0, 0, 0.15), 1.5em 14px 7px rgba(0, 0, 0, 0.1), 20px 24px 30px rgba(0, 0, 0, 0.1);
        text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);
        font-family: dead_stock, AllerBold, Arial Black, sans-serif
    }

    @media (max-width: 767px) {
        section.hero-section div.title-card-flex h1 {
            margin: 10px
        }
    }

    section.hero-section {
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

    @media (max-width: 768px) {
        div.title-card-flex h1 {
            padding: 40px 0px 40px 0px !important
        }
    }

    section.blog-content {
        background-color: white;
        color: black;
        position: relative;
        z-index: 1000;
        -webkit-clip-path: polygon(0 0, 100% 5vw, 100% 100%, 0 100%);
        clip-path: polygon(0 0, 100% 5vw, 100% 100%, 0 100%);
        margin-top: -5vw
    }

    section.blog-content .entry-meta {
        top: calc(3vw + 20px)
    }

    time.entry-date {
        color: black;
        text-decoration: none
    }

    span.author a {
        color: black;
        text-decoration: none
    }

    article {
        background-color: white;
        position: relative;
        color: black;
        z-index: 1000
    }

    article .entry-content p {
        color: black;
        margin: 10px 0 50px 0;
        z-index: 1000;
        padding: 0 20vw 0 20vw;
        line-height: 1.6
    }

    @media (max-width: 767px) {
        article .entry-content p {
            padding: 0 10vw 0 10vw !important
        }
    }

    .entry-meta a {
        text-decoration: none
    }

    header.entry-header {
        padding: 2vw 0 0 10px
    }

    article.hentry {
        margin: 0
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
