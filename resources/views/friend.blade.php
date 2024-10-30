<html lang="{{ App::getLocale() }}" dir="{{ App::getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/profile-page.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script src="{{ url('duolingo-clone-master/js/learn.js') }}"></script> -->
    <script type="module" src="{{ url('duolingo-clone-master/js/profile-page.js') }}"></script>
    <script src="{{ url('duolingo-clone-master/js/profile-page-values.js') }}"></script>
    {{-- <script type="module" src="{{ url('duolingo-clone-master/js/firebaseLogout.js') }}"></script> --}}
</head>

<body>
    <div class="main-container">
        <!-- Left Sidebar -->
        @livewire('sidebar', ['selected' => 3])


        <div class="content-container">
            <!----------------------------------- Right sidebar ------------------------------------------------>
            @livewire('RightSidebar')

            <!-- Middle Section -->
            <div class="profile-middle-container">
                <div class="profile-middle-flex">
                    <div class="user-info-div">
                        <div class="user-info-text">
                            <h1 class="profile-username">
                                <span class="first-and-last-name"
                                    id="first-and-last-name">{{ $learner->user->name }}</span>
                                <div class="email" id="email">{{ $learner->user->email }}</div>
                            </h1>
                            <div class="join-date-container">
                                <img src="{{ url('duolingo-clone-master/assets/svg/join-date.svg') }}"
                                    class="date-image" alt="" />
                                <div class="join-date" id="join-date">
                                    {{ __('profile.join') . $learner->user->created_at->format('F Y') }}</div>
                            </div>
                        </div>
                        <div class="profile-image-div">
                            <span class=""></span>
                            <img @if ($learner->user->photo) src="{{ url('photos' . $learner->user->photo) }}" @endif
                                alt="" id="profile-image" />
                            {{-- <div class="edit-account-div">
                                <a href="{{ route('profile.edit') }}">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/edit-button-logo.svg') }}"
                                        alt="" />
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="statistics-section">
                        <div class="statistics-heading-div">
                            <h2 class="statistics-heading">Statistics</h2>
                        </div>

                        <div class="statistics-content-div">
                            <div>
                                <div class="statistics-section-one">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}"
                                        class="statistics-streak-icon" alt="" />
                                    <div class="statistics-section-one-content">
                                        <h4 class="statistics-value gem-text" id="streak-value">
                                            {{ $learner->current_gems }}
                                        </h4>
                                        <div class="statistics-text">{{ __('profile.gems') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="statistics-section-one">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/lesson-xp.svg') }}"
                                        class="statistics-streak-icon" alt="" />
                                    <div class="statistics-section-one-content">
                                        <h4 class="statistics-value" id="xp-value">
                                            {{ $learner->experience_points }}</h4>
                                        <div class="statistics-text">{{ __('profile.xp') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="statistics-section-one">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/' . ($learner->league?->image ?? 'locked-button-grey')) }}"
                                        class="statistics-streak-icon" alt="" />
                                    <div class="statistics-section-one-content">
                                        <h4 class="statistics-value">
                                            {{ $learner->league->name ?? 'No league' }}
                                        </h4>
                                        <div class="statistics-text">{{ __('profile.league') }}</div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="statistics-section-one disabled">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/top-finishes-disabled.svg') }}"
                                        class="statistics-streak-icon" alt="" />
                                    <div class="statistics-section-one-content">
                                        <h4 class="statistics-value">0</h4>
                                        <div class="statistics-text">{{ __('profile.top') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="logout-button" id="logout-button-mobile">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/Logout.svg') }}" alt="home-icon" />
                            </div>
                            <span class="text-in-button text-logout"> LOG OUT </span>
                        </span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="sidebar-buttons bottom-nav">
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
            <span class="icon-and-text-wrap selected">
                <div class="icon-in-button">
                    <img id="profile-bottom" src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                        alt="home-icon" class="profile" />
                </div>

            </span>
        </a>
        <a href="./shoppingpage.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap">
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
    </div> --}}
</body>

</html>
