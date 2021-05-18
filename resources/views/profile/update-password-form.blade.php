<x-jet-form-section submit="updatePassword">
    <x-slot name="form">
        <div>
            <x-jet-label for="password" value="New Password" />
            <x-jet-input id="password" type="password" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password"/>
        </div>

        <div>
            <x-jet-label for="password_confirmation" value="Confirm Password" />
            <x-jet-input id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
