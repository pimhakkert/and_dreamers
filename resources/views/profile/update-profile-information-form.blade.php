<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <!-- Name -->
        <div class="bg-lightbrown flex flex-col relative mb-20" style="padding: 20% 20%; height: 422px;">
            <p class="text-5xl absolute" style="top: -18px; left: 30px;">ADMIN</p>
            <x-jet-label for="name" value="NAME" class="text-2xl"/>
            <x-jet-input id="name" type="text" wire:model.defer="state.name" autocomplete="name" placeholder="Your name" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown"/>
            <x-jet-input-error for="name"/>
            <!-- Email -->
            <x-jet-label for="email" value="EMAIL" class="text-2xl"/>
            <x-jet-input id="email" type="email" wire:model.defer="state.email" placeholder="Your email" class="mb-6 bg-lightbrown border-0 focus:ring-0 placeholder-brown-light border-b-2 border-brown focus:border-brown"/>
            <x-jet-input-error for="email" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
