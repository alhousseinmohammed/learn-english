<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Edit Page</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/profile-edit-page.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/profile-edit-page.js') }}"></script>
    <script src="{{ url('duolingo-clone-master/js/profile-page-values.js') }}"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/firebaseLogout.js') }}"></script>
</head>

<body>
    <div class="main-container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="logo-container">
                <img src="{{ url('duolingo-clone-master/assets/svg/duolingo-green-text-only.svg') }}"
                    alt="dolingo-text" />
            </div>
            <div class="sidebar-buttons">
                <a href="learn.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Learn </span>
                    </span>
                </a>
                <a href="./leaderboard.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}"
                                alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Leaderboard </span>
                    </span>
                </a>
                <a href="./profile-page.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap selected">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                                alt="home-icon" class="profile" id="left-profile-image" />
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
                <a href="" class="button-in-sidebar" id="logout-button">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/Logout.svg') }}" alt="home-icon" />
                        </div>
                        <span class="text-in-button"> Log Out </span>
                    </span>
                </a>
            </div>
        </div>

        <div class="content-container">
            <!----------------------------------- Right sidebar ------------------------------------------------>
            <div class="right-sidebar">
                <div class="right-sidebar-header">
                    <a class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/country-flags/transparent.svg') }}"
                                    class="country-flag" />
                            </div>
                        </span>
                    </a>
                    <a class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/lesson-xp.svg') }}" alt="home-icon"
                                    class="profile" />
                            </div>
                            <span class="text-in-button fire-text"> 400 </span>
                        </span>
                    </a>
                    <a class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}" alt="home-icon"
                                    class="profile" />
                            </div>
                            <span class="text-in-button gem-text"> 7393 </span>
                        </span>
                    </a>
                    <a class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/heart-filled-red.svg') }}"
                                    alt="home-icon" class="profile" />
                            </div>
                            <span class="text-in-button heart-text"> 5 </span>
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
                            No ads, personalized practice, and unlimited Legendary!
                        </div>
                        <button id="try-super-button" onclick="window.location.href='./superduolingo.html'">
                            Try 2 weeks free
                        </button>
                    </div>
                </div>
                <div class="try-super-box">
                    <div class="league-header-with-link">
                        <h2>Nexus League</h2>
                        <h2><a href="./leaderboard.html">View League</a></h2>
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
                <!-- Middle Section -->
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data"
                    class="middle-container">
                    @csrf
                    @method('patch')
                    <div class="edit-profile-container">
                        <div class="account-heading">
                            <h1>Edit Account</h1>
                        </div>
                        <table class="edit-profile-table">
                            <tbody>
                                <tr>
                                    <td class="edit-left-side-content">Profile picture</td>
                                    <td class="edit-right-side-content">
                                        <div class="choose-file-div">
                                            <label class="choose-file-label">
                                                CHOOSE FILE
                                                <input id="choose-file-input" type="file" accept="image/*"
                                                    onchange="updateFileName()" name="photo" />
                                            </label>
                                            <div class="selected-file-name" id="selected-file-name">
                                                no file selected
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <div>
                                        <label for="photo">Upload Photo</label>
                                        <input type="file" name="photo" id="photo" accept="image/*">
                                    </div>
                                </tr> --}}

                                <tr>
                                    <td class="edit-left-side-content">
                                        <label for="name">Name</label>
                                    </td>
                                    <td class="edit-right-side-content">
                                        <div class="name-field-container">
                                            <input name="name" class="input-field" id="name" type="text"
                                                value="{{ old('name', $user->name) }}" required autofocus />
                                            <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="edit-left-side-content">
                                        <label for="name">Email</label>
                                    </td>
                                    <td class="edit-right-side-content">
                                        <div class="name-field-container">
                                            <input name="email" class="input-field" id="email" type="text"
                                                value="{{ old('email', $user->email) }} " required />
                                            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bottom-buttons-container">
                            <div class="bottom-button-div">
                                <a href="{{ route('dashboard') }}" class="bottom-button"
                                    style="text-decoration:none;color:inherit" id="go-back">Go Back</a>
                            </div>

                            <div class="bottom-button-div">
                                <button type="submit" class="bottom-button" id="save-changes">
                                    <span id="save-changes-span">Save Changes</span>
                                    <div class="loading-balls-container hidden" style="transition-duration: 250ms"
                                        id="loading-balls-container">
                                        <div class="animation loading-ball"></div>
                                        <div class="animation second-animation loading-ball"></div>
                                        <div class="animation third-animation loading-ball"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
