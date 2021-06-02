<button {{ $attributes->merge(['type' => 'button', 'class' => 'w-full border-5 border-brown leading-none p-3 lg:p-4 2xl:p-4 pb-2 lg:pb-2 2xl:pb-3 text-md text-brown font-semibold hover:text-white-light hover:bg-brown']) }}>
    {{ $slot }}
</button>
