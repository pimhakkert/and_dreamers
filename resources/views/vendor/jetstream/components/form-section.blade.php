@props(['submit'])

<form wire:submit.prevent="{{ $submit }}">
    <div>
            {{ $form }}
    </div>

    @if (isset($actions))
        <div>
            {{ $actions }}
        </div>
    @endif
</form>
