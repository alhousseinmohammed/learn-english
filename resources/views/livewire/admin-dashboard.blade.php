        {{-- <aside class="nav-bar">
            <div class="nav-top">
                <div class="nav-logo">
                    <img src="/assets/logo.svg" />
                    <h2>
                        <img class="heading-text" src="/assets/duolingo-plus.svg" />
                    </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp"> close </span>
                </div>
            </div>

            <div class="side-bar">
                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> dashboard </span>
                    <h3 class="nav-title">Dashboard</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> monitoring</span>
                    <h3 class="nav-title">Statistics</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp">upgrade</span>
                    <h3 class="nav-title">Levels</h3>
                </a>
                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp">road</span>
                    <h3 class="nav-title">Themes</h3>
                </a>
                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp">book</span>
                    <h3 class="nav-title">Lessons</h3>
                </a>
                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp">exercise</span>
                    <h3 class="nav-title">Exercises</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> replay_circle_filled </span>
                    <h3 class="nav-title">Recent updates</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> groups </span>
                    <h3 class="nav-title">Social media</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> settings</span>
                    <h3 class="nav-title">Settings</h3>
                </a>

                <a href="#" class="nav-link">
                    <span class="material-symbols-sharp"> logout </span>
                    <h3 class="nav-title">Log out</h3>
                </a>
            </div>
        </aside> --}}

        <!-- ========= Dash Board ========= -->
        <div class="sub-container">
            <main>
                <h1>Dashboard</h1>

                <div class="dashboard">
                    <div class="learning-points flex">
                        <span class="material-symbols-sharp"> electric_bolt </span>
                        <h3>{{ $actives_number }}</h3>
                        <p>Active users</p>
                    </div>

                    <div class="streaks flex">
                        <span class="material-symbols-sharp"> local_fire_department </span>
                        <h3>{{ $users_number }}</h3>
                        <p>Users</p>
                    </div>
                    <div class="streaks flex">
                        <span class="material-symbols-sharp"> local_fire_department </span>
                        <h3>{{ $supers_number }}</h3>
                        <p>Super users</p>
                    </div>

                    {{-- <div class="league flex">
                    <span class="material-symbols-sharp"> arming_countdown </span>
                    <h3>Diamond</h3>
                    <p>Current league</p>
                </div> --}}
                    <table>
                        <tr>
                            <td>
                                <div class="league flex">
                                    <span class="material-symbols-sharp"> arming_countdown </span>
                                    <h3>{{ $leagues_number }}</h3>
                                    <p>Available league</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="league flex">
                                    <span> <img
                                            src='https://d35aaqx5ub95lt.cloudfront.net/images/leagues/a35f1db4398fd29e66f1abc33a0d11a2.svg'
                                            with ="45" height="45" alt=""> </span>
                                    <h3>{{ $statuses_number }}</h3>
                                    <p>Available statuses </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <div class="league flex">
                                    <span class="material-symbols-sharp"> arming_countdown </span>
                                    <h3>{{ $levels_number }}</h3>
                                    <p>Levels</p>
                                </div>
                            </td>
                            <td>
                                <div class="league flex">
                                    <span class="material-symbols-sharp"> arming_countdown </span>
                                    <h3>{{ $themes_number }}</h3>
                                    <p>Themes</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="league flex">
                                    <span class="material-symbols-sharp"> arming_countdown </span>
                                    <h3>{{ $lessons_number }}</h3>
                                    <p>Lessons</p>
                                </div>
                            </td>
                            <td>
                                <div class="league flex">
                                    <span class="material-symbols-sharp"> arming_countdown </span>
                                    <h3>{{ $exercises_number }}</h3>
                                    <p>Exercises</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- ========= Statistics ========= -->
                <div class="stats">
                    <h1>Statistics</h1>
                    <canvas id="myChart"></canvas>
                </div>
            </main>
            <!-- ======= Recent Updates =======-->
            <!-- Profile  -->
            {{-- <article>
                <div class="right">
                    <div class="top">
                        <button class="menu" id="menu-btn">
                            <img src="/assets/menu-alt-left-regular-24.png" alt="" />
                        </button>
                        <div class="toggler">
                            <span class="material-symbols-sharp selected"> light_mode </span>

                            <span class="material-symbols-sharp"> dark_mode </span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p>Hey , I'm <b>Steve</b>
                                </p>
                            </div>
                            <div class="profile-picture">
                                <img src="/assets/my-profile.jpeg" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Updates -->

                    <div class="updates">
                        <h1>Recent Updates</h1>
                        <div class="update">
                            <div class="profile-picture">
                                <img src="/assets/profile-1.jpg" />
                            </div>

                            <div class="message">
                                <p><b>Fernanda</b> is following you!</p>
                                <small class="small">5 min ago..</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-picture">
                                <img src="/assets/profile-2.jpg" />
                            </div>

                            <div class="message">
                                <p><b>Marcus</b> congratulated you..</p>
                                <small class="small">7 min ago..</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-picture">
                                <img src="/assets/profile-3.jpg" />
                            </div>

                            <div class="message">
                                <p><b>Martha</b> is following you!</p>
                                <small class="small">20 min ago..</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-picture">
                                <img src="/assets/profile-4.jpg" />
                            </div>

                            <div class="message">
                                <p><b>Jasper</b> took your place..</p>
                                <small class="small">1 hour ago..</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom">
                    <h1>Follow Duolingo</h1>
                    <div class="social-media">
                        <a href="#" class="social-links" targe="_blank">
                            <img class="social-media__icons" src="/assets/twitter.png" alt="twiiter-icon" />
                            <h3>Twitter</h3>
                        </a>
                        <a href="#" class="social-links" targe="_blank">
                            <img class="social-media__icons" src="/assets/facebook.png" alt="twiiter-icon" />
                            <h3>Facebook</h3>
                        </a>
                        <a href="#" class="social-links" targe="_blank">
                            <img class="social-media__icons" src="/assets/instagram.png" alt="twiiter-icon" />
                            <h3>Instagram</h3>
                        </a>
                        <a href="#" class="social-links" targe="_blank">
                            <img class="social-media__icons" src="/assets/tik-tok.png" alt="twiiter-icon" />
                            <h3>Tic Tok</h3>
                        </a>
                    </div>
                </div>
            </article> --}}
        </div>
