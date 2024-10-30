<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="robots" content="NOODP"><noscript>
        <meta http-equiv="refresh" content="0; url=/nojs/splash">
    </noscript>

    <link rel="apple-touch-icon" href="https://d35aaqx5ub95lt.cloudfront.net/images/duolingo-touch-icon2.png">
    <link rel="icon" href="https://d35aaqx5ub95lt.cloudfront.net/favicon.ico">

    <title data-react-helmet="true">‏دوولينجو - ‏أفضل طريقة لتعلم الإنجليزية في العالم</title>

    <script>
        window.duo.courseSplashRedesign = !0
    </script>
    <script>
        window.duo.enableSentry = !0 <
            /scri> <
        script >
            window.duo.useImmer = "immer-freeze"
    </script>
    <script defer="defer" src="https://d35aaqx5ub95lt.cloudfront.net/js/manifest-72acd83e.js"></script>
    <script defer="defer" src="https://d35aaqx5ub95lt.cloudfront.net/js/features-91ec4487.js"></script>
    <link href="https://d35aaqx5ub95lt.cloudfront.net/css/1189-bdca9d96.rtl.css" rel="stylesheet">
    <link href="https://d35aaqx5ub95lt.cloudfront.net/css/app-2858b528.rtl.css" rel="stylesheet">
    <style>
    </style>
    {{-- <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/9020-81fe7030.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/5323-26360482.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/8575-81fe7030.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/4800-5dfb3190.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/4911-22adec45.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/6451-eff38402.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/973-b42e4575.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/3671-ef13dd1f.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/8423-8a479f0c.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/3932-d4e91979.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/2349-67b352c2.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/8097-73358160.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/82-f737564c.rtl.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/562-700979ce.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/2449-95259559.rtl.css">
    {{-- <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/9487-c883bbb9.rtl.css">
    <link rel="stylesheet" type="text/css" href="https://d35aaqx5ub95lt.cloudfront.net/css/4051-4ccc0c65.rtl.css"> --}}


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .divforname {
            font-family: 'din-round-bold';
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            margin-right: 10px;
            text-align: left;
            overflow: hidden;
        }

        .spanforname {
            /* font-weight: 700;
                            text-overflow: ellipsis;
                            white-space: nowrap;
                            width: 100%; */
        }

        .spanforxp {
            /* color: rgb(var(--color-wolf));
                            flex-shrink: 0;
                            margin-right: 10px;
                            text-align: right; */
        }

        .divprofileheader {
            align-items: center;
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px !important;
        }

        /* General Styles */
        body {
            /* background-color: #f0f0f0; */
            /* font-family: Arial, sans-serif; */
        }

        /* Box Styles */
        .try-super-box {
            width: 360px;
            height: 370px;
            /* background-color: white; */
            border: 2px solid #ddd;
            display: flex;
            flex-direction: column;
            /* margin: 20px auto; */
            padding: 18px 0;
        }

        /* Header (Tabs) */
        .tabs {
            display: flex;
            justify-content: space-around;
            border-bottom: 2px solid #ddd;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 10px;
            cursor: pointer;
        }

        .tab.active,
        .tab:hover {
            font-weight: bold;
            border-bottom: 2px solid rgb(28, 176, 246);
            color: rgb(28, 176, 246);
        }

        /* Content Section */
        .content {
            flex: 1;
            padding: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
        }

        .person {
            padding: 10px 0;
            /* border-bottwom: 2px solid #ddd; */
        }

        /* Last Person without border */

        /* Footer Section */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-top: 2px solid #ddd;
        }

        .footer button {
            border: none;
            background: none;
            cursor: pointer;
            font-size: 14px;
            color: #333;
        }

        .footer svg {
            width: 16px;
            height: 16px;
            transform: rotate(90deg);
        }

        .divforimg {
            width: 100%;
        }

        .image {
            /* border-radius: 50%;
                            left: 0;
                            top: 0; */
            height: 48px;
            width: 48px;
            grid-area: image;
        }

        .person {
            display: grid;
            grid-template-areas: "image ." "image .";
            width: 100%;
            justify-content: start;
            column-gap: 3%;

            /* text-align: center; */
        }
    </style>

    @livewireStyles()
</head>

<body>
    <div class="main-container">
        <!------------------------------------- Left Sidebar ------------------------------------------------>
        {{-- <div class="sidebar">
            <div class="logo-container">
                <img src="{{ url('duolingo-clone-master/assets/svg/duolingo-green-text-only.svg') }}"
                    alt="dolingo-text" />
            </div>
            <div class="sidebar-buttons">
                <a href="" class="button-in-sidebar">
                    <span class="icon-and-text-wrap selected">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Learn </span>
                    </span>
                </a>
                <a href="leaderboard.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Leaderboard </span>
                    </span>
                </a>
                <a href="profile-page.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img id="profile-image"
                                src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                                alt="home-icon" class="profile" />
                        </div>
                        <span class="text-in-button"> Profile </span>
                    </span>
                </a>
                <a href="./shoppingpage.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/shop-in-sidebar.svg') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Shop </span>
                    </span>
                </a>
                <a href="./faq.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/images/sidebar-icon-faq.png') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> FAQ </span>
                    </span>
                </a>
            </div>
        </div> --}}
        @livewire('sidebar', ['selected' => 2])
        <!------------------------------------- Content-Container ------------------------------------------------>
        <div class="content-container">
            <!----------------------------------- Right sidebar ------------------------------------------------>
            @livewire('right-sidebar')
            <!----------------------------------- Scrollable area showing units ------------------------------------------------>
            <div class="scrollable-lesson-div active" onclick="closeAllOpenDialogBoxes()">


                @livewire('words')


            </div>
        </div>
    </div>
    <div class="loading-screen hidden">
        <div class="text-animation-container">
            <div class="lesson-loading-svg" id="owl-walk-animation"></div>
            <span>Did You Know : Spanish is the second most spoken language
                globally, with over 460 million native speakers.</span>
        </div>
    </div>
    @livewireScripts()
</body>


</html>
