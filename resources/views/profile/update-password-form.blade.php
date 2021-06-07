<x-jet-form-section submit="updatePassword">
    <x-slot name="form">
        <!-- New Password -->
        <div class="bg-white-light" style="max-width: 500px; min-width: 400px;  ">
            <div class="p-3 pb-0 flex flex-col items-center">
                <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-7 2xl:-mt-9 text-brown mr-28 2xl:mr-0">PASSWORD</h1>
                <div class="w-2/3">
                    <div class="form-group">
                        <!-- Password -->
                        <x-jet-label for="password" value="New Password"/>
                        <x-jet-input id="password" type="password" wire:model.defer="state.password" autocomplete="new-password" placeholder="New password"/>
                        <x-jet-input-error for="password"/>
                    </div>
                    <div class="form-group">
                        <!-- Confirm Password -->
                        <x-jet-label for="password_confirmation" value="Confirm Password"/>
                        <x-jet-input id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" placeholder="Confirm password"/>
                        <x-jet-input-error for="password_confirmation"/>
                    </div>
                </div>
            </div>

            <x-jet-action-message on="saved">
                Your changes have been saved!
            </x-jet-action-message>
            <x-jet-button  class="mt-6 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown">
                SAVE
            </x-jet-button>
        </div>

    </x-slot>
</x-jet-form-section>
