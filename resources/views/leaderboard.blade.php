@php
    $learner = auth()->user()->learner;
@endphp
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duolingo leaderboard</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/leaderboard.css') }}">
    <style>
        .diffmedals {
            display: flex;
            justify-content: center;
        }

        .medalsdiv {
            position: normal;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <div class="main-container">
        <!------------------------------------- Left Sidebar ------------------------------------------------>
        @livewire('sidebar', ['selected' => 2])

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
                            <span class="text-in-button fire-text">118</span>
                        </span>
                    </a>
                    <a href="" class="button-in-sidebar">
                        <span class="icon-and-text-wrap">
                            <div class="icon-in-button">
                                <img src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}" alt="home-icon"
                                    class="profile">
                            </div>
                            <span class="text-in-button gem-text">440</span>
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
                </div>
                @livewire('SetStatus')


                <!-- --------------------------------right sidebar end---------------------------- -->

                <!----------------------------------- Scrollable area showing units ------------------------------------------------>

            </div>
            <div class="scrollable-lesson-div">
                <div class="center-container">

                    <div class="center-container-firstdiv">
                        <div class="diffmedals">
                            <div class="medalsdiv" {{-- style="--offset: 0;" --}}>

                                <div class="medaldiv">
                                    <img class="p9XXu"
                                        src="{{ url('duolingo-clone-master/assets/svg/' . Auth::user()->learner->league->image) }}">
                                </div>
                                <img class="_14I3k"
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/1b4fb092de75e4ecefd8e92f10b4ddd2.svg">
                                <img class="_14I3k"
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/1b4fb092de75e4ecefd8e92f10b4ddd2.svg">
                                <img class="_14I3k"
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/1b4fb092de75e4ecefd8e92f10b4ddd2.svg">
                                <img class="_14I3k"
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/1b4fb092de75e4ecefd8e92f10b4ddd2.svg">
                                <img class="_14I3k"
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/1b4fb092de75e4ecefd8e92f10b4ddd2.svg">


                            </div>
                            @foreach ($leagues as $league)
                                @switch(true)
                                    @case($league->xp_required == $learner->league->xp_required)
                                    @break

                                    <div class="medaldiv">
                                        <img class="p9XXu"
                                            src="{{ url('duolingo-clone-master/assets/svg/' . Auth::user()->learner->league->image) }}">
                                    </div>

                                    @default
                                @endswitch
                            @endforeach
                        </div>
                        <div class="_250dJ">{{ auth()->user()->learner->league->name }}</div>
                        <div class="_2Xv_D">

                        </div>

                        <hr class="_3cgRx">
                    </div>

                    <div class="centre-container-secdiv" id="centre-container-secdiv">
                        @php
                            $order = 0;
                        @endphp
                        {{-- real content --}}
                        @foreach ($learners as $learner)
                            @php
                                ++$order;
                            @endphp
                            <a class="eachprofile" id="eachprofile_13">
                                @if ($order <= 3)
                                    @switch($order)
                                        @case(1)
                                            <img src="//d35aaqx5ub95lt.cloudfront.net/images/leagues/9e4f18c0bc42c7508d5fa5b18346af11.svg"
                                                alt="first" />
                                        @break

                                        @case(2)
                                            <img src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/cc7b8f8582e9cfb88408ab851ec2e9bd.svg"
                                                alst="second" />
                                        @break

                                        @case(3)
                                            <img src='https://d35aaqx5ub95lt.cloudfront.net/images/leagues/eef523c872b71178ef5acb2442d453a2.svg'
                                                alt="third" />
                                        @break

                                        @default
                                    @endswitch
                                @else
                                    <div class="profindex">{{ $order }}</div>
                                @endif

                                <div class="divforimg">
                                    <img class="image" src="../assets/svg/profile-image-temp.svg">
                                    <div class="divforbubble">
                                        <img class="bubble" id="bubble"
                                            @if ($learner->status) src={{ $learner->status->image }} @else src="//d35aaqx5ub95lt.cloudfront.net/images/leagues/a35f1db4398fd29e66f1abc33a0d11a2.svg" @endif />
                                    </div>
                                </div>
                                <div class="divforname">
                                    <span class="spanforname">{{ $learner->user->name }}</span>
                                </div>
                                <span class="spanforxp">{{ $learner->experience_points }}</span>
                            </a>
                        @endforeach


                    </div>
                </div>
            </div>

            <div class="sidebar-buttons bottom-nav">
                <a href="learn.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap">
                        <div class="icon-in-button">
                            <img src="{{ url('duolingo-clone-master/assets/svg/home-in-sidebar.svg') }}"
                                alt="home-icon">
                        </div>

                    </span>
                </a>
                <a href="leaderboard.html" class="button-in-sidebar">
                    <span class="icon-and-text-wrap selected">
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
            {{-- <script type="module" src="{{ url('duolingo-clone-master/js/leaderboard.js') }}"></script> --}}

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


        </div>
</body>

</html>
