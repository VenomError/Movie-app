    @props(['modal' => 'modalID', 'color' => 'primary'])
    <button
        {{ $attributes->merge([
            'data-bs-toggle' => 'modal',
            'data-bs-target' => "#{$modal}",
            'type' => 'button',
            'class' => "btn btn-{$color}",
        ]) }}
    >{{ $slot }}</button>
