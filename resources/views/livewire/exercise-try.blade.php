<div>
    <html lang="en">
    @php
        $answerNumber = 0;
    @endphp

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/questionaire.css') }}">
        <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
        <script src="{{ url('duolingo-clone-master/js/questionaire.js') }}"></script>

        <title>Duolingo</title>
        <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">

    </head>

    <body cz-shortcut-listen="true">
        <div class="question-overlay-page">
            <div class="question-page-sections">
                @livewire('header', ['exercise_id' => $exercise->id])
                {{-- <div class="top-row-question-page-sections">
                    <div class="fields-top-row">
                        <a onclick="showAlertPopup()" class="close-button"><img
                                src="{{ url('duolingo-clone-master/assets/svg/close-button.svg') }}" alt="Close"></a>
                        <div class="progress-bar-container">
                            <div class="inner-green-bar">
                                <div class="inner-light-green-bar"></div>
                            </div>
                        </div>
                        <div class="top-row-life">
                            <img class="heart-life" src="{{ url('duolingo-clone-master/assets/svg/heart.svg') }}">
                            <span id="heart-count">997</span>
                            <script>
                                currentHearts();
                            </script>
                        </div>
                    </div>
                </div> --}}
                <div class="mid-row-question-page-sections">
                    <div class="mid-row-sections">
                        <div class="mid-row">
                            @livewire($exercise->type, ['exercise' => $exercise], key($exercise->id))
                        </div>
                    </div>
                </div>
                <div class="bottom-row-question-page-sections" x-data="{ correct: @entangle('correct'), wrong: @entangle('wrong') }">
                    <div class="bottom-row"
                        :style="correct ? 'background-color: #d7ffb8;' : (wrong ? 'background-color: #ffdfe0;' :
                            'background-color: rgb(255, 255, 255;)')">
                        <div class="bottom-buttons">
                            <div class="skip-button">
                                <button x-show="!correct && !wrong" class="button-div skip-button-inner"
                                    id="skip-button" @click="wrong = true" {{-- onclick="skipButton(this.id)" --}}>
                                    <span id="skip-span">SKIP</span>
                                </button>
                            </div>
                            <div class="correct-left" x-show="correct">
                                <div class="correct-content">
                                    <div class="correct-tick">
                                        <img class="green-tick"
                                            src="{{ url('duolingo-clone-master/assets/svg/correct-tick-green.svg') }}">
                                    </div>
                                    <div class="correct-text">
                                        <h2>Good job!</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="correct-left" id="wrong-left" x-show="wrong">
                                <div class="correct-content">
                                    <div class="correct-tick">
                                        <img class="green-tick"
                                            src="{{ url('duolingo-clone-master/assets/svg/wrong-x-red.svg') }}">
                                    </div>
                                    <div class="wrong-text">
                                        <h2>Correct Solution:</h2>
                                        <div class="solution-text">{{ $exercise->answer }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="check-button check-button-outer-active" id="check-button-div"
                                :style="wrong ? 'box-shadow: 0 4px 0#ea2b2b;' : 'box-shadow: 0 4px 0#58a700;'">
                                <button class="button-div check-button-inner-active" id="check-button"
                                    :style="wrong ? 'background-color: #ff4b4b;' : 'background-color: #58cc02;'"
                                    wire:click="check"
                                    @click=" correct || wrong ? (correct = false, wrong=false) : (correct = true, wrong=false) "
                                    {{-- onclick="checkButton(this.id)" --}}>
                                    <span id="continue-button" x-text=" correct || wrong ? 'Continue' : 'CHECK'">CHECK
                                        {{ $exercise->id }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="exit-overlay-outer-div">
            <div class="exit-overlay" style="display: none">
                <div class="exit-box">
                    <div class="exit-box-contents">
                        <div class="exit-image">
                            <img src="{{ url('duolingo-clone-master/assets/svg/exit-image.svg') }}">
                        </div>
                        <span class="exit-text-head">Wait, don’t go!</span>
                        <span class="exit-text-description">You’re right on track! If you quit now, you’ll lose your
                            progress.</span>
                        <div class="keep-learning-button-outer-active" id="check-button-div">
                            <button class="button-div keep-learning-button" id="keep-learning-button"
                                onclick="revertQuestionScreen()">
                                <span id="keep-learning">KEEP LEARNING</span>
                            </button>
                        </div>
                        <button class="end-question-session" onclick="exitToLearn()">
                            <span>END SESSION</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-overlay" style="display: none">
            <div class="exit-box">
                <div class="exit-box-contents">
                    <div class="gem-head-popup">
                        <div class="gem-count-div">
                            <img class="gem-img" src="{{ url('duolingo-clone-master/assets/svg/gems-icon.svg') }}">
                            <span id="gem-count-text"></span>
                        </div>
                    </div>
                    <span class="exit-text-head">You ran out of hearts!!</span>
                    <span class="exit-text-description">Get Super for Unlimited Hearts, or use gems to buy
                        hearts.</span>
                    <div class="keep-learning-button-outer-active" id="check-button-div">
                        <button class="button-div keep-learning-button" id="keep-learning-button" onclick="goToShop()">
                            <span id="keep-learning">GO TO SHOP</span>
                        </button>
                    </div>
                    <button class="end-question-session" onclick="exitToLearn()">
                        <span>END SESSION</span>
                    </button>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/challengeassist.js') }}"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/challengedialogue.js') }}"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/challengetranscription.js') }}"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/lessson-complete.js') }}"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/challengeselect.js') }}"></script>
        <script src="{{ url('duolingo-clone-master/js/questionaire/challengecomprehension.js') }}"></script>

        <script src="{{ url('duolingo-clone-master/js/main.js') }}"></script>
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


    </body>

    </html>

</div>
