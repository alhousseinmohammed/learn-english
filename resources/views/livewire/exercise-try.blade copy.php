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
                            <div class="challenge-dialogue">
                                <div class="challenge-section">
                                    <div class="challenge-header">
                                        <h1><span>Complete the chat</span></h1>
                                        <div class="dialogue-content">
                                            <div class="dialogue-content-question">
                                                <div class="dialogue-question-row">
                                                    <div class="first-dialogue-row">
                                                        <div class="dialogue-row-content first-dialogue-row-content">
                                                            <img id="dialogue-character-one"
                                                                src="https://d2pur3iezf4d1j.cloudfront.net/images/85c5ecb885f7073a3aebeb775946e329">
                                                            <div class="projection-dialogue"></div>
                                                            <div class="dialogue-container first-dialogue-container">
                                                                <span class="dialogue-speaker"><button
                                                                        class="speaker-button"><span
                                                                            class="speaker-animation"
                                                                            id="speaker-animation"><svg
                                                                                wire:click="pronounce"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 94 73" width="94"
                                                                                height="73"
                                                                                preserveAspectRatio="xMidYMid meet"
                                                                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                                                                                <defs>
                                                                                    <clipPath id="__lottie_element_2">
                                                                                        <rect width="94"
                                                                                            height="73" x="0" y="0">
                                                                                        </rect>
                                                                                    </clipPath>
                                                                                    <clipPath id="__lottie_element_4">
                                                                                        <path
                                                                                            d="M0,0 L1000,0 L1000,1038 L0,1038z">
                                                                                        </path>
                                                                                    </clipPath>
                                                                                    <clipPath id="__lottie_element_9">
                                                                                        <path
                                                                                            d="M0,0 L1338,0 L1338,738 L0,738z">
                                                                                        </path>
                                                                                    </clipPath>
                                                                                </defs>
                                                                                <g clip-path="url(#__lottie_element_2)">
                                                                                    <g clip-path="url(#__lottie_element_4)"
                                                                                        transform="matrix(0.26499998569488525,0,0,0.26499998569488525,-84.5,-101.53498840332031)"
                                                                                        opacity="1"
                                                                                        style="display: block;">
                                                                                        <g transform="matrix(1.3600000143051147,0,0,1.3600000143051147,515.3087768554688,521.8152465820312)"
                                                                                            opacity="1"
                                                                                            style="display: block;">
                                                                                            <path stroke-linecap="round"
                                                                                                stroke-linejoin="miter"
                                                                                                fill-opacity="0"
                                                                                                stroke-miterlimit="4"
                                                                                                class="animated-speaker-icon-lottie"
                                                                                                stroke="rgb(28,175,246)"
                                                                                                stroke-opacity="1"
                                                                                                stroke-width="22.420910384669074"
                                                                                                d=" M48.10900115966797,-85.7239990234375 C78.0530014038086,-68.86900329589844 98.2979965209961,-36.77899932861328 98.2979965209961,0 C98.2979965209961,36.82400131225586 78.00499725341797,68.94599914550781 48.000999450683594,85.78399658203125">
                                                                                            </path>
                                                                                        </g>
                                                                                        <g transform="matrix(1.3600000143051147,0,0,1.3600000143051147,515.3087768554688,521.8152465820312)"
                                                                                            opacity="1"
                                                                                            style="display: block;">
                                                                                            <path stroke-linecap="round"
                                                                                                stroke-linejoin="miter"
                                                                                                fill-opacity="0"
                                                                                                stroke-miterlimit="4"
                                                                                                class="animated-speaker-icon-lottie"
                                                                                                stroke="rgb(28,175,246)"
                                                                                                stroke-opacity="1"
                                                                                                stroke-width="20.357856114537853"
                                                                                                d=" M23.413000106811523,-40.57500076293945 C37.41600036621094,-32.47200012207031 46.845001220703125,-17.327999114990234 46.845001220703125,0 C46.845001220703125,17.381000518798828 37.358001708984375,32.56399917602539 23.28499984741211,40.64899826049805">
                                                                                            </path>
                                                                                        </g>
                                                                                        <g clip-path="url(#__lottie_element_9)"
                                                                                            transform="matrix(1.0370399951934814,0,0,0.9629600048065186,136.53640747070312,163.66775512695312)"
                                                                                            opacity="1"
                                                                                            style="display: block;">
                                                                                            <g transform="matrix(1,0,0,1,260.93701171875,373.6780090332031)"
                                                                                                opacity="1"
                                                                                                style="display: block;">
                                                                                                <g opacity="1"
                                                                                                    transform="matrix(6,0,0,6,0,0)">
                                                                                                    <path
                                                                                                        class="animated-speaker-icon-lottie"
                                                                                                        fill="rgb(27,166,233)"
                                                                                                        fill-opacity="1"
                                                                                                        d=" M-8.293000221252441,-11.675000190734863 C-8.293000221252441,-11.675000190734863 -0.12300000339746475,-11.675000190734863 -0.12300000339746475,-11.675000190734863 C2.9070000648498535,-11.675000190734863 5.367000102996826,-9.21500015258789 5.367000102996826,-6.184999942779541 C5.367000102996826,-6.184999942779541 5.367000102996826,6.425000190734863 5.367000102996826,6.425000190734863 C5.367000102996826,9.454999923706055 2.9070000648498535,11.914999961853027 -0.12300000339746475,11.914999961853027 C-0.12300000339746475,11.914999961853027 -8.293000221252441,11.914999961853027 -8.293000221252441,11.914999961853027 C-11.322999954223633,11.914999961853027 -13.782999992370605,9.454999923706055 -13.782999992370605,6.425000190734863 C-13.782999992370605,6.425000190734863 -13.782999992370605,-6.184999942779541 -13.782999992370605,-6.184999942779541 C-13.782999992370605,-9.21500015258789 -11.322999954223633,-11.675000190734863 -8.293000221252441,-11.675000190734863z M-4.980999946594238,-11.656999588012695 C-4.980999946594238,-11.656999588012695 10.218999862670898,-22.32699966430664 10.218999862670898,-22.32699966430664 C11.24899959564209,-23.047000885009766 12.659000396728516,-22.797000885009766 13.369000434875488,-21.777000427246094 C13.638999938964844,-21.39699935913086 13.779000282287598,-20.937000274658203 13.779000282287598,-20.476999282836914 C13.779000282287598,-20.476999282836914 13.779000282287598,20.472999572753906 13.779000282287598,20.472999572753906 C13.779000282287598,21.722999572753906 12.769000053405762,22.732999801635742 11.519000053405762,22.732999801635742 C11.059000015258789,22.732999801635742 10.609000205993652,22.593000411987305 10.218999862670898,22.322999954223633 C10.218999862670898,22.322999954223633 -4.980999946594238,11.652999877929688 -4.980999946594238,11.652999877929688 C-5.580999851226807,11.232999801635742 -5.940999984741211,10.543000221252441 -5.940999984741211,9.803000450134277 C-5.940999984741211,9.803000450134277 -5.940999984741211,-9.807000160217285 -5.940999984741211,-9.807000160217285 C-5.940999984741211,-10.536999702453613 -5.580999851226807,-11.22700023651123 -4.980999946594238,-11.656999588012695z">
                                                                                                    </path>
                                                                                                    <g opacity="1"
                                                                                                        transform="matrix(1,0,0,1,0,0)">
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></span></button></span>
                                                                <div id="dialogue-text">{{ $exercise->question }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="second-dialogue-row">
                                                        <div class="dialogue-row-content second-dialogue-row-content">
                                                            <div class="dialogue-container second-dialogue-container">
                                                                <span class="empty-dialogue">{{ $answered }}<span
                                                                        class="inner-empty-span"></span></span>
                                                            </div>
                                                            <div
                                                                class="projection-dialogue right-angle-projectile-dialogue">
                                                            </div><img id="dialogue-character-two"
                                                                src="https://d2pur3iezf4d1j.cloudfront.net/images/3749d548da7d349c89c158483beaff29">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="assist-content-options">
                                                {{-- <div class="outer-options-div" id="outer-options-div-1">
                                                    <div class="option-div"><span class="option-no"
                                                            id="option-no-1">1</span><span class="option-name"
                                                            id="option-name-1">Oui, ils sont grands !</span></div>
                                                </div>
                                                <div class="outer-options-div-selected" id="outer-options-div-2">
                                                    <div class="option-div-selected"><span class="option-no-selected"
                                                            id="option-no-2">2</span><span
                                                            class="option-name-selected" id="option-name-2">Oui, je
                                                            prends
                                                            un dessert.</span></div>
                                                </div> --}}
                                                @foreach (json_decode($exercise->options) as $option)
                                                    @php
                                                        $answerNumber++;
                                                    @endphp
                                                    @if ($answerNumber < 3)
                                                        <div class="outer-options-div" id="outer-options-div-2">
                                                            <label class="option-div" for="{{ $answerNumber }}">
                                                                <input type="radio" wire:model="answered"
                                                                    wire:change="updateAnswered"
                                                                    id="{{ $answerNumber }}" value={{ $option }}
                                                                    class="options" style="display:none">
                                                                <span class="option-no"
                                                                    id="option-no-2">{{ $answerNumber }}
                                                                </span>
                                                                <span class="option-name"
                                                                    id="option-name-2">{{ $option }}
                                                                </span>

                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-row-question-page-sections">
                    <div class="bottom-row" style="background-color: rgb(255, 255, 255);">
                        <div class="bottom-buttons">
                            <div class="skip-button" style="display: block">
                                <button class="button-div skip-button-inner" id="skip-button"
                                    onclick="skipButton(this.id)">
                                    <span id="skip-span">SKIP</span>
                                </button>
                            </div>
                            <div class="correct-left" id="correct-left" style="display: none">
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
                            <div class="correct-left" id="wrong-left" style="display: none">
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
                            <div class="check-button check-button-outer-active" id="check-button-div">
                                <button class="button-div check-button-inner-active" id="check-button"
                                    onclick="checkButton(this.id)" wire:click="check">
                                    <span id="continue-button">CHECK</span>
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
                        <button class="button-div keep-learning-button" id="keep-learning-button"
                            onclick="goToShop()">
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
