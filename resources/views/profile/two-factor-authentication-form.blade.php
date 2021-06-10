<x-jet-action-section>
    <x-slot name="content">
        <div class="p-3 pt-10 md:p-10 bg-lightbrown flex flex-col mb-12">
            <div class="relative">
                <div class="absolute -top-16 -mt-1 flex justify-between w-full">
                    <h2 class="text-5xl mt-2">2FA</h2>
                    <div class="flex items-center">
                        @if (! $this->enabled)
                            <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                                <div class="flex items-center">
                                    <x-jet-button type="button" wire:loading.attr="disabled">
                                        <div class="bg-hoverbrown rounded-full" style="width: 80px; height: 40px;">
                                            <div class="bg-brown rounded-full h-full" style="width: 40px;"></div>
                                        </div>
                                    </x-jet-button>
                                </div>
                            </x-jet-confirms-password>
                        @else
                            <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                                <div class="flex items-center">
                                    <x-jet-button type="button" wire:loading.attr="disabled">
                                        <div class="bg-hoverbrown rounded-full flex justify-end" style="width: 80px; height: 40px;">
                                            <div class="bg-brown rounded-full h-full" style="width: 40px;"></div>
                                        </div>
                                    </x-jet-button>
                                </div>
                            </x-jet-confirms-password>
                        @endif
                    </div>
                </div>
            </div>
            <div class="@if($this->enabled) grid grid-cols-1 md:grid-cols-2 gap-10 @endif">
                <div class="border-hoverbrown @if($this->enabled) p-3 md:p-20 border-5 md:border-15 @endif" >
                    @if ($this->enabled)
                        @if ($showingQrCode)
                            <style>
                                .qr-code-parent svg {
                                    width: 100%;
                                    height: auto;
                                }
                            </style>
                            <div class="qr-code-parent">
                                {!! $this->user->twoFactorQrCodeSvg() !!}
                            </div>
                        @endif
                    @endif

                        @if ($this->enabled)
                            @if ($showingQrCode)
                                <div>
                                    <p class="mt-10">
                                        Two factor authentication is now enabled. Scan the above QR code using your phone's authenticator application.
                                    </p>
                                </div>
                            @endif
                        @endif

                    <div class="max-w-lg">
                        <h3>
                            @if ($this->enabled)
                                You have enabled two factor authentication.
                            @else
                                You have not enabled two factor authentication.
                            @endif
                        </h3>

                        <p class="mt-4 -mb-3">
                            When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
                        </p>
                    </div>
                </div>
                <div class="border-hoverbrown @if($this->enabled) flex flex-col @if($showingRecoveryCodes) @else justify-end @endif p-3 md:p-20 border-5 md:border-15 @endif">
                    @if($this->enabled)
                        @if ($showingRecoveryCodes)
                            <div>
                                <p>
                                    Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.
                                </p>
                            </div>

                            <div class="mt-16">
                                @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                                    <div>{{ $code }}</div>
                                    @if(!$loop->last)
                                        <hr>
                                    @endif
                                @endforeach
                            </div>

                            <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                                <x-jet-secondary-button class="mt-10">
                                    Regenerate Recovery Codes
                                </x-jet-secondary-button>
                            </x-jet-confirms-password>
                        @else
                            <x-jet-confirms-password wire:then="showRecoveryCodes">
                                <x-jet-secondary-button class="mt-16">
                                    Show Recovery Codes
                                </x-jet-secondary-button>
                            </x-jet-confirms-password>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
</x-jet-action-section>
<style>
    [type="checkbox"]:checked {
        background-color: unset !important;
        color: unset;
    }

    [type="checkbox"]:checked:hover {
        background-color: unset !important;
        color: unset;
    }


    input.apple-switch {
        position: relative;
        -webkit-appearance: none;
        outline: none;
        width: 50px;
        height: 30px;
        background-color: #fff;
        border: 1px solid #D9DADC !important;
        border-radius: 50px;
        box-shadow: inset -20px 0 0 0 #fff;
        cursor: pointer;
    }

    input.apple-switch:after {
        content: "";
        position: absolute;
        top: 1px;
        left: 1px;
        background: transparent;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        box-shadow: 2px 4px 6px rgba(0,0,0,0.2);
    }

    input.apple-switch:checked {
        box-shadow: inset 20px 0 0 0 #4ed164;
        border-color: #4ed164;
    }

    input.apple-switch:checked:after {
        left: 20px;
        box-shadow: -2px 4px 3px rgba(0,0,0,0.05);
    }
</style>
