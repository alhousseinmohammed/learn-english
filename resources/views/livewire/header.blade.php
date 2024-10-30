<div class="top-row-question-page-sections">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/questionaire.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />


    <div class="fields-top-row">
        <a onclick="showAlertPopup()" class="close-button"><img
                src="{{ url('duolingo-clone-master/assets/svg/close-button.svg') }}" alt="Close"></a>
        <div class="progress-bar-container">
            <div class="inner-green-bar" style="width:{{ $progress * 100 }}%;">
                <div class="inner-light-green-bar" style="width: 75%;"></div>
            </div>
        </div>
        @if ($super)
            <div class="top-row-life">
                <img class="heart-life"
                    src="https://d35aaqx5ub95lt.cloudfront.net/images/hearts/4f3842c690acf9bf0d4b06e6ab2fffcf.svg">
                <span id="heart-count"> </span>
                <script>
                    currentHearts();
                </script>
            </div>
        @else
            <div class="top-row-life">
                <img class="heart-life" src="{{ url('duolingo-clone-master/assets/svg/heart.svg') }}">
                <span id="heart-count">{{ $hearts }}</span>
                <script>
                    currentHearts();
                </script>
            </div>
        @endif
    </div>
</div>
