@props([
    'class' => 'mb-3',
    'label' => '',
    'options' => [], // ['key' => 'Label']
])

@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp

<div class="{{ $class }}">
    @if ($label)
        <label class="form-label" for="select-{{ Str::slug($label) }}">
            {{ Str::title($label) }}
        </label>
    @endif

    <select
        {{ $attributes->merge([
            'class' => 'form-select' . ($errors->has($model) ? ' is-invalid' : ''),
            'id' => 'select-' . Str::slug($label),
            'name' => $model,
        ]) }}
    >
        <option value="">-- Pilih {{ Str::title($label) }} --</option>
        {{ $slot }}
    </select>

    {{-- Error message --}}
    @if ($model)
        @error($model)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
