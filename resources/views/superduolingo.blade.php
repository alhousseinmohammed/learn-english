<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duolingo - The world's best way to learn Spanish</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
</head>

<body cz-shortcut-listen="true">

    @php
        $themeOrder = 0;
    @endphp
    @empty($lastTheme)
        @php
            $lastTheme = 1;
        @endphp
    @endempty




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
                                <img src="{{ url('duolingo-clone-master/assets/svg/country-flags/es-flag.svg') }}"
                                    class="country-flag">
                            </div>
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
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/heart-filled-red.svg') }}"
                                    alt="home-icon" class="profile">
                            </div>
                            <span class="text-in-button heart-text">{{ auth()->user()->learner->current_hearts }}</span>
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
                        <h2><a href="./leaderboard.html">View League</a></h2>
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
            <!----------------------------------- Scrollable area showing units ------------------------------------------------>
            <div class="scrollable-lesson-div active" onclick="closeAllOpenDialogBoxes()">
                <div class="sticky">
                    {{-- <div class="right-sidebar-header top-stats-mobile">
                        <a href="" class="button-in-sidebar">
                            <span class="icon-and-text-wrap">
                                <div class="icon-in-button">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/country-flags/es-flag.svg') }}"
                                        alt="home-icon" class="country-flag">
                                </div>
                            </span>
                        </a>
                        <a href="" class="button-in-sidebar">
                            <span class="icon-and-text-wrap">
                                <div class="icon-in-button">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/lesson-xp.svg') }}"
                                        alt="home-icon" class="profile">
                                </div>
                                <span class="text-in-button fire-text">90</span>
                            </span>
                        </a>
                        <a href="" class="button-in-sidebar">
                            <span class="icon-and-text-wrap">
                                <div class="icon-in-button">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}"
                                        alt="home-icon" class="profile">
                                </div>
                                <span class="text-in-button gem-text">500</span>
                            </span>
                        </a>
                        <a href="" class="button-in-sidebar">
                            <span class="icon-and-text-wrap">
                                <div class="icon-in-button">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/heart-filled-red.svg') }}"
                                        alt="home-icon" class="profile">
                                </div>
                                <span class="text-in-button heart-text">2</span>
                            </span>
                        </a>
                    </div> --}}
                    <div class="section-name-header">
                        <div class="arrow" onclick="placeSectionList();"><img alt=""
                                src="{{ url('duolingo-clone-master/assets/svg/back-button-white.svg') }}">
                            <img alt=""
                                src="{{ url('duolingo-clone-master/assets/svg/up-arrow-section.svg') }}">
                        </div>
                        <h2 class="_1Msxm">Section&nbsp;1:&nbsp;Rookie</h2>
                    </div>
                </div>
                <div class="unit-placing-div">
                    <div>
                    </div>


                    @foreach ($themes as $theme)
                        @php
                            $themeOrder++;
                            // $lastLesson = 0;
                        @endphp
                        <section id="section-1">
                            <header class="unit unit-unfinished">
                                <h1 class="unit-number">Unit {{ $theme->order }}</h1>
                                <span class="unit-description">{{ $theme->name }}</span>
                            </header>
                        </section>

                        @foreach ($theme->lessons->sortBy('order') as $lesson)
                            {{-- {{ $lesson }} --}}
                            @if ($lesson->theme->order < $lastTheme or $lesson->theme->order == $lastTheme && $lesson->order <= $lastLesson)
                                <div class="alignment-div" style="padding: 0px;">
                                    <div class="circle_box completed">
                                        <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                            <img src="{{ url('duolingo-clone-master/assets/svg/completed-lesson-background.svg') }}"
                                                class="star-image bg">
                                            <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-unit-completed.svg') }}"
                                                class="star-image">
                                        </button>
                                    </div>
                                    <div class="floating-start-box-bottom hidden completed"
                                        style="translate: calc(-50% + 0px);">
                                        <div class="triangle-top"></div>
                                        <div class="text-container">
                                            <h1>{{ $lesson->title }}</h1>
                                            <p>You completed this level!</p>
                                            <button>Completed</button>
                                        </div>
                                    </div>
                                </div>
                            @elseif (
                                $lesson->theme->order === $lastTheme + 1 && $lesson->order == 1 && $lastLesson == $lastInTheme or
                                    $lesson->theme->order == $lastTheme && $lesson->order == $lastLesson + 1)
                                <div class="alignment-div" style="padding: 0px 180px 0px 0px;">
                                    <div class="circle_box">
                                        <button class="lesson-button" onclick="openDialogBoxes(event);">
                                            <img src="{{ url('duolingo-clone-master/assets/svg/star-in-lesson-white.svg') }}"
                                                class="star-image">
                                            <circle-progress value="0" max="100" text-format="none"
                                                min="0" start-angle="0" indeterminate-text="?"
                                                animation="easeInOutCubic" animation-duration="600"></circle-progress>
                                        </button>
                                        <div class="floating-start-box">
                                            <div class="text">
                                                START
                                            </div>
                                            <div class="triangle"></div>
                                        </div>
                                    </div>
                                    <div class="floating-start-box-bottom hidden"
                                        style="translate: calc(-50% - 90px);">
                                        <div class="triangle-top"></div>
                                        <div class="text-container">
                                            <h1>Form basic sentences</h1>
                                            <p>Lesson 1 of 4</p>

                                            <button {{-- onclick="startLesson()" --}}>
                                                <a href="{{ action('App\Http\Controllers\ExerciseController@show', $lesson->exercises()->orderBy('order')->first()) }}",
                                                    style="text-decoration:none; color:inherit;"
                                                    onclick="startLesson()">Start +10
                                                    XP</a>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            @else()
                                <div class="alignment-div" style="padding: 0px 0px 0px 180px;">
                                    <div class="circle_box locked">
                                        <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                            <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                                class="star-image">
                                        </button>
                                    </div>
                                    <div class="floating-start-box-bottom hidden locked"
                                        style="translate: calc(-50% + 90px);">
                                        <div class="triangle-top"></div>
                                        <div class="text-container">
                                            <h1>Form basic sentences</h1>
                                            <p>Complete all the levels above to<br>unlock this</p>
                                            <button>Locked</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($lesson->order == 3)
                                <div class="animated-sprite-in-lesson-2">
                                    {{ $theme->name }}
                                </div>
                                <div class="animated-sprite-in-lesson-2 greyd-sprite">{{ $lesson->title }}</div>
                            @endif
                        @endforeach
                    @endforeach



                    <section id="section-1">
                        <header class="unit unit-unfinished">
                            <h1 class="unit-number">Unit 1</h1>
                            <span class="unit-description">Tell others what to do, talk about health</span>
                        </header>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box completed">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/completed-lesson-background.svg') }}"
                                        class="star-image bg">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-unit-completed.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden completed"
                                style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>You completed this level!</p>
                                    <button>Completed</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 180px 0px 0px;">
                            <div class="circle_box completed">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/completed-lesson-background.svg') }}"
                                        class="star-image bg">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-unit-completed.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden completed"
                                style="translate: calc(-50% - 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>You completed this level!</p>
                                    <button>Completed</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 300px 0px 0px;">
                            <div class="circle_box completed">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/completed-lesson-background.svg') }}"
                                        class="star-image bg">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-unit-completed.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden completed"
                                style="translate: calc(-50% - 150px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Greet people</h1>
                                    <p>You completed this level!</p>
                                    <button>Completed</button>
                                </div>
                            </div>
                        </div>
                        <div class="animated-sprite-in-lesson-1"></div>
                        <div class="animated-sprite-in-lesson-2 greyd-sprite"></div>
                        <div class="alignment-div" style="padding: 0px 180px 0px 0px;">
                            <div class="circle_box">
                                <button class="lesson-button" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/star-in-lesson-white.svg') }}"
                                        class="star-image">
                                    <circle-progress value="0" max="100" text-format="none" min="0"
                                        start-angle="0" indeterminate-text="?" animation="easeInOutCubic"
                                        animation-duration="600"></circle-progress>
                                </button>
                                <div class="floating-start-box">
                                    <div class="text">
                                        START
                                    </div>
                                    <div class="triangle"></div>
                                </div>
                            </div>
                            <div class="floating-start-box-bottom hidden" style="translate: calc(-50% - 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>Lesson 1 of 4</p>
                                    <button onclick="startLesson()">Start +10 XP</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked" style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 180px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 300px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 150px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Greet people</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 180px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked" style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Form basic sentences</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                    </section>







                    <section id="section-2">
                        <header class="unit unit-unfinished">
                            <h1 class="unit-number">Unit 2</h1>
                            <span class="unit-description">Describe places, tell time</span>
                        </header>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked" style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 1</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 180px 0px 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% - 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 2</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 300px 0px 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% - 150px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 3</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 180px 0px 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% - 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 4</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked" style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 5</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 180px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 6</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 300px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 150px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 7</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px 0px 0px 180px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked"
                                style="translate: calc(-50% + 90px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 8</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>
                        <div class="alignment-div" style="padding: 0px;">
                            <div class="circle_box locked">
                                <button class="lesson-button inactive" onclick="openDialogBoxes(event);">
                                    <img src="{{ url('duolingo-clone-master/assets/svg/locked-button-grey.svg') }}"
                                        class="star-image">
                                </button>
                            </div>
                            <div class="floating-start-box-bottom hidden locked" style="translate: calc(-50% + 0px);">
                                <div class="triangle-top"></div>
                                <div class="text-container">
                                    <h1>Chapter 9</h1>
                                    <p>Complete all the levels above to<br>unlock this</p>
                                    <button>Locked</button>
                                </div>
                            </div>
                        </div>

                        <div class="animated-sprite-in-lesson-2 greyd-sprite"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1080 1080" width="1080" height="1080"
                                preserveAspectRatio="xMidYMid meet"
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                                <defs>
                                    <clipPath id="__lottie_element_678">
                                        <rect width="1080" height="1080" x="0" y="0"></rect>
                                    </clipPath>
                                    <clipPath id="__lottie_element_683">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_690">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_698" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_699)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_699">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_743" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_745)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_745">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_754" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_755)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_755">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_766" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_767)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_767">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_776">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_782" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_784)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_784">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_793" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_794)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_794">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_804">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_812" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_813)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_813">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_822">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_829">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_836">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_843">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_850">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_878">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_885">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_893" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_894)" transform="matrix(1,0,0,1,0,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,537.81396484375,499.448974609375)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(89,204,2)" fill-opacity="1"
                                                        d=" M-56.888999938964844,-259.6510009765625 C-18.452999114990234,-255.89199829101562 -0.04500000178813934,-223.6929931640625 45.452999114990234,-211.82400512695312 C95.79499816894531,-198.6909942626953 118.7770004272461,-224.95599365234375 166.92999267578125,-207.4459991455078 C201.73199462890625,-194.79100036621094 241.3489990234375,-147.2550048828125 230.40499877929688,-71.74199676513672 C219.85899353027344,1.0260000228881836 208.052001953125,160.52000427246094 72.81300354003906,233.59300231933594 C-62.89099884033203,306.9169921875 -179.67599487304688,213.6230010986328 -210.63400268554688,162.45799255371094 C-239.22900390625,115.1989974975586 -230.33399963378906,35.558998107910156 -222.67300415039062,-0.03400000184774399 C-215.01199340820312,-35.62699890136719 -224.86099243164062,-118.8010025024414 -185.46299743652344,-186.6529998779297 C-146.06500244140625,-254.5050048828125 -95.32499694824219,-263.4100036621094 -56.888999938964844,-259.6510009765625z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_894">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_938" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_940)"
                                            transform="matrix(1.21280038356781,0,0,1.21280038356781,-83.10855102539062,-117.54815673828125)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,403.8789978027344,513.1619873046875)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M22.53499984741211,-6.578999996185303 C17.27400016784668,61.75600051879883 10.685999870300293,63.60300064086914 0,63.1510009765625 C-28.43400001525879,61.948001861572266 -37.66899871826172,51.10300064086914 -37.66600036621094,-7.236999988555908 C-37.66299819946289,-56.4630012512207 -31.420000076293945,-75.87100219726562 -15.131999969482422,-75.21900177001953 C17.572999954223633,-73.90899658203125 24.50200080871582,-32.12099838256836 22.53499984741211,-6.578999996185303z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_940">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_949" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_950)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,0.00054931640625,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,403.8789978027344,513.1619873046875)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M22.53499984741211,-6.578999996185303 C17.27400016784668,61.75600051879883 10.685999870300293,63.60300064086914 0,63.1510009765625 C-28.43400001525879,61.948001861572266 -37.66899871826172,51.10300064086914 -37.66600036621094,-7.236999988555908 C-37.66299819946289,-56.4630012512207 -31.420000076293945,-75.87100219726562 -15.131999969482422,-75.21900177001953 C17.572999954223633,-73.90899658203125 24.50200080871582,-32.12099838256836 22.53499984741211,-6.578999996185303z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_950">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_961" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_962)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,0.00054931640625,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,403.8789978027344,513.1619873046875)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M22.53499984741211,-6.578999996185303 C17.27400016784668,61.75600051879883 10.685999870300293,63.60300064086914 0,63.1510009765625 C-28.43400001525879,61.948001861572266 -37.66899871826172,51.10300064086914 -37.66600036621094,-7.236999988555908 C-37.66299819946289,-56.4630012512207 -31.420000076293945,-75.87100219726562 -15.131999969482422,-75.21900177001953 C17.572999954223633,-73.90899658203125 24.50200080871582,-32.12099838256836 22.53499984741211,-6.578999996185303z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_962">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_971">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_977" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_979)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,-0.004302978515625,1.99993896484375)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,527.2230224609375,555.5960083007812)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M68.51300048828125,2.7739999294281006 C60.233001708984375,63.689998626708984 41.8120002746582,76.51799774169922 -9.72700023651123,68.09700012207031 C-63.1150016784668,59.374000549316406 -72.66200256347656,44.93899917602539 -65.5530014038086,-8.376999855041504 C-59.93000030517578,-50.54899978637695 -40.42399978637695,-79.0739974975586 13.576000213623047,-71.38600158691406 C56.292999267578125,-65.30500030517578 75.16999816894531,-46.20600128173828 68.51300048828125,2.7739999294281006z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_979">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_988" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_989)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,-0.000335693359375,-0.00006103515625)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,527.2230224609375,555.5960083007812)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M68.51300048828125,2.7739999294281006 C60.233001708984375,63.689998626708984 41.8120002746582,76.51799774169922 -9.72700023651123,68.09700012207031 C-63.1150016784668,59.374000549316406 -72.66200256347656,44.93899917602539 -65.5530014038086,-8.376999855041504 C-59.93000030517578,-50.54899978637695 -40.42399978637695,-79.0739974975586 13.576000213623047,-71.38600158691406 C56.292999267578125,-65.30500030517578 75.16999816894531,-46.20600128173828 68.51300048828125,2.7739999294281006z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_989">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_999">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <mask id="__lottie_element_1007" mask-type="alpha">
                                        <g clip-path="url(#__lottie_element_1008)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,-0.000335693359375,-0.00006103515625)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,527.2230224609375,555.5960083007812)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M68.51300048828125,2.7739999294281006 C60.233001708984375,63.689998626708984 41.8120002746582,76.51799774169922 -9.72700023651123,68.09700012207031 C-63.1150016784668,59.374000549316406 -72.66200256347656,44.93899917602539 -65.5530014038086,-8.376999855041504 C-59.93000030517578,-50.54899978637695 -40.42399978637695,-79.0739974975586 13.576000213623047,-71.38600158691406 C56.292999267578125,-65.30500030517578 75.16999816894531,-46.20600128173828 68.51300048828125,2.7739999294281006z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </mask>
                                    <clipPath id="__lottie_element_1008">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_1017">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_1024">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_1031">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_1038">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                    <clipPath id="__lottie_element_1045">
                                        <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#__lottie_element_678)">
                                    <g clip-path="url(#__lottie_element_878)" transform="matrix(1,0,0,1,0,0)"
                                        opacity="1" style="display: block;">
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,501.38299560546875,639.3900146484375)"
                                            opacity="0.3" style="display: block;">
                                            <path fill="rgb(75,75,75)" fill-opacity="1"
                                                d=" M206.2969970703125,0 C206.2969970703125,82.447998046875 113.93499755859375,149.28599548339844 0,149.28599548339844 C-113.93499755859375,149.28599548339844 -206.2969970703125,82.447998046875 -206.2969970703125,0 C-206.2969970703125,-82.447998046875 -113.93499755859375,-149.28599548339844 0,-149.28599548339844 C113.93499755859375,-149.28599548339844 206.2969970703125,-82.447998046875 206.2969970703125,0z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,366.198974609375,484.1910095214844)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(89,204,2)" fill-opacity="1"
                                                d=" M3.5409998893737793,-89.28399658203125 C-12.368000030517578,-118.28800201416016 -40.095001220703125,-78.12899780273438 -41.667999267578125,-58.04499816894531 C-44.71500015258789,-19.13800048828125 -30.929000854492188,19.690000534057617 -1.8140000104904175,52.24599838256836 C11.034000396728516,66.61199951171875 31.534000396728516,70.61199951171875 50.14099884033203,74.3010025024414 C55.8650016784668,75.43599700927734 3.5409998893737793,-89.28399658203125 3.5409998893737793,-89.28399658203125z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,373.760009765625,649.0380249023438)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(244,144,2)" fill-opacity="1"
                                                d=" M-24.18000030517578,-39.74399948120117 C-3.6659998893737793,-35.54199981689453 20.208999633789062,-30.79199981689453 36.43299865722656,-26.55500030517578 C57.34000015258789,-21.094999313354492 54.845001220703125,-4.622000217437744 52.6619987487793,7.3979997634887695 C48.60900115966797,29.711999893188477 37.61800003051758,34.4630012512207 14.281999588012695,30.892000198364258 C-9.791000366210938,27.208999633789062 -20.165000915527344,24.833999633789062 -36.229000091552734,20.83300018310547 C-55.007999420166016,16.1560001373291 -68.16500091552734,2.2090001106262207 -65.41899871826172,-15.147000312805176 C-62.13999938964844,-35.87200164794922 -42.26499938964844,-43.44900131225586 -24.18000030517578,-39.74399948120117z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,387.2330017089844,421.9360046386719)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(112,149,214)" fill-opacity="1"
                                                d=" M56.233001708984375,12.508999824523926 C43.14500045776367,71.34400177001953 7.357999801635742,113.44000244140625 -23.697999954223633,106.53099822998047 C-54.75400161743164,99.62200164794922 -69.32099914550781,46.32600021362305 -56.233001708984375,-12.508999824523926 C-43.14500045776367,-71.34400177001953 -7.357999801635742,-113.44000244140625 23.697999954223633,-106.53099822998047 C54.75400161743164,-99.62200164794922 69.32099914550781,-46.32600021362305 56.233001708984375,12.508999824523926z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,408.25299072265625,334.0570068359375)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(91,91,91)" fill-opacity="1"
                                                d=" M20.7189998626709,-41.9379997253418 C-5.894999980926514,-19.023000717163086 -24.18600082397461,10.531999588012695 -36.39699935913086,38.66999816894531 C-36.39699935913086,38.66999816894531 -19.979000091552734,41.9379997253418 -19.979000091552734,41.9379997253418 C-19.979000091552734,41.9379997253418 -1.7649999856948853,5.678999900817871 36.39699935913086,-24.16699981689453 C36.39699935913086,-24.16699981689453 20.7189998626709,-41.9379997253418 20.7189998626709,-41.9379997253418z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,491.7239990234375,301.78399658203125)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(91,91,91)" fill-opacity="1"
                                                d=" M112.28500366210938,-6.02400016784668 C7.888999938964844,-43.97600173950195 -60.840999603271484,1.3580000400543213 -97.54399871826172,40.36600112915039 C-97.54399871826172,40.36600112915039 -115.7020034790039,28.73699951171875 -115.7020034790039,28.73699951171875 C-74.38800048828125,-24.7450008392334 -3.2109999656677246,-63.80099868774414 115.7020034790039,-24.163000106811523 C115.7020034790039,-24.163000106811523 112.28500366210938,-6.02400016784668 112.28500366210938,-6.02400016784668z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,403.7941589355469,424.3193664550781)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(91,91,91)" fill-opacity="1"
                                                d=" M58.14099884033203,12.934000015258789 C44.07400131225586,76.1709976196289 6.638999938964844,121.64299774169922 -25.47100067138672,114.5 C-57.58100128173828,107.35700225830078 -72.20800018310547,50.303001403808594 -58.14099884033203,-12.934000015258789 C-44.07400131225586,-76.1709976196289 -6.638999938964844,-121.64299774169922 25.47100067138672,-114.5 C57.58100128173828,-107.35700225830078 72.20800018310547,-50.303001403808594 58.14099884033203,12.934000015258789z">
                                            </path>
                                        </g>
                                        <g clip-path="url(#__lottie_element_1045)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_1038)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_885)" transform="matrix(1,0,0,1,0,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,537.81396484375,499.448974609375)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(89,204,2)" fill-opacity="1"
                                                        d=" M-56.888999938964844,-259.6510009765625 C-18.452999114990234,-255.89199829101562 -0.04500000178813934,-223.6929931640625 45.452999114990234,-211.82400512695312 C95.79499816894531,-198.6909942626953 118.7770004272461,-224.95599365234375 166.92999267578125,-207.4459991455078 C201.73199462890625,-194.79100036621094 241.3489990234375,-147.2550048828125 230.40499877929688,-71.74199676513672 C219.85899353027344,1.0260000228881836 208.052001953125,160.52000427246094 72.81300354003906,233.59300231933594 C-62.89099884033203,306.9169921875 -179.67599487304688,213.6230010986328 -210.63400268554688,162.45799255371094 C-239.22900390625,115.1989974975586 -230.33399963378906,35.558998107910156 -222.67300415039062,-0.03400000184774399 C-215.01199340820312,-35.62699890136719 -224.86099243164062,-118.8010025024414 -185.46299743652344,-186.6529998779297 C-146.06500244140625,-254.5050048828125 -95.32499694824219,-263.4100036621094 -56.888999938964844,-259.6510009765625z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_1031)" transform="matrix(1,0,0,1,0,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,557.6260375976562,696.407958984375)"
                                                opacity="1" style="display: block;">
                                                <path fill="rgb(244,144,2)" fill-opacity="1"
                                                    d=" M-40.45100021362305,-16.334999084472656 C-29.466999053955078,-25.670000076293945 -12.789999961853027,-37.05400085449219 -0.3100000023841858,-44.090999603271484 C13.87399959564209,-52.0890007019043 36.12099838256836,-59.87099838256836 48.59600067138672,-40.87200164794922 C59.65599822998047,-24.027999877929688 52.36899948120117,-4.353000164031982 36.52899932861328,8.62600040435791 C24.624000549316406,18.3799991607666 12.03600025177002,28.12700080871582 0.5839999914169312,34.8129997253418 C-18.134000778198242,45.742000579833984 -36.13600158691406,50.23400115966797 -49.6150016784668,32.01100158691406 C-63.09400177001953,13.788000106811523 -57.43600082397461,-1.8990000486373901 -40.45100021362305,-16.334999084472656z">
                                                </path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_1024)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_1017)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_893)" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,482.88299560546875,515.2059936523438)"
                                                opacity="1">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(138,226,23)" fill-opacity="1"
                                                        d=" M-25.555999755859375,96.0530014038086 C-15.942999839782715,112.07499694824219 58.04899978637695,183.94000244140625 137.30099487304688,109.45500183105469 C181.73300170898438,61.57099914550781 156.031005859375,-19.88599967956543 142.14500427246094,-31.591999053955078 C157.0989990234375,-66.30699920654297 143.75999450683594,-78.7959976196289 134.13400268554688,-70.0459976196289 C126.13200378417969,-62.77199935913086 104.40499877929688,-49.23400115966797 104.40499877929688,-49.23400115966797 C112.99199676513672,-63.33000183105469 114.5979995727539,-77.16000366210938 113.89900207519531,-87.20999908447266 C112.61599731445312,-105.66799926757812 101.42500305175781,-111.44499969482422 84.96900177001953,-94.35600280761719 C68.51300048828125,-77.26699829101562 6.933000087738037,-34.042999267578125 -30.40999984741211,-47.96799850463867 C-30.40999984741211,-47.96799850463867 -67.54499816894531,-62.67300033569336 -74.80599975585938,-129.83399963378906 C-74.80599975585938,-129.83399963378906 -74.80599975585938,-149.80099487304688 -86.90699768066406,-150.406005859375 C-99.00800323486328,-151.01100158691406 -113.52899932861328,-125.5989990234375 -112.92400360107422,-106.23699951171875 C-124.33399963378906,-123.66100311279297 -114.1719970703125,-134.73800659179688 -119.40699768066406,-138.04400634765625 C-126.0530014038086,-142.24099731445312 -133.37899780273438,-127.74600219726562 -136.76400756835938,-107.17400360107422 C-136.76400756835938,-107.17400360107422 -154.30999755859375,-54.81399917602539 -154.73399353027344,-15.482999801635742 C-155.10899353027344,19.325000762939453 -153.11199951171875,47.159000396728516 -132.02999877929688,64.8219985961914 C-116.34400177001953,77.96399688720703 -102.80500030517578,79.5 -74.5199966430664,70.0719985961914 C-46.23500061035156,60.64400100708008 -25.555999755859375,96.0530014038086 -25.555999755859375,96.0530014038086z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_999)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,-0.000335693359375,-0.00006103515625)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,527.2230224609375,555.5960083007812)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M68.51300048828125,2.7739999294281006 C60.233001708984375,63.689998626708984 41.8120002746582,76.51799774169922 -9.72700023651123,68.09700012207031 C-63.1150016784668,59.374000549316406 -72.66200256347656,44.93899917602539 -65.5530014038086,-8.376999855041504 C-59.93000030517578,-50.54899978637695 -40.42399978637695,-79.0739974975586 13.576000213623047,-71.38600158691406 C56.292999267578125,-65.30500030517578 75.16999816894531,-46.20600128173828 68.51300048828125,2.7739999294281006z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_1007)" style="display: block;">
                                            <g transform="matrix(0.7600003480911255,0,0,0.7600003480911255,505.8676452636719,563.79150390625)"
                                                opacity="1">
                                                <path fill="rgb(75,75,75)" fill-opacity="1"
                                                    d=" M6.308000087738037,-47.17300033569336 C24.516000747680664,-45.77799987792969 34.38399887084961,-33.93600082397461 32.62799835205078,-7.0980000495910645 C31.069000244140625,16.719999313354492 30.469999313354492,41.327999114990234 -1.156000018119812,38.88999938964844 C-24.167999267578125,37.11600112915039 -28.773000717163086,16.722000122070312 -26.875999450683594,-10.37600040435791 C-25.243999481201172,-33.680999755859375 -11.692999839782715,-48.551998138427734 6.308000087738037,-47.17300033569336z">
                                                </path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_988)" style="display: block;">
                                            <g transform="matrix(0.7600003480911255,0,0,0.7600003480911255,501.7613525390625,539.524658203125)"
                                                opacity="1">
                                                <path fill="rgb(255,255,255)" fill-opacity="1"
                                                    d=" M5.507999897003174,8.428000450134277 C-1.3899999856948853,15.484000205993652 -12.331000328063965,15.97599983215332 -18.92799949645996,9.526000022888184 C-25.524999618530273,3.0759999752044678 -25.2810001373291,-7.872000217437744 -18.382999420166016,-14.928000450134277 C-11.484999656677246,-21.983999252319336 -0.5440000295639038,-22.47599983215332 6.052999973297119,-16.025999069213867 C12.649999618530273,-9.576000213623047 12.406000137329102,1.371999979019165 5.507999897003174,8.428000450134277z">
                                                </path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_977)" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,533.883544921875,659.2716064453125)"
                                                opacity="1">
                                                <path fill="rgb(138,226,23)" fill-opacity="1"
                                                    d=" M77.31900024414062,-79.92900085449219 C9.46500015258789,-108.09500122070312 -52.86800003051758,-101.16899871826172 -96.73300170898438,-59.612998962402344 C-96.73300170898438,-59.612998962402344 -71.79900360107422,96.91400146484375 -71.79900360107422,96.91400146484375 C-71.79900360107422,96.91400146484375 96.73300170898438,67.36299896240234 96.73300170898438,67.36299896240234 C96.73300170898438,67.36299896240234 77.31900024414062,-79.92900085449219 77.31900024414062,-79.92900085449219z">
                                                </path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_971)"
                                            transform="matrix(1.0000004768371582,0,0,1.0000004768371582,0.00054931640625,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,403.8789978027344,513.1619873046875)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                        d=" M22.53499984741211,-6.578999996185303 C17.27400016784668,61.75600051879883 10.685999870300293,63.60300064086914 0,63.1510009765625 C-28.43400001525879,61.948001861572266 -37.66899871826172,51.10300064086914 -37.66600036621094,-7.236999988555908 C-37.66299819946289,-56.4630012512207 -31.420000076293945,-75.87100219726562 -15.131999969482422,-75.21900177001953 C17.572999954223633,-73.90899658203125 24.50200080871582,-32.12099838256836 22.53499984741211,-6.578999996185303z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_961)" style="display: block;">
                                            <g transform="matrix(0.6446395516395569,0,0,0.6446395516395569,399.0071105957031,514.3107299804688)"
                                                opacity="1">
                                                <path fill="rgb(75,75,75)" fill-opacity="1"
                                                    d=" M-1.7940000295639038,-36.165000915527344 C11.623000144958496,-30.3439998626709 16.125999450683594,-14.878000259399414 15.199999809265137,13.12399959564209 C14.27400016784668,41.125999450683594 15.121000289916992,56.91400146484375 -2.5199999809265137,56.76100158691406 C-19.124000549316406,56.617000579833984 -18.892000198364258,39.356998443603516 -18.867000579833984,6.583000183105469 C-18.841999053955078,-26.19099998474121 -14.723999977111816,-41.775001525878906 -1.7940000295639038,-36.165000915527344z">
                                                </path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_949)" style="display: block;">
                                            <g transform="matrix(0.5061323046684265,0,0,0.5061323046684265,390.55975341796875,501.8246765136719)"
                                                opacity="1">
                                                <path fill="rgb(255,255,255)" fill-opacity="1"
                                                    d=" M11.57800006866455,7.63100004196167 C6.814000129699707,14.859999656677246 -2.2330000400543213,17.30299949645996 -8.626999855041504,13.088000297546387 C-15.020999908447266,8.873000144958496 -16.341999053955078,-0.4020000100135803 -11.57800006866455,-7.63100004196167 C-6.814000129699707,-14.859999656677246 2.2330000400543213,-17.30299949645996 8.626999855041504,-13.088000297546387 C15.020999908447266,-8.873000144958496 16.341999053955078,0.4020000100135803 11.57800006866455,7.63100004196167z">
                                                </path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_938)" style="display: block;">
                                            <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,383.1854248046875,585.7963256835938)"
                                                opacity="1">
                                                <path fill="rgb(138,226,23)" fill-opacity="1"
                                                    d=" M-18.023000717163086,-89.572998046875 C4.313000202178955,-72.55500030517578 33.31100082397461,-36.39099884033203 40.61600112915039,-20.9689998626709 C47.92100143432617,-5.546999931335449 22.95199966430664,89.572998046875 22.95199966430664,89.572998046875 C22.95199966430664,89.572998046875 -41.95500183105469,40.1879997253418 -41.95500183105469,40.1879997253418 C-41.95500183105469,40.1879997253418 -18.023000717163086,-89.572998046875 -18.023000717163086,-89.572998046875z">
                                                </path>
                                            </g>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10"></path>
                                        </g>
                                        <g style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10"></path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,674.4816284179688,515.2670288085938)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(91,91,91)" fill-opacity="1"
                                                d=" M78.9280014038086,20.947999954223633 C59.520999908447266,94.072998046875 8.451000213623047,143.97300720214844 -35.13999938964844,132.4040069580078 C-50.54999923706055,128.31399536132812 -62.96200180053711,117.09100341796875 -71.71299743652344,101.05699920654297 C-87.71600341796875,71.73500061035156 -91.4749984741211,26.326000213623047 -78.9280014038086,-20.947999954223633 C-66.82499694824219,-66.55000305175781 -42.409000396728516,-103.11900329589844 -15.17199993133545,-121.38200378417969 C1.2669999599456787,-132.40499877929688 18.732999801635742,-136.75799560546875 35.13999938964844,-132.4040069580078 C78.73100280761719,-120.83499908447266 98.33499908447266,-52.176998138427734 78.9280014038086,20.947999954223633z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,650.0999755859375,365.06298828125)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(91,91,91)" fill-opacity="1"
                                                d=" M-96.85399627685547,-89.53600311279297 C17.6200008392334,-47.91999816894531 40.263999938964844,15.42300033569336 40.263999938964844,107.42500305175781 C40.263999938964844,107.42500305175781 96.10399627685547,99.447998046875 96.10399627685547,99.447998046875 C93.97699737548828,59.5629997253418 62.91400146484375,-55.55799865722656 -93.43699645996094,-107.67500305175781">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,684.5789794921875,516.2930297851562)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(112,149,214)" fill-opacity="1"
                                                d=" M60.50899887084961,19.8799991607666 C41.683998107910156,77.177001953125 -0.6669999957084656,114.7249984741211 -34.084999084472656,103.74600219726562 C-45.56700134277344,99.9739990234375 -54.500999450683594,90.96299743652344 -60.518001556396484,78.43499755859375 C-72.01399993896484,54.500999450683594 -72.86599731445312,17.729999542236328 -60.50899887084961,-19.8799991607666 C-48.8650016784668,-55.32099914550781 -28.219999313354492,-83.20600128173828 -6.255000114440918,-96.7239990234375 C7.289999961853027,-105.06099700927734 21.33799934387207,-107.93399810791016 34.084999084472656,-103.74600219726562 C67.50299835205078,-92.76699829101562 79.33399963378906,-37.41699981689453 60.50899887084961,19.8799991607666z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,729.0328979492188,467.12939453125)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(112,149,214)" fill-opacity="1"
                                                d=" M-50.763999938964844,-38.599998474121094 C-23.444000244140625,-47.64500045776367 -10.156999588012695,-52.52399826049805 7.026000022888184,-57.28099822998047 C28.450000762939453,-63.2130012512207 41.62300109863281,-62.41400146484375 48.409000396728516,-50.03900146484375 C56.18199920654297,-35.8650016784668 44.018001556396484,-12.116999626159668 22.062999725341797,6.644999980926514 C33.638999938964844,6.245999813079834 49.207000732421875,8.640999794006348 39.62699890136719,28.201000213623047 C30.047000885009766,47.76100158691406 8.119999885559082,60.862998962402344 8.119999885559082,60.862998962402344 C8.119999885559082,60.862998962402344 -50.763999938964844,-38.599998474121094 -50.763999938964844,-38.599998474121094z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,692.89794921875,519.0260009765625)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(111,213,216)" fill-opacity="1"
                                                d=" M36.70199966430664,12.057999610900879 C24.246000289916992,49.97200012207031 -2.2839999198913574,75.30899810791016 -22.554000854492188,68.64900207519531 C-42.82400131225586,61.98899841308594 -49.15800094604492,25.856000900268555 -36.70199966430664,-12.057999610900879 C-24.246000289916992,-49.97200012207031 2.2839999198913574,-75.30899810791016 22.554000854492188,-68.64900207519531 C42.82400131225586,-61.98899841308594 49.15800094604492,-25.856000900268555 36.70199966430664,12.057999610900879z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,660.2940063476562,594.531005859375)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(89,204,2)" fill-opacity="1"
                                                d=" M-60.54800033569336,53.02799987792969 C-51.933998107910156,61.17900085449219 -25.243000030517578,74.80899810791016 20.014999389648438,48.95199966430664 C72.56700134277344,18.92799949645996 79.83599853515625,-51.52799987792969 74.77300262451172,-71.14900207519531 C69.70999908447266,-90.7699966430664 48.10499954223633,-93.99400329589844 32.367000579833984,-71.14900207519531 C12.746000289916992,-42.66699981689453 -27.761999130249023,-8.48799991607666 -56.24399948120117,2.9049999713897705 C-84.72599792480469,14.29800033569336 -69.16200256347656,44.87699890136719 -60.54800033569336,53.02799987792969z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,444.5827941894531,594.8638916015625)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(244,145,2)" fill-opacity="1"
                                                d=" M-29.048999786376953,-7.034999847412109 C-28.398000717163086,6.757999897003174 -12.798999786376953,18.454999923706055 -0.10899999737739563,16.499000549316406 C11.42300033569336,14.720999717712402 24.891000747680664,4.125999927520752 26.136999130249023,-13.640999794006348 C26.136999130249023,-13.640999794006348 -29.048999786376953,-7.034999847412109 -29.048999786376953,-7.034999847412109z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,437.8529968261719,572.9363403320312)"
                                            opacity="1" style="display: block;">
                                            <path fill="rgb(255,194,0)" fill-opacity="1"
                                                d=" M34.992000579833984,15.211999893188477 C29.714000701904297,-7.2210001945495605 11.13599967956543,-28.235000610351562 -15.696000099182129,-22.07699966430664 C-42.52799987792969,-15.918999671936035 -36.26900100708008,14.74899959564209 -27.91200065612793,34.542999267578125 C11.00100040435791,34.88800048828125 34.992000579833984,15.211999893188477 34.992000579833984,15.211999893188477z">
                                            </path>
                                        </g>
                                        <g transform="matrix(0.7599999904632568,0,0,0.7599999904632568,426.6999816894531,565.0680541992188)"
                                            opacity="1" style="display: block;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10" stroke="rgb(255,222,0)" stroke-opacity="1"
                                                stroke-width="13"
                                                d=" M22.792999267578125,10.017999649047852 C18.816999435424805,2.871000051498413 5.658999919891357,-0.4189999997615814 -2.441999912261963,3.194000005722046">
                                            </path>
                                        </g>
                                        <g transform="matrix(1.0000004768371582,0,0,1.0000004768371582,-0.00054931640625,-0.000244140625)"
                                            opacity="1" style="display: block;">
                                            <g opacity="1"
                                                transform="matrix(0.7599999904632568,0,0,0.7599999904632568,407.72601318359375,618.3510131835938)">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(138,226,23)" fill-opacity="1"
                                                        d=" M-26.584999084472656,-21.395000457763672 C-6.669000148773193,-4.307000160217285 20.770000457763672,10.741000175476074 26.08099937438965,13.395999908447266 C31.392000198364258,16.051000595092773 7.934999942779541,28.88599967956543 -11.095000267028809,15.166000366210938 C-30.125,1.4459999799728394 -26.584999084472656,-21.395000457763672 -26.584999084472656,-21.395000457763672z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g opacity="1"
                                                transform="matrix(0.7599999904632568,0,0,0.7599999904632568,485.98199462890625,654.5499877929688)">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(138,226,23)" fill-opacity="1"
                                                        d=" M-34.077999114990234,-16.900999069213867 C-12.835000038146973,-6.2789998054504395 22.570999145507812,1.687000036239624 34.077999114990234,3.4570000171661377 C33.03799819946289,12.111000061035156 20.243999481201172,21.488000869750977 -5.868000030517578,14.406999588012695 C-34.19200134277344,2.9000000953674316 -34.077999114990234,-16.900999069213867 -34.077999114990234,-16.900999069213867z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g opacity="1"
                                                transform="matrix(0.7599999904632568,0,0,0.7599999904632568,443.9519958496094,663.60498046875)">
                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                    <path fill="rgb(138,226,23)" fill-opacity="1"
                                                        d=" M-28.374000549316406,-18.180999755859375 C-8.458000183105469,-6.23199987411499 22.520999908447266,6.603000164031982 28.27400016784668,8.815999984741211 C34.027000427246094,11.029000282287598 13.49899959564209,26.41900062561035 -10.842000007629395,12.256999969482422 C-35.18299865722656,-1.9049999713897705 -28.374000549316406,-18.180999755859375 -28.374000549316406,-18.180999755859375z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g clip-path="url(#__lottie_element_683)" style="display: none;">
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g clip-path="url(#__lottie_element_850)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_843)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_690)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_836)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_829)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_822)" style="display: none;">
                                            <g style="display: none;">
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_698)" style="display: none;">
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_804)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_812)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_793)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_782)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_776)" style="display: none;">
                                            <g style="display: none;">
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_766)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_754)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g mask="url(#__lottie_element_743)" style="display: none;">
                                            <g>
                                                <path></path>
                                            </g>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10"></path>
                                        </g>
                                        <g style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10"></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path></path>
                                        </g>
                                        <g style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="10"></path>
                                        </g>
                                        <g style="display: none;">
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g style="display: none;">
                                        <g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                    </section>

                </div>
                <div class="sidebar-buttons bottom-nav">
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap selected">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}"
                                    alt="home-icon">
                            </div>

                        </span>
                    </a>
                    <a href="leaderboard.html" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/badge-in-sidebar.svg') }}"
                                    alt="home-icon">
                            </div>

                        </span>
                    </a>
                    <a href="profile-page.html" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img id="profile-image"
                                    src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                                    alt="home-icon" class="profile">
                            </div>

                        </span>
                    </a>
                    <a href="./shoppingpage.html" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/shop-in-sidebar.svg') }}"
                                    alt="home-icon">
                            </div>
                        </span>
                    </a>
                    <a href="./faq.html" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/images/sidebar-icon-faq.png') }}"
                                    alt="home-icon">
                            </div>

                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="loading-screen hidden">
        <div class="text-animation-container">
            <div class="lesson-loading-svg" id="owl-walk-animation"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1080 1080" width="1080" height="1080" preserveAspectRatio="xMidYMid meet"
                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                    <defs>
                        <clipPath id="__lottie_element_2">
                            <rect width="1080" height="1080" x="0" y="0"></rect>
                        </clipPath>
                        <clipPath id="__lottie_element_10">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <mask id="__lottie_element_27" mask-type="alpha">
                            <g transform="matrix(0.9998140931129456,0.0192818995565176,-0.0192818995565176,0.9998140931129456,18.26190185546875,-11.2930908203125)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M497.385009765625,338.260009765625 C534.8989868164062,325.0580139160156 531.14697265625,309.1289978027344 558.4149780273438,298.531005859375 C614.39501953125,276.7749938964844 643.2449951171875,333.635986328125 648.2899780273438,352.4110107421875 C648.2899780273438,352.4110107421875 688.823974609375,484.7139892578125 688.823974609375,484.7139892578125 C728.3779907226562,613.8179931640625 634.0570068359375,680.8480224609375 584.3759765625,697.4829711914062 C533.9019775390625,711.5330200195312 418.218994140625,708.843017578125 378.6650085449219,579.739013671875 C378.6650085449219,579.739013671875 338.1310119628906,447.4360046386719 338.1310119628906,447.4360046386719 C331.7929992675781,429.0570068359375 323.99700927734375,376.6029968261719 381.0260009765625,352.1260070800781 C414.3210144042969,337.83599853515625 469.84600830078125,347.95098876953125 497.385009765625,338.260009765625z">
                                </path>
                            </g>
                        </mask>
                        <mask id="__lottie_element_44" mask-type="alpha">
                            <g clip-path="url(#__lottie_element_45)"
                                transform="matrix(0.9746046662330627,0.2239326685667038,-0.2239326685667038,0.9746046662330627,158.00970458984375,-136.0533447265625)"
                                opacity="1" style="display: none;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M530.793701171875,550.7510375976562 C521.7816772460938,521.3370361328125 502.5351257324219,502.68792724609375 471.3305358886719,508.48797607421875 C443.7101745605469,513.5294189453125 433.8203430175781,539.5695190429688 439.6973571777344,558.7525024414062 C443.7003479003906,571.8175048828125 444.8313293457031,574.1397705078125 447.7523193359375,583.6737670898438 C454.4223327636719,605.4457397460938 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 540.6858520507812,583.0390625 536.9808349609375,570.947021484375 C536.9808349609375,570.947021484375 530.793701171875,550.7510375976562 530.793701171875,550.7510375976562z M595.406494140625,517.2918090820312 C587.4495239257812,486.57183837890625 598.8411865234375,461.5306091308594 625.7783813476562,457.2803955078125 C651.461181640625,453.2528381347656 663.1046752929688,467.95831298828125 668.294677734375,487.9923095703125 C671.8296508789062,501.6373291015625 672.2684936523438,507.9051208496094 673.524169921875,513.364501953125 C678.5485229492188,535.6551513671875 676.4449462890625,564.685302734375 645.3519897460938,570.7570190429688 C614.4317626953125,576.6808471679688 604.1406860351562,551.0138549804688 600.8696899414062,538.3848266601562 C600.8696899414062,538.3848266601562 595.406494140625,517.2918090820312 595.406494140625,517.2918090820312z">
                                    </path>
                                </g>
                            </g>
                        </mask>
                        <clipPath id="__lottie_element_45">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <mask id="__lottie_element_55" mask-type="alpha">
                            <g clip-path="url(#__lottie_element_56)"
                                transform="matrix(0.9746046662330627,0.2239326685667038,-0.2239326685667038,0.9746046662330627,158.00970458984375,-136.0533447265625)"
                                opacity="1" style="display: none;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M530.793701171875,550.7510375976562 C521.7816772460938,521.3370361328125 502.5351257324219,502.68792724609375 471.3305358886719,508.48797607421875 C443.7101745605469,513.5294189453125 433.8203430175781,539.5695190429688 439.6973571777344,558.7525024414062 C443.7003479003906,571.8175048828125 444.8313293457031,574.1397705078125 447.7523193359375,583.6737670898438 C454.4223327636719,605.4457397460938 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 540.6858520507812,583.0390625 536.9808349609375,570.947021484375 C536.9808349609375,570.947021484375 530.793701171875,550.7510375976562 530.793701171875,550.7510375976562z M595.406494140625,517.2918090820312 C587.4495239257812,486.57183837890625 598.8411865234375,461.5306091308594 625.7783813476562,457.2803955078125 C651.461181640625,453.2528381347656 663.1046752929688,467.95831298828125 668.294677734375,487.9923095703125 C671.8296508789062,501.6373291015625 672.2684936523438,507.9051208496094 673.524169921875,513.364501953125 C678.5485229492188,535.6551513671875 676.4449462890625,564.685302734375 645.3519897460938,570.7570190429688 C614.4317626953125,576.6808471679688 604.1406860351562,551.0138549804688 600.8696899414062,538.3848266601562 C600.8696899414062,538.3848266601562 595.406494140625,517.2918090820312 595.406494140625,517.2918090820312z">
                                    </path>
                                </g>
                            </g>
                        </mask>
                        <clipPath id="__lottie_element_56">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <clipPath id="__lottie_element_65">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <clipPath id="__lottie_element_81">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <clipPath id="__lottie_element_88">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <mask id="__lottie_element_105" mask-type="alpha">
                            <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,6,-1.48553466796875)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M497.385009765625,338.260009765625 C534.8989868164062,325.0580139160156 531.14697265625,309.1289978027344 558.4149780273438,298.531005859375 C614.39501953125,276.7749938964844 643.2449951171875,333.635986328125 648.2899780273438,352.4110107421875 C648.2899780273438,352.4110107421875 688.823974609375,484.7139892578125 688.823974609375,484.7139892578125 C728.3779907226562,613.8179931640625 634.0570068359375,680.8480224609375 584.3759765625,697.4829711914062 C533.9019775390625,711.5330200195312 418.218994140625,708.843017578125 378.6650085449219,579.739013671875 C378.6650085449219,579.739013671875 338.1310119628906,447.4360046386719 338.1310119628906,447.4360046386719 C331.7929992675781,429.0570068359375 323.99700927734375,376.6029968261719 381.0260009765625,352.1260070800781 C414.3210144042969,337.83599853515625 469.84600830078125,347.95098876953125 497.385009765625,338.260009765625z">
                                </path>
                            </g>
                        </mask>
                        <mask id="__lottie_element_119" mask-type="alpha">
                            <g clip-path="url(#__lottie_element_120)"
                                transform="matrix(0.9998688697814941,-0.01619544066488743,0.01619544066488743,0.9998688697814941,-3.14483642578125,4.67156982421875)"
                                opacity="1" style="display: block;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M531.8920288085938,552.4429931640625 C522.8800048828125,523.0289916992188 493.2550048828125,504.88800048828125 462.875,514.1959838867188 C440.52301025390625,521.0440063476562 431.2019958496094,536.6209716796875 437.0790100097656,555.8040161132812 C441.0820007324219,568.8690185546875 439.97100830078125,565.2420043945312 442.8919982910156,574.7760009765625 C449.56201171875,596.5479736328125 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 541.7849731445312,584.7310180664062 538.0800170898438,572.6389770507812 C538.0800170898438,572.6389770507812 531.8920288085938,552.4429931640625 531.8920288085938,552.4429931640625z M595.4509887695312,519.8579711914062 C587.4940185546875,489.13800048828125 600.1909790039062,459.6000061035156 627.0170288085938,454.6919860839844 C646.7540283203125,451.08099365234375 661.2750244140625,461.14599609375 666.4650268554688,481.17999267578125 C670,494.82501220703125 669.0180053710938,491.0360107421875 671.5969848632812,500.9930114746094 C677.4869995117188,523.7310180664062 675.510009765625,560.9249877929688 645.3519897460938,570.7570190429688 C620.5819702148438,578.8330078125 604.1859741210938,553.5800170898438 600.9149780273438,540.9509887695312 C600.9149780273438,540.9509887695312 595.4509887695312,519.8579711914062 595.4509887695312,519.8579711914062z">
                                    </path>
                                </g>
                            </g>
                        </mask>
                        <clipPath id="__lottie_element_120">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <mask id="__lottie_element_130" mask-type="alpha">
                            <g clip-path="url(#__lottie_element_131)"
                                transform="matrix(0.9998688697814941,-0.01619544066488743,0.01619544066488743,0.9998688697814941,-3.14483642578125,4.67156982421875)"
                                opacity="1" style="display: block;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M531.8920288085938,552.4429931640625 C522.8800048828125,523.0289916992188 493.2550048828125,504.88800048828125 462.875,514.1959838867188 C440.52301025390625,521.0440063476562 431.2019958496094,536.6209716796875 437.0790100097656,555.8040161132812 C441.0820007324219,568.8690185546875 439.97100830078125,565.2420043945312 442.8919982910156,574.7760009765625 C449.56201171875,596.5479736328125 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 541.7849731445312,584.7310180664062 538.0800170898438,572.6389770507812 C538.0800170898438,572.6389770507812 531.8920288085938,552.4429931640625 531.8920288085938,552.4429931640625z M595.4509887695312,519.8579711914062 C587.4940185546875,489.13800048828125 600.1909790039062,459.6000061035156 627.0170288085938,454.6919860839844 C646.7540283203125,451.08099365234375 661.2750244140625,461.14599609375 666.4650268554688,481.17999267578125 C670,494.82501220703125 669.0180053710938,491.0360107421875 671.5969848632812,500.9930114746094 C677.4869995117188,523.7310180664062 675.510009765625,560.9249877929688 645.3519897460938,570.7570190429688 C620.5819702148438,578.8330078125 604.1859741210938,553.5800170898438 600.9149780273438,540.9509887695312 C600.9149780273438,540.9509887695312 595.4509887695312,519.8579711914062 595.4509887695312,519.8579711914062z">
                                    </path>
                                </g>
                            </g>
                        </mask>
                        <clipPath id="__lottie_element_131">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <clipPath id="__lottie_element_140">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                        <clipPath id="__lottie_element_156">
                            <path d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#__lottie_element_2)">
                        <g clip-path="url(#__lottie_element_88)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                            style="display: block;">
                            <g clip-path="url(#__lottie_element_156)"
                                transform="matrix(1,0,0,1,0.0439453125,0.006591796875)" opacity="1"
                                style="display: block;">
                                <g transform="matrix(0.9985416531562805,0,0,0.9985416531562805,549.4829711914062,648.965087890625)"
                                    opacity="0.3" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                        <path fill="rgb(175,175,175)" fill-opacity="1"
                                            d=" M0,-145.1540069580078 C102.8890609741211,-145.1540069580078 186.427001953125,-80.1104965209961 186.427001953125,0 C186.427001953125,80.1104965209961 102.8890609741211,145.1540069580078 0,145.1540069580078 C-102.8890609741211,145.1540069580078 -186.427001953125,80.1104965209961 -186.427001953125,0 C-186.427001953125,-80.1104965209961 -102.8890609741211,-145.1540069580078 0,-145.1540069580078z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,500.9540100097656,692.4609985351562)" opacity="1"
                                style="display: block;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-9,-7.651000022888184 C-9,-7.651000022888184 12.25,-0.0989999994635582 12.25,-0.0989999994635582">
                                </path>
                            </g>
                            <g transform="matrix(1,0,0,1,683.0239868164062,672.1300048828125)" opacity="1"
                                style="display: block;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-12.21399974822998,9.553999900817871 C-12.21399974822998,9.553999900817871 3.2249999046325684,5.11899995803833 12.21399974822998,-9.553999900817871">
                                </path>
                            </g>
                            <g transform="matrix(0.6157914400100708,0.787909209728241,-0.787909209728241,0.6157914400100708,413.5062255859375,590.4215087890625)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M-62.04866409301758,84.38080596923828 C-62.10322189331055,84.31254577636719 17.98259162902832,-158.45091247558594 18.726524353027344,-159.6844482421875 C23.314579010009766,-173.1571502685547 38.81552505493164,-177.83944702148438 49.85752487182617,-169.72044372558594 C102.90853118896484,-130.71144104003906 125.30552673339844,-60.74244689941406 103.9825210571289,3.6925525665283203 C82.6605224609375,68.12954711914062 22.803136825561523,110.72428131103516 -42.962738037109375,110.78460693359375 C-56.65052795410156,110.79756927490234 -66.28207397460938,97.46056365966797 -62.04866409301758,84.38080596923828z">
                                </path>
                            </g>
                            <g transform="matrix(0.9634831547737122,0.2677689790725708,-0.2677689790725708,0.9634831547737122,659.31103515625,453.72454833984375)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M-10.300000190734863,-12.114999771118164 C43.81675338745117,41.35169219970703 101.64132690429688,64.36183166503906 113.66253662109375,71.23717498779297 C125.9326171875,79.22306060791016 123.96209716796875,91.88093566894531 112.12176513671875,98.69406127929688 C55.2330436706543,131.4276580810547 -28.81100082397461,119.90799713134766 -74.37300109863281,69.60299682617188 C-93.97899627685547,47.957000732421875 -130.20799255371094,-18.406999588012695 -113.48899841308594,-37.03200149536133 C-91.35299682617188,-61.689998626708984 -25.185386657714844,-26.41193389892578 -10.300000190734863,-12.114999771118164z">
                                </path>
                            </g>
                            <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,6,-1.48553466796875)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,516.656005859375,498.9169921875)">
                                    <path fill="rgb(88,204,2)" fill-opacity="1"
                                        d=" M-19.270999908447266,-160.65699768066406 C18.243000030517578,-173.85899353027344 14.491000175476074,-189.78799438476562 41.75899887084961,-200.38600158691406 C97.73899841308594,-222.14199829101562 126.58899688720703,-165.281005859375 131.63400268554688,-146.50599670410156 C131.63400268554688,-146.50599670410156 172.16799926757812,-14.20300006866455 172.16799926757812,-14.20300006866455 C211.7220001220703,114.9010009765625 117.4010009765625,181.93099975585938 67.72000122070312,198.5659942626953 C17.246000289916992,212.61599731445312 -98.43699645996094,209.92599487304688 -137.99099731445312,80.8219985961914 C-137.99099731445312,80.8219985961914 -178.52499389648438,-51.48099899291992 -178.52499389648438,-51.48099899291992 C-184.86300659179688,-69.86000061035156 -192.65899658203125,-122.31400299072266 -135.6300048828125,-146.79100036621094 C-102.33499908447266,-161.08099365234375 -46.810001373291016,-150.96600341796875 -19.270999908447266,-160.65699768066406z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,566.9190063476562,664.906982421875)">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M20.77899932861328,-8.782999992370605 C19.000999450683594,-12.401000022888184 -8.909000396728516,-4.698999881744385 -18.80299949645996,0.16300000250339508 C-28.014999389648438,4.690000057220459 -7.880000114440918,14.350000381469727 6.8480000495910645,7.11299991607666 C20.836000442504883,0.23899999260902405 21.95599937438965,-6.388000011444092 20.77899932861328,-8.782999992370605z M48.37699890136719,-22.3439998626709 C46.5989990234375,-25.961999893188477 69.75199890136719,-43.349998474121094 79.64600372314453,-48.21200180053711 C88.85800170898438,-52.737998962402344 84.2020034790039,-30.895999908447266 69.4739990234375,-23.659000396728516 C55.486000061035156,-16.785999298095703 49.55400085449219,-19.948999404907227 48.37699890136719,-22.3439998626709z M29.709999084472656,4.796000003814697 C24.663000106811523,6.271999835968018 23.101999282836914,8.586999893188477 24.398000717163086,11.225000381469727 C26.55699920654297,15.618000030517578 40.87699890136719,15.329000473022461 48.65399932861328,11.197999954223633 C58.58000183105469,5.926000118255615 63.43899917602539,-4.140999794006348 61.928001403808594,-7.216000080108643 C60.71900177001953,-9.675999641418457 58.176998138427734,-9.427000045776367 56.83399963378906,-8.531999588012695 C49.70899963378906,-3.7820000648498535 34.21500015258789,3.4779999256134033 29.709999084472656,4.796000003814697z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_105)" style="display: block;">
                                <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,13.69146728515625,-5.828857421875)"
                                    opacity="1">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M599.427001953125,399.781005859375 C590.7039794921875,402.4530029296875 595.81201171875,477.2309875488281 551.468017578125,490.8169860839844 C507.7309875488281,504.2170104980469 461.5669860839844,448.02899169921875 447.7560119628906,452.260009765625 C435.1549987792969,456.1210021972656 443.864013671875,473.73199462890625 446.5119934082031,480.2099914550781 C440.7040100097656,477.81298828125 432.0140075683594,473.0979919433594 426.42401123046875,473.0419921875 C420.8349914550781,472.9859924316406 418.7650146484375,481.0790100097656 420.5090026855469,486.77301025390625 C421.2139892578125,489.07501220703125 423.69000244140625,493.9649963378906 427.0469970703125,499.2980041503906 C423.489990234375,505.42498779296875 401.51800537109375,521.4329833984375 413.2850036621094,559.8389892578125 C437.15301513671875,637.7429809570312 483.6719970703125,643.3690185546875 517.2319946289062,633.0869750976562 C544.0800170898438,624.8610229492188 559.2670288085938,596.2459716796875 559.8880004882812,586.1610107421875 C559.8880004882812,586.1610107421875 586.6649780273438,578.3709716796875 586.6649780273438,578.3709716796875 C593.0280151367188,586.4500122070312 613.9180297851562,600.10498046875 646.5819702148438,590.0969848632812 C700.6179809570312,573.5419921875 698.1290283203125,513.0770263671875 685.7310180664062,472.6109924316406 C675.81298828125,440.2380065917969 647.9099731445312,430.12701416015625 641.0029907226562,427.3389892578125 C641.27099609375,426.1960144042969 642.4149780273438,425.8919982910156 640.0989990234375,418.3320007324219 C637.2039794921875,408.88299560546875 630.4199829101562,403.6099853515625 626.6640014648438,404.760986328125 C622.9080200195312,405.9119873046875 619.7239990234375,412.385986328125 615.8679809570312,419.2659912109375 C611.9329833984375,406.4230041503906 608.1510009765625,397.1080017089844 599.427001953125,399.781005859375z">
                                    </path>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_140)"
                                transform="matrix(0.9998688697814941,-0.01619544066488743,0.01619544066488743,0.9998688697814941,-3.14483642578125,4.67156982421875)"
                                opacity="1" style="display: block;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M531.8920288085938,552.4429931640625 C522.8800048828125,523.0289916992188 493.2550048828125,504.88800048828125 462.875,514.1959838867188 C440.52301025390625,521.0440063476562 431.2019958496094,536.6209716796875 437.0790100097656,555.8040161132812 C441.0820007324219,568.8690185546875 439.97100830078125,565.2420043945312 442.8919982910156,574.7760009765625 C449.56201171875,596.5479736328125 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 541.7849731445312,584.7310180664062 538.0800170898438,572.6389770507812 C538.0800170898438,572.6389770507812 531.8920288085938,552.4429931640625 531.8920288085938,552.4429931640625z M595.4509887695312,519.8579711914062 C587.4940185546875,489.13800048828125 600.1909790039062,459.6000061035156 627.0170288085938,454.6919860839844 C646.7540283203125,451.08099365234375 661.2750244140625,461.14599609375 666.4650268554688,481.17999267578125 C670,494.82501220703125 669.0180053710938,491.0360107421875 671.5969848632812,500.9930114746094 C677.4869995117188,523.7310180664062 675.510009765625,560.9249877929688 645.3519897460938,570.7570190429688 C620.5819702148438,578.8330078125 604.1859741210938,553.5800170898438 600.9149780273438,540.9509887695312 C600.9149780273438,540.9509887695312 595.4509887695312,519.8579711914062 595.4509887695312,519.8579711914062z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_130)" style="display: block;">
                                <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,46.26788330078125,-26.03192138671875)"
                                    opacity="1">
                                    <path fill="rgb(75,75,75)" fill-opacity="1"
                                        d=" M587.447021484375,504.7909851074219 C579.8499755859375,478.2099914550781 586.97900390625,467.1319885253906 598.9450073242188,463.3919982910156 C616.4290161132812,457.9280090332031 620.9619750976562,477.56500244140625 624.2540283203125,487.8420104980469 C631.989013671875,511.98699951171875 622.948974609375,521.5070190429688 613.8280029296875,525.0659790039062 C604.4530029296875,528.7239990234375 593.9439697265625,527.5239868164062 587.447021484375,504.7909851074219z M478.02398681640625,551.6170043945312 C470.385009765625,521.9099731445312 461.18798828125,517.2249755859375 446.2669982910156,521.7009887695312 C431.4590148925781,526.1430053710938 431.031005859375,536.7449951171875 437.5360107421875,559.2559814453125 C444.3210144042969,582.7369995117188 455.55999755859375,585.7100219726562 466.1260070800781,582.5809936523438 C477.0639953613281,579.3419799804688 481.92401123046875,566.781005859375 478.02398681640625,551.6170043945312z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_119)" style="display: block;">
                                <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,44.334625244140625,-21.8193359375)"
                                    opacity="1">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M588.156982421875,466.2130126953125 C581.698974609375,466.70098876953125 575.39501953125,473.37200927734375 576.5430297851562,481.07000732421875 C577.6909790039062,488.76800537109375 581.9329833984375,494.760986328125 590.31298828125,494.125 C598.416015625,493.510009765625 603.0750122070312,486.96600341796875 601.927001953125,479.26800537109375 C600.7789916992188,471.57000732421875 594.614990234375,465.7250061035156 588.156982421875,466.2130126953125z M435.04998779296875,521.18798828125 C442.4519958496094,519.7239990234375 449.6390075683594,524.5380249023438 451.1029968261719,531.9400024414062 C452.5669860839844,539.3419799804688 447.75299072265625,546.5289916992188 440.35101318359375,547.9929809570312 C432.9490051269531,549.4569702148438 425.7619934082031,544.6430053710938 424.2980041503906,537.2410278320312 C422.8340148925781,529.8389892578125 427.64801025390625,522.6519775390625 435.04998779296875,521.18798828125z">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,13.69146728515625,-5.828857421875)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(137,226,25)" fill-opacity="1"
                                    d=" M682.1209716796875,504.10699462890625 C677.2260131835938,492.1189880371094 613.4400024414062,529.2849731445312 586.2069702148438,569.0009765625 C588.114990234375,595.5880126953125 695.9149780273438,589.343017578125 682.1209716796875,504.10699462890625z M559.8900146484375,572.3189697265625 C559.8900146484375,572.3189697265625 490.1789855957031,689.85400390625 434.66400146484375,590.3599853515625 C441.2820129394531,587.4849853515625 521.8870239257812,559.5869750976562 559.8900146484375,572.3189697265625">
                                </path>
                            </g>
                            <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,13.69146728515625,-5.828857421875)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,578.5339965820312,583.3060302734375)">
                                    <path fill="rgb(244,144,0)" fill-opacity="1"
                                        d=" M-7.806000232696533,-20.510000228881836 C3.13100004196167,-24.672000885009766 15.782615661621094,-18.61618995666504 20.01856231689453,-7.261378765106201 C22.944047927856445,0.6198970079421997 34.04270935058594,16.28630256652832 28.361854553222656,18.541194915771484 C25.91651153564453,19.513078689575195 21.219221115112305,20.362077713012695 17.057893753051758,21.564645767211914 C5.814204216003418,24.813064575195312 -14.218358039855957,23.1275577545166 -19.80299949645996,7.5370001792907715 C-23.887367248535156,-3.8737051486968994 -18.743000030517578,-16.347999572753906 -7.806000232696533,-20.510000228881836z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,597.7620239257812,589.8930053710938)">
                                    <path fill="rgb(177,105,0)" fill-opacity="1"
                                        d=" M16.6118106842041,-4.409616947174072 C18.593149185180664,1.1816112995147705 17.039396286010742,8.288532257080078 9.51362133026123,10.465723991394043 C3.0040838718414307,12.334147453308105 -2.3671417236328125,8.208328247070312 -3.469141721725464,2.3133277893066406 C-4.571141719818115,-3.581672191619873 -1.3166667222976685,-9.252673149108887 4.578333377838135,-10.3546724319458 C10.473333358764648,-11.456672668457031 14.611485481262207,-10.048809051513672 16.6118106842041,-4.409616947174072z">
                                    </path>
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                        stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                        stroke-width="5"
                                        d=" M16.6118106842041,-4.409616947174072 C18.593149185180664,1.1816112995147705 17.039396286010742,8.288532257080078 9.51362133026123,10.465723991394043 C3.0040838718414307,12.334147453308105 -2.3671417236328125,8.208328247070312 -3.469141721725464,2.3133277893066406 C-4.571141719818115,-3.581672191619873 -1.3166667222976685,-9.252673149108887 4.578333377838135,-10.3546724319458 C10.473333358764648,-11.456672668457031 14.611485481262207,-10.048809051513672 16.6118106842041,-4.409616947174072z">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(0.9649116396903992,-0.26257503032684326,0.26257503032684326,0.9649116396903992,496.3257141113281,559.6953125)"
                                opacity="1" style="display: none;">
                                <path fill="rgb(176,104,0)" fill-opacity="1"
                                    d=" M80.50525665283203,56.4289436340332 C80.50525665283203,56.4289436340332 76.56267547607422,58.08891677856445 78.93589782714844,64.22315979003906 C81.3318862915039,70.39591217041016 81.79133605957031,72.83235168457031 90.5378646850586,69.77062225341797 C99.67276763916016,66.59683227539062 94.62567138671875,58.29066467285156 94.62567138671875,58.29066467285156 C94.62567138671875,58.29066467285156 80.50525665283203,56.4289436340332 80.50525665283203,56.4289436340332z">
                                </path>
                            </g>
                            <g transform="matrix(0.9999992251396179,0.001257142168469727,-0.001257142168469727,0.9999992251396179,13.69146728515625,-5.828857421875)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,580.322021484375,572.6849975585938)">
                                    <path fill="rgb(255,194,0)" fill-opacity="1"
                                        d=" M24.036518096923828,-11.289710998535156 C16.78580093383789,-16.157968521118164 7.941293716430664,-22.75703239440918 -5.536706447601318,-17.62803077697754 C-21.85170555114746,-11.419031143188477 -25.150634765625,11.722209930419922 -22.72063446044922,18.106210708618164 C-21.04363441467285,22.514209747314453 11.817249298095703,15.63770866394043 23.530391693115234,12.006205558776855 C30.84894371032715,9.668700218200684 35.40810012817383,8.110077857971191 35.970428466796875,6.096202373504639 C37.489933013916016,2.948505163192749 30.012178421020508,-7.404605865478516 24.036518096923828,-11.289710998535156z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,579.7630004882812,566.5029907226562)">
                                    <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                        stroke-miterlimit="4" stroke="rgb(255,222,0)" stroke-opacity="1"
                                        stroke-width="14.192"
                                        d=" M-7.1668853759765625,3.058232307434082 C-5.458171367645264,1.070021152496338 -0.5327395796775818,-2.7786061763763428 5.509270191192627,-2.263428211212158">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,574.5289916992188,720.4283447265625)" opacity="1"
                                style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-8.932766914367676,-7.837890148162842 C-8.932766914367676,-7.837890148162842 7.4289445877075195,-3.578444004058838 7.539903163909912,-6.435626983642578">
                                </path>
                            </g>
                        </g>
                        <g clip-path="url(#__lottie_element_10)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                            style="display: none;">
                            <g clip-path="url(#__lottie_element_81)" transform="matrix(1,0,0,1,0,0)"
                                opacity="1" style="display: block;">
                                <g transform="matrix(1,0,0,1,549.468017578125,648.9710083007812)" opacity="0.3"
                                    style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                        <path fill="rgb(175,175,175)" fill-opacity="1"
                                            d=" M0,-145.1540069580078 C102.8890609741211,-145.1540069580078 186.427001953125,-80.1104965209961 186.427001953125,0 C186.427001953125,80.1104965209961 102.8890609741211,145.1540069580078 0,145.1540069580078 C-102.8890609741211,145.1540069580078 -186.427001953125,80.1104965209961 -186.427001953125,0 C-186.427001953125,-80.1104965209961 -102.8890609741211,-145.1540069580078 0,-145.1540069580078z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,500.9540100097656,692.4609985351562)" opacity="1"
                                style="display: block;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-9,-7.651000022888184 C-9,-7.651000022888184 12.25,-0.0989999994635582 12.25,-0.0989999994635582">
                                </path>
                            </g>
                            <g transform="matrix(1,0,0,1,683.0239868164062,672.1300048828125)" opacity="1"
                                style="display: block;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-12.21399974822998,9.553999900817871 C-12.21399974822998,9.553999900817871 3.2249999046325684,5.11899995803833 12.21399974822998,-9.553999900817871">
                                </path>
                            </g>
                            <g transform="matrix(0.6020346283912659,0.7984700202941895,-0.7984700202941895,0.6020346283912659,415.05816650390625,587.84912109375)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M-61.07500076293945,84.71800231933594 C-61.07500076293945,84.71800231933594 19.631000518798828,-159.1739959716797 19.631000518798828,-159.1739959716797 C23.957000732421875,-172.2469940185547 39.720001220703125,-177.32899475097656 50.762001037597656,-169.2100067138672 C103.81300354003906,-130.2010040283203 126.20999908447266,-60.231998443603516 104.88700103759766,4.203000068664551 C83.56500244140625,68.63999938964844 23.82900047302246,111.51699829101562 -42.05799865722656,111.29399871826172 C-55.770999908447266,111.24800109863281 -65.4010009765625,97.79100036621094 -61.07500076293945,84.71800231933594z">
                                </path>
                            </g>
                            <g transform="matrix(0.9390652179718018,0.34373903274536133,-0.34373903274536133,0.9390652179718018,663.8671264648438,455.55926513671875)"
                                opacity="1" style="display: block;">
                                <path fill="rgb(88,204,2)" fill-opacity="1"
                                    d=" M-10.300000190734863,-12.114999771118164 C29.472999572753906,21.184999465942383 96.19400024414062,72.62899780273438 107.5009994506836,80.7040023803711 C118.94400024414062,89.91200256347656 115.70099639892578,102.3489990234375 103.19499969482422,107.95700073242188 C43.10900115966797,134.8979949951172 -28.81100082397461,119.90799713134766 -74.37300109863281,69.60299682617188 C-93.97899627685547,47.957000732421875 -130.20799255371094,-18.406999588012695 -113.48899841308594,-37.03200149536133 C-91.35299682617188,-61.689998626708984 -26.14900016784668,-25.384000778198242 -10.300000190734863,-12.114999771118164z">
                                </path>
                            </g>
                            <g transform="matrix(0.9998140931129456,0.0192818995565176,-0.0192818995565176,0.9998140931129456,18.26190185546875,-11.2930908203125)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,516.656005859375,498.9169921875)">
                                    <path fill="rgb(88,204,2)" fill-opacity="1"
                                        d=" M-19.270999908447266,-160.65699768066406 C18.243000030517578,-173.85899353027344 14.491000175476074,-189.78799438476562 41.75899887084961,-200.38600158691406 C97.73899841308594,-222.14199829101562 126.58899688720703,-165.281005859375 131.63400268554688,-146.50599670410156 C131.63400268554688,-146.50599670410156 172.16799926757812,-14.20300006866455 172.16799926757812,-14.20300006866455 C211.7220001220703,114.9010009765625 117.4010009765625,181.93099975585938 67.72000122070312,198.5659942626953 C17.246000289916992,212.61599731445312 -98.43699645996094,209.92599487304688 -137.99099731445312,80.8219985961914 C-137.99099731445312,80.8219985961914 -178.52499389648438,-51.48099899291992 -178.52499389648438,-51.48099899291992 C-184.86300659179688,-69.86000061035156 -192.65899658203125,-122.31400299072266 -135.6300048828125,-146.79100036621094 C-102.33499908447266,-161.08099365234375 -46.810001373291016,-150.96600341796875 -19.270999908447266,-160.65699768066406z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,566.9190063476562,664.906982421875)">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M20.77899932861328,-8.782999992370605 C19.000999450683594,-12.401000022888184 -8.909000396728516,-4.698999881744385 -18.80299949645996,0.16300000250339508 C-28.014999389648438,4.690000057220459 -7.880000114440918,14.350000381469727 6.8480000495910645,7.11299991607666 C20.836000442504883,0.23899999260902405 21.95599937438965,-6.388000011444092 20.77899932861328,-8.782999992370605z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,633.2520141601562,630.7490234375)">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M-17.954999923706055,11.814000129699707 C-19.732999801635742,8.196000099182129 3.4189999103546143,-9.192000389099121 13.312999725341797,-14.053999900817871 C22.524999618530273,-18.58099937438965 17.868999481201172,3.26200008392334 3.1410000324249268,10.49899959564209 C-10.847000122070312,17.371999740600586 -16.777999877929688,14.208999633789062 -17.954999923706055,11.814000129699707z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,609.9509887695312,666.9949951171875)">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M-13.321999549865723,2.7079999446868896 C-18.368999481201172,4.184000015258789 -19.93000030517578,6.499000072479248 -18.634000778198242,9.13700008392334 C-16.475000381469727,13.529999732971191 -2.1549999713897705,13.241000175476074 5.622000217437744,9.109999656677246 C15.54800033569336,3.8380000591278076 20.406999588012695,-6.230000019073486 18.895999908447266,-9.305000305175781 C17.687000274658203,-11.765000343322754 15.145999908447266,-11.515000343322754 13.803000450134277,-10.619999885559082 C6.677999973297119,-5.869999885559082 -8.815999984741211,1.3899999856948853 -13.321999549865723,2.7079999446868896z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_27)" style="display: block;">
                                <g transform="matrix(0.9998140931129456,0.0192818995565176,-0.0192818995565176,0.9998140931129456,26.0303955078125,-15.4970703125)"
                                    opacity="1">
                                    <path fill="rgb(137,226,25)" fill-opacity="1"
                                        d=" M599.427001953125,399.781005859375 C590.7039794921875,402.4530029296875 595.81201171875,477.2309875488281 551.468017578125,490.8169860839844 C507.7309875488281,504.2170104980469 461.5669860839844,448.02899169921875 447.7560119628906,452.260009765625 C435.1549987792969,456.1210021972656 443.864013671875,473.73199462890625 446.5119934082031,480.2099914550781 C440.7040100097656,477.81298828125 432.0140075683594,473.0979919433594 426.42401123046875,473.0419921875 C420.8349914550781,472.9859924316406 418.7650146484375,481.0790100097656 420.5090026855469,486.77301025390625 C421.2139892578125,489.07501220703125 423.69000244140625,493.9649963378906 427.0469970703125,499.2980041503906 C423.489990234375,505.42498779296875 401.51800537109375,521.4329833984375 413.2850036621094,559.8389892578125 C437.15301513671875,637.7429809570312 483.6719970703125,643.3690185546875 517.2319946289062,633.0869750976562 C544.0800170898438,624.8610229492188 559.2670288085938,596.2459716796875 559.8880004882812,586.1610107421875 C559.8880004882812,586.1610107421875 586.6649780273438,578.3709716796875 586.6649780273438,578.3709716796875 C593.0280151367188,586.4500122070312 613.9180297851562,600.10498046875 646.5819702148438,590.0969848632812 C700.6179809570312,573.5419921875 698.1290283203125,513.0770263671875 685.7310180664062,472.6109924316406 C675.81298828125,440.2380065917969 647.9099731445312,430.12701416015625 641.0029907226562,427.3389892578125 C641.27099609375,426.1960144042969 642.4149780273438,425.8919982910156 640.0989990234375,418.3320007324219 C637.2039794921875,408.88299560546875 630.4199829101562,403.6099853515625 626.6640014648438,404.760986328125 C622.9080200195312,405.9119873046875 619.7239990234375,412.385986328125 615.8679809570312,419.2659912109375 C611.9329833984375,406.4230041503906 608.1510009765625,397.1080017089844 599.427001953125,399.781005859375z">
                                    </path>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_65)"
                                transform="matrix(0.9746046662330627,0.2239326685667038,-0.2239326685667038,0.9746046662330627,158.00970458984375,-136.0533447265625)"
                                opacity="1" style="display: none;">
                                <g transform="matrix(0.9998477101325989,0.017452405765652657,-0.017452405765652657,0.9998477101325989,17.00445556640625,-10.22686767578125)"
                                    opacity="1" style="display: block;">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M530.793701171875,550.7510375976562 C521.7816772460938,521.3370361328125 502.5351257324219,502.68792724609375 471.3305358886719,508.48797607421875 C443.7101745605469,513.5294189453125 433.8203430175781,539.5695190429688 439.6973571777344,558.7525024414062 C443.7003479003906,571.8175048828125 444.8313293457031,574.1397705078125 447.7523193359375,583.6737670898438 C454.4223327636719,605.4457397460938 472.4339904785156,626.3720092773438 509.0050048828125,619.4829711914062 C539.0430297851562,613.8250122070312 540.6858520507812,583.0390625 536.9808349609375,570.947021484375 C536.9808349609375,570.947021484375 530.793701171875,550.7510375976562 530.793701171875,550.7510375976562z M595.406494140625,517.2918090820312 C587.4495239257812,486.57183837890625 598.8411865234375,461.5306091308594 625.7783813476562,457.2803955078125 C651.461181640625,453.2528381347656 663.1046752929688,467.95831298828125 668.294677734375,487.9923095703125 C671.8296508789062,501.6373291015625 672.2684936523438,507.9051208496094 673.524169921875,513.364501953125 C678.5485229492188,535.6551513671875 676.4449462890625,564.685302734375 645.3519897460938,570.7570190429688 C614.4317626953125,576.6808471679688 604.1406860351562,551.0138549804688 600.8696899414062,538.3848266601562 C600.8696899414062,538.3848266601562 595.406494140625,517.2918090820312 595.406494140625,517.2918090820312z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_55)" style="display: none;">
                                <g transform="matrix(0.9705480337142944,0.24090775847434998,-0.24090775847434998,0.9705480337142944,224.40194702148438,-150.3526611328125)"
                                    opacity="1">
                                    <path fill="rgb(75,75,75)" fill-opacity="1"
                                        d=" M587.447021484375,504.7909851074219 C579.8499755859375,478.2099914550781 586.97900390625,467.1319885253906 598.9450073242188,463.3919982910156 C616.4290161132812,457.9280090332031 620.9619750976562,477.56500244140625 624.2540283203125,487.8420104980469 C631.989013671875,511.98699951171875 622.948974609375,521.5070190429688 613.8280029296875,525.0659790039062 C604.4530029296875,528.7239990234375 593.9439697265625,527.5239868164062 587.447021484375,504.7909851074219z M476.5050048828125,550.1179809570312 C468.14300537109375,520.6060180664062 458.83599853515625,516.1480102539062 444.02801513671875,520.9860229492188 C429.3330078125,525.7880249023438 429.16400146484375,536.39697265625 436.21600341796875,558.7420043945312 C443.5719909667969,582.051025390625 454.8789978027344,584.7490234375 465.3659973144531,581.3629760742188 C476.22100830078125,577.8579711914062 480.77301025390625,565.1820068359375 476.5050048828125,550.1179809570312z">
                                    </path>
                                </g>
                            </g>
                            <g mask="url(#__lottie_element_44)" style="display: none;">
                                <g transform="matrix(0.9705480337142944,0.24090775847434998,-0.24090775847434998,0.9705480337142944,223.23617553710938,-154.21112060546875)"
                                    opacity="1">
                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                        d=" M435.04998779296875,521.18798828125 C442.4519958496094,519.7239990234375 449.6390075683594,524.5380249023438 451.1029968261719,531.9400024414062 C452.5669860839844,539.3419799804688 447.75299072265625,546.5289916992188 440.35101318359375,547.9929809570312 C432.9490051269531,549.4569702148438 425.7619934082031,544.6430053710938 424.2980041503906,537.2410278320312 C422.8340148925781,529.8389892578125 427.64801025390625,522.6519775390625 435.04998779296875,521.18798828125z M591.0250244140625,471.010986328125 C584.5670166015625,471.4989929199219 578.2630004882812,478.1709899902344 579.4110107421875,485.8689880371094 C580.5590209960938,493.5669860839844 584.801025390625,499.5589904785156 593.1810302734375,498.9230041503906 C601.2839965820312,498.3080139160156 605.9429931640625,491.7640075683594 604.7949829101562,484.0660095214844 C603.64697265625,476.3680114746094 597.4829711914062,470.52301025390625 591.0250244140625,471.010986328125z">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(0.9705480337142944,0.24090775847434998,-0.24090775847434998,0.9705480337142944,176.87200927734375,-142.21221923828125)"
                                opacity="1" style="display: none;">
                                <path fill="rgb(137,226,25)" fill-opacity="1"
                                    d=" M682.1209716796875,504.10699462890625 C677.2260131835938,492.1189880371094 613.4400024414062,529.2849731445312 586.2069702148438,569.0009765625 C588.114990234375,595.5880126953125 695.9149780273438,589.343017578125 682.1209716796875,504.10699462890625z M559.8900146484375,572.3189697265625 C559.8900146484375,572.3189697265625 490.1789855957031,689.85400390625 434.66400146484375,590.3599853515625 C441.2820129394531,587.4849853515625 521.8870239257812,559.5869750976562 559.8900146484375,572.3189697265625">
                                </path>
                            </g>
                            <g transform="matrix(0.9998140931129456,0.0192818995565176,-0.0192818995565176,0.9998140931129456,26.0303955078125,-15.4970703125)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,578.5339965820312,583.3060302734375)">
                                    <path fill="rgb(244,144,0)" fill-opacity="1"
                                        d=" M-7.806000232696533,-20.510000228881836 C3.13100004196167,-24.672000885009766 15.762999534606934,-18.632999420166016 20.003999710083008,-7.28000020980835 C22.92099952697754,0.5649999976158142 34.198001861572266,16.322999954223633 28.509000778198242,18.527000427246094 C26.06100082397461,19.47599983215332 21.3439998626709,20.315000534057617 17.17300033569336,21.520999908447266 C5.931000232696533,24.770999908447266 -14.187000274658203,23.17799949645996 -19.80299949645996,7.5370001792907715 C-23.89900016784668,-3.869999885559082 -18.743000030517578,-16.347999572753906 -7.806000232696533,-20.510000228881836z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,597.7620239257812,589.8930053710938)">
                                    <path fill="rgb(177,105,0)" fill-opacity="1"
                                        d=" M16.62700080871582,-4.415999889373779 C18.608999252319336,1.1749999523162842 17.05699920654297,8.282999992370605 9.529999732971191,10.461000442504883 C3.0199999809265137,12.329999923706055 -2.3510000705718994,8.204000473022461 -3.453000068664551,2.309000015258789 C-4.554999828338623,-3.5859999656677246 -1.3009999990463257,-9.256999969482422 4.593999862670898,-10.359000205993652 C10.48900032043457,-11.461000442504883 14.62600040435791,-10.055000305175781 16.62700080871582,-4.415999889373779z">
                                    </path>
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                        stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                        stroke-width="5"
                                        d=" M16.62700080871582,-4.415999889373779 C18.608999252319336,1.1749999523162842 17.05699920654297,8.282999992370605 9.529999732971191,10.461000442504883 C3.0199999809265137,12.329999923706055 -2.3510000705718994,8.204000473022461 -3.453000068664551,2.309000015258789 C-4.554999828338623,-3.5859999656677246 -1.3009999990463257,-9.256999969482422 4.593999862670898,-10.359000205993652 C10.48900032043457,-11.461000442504883 14.62600040435791,-10.055000305175781 16.62700080871582,-4.415999889373779z">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(0.9652693271636963,-0.2612569034099579,0.2612569034099579,0.9652693271636963,496.44891357421875,559.804443359375)"
                                opacity="1" style="display: none;">
                                <path fill="rgb(176,104,0)" fill-opacity="1"
                                    d=" M80.46037292480469,56.4016227722168 C80.46037292480469,56.4016227722168 76.53070068359375,58.08092498779297 78.90958404541016,64.22132873535156 C81.3122787475586,70.40200805664062 81.79295349121094,72.82465362548828 90.51637268066406,69.77156829833984 C99.64599609375,66.60128021240234 94.62065124511719,58.270267486572266 94.62065124511719,58.270267486572266 C94.62065124511719,58.270267486572266 80.46037292480469,56.4016227722168 80.46037292480469,56.4016227722168z">
                                </path>
                            </g>
                            <g transform="matrix(0.9998140931129456,0.0192818995565176,-0.0192818995565176,0.9998140931129456,26.0303955078125,-15.4970703125)"
                                opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,580.322021484375,572.6849975585938)">
                                    <path fill="rgb(255,194,0)" fill-opacity="1"
                                        d=" M24.040000915527344,-11.291999816894531 C16.78700065612793,-16.158000946044922 7.941999912261963,-22.756999969482422 -5.535999774932861,-17.628000259399414 C-21.85099983215332,-11.418999671936035 -25.149999618530273,11.722999572753906 -22.719999313354492,18.10700035095215 C-21.042999267578125,22.514999389648438 11.824000358581543,15.63700008392334 23.53700065612793,12.005000114440918 C30.860000610351562,9.666000366210938 35.41899871826172,8.107000350952148 35.98099899291992,6.0929999351501465 C37.5,2.944999933242798 30.01799964904785,-7.4079999923706055 24.040000915527344,-11.291999816894531z">
                                    </path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,579.7630004882812,566.5029907226562)">
                                    <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                        stroke-miterlimit="4" stroke="rgb(255,222,0)" stroke-opacity="1"
                                        stroke-width="14.192"
                                        d=" M-7.164000034332275,3.055999994277954 C-5.454999923706055,1.0679999589920044 -0.5289999842643738,-2.7799999713897705 5.513000011444092,-2.2639999389648438">
                                    </path>
                                </g>
                            </g>
                            <g transform="matrix(0.9332726001739502,-0.3591688573360443,0.3591688573360443,0.9332726001739502,502.48114013671875,584.2793579101562)"
                                opacity="1" style="display: block;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="4" stroke="rgb(61,190,1)" stroke-opacity="1"
                                    stroke-width="8"
                                    d=" M120.89900207519531,-6.545000076293945 C127.84700012207031,-41.4119987487793 173.822998046875,-47.99700164794922 199.14300537109375,-26.506999969482422 M64.46399688720703,-9.555999755859375 C57.84299850463867,-47.46900177001953 8.741000175476074,-60.76599884033203 -17.645999908447266,-42.92100143432617">
                                </path>
                            </g>
                            <g transform="matrix(1,0,0,1,568.5903930664062,719.4891967773438)" opacity="1"
                                style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                    stroke-miterlimit="10" stroke="rgb(244,144,0)" stroke-opacity="1"
                                    stroke-width="50"
                                    d=" M-8.99927043914795,-7.65302848815918 C-8.99927043914795,-7.65302848815918 12.197668075561523,-0.136768639087677 12.198872566223145,-0.1677827537059784">
                                </path>
                            </g>
                        </g>
                        <g transform="matrix(0.9349173903465271,0,0,0.9349173903465271,748.8114013671875,215.599609375)"
                            opacity="0.4517575320797908" style="display: block;">
                            <path fill="rgb(178,226,254)" fill-opacity="1"
                                d=" M-1.4220000505447388,-9.086999893188477 C-1.4220000505447388,-9.086999893188477 16.040000915527344,12.736000061035156 16.040000915527344,12.736000061035156 C17.798999786376953,14.37399959564209 19.17799949645996,16.469999313354492 19.969999313354492,18.915000915527344 C22.458999633789062,26.591999053955078 18.253000259399414,34.82899856567383 10.579999923706055,37.316001892089844 C2.9030001163482666,39.80500030517578 -5.335999965667725,35.60300064086914 -7.824999809265137,27.926000595092773 C-10.314000129699707,20.249000549316406 -6.10699987411499,12.012999534606934 1.5700000524520874,9.52400016784668 C1.8200000524520874,9.442999839782715 2.071000099182129,9.366999626159668 2.321000099182129,9.300999641418457 C2.321000099182129,9.300999641418457 -19.743999481201172,-18.60099983215332 -19.743999481201172,-18.60099983215332 C-21.222999572753906,-20.472999572753906 -20.92799949645996,-23.180999755859375 -19.086999893188477,-24.69499969482422 C-19.086999893188477,-24.69499969482422 -4.109000205993652,-36.9900016784668 -4.109000205993652,-36.9900016784668 C-2.236999988555908,-38.52899932861328 0.5059999823570251,-38.34299850463867 2.1610000133514404,-36.56800079345703 C5.270999908447266,-33.222999572753906 9.807999610900879,-28.07900047302246 10.576000213623047,-25.709999084472656 C11.369000434875488,-23.264999389648438 4.410999774932861,-18.43600082397461 -0.3310000002384186,-15.484000205993652 C-2.5369999408721924,-14.107999801635742 -3.0450000762939453,-11.11400032043457 -1.4220000505447388,-9.086999893188477z">
                            </path>
                        </g>
                        <g transform="matrix(0.8299999833106995,0,0,0.8299999833106995,828.2705688476562,271.14984130859375)"
                            opacity="1" style="display: block;">
                            <path fill="rgb(178,226,254)" fill-opacity="1"
                                d=" M51.332000732421875,-27.902000427246094 C51.332000732421875,-27.902000427246094 38.744998931884766,31.80900001525879 38.744998931884766,31.80900001525879 C37.040000915527344,40.56999969482422 29.33099937438965,47.185001373291016 20.073999404907227,47.185001373291016 C9.565999984741211,47.185001373291016 1.0470000505447388,38.66600036621094 1.0470000505447388,28.158000946044922 C1.0470000505447388,17.649999618530273 9.565999984741211,9.130999565124512 20.073999404907227,9.130999565124512 C23.659000396728516,9.130999565124512 27.014999389648438,10.121999740600586 29.875,11.845000267028809 C29.875,11.845000267028809 33.731998443603516,-12.211999893188477 33.731998443603516,-12.211999893188477 C33.731998443603516,-12.211999893188477 1.3559999465942383,-19.207000732421875 1.3559999465942383,-19.207000732421875 C-1.6790000200271606,-19.865999221801758 -4.678999900817871,-17.968000411987305 -5.392000198364258,-14.944999694824219 C-5.392000198364258,-14.944999694824219 -13.753999710083008,20.56399917602539 -13.753999710083008,20.56399917602539 C-15.458999633789062,29.325000762939453 -23.17300033569336,35.93299865722656 -32.43000030517578,35.93299865722656 C-42.9379997253418,35.93299865722656 -51.457000732421875,27.413999557495117 -51.457000732421875,16.9060001373291 C-51.457000732421875,6.3979997634887695 -42.9379997253418,-2.121000051498413 -32.43000030517578,-2.121000051498413 C-28.77199935913086,-2.121000051498413 -25.350000381469727,-1.0880000591278076 -22.447999954223633,0.7080000042915344 C-22.447999954223633,0.7080000042915344 -12.543999671936035,-42.750999450683594 -12.543999671936035,-42.750999450683594 C-11.843000411987305,-45.83399963378906 -8.758999824523926,-47.75600051879883 -5.682000160217285,-47.03099822998047 C-5.682000160217285,-47.03099822998047 47.06399917602539,-34.61899948120117 47.06399917602539,-34.61899948120117 C50.07500076293945,-33.9119987487793 51.972999572753906,-30.930999755859375 51.332000732421875,-27.902000427246094z">
                            </path>
                        </g>
                    </g>
                </svg></div>
            <span>Did You Know : Spanish is the second most spoken language globally,
                with over 460 million native speakers.</span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>
    <script src="{{ url('duolingo-clone-master/js/learn.js') }}"></script>
    <script src="{{ url('duolingo-clone-master/js/updateUserData.js') }}" type="module"></script>

</body>

</html>
