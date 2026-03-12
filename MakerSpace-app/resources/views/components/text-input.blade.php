@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-600 bg-[#1A1A1A] text-white focus:border-[#93D2ED] focus:ring-[#93D2ED] rounded-md shadow-sm']) }}>
