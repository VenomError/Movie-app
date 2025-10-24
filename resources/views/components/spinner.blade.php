@props(['size' => 'sm', 'color' => 'primary', 'class' => ''])
<div
    class="spinner-border spinner-border-{{ $size }} {{ $class }} text-{{ $color }}"
    role="status"
    {{ $attributes->merge() }}
    wire:loading
>
    <span class="visually-hidden"></span>
</div>
