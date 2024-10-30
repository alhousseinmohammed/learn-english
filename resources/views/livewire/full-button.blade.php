                            <button class="heartButton" id="heartButton" wire:click="payFill"
                                @if (!$afford) disabled @endif>
                                <span>{{ __('shop.full') }}</span>
                            </button>
