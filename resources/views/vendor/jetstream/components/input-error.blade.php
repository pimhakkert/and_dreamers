@props(['for'])

@error($for)
<div class="fixed top-10 left-10 z-50 flex w-full justify-center inputError">
    <div {{ $attributes->merge(['class' => 'text-xl bg-white rounded-2xl']) }} style="color: red !important; padding: 15px 25px; box-shadow: 0 3px 6px #00000029;">{{ $message }}</div>
</div>
@enderror
