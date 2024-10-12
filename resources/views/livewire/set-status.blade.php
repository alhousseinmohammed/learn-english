                <div class="try-super-box">
                    <div class="divprofileheader">
                        <h2 class="headprofile">Set your status</h2>
                        <span class="clearspan" wire:clicK="clear">
                            <a style="cursor: pointer" class="spaninspan">clear</a>
                        </span>
                    </div>
                    <div class="divprofile">
                        <div class="divforpic">
                            <img class="picture" id="profilePicture"
                                src="{{ url('duolingo-clone-master/assets/svg/profile-image-temp.svg') }}"
                                alt="">
                            <div class="statuscontainer">
                                <img class="profilestatus" id="addImage"
                                    src={{ $current_status ? $current_status['image'] : 'https://d35aaqx5ub95lt.cloudfront.net/images/leagues/a35f1db4398fd29e66f1abc33a0d11a2.svg' }}>
                            </div>
                        </div>
                        <div class="classcontainstatus" style="grid-template-columns: repeat(6, 1fr);">
                            {{-- <button onclick="changeImage()">
                                <img class="statusimage "
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/2439bac00452e99ba7bf6a7ed0b04196.svg">
                            </button>
                            <button>
                                <img class="statusimage "
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/2ceb401cae52712705b66a77df83ce40.svg">
                            </button>
                            <button>
                                <img class="statusimage "
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/6b8a8db5ac7f847e7e87efe97c8b451a.svg">
                            </button>
                            <button>
                                <img class="statusimage "
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/a8e5c18e80054228b2c61168846ff643.svg">
                            </button>
                            <button>
                                <img class="statusimage "
                                    src="https://d35aaqx5ub95lt.cloudfront.net/images/leagues/573de2bc90b2499eeb2b3738cff90133.svg">
                            </button>
                            <button>
                                <svg viewBox="0 264 82 66" data-test="flag-ja" class=""
                                    style="height: 30.5854px; width: 38px;">
                                    <image height="3168"
                                        href="https://d35aaqx5ub95lt.cloudfront.net/vendor/87938207afff1598611ba626a8c4827c.svg"
                                        width="82"
                                        xlink:href="https://d35aaqx5ub95lt.cloudfront.net/vendor/87938207afff1598611ba626a8c4827c.svg">

                                    </image>
                                </svg></button> --}}
                            @foreach ($statuses as $status)
                                <button wire:click="updateStatus({{ $status }})">
                                    <img class="statusimage " src={{ $status->image }}>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
