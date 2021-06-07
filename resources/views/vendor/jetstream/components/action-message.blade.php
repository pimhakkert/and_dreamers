@props(['on'])

<div x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown"
    style="display: none;"
    {{ $attributes->merge(['class' => 'fixed top-10 z-50 flex w-full justify-center']) }}>
    <div class="text-xl bg-white rounded-2xl" style="padding: 15px 25px; box-shadow: 0 3px 6px #00000029;">
        {{ $slot->isEmpty() ? 'Saved.' : $slot }}
    </div>
</div>
