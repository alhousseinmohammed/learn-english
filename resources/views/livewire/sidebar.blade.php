<div class="sidebar">
    <div class="logo-container">
        <img src="{{ url('duolingo-clone-master/assets/svg/duolingo-green-text-only.svg') }}" alt="dolingo-text">
    </div>
    <div class="sidebar-buttons">
        <a href="{{ route('learn') }}" wire:navigate class="button-in-sidebar">
            <span class="icon-and-text-wrap @if ($selected == 1) selected @endif">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}" alt="home-icon">
                </div>
                <span class="text-in-button"> Learn </span>
            </span>
        </a>
        <a href="{{ route('leaderboard') }}" wire:navigate class="button-in-sidebar">
            <span class="icon-and-text-wrap @if ($selected == 2) selected @endif">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}" alt="home-icon">
                </div>
                <span class="text-in-button"> Leaderboard </span>
            </span>
        </a>
        <a href="{{ route('dashboard') }}" wire:navigate class="button-in-sidebar">
            <span class="icon-and-text-wrap @if ($selected == 3) selected @endif">
                <div class="icon-in-button">
                    <img id="profile-image" src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                        alt="home-icon" class="profile">
                </div>
                <span class="text-in-button"> Profile </span>
            </span>
        </a>
        <a href="{{ route('shop') }}" wire:navigate class="button-in-sidebar">
            <span class="icon-and-text-wrap @if ($selected == 4) selected @endif">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/svg/shop-in-sidebar.svg') }}" alt="home-icon">
                </div>
                <span class="text-in-button"> Shop </span>
            </span>
        </a>
        <a href="./faq.html" class="button-in-sidebar">
            <span class="icon-and-text-wrap @if ($selected == 5) selected @endif">
                <div class="icon-in-button">
                    <img src="{{ url('duolingo-clone-master/assets/images/sidebar-icon-faq.png') }}" alt="home-icon">
                </div>
                <span class="text-in-button"> FAQ </span>
            </span>
        </a>
        @if ($selected == 3)
            <a class="button-in-sidebar" id="logout-button"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="icon-and-text-wrap">
                    <div class="icon-in-button">
                        <img src="{{ url('duolingo-clone-master/assets/svg/Logout.svg') }}" alt="home-icon" />
                    </div>
                    <span class="text-in-button"> Log Out </span>
                </span>
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        @endif
    </div>
</div>
