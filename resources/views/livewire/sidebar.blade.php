        <div class="sidebar">
            <div class="logo-container">
                <img src="{{ url('duolingo-clone-master/assets/svg/duolingo-green-text-only.svg') }}" alt="dolingo-text">
            </div>
            <div class="sidebar-buttons">
                <a href="{{ route('lesson.index') }}" class="button-in-sidebar">
                    <span class="icon-and-text-wrap selected">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}" alt="home-icon">
                        </div>
                        <span class="text-in-button"> Learn </span>
                    </span>
                </a>
                <a href="{{ route('leaderboard') }}" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}"
                                alt="home-icon">
                        </div>
                        <span class="text-in-button"> Leaderboard </span>
                    </span>
                </a>
                <a href="{{ route('produ') }}" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img id="profile-image"
                                src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                                alt="home-icon" class="profile">
                        </div>
                        <span class="text-in-button"> Profile </span>
                    </span>
                </a>
                <a href="{{ route('shopping') }}" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/shop-in-sidebar.svg') }}"
                                alt="home-icon">
                        </div>
                        <span class="text-in-button"> Shop </span>
                    </span>
                </a>
                <a href="./faq.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/images/sidebar-icon-faq.png') }}"
                                alt="home-icon">
                        </div>
                        <span class="text-in-button"> FAQ </span>
                    </span>
                </a>
            </div>
        </div>
