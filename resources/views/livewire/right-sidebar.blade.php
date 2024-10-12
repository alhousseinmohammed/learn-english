            <div class="right-sidebar">
                <div class="right-sidebar-header">
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/streak-fire-active.svg') }}"
                                    class="country-flag">
                            </div>
                            <span class="text-in-button fire-text">{{ auth()->user()->learner->current_streak }}</span>
                        </span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/lesson-xp.svg') }}" alt="home-icon"
                                    class="profile">
                            </div>
                            <span
                                class="text-in-button fire-text">{{ auth()->user()->learner->experience_points }}</span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}" alt="home-icon"
                                    class="profile">
                            </div>
                            <span class="text-in-button gem-text">{{ auth()->user()->learner->current_gems }}</span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            @if ($super)
                                <div class="icon-in-button">
                                    <img src="https://d35aaqx5ub95lt.cloudfront.net/images/hearts/4f3842c690acf9bf0d4b06e6ab2fffcf.svg"
                                        alt="home-icon" class="profile">
                                </div>
                                <span class="text-in-button heart-text"> </span>
                            @else
                                <div class="icon-in-button">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/heart-filled-red.svg') }}"
                                        alt="home-icon" class="profile">
                                </div>
                                <span
                                    class="text-in-button heart-text">{{ auth()->user()->learner->current_hearts }}</span>
                            @endif
                        </span>
                    </a>
                </div>
                <div class="try-super-box">
                    <img src="{{ url('duolingo-clone-master/assets/svg/super-icon.svg') }}" alt="super-text"
                        id="try-super-image-one">
                    <img src="{{ url('duolingo-clone-master/assets/svg/super-duo-owl.svg') }}" alt="super-duo-owl"
                        id="try-super-image-two">
                    <div class="content-text">
                        <h2>Try Super for free</h2>
                        <div class="description">
                            No ads, personalized practice, and unlimited Legendary!
                        </div>
                        <button id="try-super-button" onclick="openSuperDuolingoPage();">
                            Try 2 weeks free
                        </button>
                    </div>
                </div>
                <div class="try-super-box">
                    <div class="league-header-with-link">
                        <h2>Nexus League</h2>
                        <h2><a href="{{ route('leaderboard') }}">View League</a></h2>
                    </div>
                    <div class="league-header-with-link">
                        <img src="{{ url('duolingo-clone-master/assets/svg/amethyst-league-icon.svg') }}"
                            alt="amethyst-league-icon">
                        <div class="league-text-container">
                            <div class="description">
                                Compete with others to move up the league.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
