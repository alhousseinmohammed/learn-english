<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo</title>
    <link rel="icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../css/learn.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
    @vite(['resources/css/learn.css', 'resources/js/learn.js'])
    @vite(['resources/css/main.css', 'resources/js/main.js'])

</head>

<body>
    <div class="main-container">
        <!------------------------------------- Left Sidebar ------------------------------------------------>
        <div class="sidebar">
            <div class="logo-container">
                <img src="../assets/svg/duolingo-green-text-only.svg" alt="dolingo-text" />
            </div>
            <div class="sidebar-buttons">
                <a href="" class="button-in-sidebar">
                    <span class="icon-and-text-wrap selected">
                        <div class="icon-in-button">
                            <img src="../assets/svg/home-in-sidebar.svg" alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Learn </span>
                    </span>
                </a>
                <a href="leaderboard.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="../assets/svg/badge-in-sidebar.svg" alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Leaderboard </span>
                    </span>
                </a>
                <a href="profile-page.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img id="profile-image" src="../assets/svg/profile-image-temp.svg" alt="home-icon"
                                class="profile" />
                        </div>
                        <span class="text-in-button"> Profile </span>
                    </span>
                </a>
                <a href="./shoppingpage.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="../assets/svg/shop-in-sidebar.svg" alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Shop </span>
                    </span>
                </a>
                <a href="./faq.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="../assets/images/sidebar-icon-faq.png" alt="home-icon" />
                        </div>
                        <span class="text-in-button"> FAQ </span>
                    </span>
                </a>
            </div>
        </div>
        <!------------------------------------- Content-Container ------------------------------------------------>
        <div class="content-container">
            <!----------------------------------- Right sidebar ------------------------------------------------>
            <div class="right-sidebar">
                <div class="right-sidebar-header">
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="../assets/svg/country-flags/transparent.svg" class="country-flag" />
                            </div>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="../assets/svg/lesson-xp.svg" alt="home-icon" class="profile" />
                            </div>
                            <span class="text-in-button fire-text">
                                0
                            </span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="../assets/svg/gems-icon.svg" alt="home-icon" class="profile" />
                            </div>
                            <span class="text-in-button gem-text"> 0 </span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="../assets/svg/heart-filled-red.svg" alt="home-icon" class="profile" />
                            </div>
                            <span class="text-in-button heart-text">
                                0
                            </span>
                        </span>
                    </a>
                </div>
                <div class="try-super-box">
                    <img src="../assets/svg/super-icon.svg" alt="super-text" id="try-super-image-one" />
                    <img src="../assets/svg/super-duo-owl.svg" alt="super-duo-owl" id="try-super-image-two" />
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
                        <img src="../assets/svg/amethyst-league-icon.svg" alt="amethyst-league-icon" />
                        <div class="league-text-container">
                            <div class="description">
                                Compete with others to move up the league.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------- Scrollable area showing units ------------------------------------------------>
            <div class="scrollable-lesson-div active" onclick="closeAllOpenDialogBoxes()"></div>
        </div>
    </div>
    <div class="loading-screen hidden">
        <div class="text-animation-container">
            <div class="lesson-loading-svg" id="owl-walk-animation"></div>
            <span>Did You Know : Spanish is the second most spoken language
                globally, with over 460 million native speakers.</span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>
<script src="../js/learn.js"></script>
<script src="{{ url('duolingo-clone-master/js/updateUserData.js') }}" type="module"></script>

</html>
