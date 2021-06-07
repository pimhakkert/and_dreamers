<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <!-- Name -->
        <div class="bg-white-light" style="max-width:500px; min-width: 400px;">
            <div class="p-3 pb-0 flex flex-col items-center">
                <h1 class="text-3xl lg:text-4xl 2xl:text-6xl -mt-6.5 lg:-mt-7 2xl:-mt-9 text-brown mr-48 2xl:mr-0">ADMIN</h1>
                <div class="w-2/3">
                    <div class="form-group">
                        <!--  -->
                        <x-jet-label for="name" value="NAME"/>
                        <x-jet-input id="name" type="text" wire:model.defer="state.name" autocomplete="name" placeholder="Your name"/>
                        <x-jet-input-error for="name"/>
                    </div>
                    <div class="form-group">
                        <!-- Email -->
                        <x-jet-label for="email" value="EMAIL"/>
                        <x-jet-input id="email" type="email" wire:model.defer="state.email" placeholder="Your email"/>
                        <x-jet-input-error for="email" />
                    </div>
                </div>
            </div>

            <x-jet-action-message on="saved">
                Your changes have been saved!
            </x-jet-action-message>
            <x-jet-button wire:loading.attr="disabled" wire:target="photo" class="mt-6 lg:mt-3 w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md lg:text-lg 2xl:text-2xl text-brown font-semibold hover:text-white-light hover:bg-brown">
                SAVE
            </x-jet-button>
        </div>

    </x-slot>

</x-jet-form-section>
