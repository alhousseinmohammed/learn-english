        <aside class="nav-bar">
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
                <a href="{{ route('admin_dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> dashboard </span>
                    <h3 class="nav-title">Dashboard</h3>
                </a>

                {{-- <a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> monitoring</span>
                    <h3 class="nav-title">Statistics</h3>
                </a> --}}

                <a href="{{ route('levels') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp">upgrade</span>
                    <h3 class="nav-title">Levels</h3>
                </a>
                <a href="{{ route('themes') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp">road</span>
                    <h3 class="nav-title">Themes</h3>
                </a>
                <a href="{{ route('lessons') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp">book</span>
                    <h3 class="nav-title">Lessons</h3>
                </a>
                <a href="{{ route('exercises') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp">exercise</span>
                    <h3 class="nav-title">Exercises</h3>
                </a>

                {{-- <a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> replay_circle_filled </span>
                    <h3 class="nav-title">Recent updates</h3>
                </a> --}}

                {{-- <a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> groups </span>
                    <h3 class="nav-title">Social media</h3>
                </a> --}}

                <a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> settings</span>
                    <h3 class="nav-title">Settings</h3>
                </a>

                <a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
                    <span class="material-symbols-sharp"> logout </span>
                    <h3 class="nav-title">Log out</h3>
                </a>
            </div>
        </aside>
