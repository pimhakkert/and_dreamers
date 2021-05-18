<x-jet-form-section submit="updatePassword">
    <x-slot name="form">
        <!-- New Password -->
        <div class="bg-lightbrown flex flex-col relative mb-20" style="height: 422px;">
            <div class="flex flex-col" style="padding: 20% 20% 0 20%">
                <p class="text-5xl absolute" style="top: -18px; left: 30px;">PASSWORD</p>
                <x-jet-label for="password" value="New Password" class="text-2xl"/>
                <x-jet-input id="password" type="password" wire:model.defer="state.password" autocomplete="new-password" placeholder="New password" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown"/>
                <x-jet-input-error for="password"/>

                <!-- Confirm Password -->
                <x-jet-label for="password_confirmation" value="Confirm Password" class="text-2xl"/>
                <x-jet-input id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" placeholder="Confirm password" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown"/>
                <x-jet-input-error for="password_confirmation" />
            </div>

            <x-jet-button class="mt-auto border-brown border-4 pt-5 pb-3 text-2xl">
                SAVE
            </x-jet-button>
        </div>

    </x-slot>

</x-jet-form-section>
