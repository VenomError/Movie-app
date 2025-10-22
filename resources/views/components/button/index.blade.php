@props(['color' => 'primary', 'loadingText' => 'Loading...'])
<button
    class="btn btn-{{ $color }}"
    {{ $attributes->merge(['type' => 'submit']) }}
    {{ $attributes->wire('target') }}
    wire:loading.attr='disabled'
>
    <span wire:loading.remove {{ $attributes->wire('target') }}>{{ $slot }}</span>
    <span wire:loading {{ $attributes->wire('target') }}>{{ $loadingText }}</span>
</button>
