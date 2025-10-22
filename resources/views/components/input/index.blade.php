@props([
    'class' => 'mb-3',
    'label' => '',
])

@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp

<div class="{{ $class }}">
    @if ($label)
        <label class="form-label" for="input-{{ Str::slug($label) }}">
            {{ Str::title($label) }}
        </label>
    @endif

    <input
        {{ $attributes->merge([
            'class' => 'form-control' . ($errors->has($model) ? ' is-invalid' : ''),
            'type' => 'text',
            'id' => 'input-' . Str::slug($label),
            'name' => $model,
            'placeholder' => 'Input ' . Str::title($label),
        ]) }}
    />

    {{-- Error message --}}
    @if ($model)
        @error($model)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
