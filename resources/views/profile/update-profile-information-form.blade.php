<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <!-- Name -->
        <div>
            <x-jet-label for="name" value="Name" />
            <x-jet-input id="name" type="text" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name"/>
        </div>

        <!-- Email -->
        <div >
            <x-jet-label for="email" value="Email" />
            <x-jet-input id="email" type="email" wire:model.defer="state.email" />
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
