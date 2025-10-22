@props([
    'class' => 'mb-3',
    'label' => '',
    'rows' => 3,
])

@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp

<div class="{{ $class }}">
    @if ($label)
        <label class="form-label" for="textarea-{{ Str::slug($label) }}">
            {{ Str::title($label) }}
        </label>
    @endif

    <textarea
        {{ $attributes->merge([
            'class' => 'form-control' . ($errors->has($model) ? ' is-invalid' : ''),
            'id' => 'textarea-' . Str::slug($label),
            'name' => $model,
            'rows' => $rows,
            'placeholder' => 'Input ' . Str::title($label),
        ]) }}
    ></textarea>

    {{-- Error message --}}
    @if ($model)
        @error($model)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
