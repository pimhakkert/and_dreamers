@props(['submit'])

<form wire:submit.prevent="{{ $submit }}">
    <div>
            {{ $form }}
    </div>
</form>
