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
                            <span class="text-in-button gem-text">{{ $gems }}</span>
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
                                <span class="text-in-button heart-text">{{ $hearts }}</span>
                            @endif
                        </span>
                    </a>
                </div>


                <div class="try-super-box" x-show="true" x-cloak>
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
                <div class="try-super-box" x-show="true" x-cloak>
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
                <div class="try-super-box" x-data="{ activeTab: 'followers' }" x-show="false" x-cloak>
                    <!-- Tabs Header -->
                    <div class="tabs">
                        <div class="tab" :class="{ 'active': activeTab === 'followers' }"
                            @click="activeTab = 'followers'">
                            Followers
                        </div>
                        <div class="tab" :class="{ 'active': activeTab === 'followed' }"
                            @click="activeTab = 'followed'">
                            Followed
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="content">
                        <template x-if="activeTab === 'followers'">
                            <div class="divforimg">
                                @foreach ($learner->followers as $follower)
                                    <a href="{{ action('App\Http\Controllers\LearnerController@edit', $follower) }}"
                                        class="person">
                                        <img class="image"
                                            src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}">
                                        <div class="divforname">
                                            <span class="spanforname">{{ $follower->user->name }}</span>
                                        </div>
                                        <span class="spanforxp">{{ $follower->experience_points }}</span>
                                    </a>
                            </div>
                            @endforeach
                            <form method="POST" action="/learners/follow">
                                @csrf
                                <input type="hidden" name="follower_id" value="4">
                                <!-- Replace with dynamic ID -->
                                <input type="hidden" name="followed_id" value="5">
                                <!-- Replace with dynamic ID -->
                                <button type="submit">Follow</button>
                            </form>
                            {{ $learner->id }}



                    </div>
                    </template>
                    <template x-if="activeTab === 'followed'">
                        <div>
                            @foreach ($learner->following as $followed)
                                <a href="{{ action('App\Http\Controllers\LearnerController@edit', $followed) }}"
                                    class="person">
                                    <img class="image"
                                        src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}">
                                    <div class="divforname">
                                        <span class="spanforname">{{ $followed->user->name }}</span>
                                    </div>
                                    <span class="spanforxp">{{ $followed->experience_points }}</span>
                                </a>
                            @endforeach
                        </div>

                </div>
                </template>
            </div>

            <!-- Footer Section -->
            <div class="footer">
                <button class="show-more">Show more</button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </div>
            </div>
            </div>
