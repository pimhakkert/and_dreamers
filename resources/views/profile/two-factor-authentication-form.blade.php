<x-jet-action-section>
    <x-slot name="content">
        <div class="px-10">
            <h2>2FA</h2>
            <input class="apple-switch" type="checkbox">
            <h3>
                @if ($this->enabled)
                    You have enabled two factor authentication.
                @else
                    You have not enabled two factor authentication.
                @endif
            </h3>

            <div>
                <p>
                    When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
                </p>
            </div>

            @if ($this->enabled)
                @if ($showingQrCode)
                    <div>
                        <p>
                            Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application.
                        </p>
                    </div>

                    <div>
                        {!! $this->user->twoFactorQrCodeSvg() !!}
                    </div>
                @endif

                @if ($showingRecoveryCodes)
                    <div>
                        <p>
                            Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.
                        </p>
                    </div>

                    <div>
                        @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                            <div>{{ $code }}</div>
                        @endforeach
                    </div>
                @endif
            @endif

            <div>
                @if (! $this->enabled)
                    <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                        <x-jet-button type="button" wire:loading.attr="disabled">
                            Enable
                        </x-jet-button>
                    </x-jet-confirms-password>
                @else
                    @if ($showingRecoveryCodes)
                        <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                            <x-jet-secondary-button>
                                Regenerate Recovery Codes
                            </x-jet-secondary-button>
                        </x-jet-confirms-password>
                    @else
                        <x-jet-confirms-password wire:then="showRecoveryCodes">
                            <x-jet-secondary-button>
                                Show Recovery Codes
                            </x-jet-secondary-button>
                        </x-jet-confirms-password>
                    @endif

                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-danger-button wire:loading.attr="disabled">
                            Disable
                        </x-jet-danger-button>
                    </x-jet-confirms-password>
                @endif
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
