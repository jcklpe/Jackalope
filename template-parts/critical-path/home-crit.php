<?php
    $crithome="
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

            header,
            nav {
                display: block
            }

            h1 {
                font-size: 2em;
                margin: 0.67em 0
            }

            figcaption,
            figure,
            main {
                display: block
            }

            figure {
                margin: 1em 40px
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
                font-family: 'icomoon';
                src: url("/fonts/icomoon/icomoon.eot"), url("/fonts/icomoon/icomoon.woff") format("woff");
                font-weight: normal;
                font-style: normal
            }

            @font-face {
                font-family: 'dead_stock';
                src: url("/fonts/BrushFonts/dead_stock-webfont.woff2") format("woff2"), url("/fonts/BrushFonts/dead_stock-webfont.woff") format("woff");
                font-weight: normal;
                font-style: normal
            }

            h1,
            h2 {
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

            .icon-rss:before {
                font-family: 'icomoon';
                content: "\ea9b"
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

            body {
                overflow-x: hidden !important
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

            header.blog-archive-header {
                height: 40vh;
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
                padding: 10px;
                text-align: center
            }

            @media (max-width: 767px) {
                header.blog-archive-header {
                    height: 50vh
                }
            }

            header.blog-archive-header h1 {
                position: relative;
                top: -30px;
                z-index: 500000;
                color: white;
                font-size: 12vmax;
                text-shadow: 0 3px 0 #5258b2, 0 14px 10px rgba(0, 0, 0, 0.15), 0 24px 2px rgba(0, 0, 0, 0.1), 0 34px 30px rgba(0, 0, 0, 0.1);
                font-family: dead_stock, AllerBold, Arial Black, sans-serif
            }

            @media (max-width: 767px) {
                header.blog-archive-header h1 {
                    margin-top: -20px;
                    font-size: 12vmax
                }
            }

            header.blog-archive-header a {
                z-index: 500;
                position: absolute;
                background-color: black;
                color: white;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                right: 0;
                bottom: -30px;
                padding-bottom: 20px
            }

            header.blog-archive-header a h2 {
                display: inline;
                padding: 15px 20px;
                font-size: 20px;
                margin-top: 10px;
                text-decoration: none
            }

            header.blog-archive-header a h2::before {
                padding: 15px;
                font-size: 30px
            }

            header.blog-archive-header img {
                position: absolute;
                top: -300px;
                min-height: 100%;
                min-width: 100%
            }

            main figure.blog-post-section {
                margin-bottom: -5vw !important
            }

            figure.blog-post-section {
                position: relative;
                width: 100%;
                height: 80vh;
                overflow: hidden;
                background: #2657eb;
                -webkit-box-shadow: rgba(0, 0, 0, 0.99) 3px 3px 10px inset;
                box-shadow: rgba(0, 0, 0, 0.99) 3px 3px 10px inset;
                z-index: 50000;
                margin: 0 0 -5vw 0
            }

            @media (max-width: 767px) {
                figure.blog-post-section {
                    height: 75vh
                }
            }

            figure.blog-post-section div.img-container {
                position: absolute;
                width: calc(40% + 100px);
                height: calc(100% + 150px);
                top: -100px;
                overflow: hidden
            }

            @media (max-width: 767px) {
                figure.blog-post-section div.img-container {
                    width: calc(100% + 100px)
                }
            }

            figure.blog-post-section div.img-container div.blog-preview-img {
                background-size: cover;
                background-position: center center;
                min-height: calc(100% + 100px);
                min-width: calc(100% + 100px)
            }

            figure.blog-post-section figcaption.blog-text {
                height: 100%;
                width: 60%;
                padding: 0;
                position: absolute;
                top: -1px;
                background-color: white;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text {
                    background: transparent;
                    padding: 10px;
                    width: 100%
                }
            }

            figure.blog-post-section figcaption.blog-text::before {
                content: "" !important;
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-bottom: 50px solid transparent;
                margin: auto;
                position: absolute;
                top: 0;
                bottom: 0
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text::before {
                    display: none
                }
            }

            figure.blog-post-section figcaption.blog-text h2.blog-title {
                margin-left: -40px;
                display: inline;
                width: 60%;
                margin-bottom: 30px;
                -webkit-transform: translate(-20px, 0);
                -ms-transform: translate(-20px, 0);
                transform: translate(-20px, 0)
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text h2.blog-title {
                    margin-left: 25px
                }
            }

            figure.blog-post-section figcaption.blog-text h2.blog-title span {
                color: white;
                background: black;
                -webkit-box-shadow: 1.7em 0 0 black, -0.5em 0 0 black, 1.7em 5px 0px #2657eb, 0 5px 0px #2657eb, 0px 14px 10px rgba(0, 0, 0, 0.15), 0px 24px 2px rgba(0, 0, 0, 0.1), 0px 34px 30px rgba(0, 0, 0, 0.1);
                box-shadow: 1.7em 0 0 black, -0.5em 0 0 black, 1.7em 5px 0px #2657eb, 0 5px 0px #2657eb, 0px 14px 10px rgba(0, 0, 0, 0.15), 0px 24px 2px rgba(0, 0, 0, 0.1), 0px 34px 30px rgba(0, 0, 0, 0.1);
                line-height: 1.3;
                padding: 4px;
                font-size: 3vmax
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text h2.blog-title span {
                    font-size: 30px
                }
            }

            figure.blog-post-section figcaption.blog-text p.blog-exerpt {
                margin-left: 20px;
                -webkit-transform: translate(10px, 0);
                -ms-transform: translate(10px, 0);
                transform: translate(10px, 0);
                max-width: 60%
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text p.blog-exerpt {
                    margin-left: 0;
                    padding: 0 40px
                }
            }

            figure.blog-post-section figcaption.blog-text p.blog-exerpt span {
                color: white;
                background: black;
                -webkit-box-shadow: 0.75em 0 0 black, -0.5em 0 0 black;
                box-shadow: 0.75em 0 0 black, -0.5em 0 0 black;
                line-height: 1.5;
                position: static !important;
                font-size: 1.5vmax;
                padding: 2px
            }

            @media (max-width: 767px) {
                figure.blog-post-section figcaption.blog-text p.blog-exerpt span {
                    font-size: 16px
                }
            }

            figure.blog-post-section a {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
                text-indent: 200%;
                white-space: nowrap;
                font-size: 0;
                opacity: 0
            }

            figure.blog-post-section:nth-child(odd) {
                -webkit-clip-path: polygon(0 5vw, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 5vw, 100% 0, 100% 100%, 0 100%);
                margin-bottom: -5vw
            }

            figure.blog-post-section:nth-child(odd) div.img-container {
                left: 0px
            }

            figure.blog-post-section:nth-child(odd) div.img-container div.blog-preview-img {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                opacity: 0.7
            }

            figure.blog-post-section:nth-child(odd) figcaption.blog-text {
                right: 0px
            }

            figure.blog-post-section:nth-child(odd) figcaption.blog-text::before {
                left: -24px;
                border-right: 25px solid white;
                border-top: 50px solid transparent;
                border-bottom: 50px solid transparent
            }

        </style>
    "
