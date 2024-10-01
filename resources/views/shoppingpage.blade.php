<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo-shopping</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/leaderboard.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/shoppingpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/scss/shoppingpage.css') }}" />
</head>

<body>
    <div class="main-container">
        <!------------------------------------- Left Sidebar ------------------------------------------------>
        @livewire('sidebar')

        <!------------------------------------- Content-Container ------------------------------------------------>
        <div class="content-container">
            <!----------------------------------- Right sidebar ------------------------------------------------>
            <div class="right-sidebar">
                <div class="right-sidebar-header">
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/country-flags/transparent.svg') }}"
                                    class="country-flag" />
                            </div>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/lesson-xp.svg') }}" alt="home-icon"
                                    class="profile" />
                            </div>
                            <span class="text-in-button fire-text">
                                400
                            </span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}" alt="home-icon"
                                    class="profile" />
                            </div>
                            <span class="text-in-button gem-text">
                                7393
                            </span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/heart-filled-red.svg') }}"
                                    alt="home-icon" class="profile" />
                            </div>
                            <span class="text-in-button heart-text">
                                5
                            </span>
                        </span>
                    </a>
                </div>
                <div class="try-super-box">
                    <img src="{{ url('duolingo-clone-master/assets/svg/super-icon.svg') }}" alt="super-text"
                        id="try-super-image-one" />
                    <img src="{{ url('duolingo-clone-master/assets/svg/super-duo-owl.svg') }}" alt="super-duo-owl"
                        id="try-super-image-two" />
                    <div class="content-text">
                        <h2>Try Super for free</h2>
                        <div class="description">
                            No ads, personalized practice, and unlimited
                            Legendary!
                        </div>
                        <button id="try-super-button" onclick="openSuperDuolingoPage();">
                            Try 2 weeks free
                        </button>
                    </div>
                </div>
                <div class="try-super-box">
                    <div class="league-header-with-link">
                        <h2>Nexus League</h2>
                        <h2>
                            <a href="./leaderboard.html">View League</a>
                        </h2>
                    </div>
                    <div class="league-header-with-link">
                        <img src="{{ url('duolingo-clone-master/assets/svg/amethyst-league-icon.svg') }}"
                            alt="amethyst-league-icon" />
                        <div class="league-text-container">
                            <div class="description">
                                Compete with others to move up the league.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollable-lesson-div">
                <div class="center-container">
                    <div class="flyingowl">
                        <div class="divowlhead">
                            <img class="owlpic"
                                src="https://d35aaqx5ub95lt.cloudfront.net/images/super/8183c77cba99daf1e900fb5f9b0cc671.svg"
                                alt="" />
                            <div class="heading">
                                <div class="divheadin">
                                    <span class="firstHeading">
                                        Start a 2 week free trial to enjoy
                                        exclusive Super benefits
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button class="logInButton" id="superLink" onclick="loginButtonAnimation()">
                            <span>Buy Super for ₹199</span>
                        </button>
                        <img class="super"
                            src="https://d35aaqx5ub95lt.cloudfront.net/images/super/2e50c3e8358914df5285dc8cf45d0b4c.svg"
                            alt="" />
                    </div>
                    <div class="hearthead">Hearts</div>
                    <ul class="shoplist">
                        <li class="divinShopping">
                            <img class="heart"
                                src="https://d35aaqx5ub95lt.cloudfront.net/images/hearts/547ffcf0e6256af421ad1a32c26b8f1a.svg"
                                alt="" />
                            @livewire('FullButton')
                            <div class="divinlist">Refill Hearts</div>
                            <p class="parainlist">
                                Get full hearts so you can worry less about
                                making mistakes in a lesson
                            </p>
                        </li>
                        <li class="divinShopping">
                            <img class="heart"
                                src="https://d35aaqx5ub95lt.cloudfront.net/images/hearts/4f3842c690acf9bf0d4b06e6ab2fffcf.svg"
                                alt="" />
                            <button class="freetrialButton" onclick="window.location.href = './superduolingo.html';">
                                <span>Buy Super</span>
                            </button>
                            <div class="divinlist">Unlimited Hearts</div>
                            <p class="parainlist">
                                Never run out of hearts with Super!
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!----------------------------------- Scrollable area showing units ------------------------------------------------>
        </div>
    </div>
    <div class="sidebar-buttons bottom-nav">
        <a href="learn.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}" alt="home-icon" />
                </div>
            </span>
        </a>
        <a href="leaderboard.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}" alt="home-icon" />
                </div>
            </span>
        </a>
        <a href="profile-page.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap">
                <div class="icon-in-button">
                    <img id="profile-image"
                        src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}" alt="home-icon"
                        class="profile" />
                </div>
            </span>
        </a>
        <a href="./shoppingpage.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap selected">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/shop-in-sidebar.svg') }}" alt="home-icon" />
                </div>
            </span>
        </a>
        <a href="./faq.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/images/sidebar-icon-faq.png') }}"
                        alt="home-icon" />
                </div>
            </span>
        </a>
    </div>
    <script src="{{ url('duolingo-clone-master/js/shoppingpage.js') }}"></script>
    <script src="{{ url('duolingo-clone-master/js/learn.js') }}"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/updateShopData.js') }}"></script>
</body>

</html>
