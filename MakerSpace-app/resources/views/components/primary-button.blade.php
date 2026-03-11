<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#93D2ED] border border-transparent rounded-md font-semibold text-xs text-[#121212] uppercase tracking-widest hover:bg-[#7bc4e4] focus:bg-[#7bc4e4] focus:outline-none focus:ring-2 focus:ring-[#93D2ED] focus:ring-offset-2 focus:ring-offset-[#121212] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
