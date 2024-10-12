<div class="challenge-select">
    <div class="challenge-section">
        <div class="challenge-header">
            <h1><span>{{ $exercise->question }}</span></h1>
        </div>
        <div class="select-challenge-options">
            <div class="select-options">
                @foreach (json_decode($exercise->options) as $option)
                    @php
                        $answerNumber++;
                    @endphp
                    @if ($answerNumber <= 3)
                        <div class="select-outer-option-div" id="select-outer-option-div-1">
                            <label class="select-option-div select-option-inner-div" for="{{ $answerNumber }}">
                                <input type="radio" wire:model="answered" wire:change="updateAnswered"
                                    id="{{ $answerNumber }}" value={{ $option }} class="options"
                                    style="display:none">
                                <span class="select-div-image" style="justify-content: space-evenly;"><img
                                        src="https://d2pur3iezf4d1j.cloudfront.net/images/f3e98ba96032521068082a85c36422e6">
                                </span>
                                <div class="select-div-text"><span class="select-div-option-name"
                                        id="select-div-option-name-1">{{ $option }}</span>
                                    <span class="select-div-option-no" id="option-no-1">{{ $answerNumber }}</span>
                                </div>
                            </label>
                        </div>
                    @endif
                @endforeach
                {{-- <div class="select-outer-option-div" id="select-outer-option-div-1">
                    <div class="select-option-div select-option-inner-div" id="1">
                        <div class="select-div-image" style="justify-content: space-evenly;"><img
                                src="https://d2pur3iezf4d1j.cloudfront.net/images/f3e98ba96032521068082a85c36422e6">
                        </div>
                        <div class="select-div-text"><span class="select-div-option-name"
                                id="select-div-option-name-1">アメリカ</span><span class="select-div-option-no"
                                id="option-no-1">1</span></div>
                    </div>
                </div>
                <div class="select-outer-option-div" id="select-outer-option-div-2">
                    <div class="select-option-div select-option-inner-div" id="2">
                        <div class="select-div-image" style="justify-content: space-evenly;"><img
                                src="https://d2pur3iezf4d1j.cloudfront.net/images/1f95c7801d9e9c814e2977b90ff3c309">
                        </div>
                        <div class="select-div-text"><span class="select-div-option-name"
                                id="select-div-option-name-2">ラーメン</span><span class="select-div-option-no"
                                id="option-no-2">2</span></div>
                    </div>
                </div>
                <div class="select-outer-option-div" id="select-outer-option-div-3">
                    <div class="select-option-div select-option-inner-div" id="3">
                        <div class="select-div-image" style="justify-content: space-evenly;"><img
                                src="https://d2pur3iezf4d1j.cloudfront.net/images/455da6423164770237e66f185dc5767c">
                        </div>
                        <div class="select-div-text"><span class="select-div-option-name"
                                id="select-div-option-name-3">にほん</span><span class="select-div-option-no"
                                id="option-no-3">3</span></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
