@props([
    'class' => 'mb-3',
    'label' => '',
])

@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp

<div
    class="{{ $class }}"
    x-data="{ uploading: false, progress: 0 }"
    x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false"
    x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    {{-- Label --}}
    @if ($label)
        <label class="form-label" for="input-{{ Str::slug($label) }}">
            {{ Str::title($label) }}
        </label>
    @endif

    {{-- Input file --}}
    <input type="file"
        {{ $attributes->merge([
            'class' => 'form-control' . ($errors->has($model) ? ' is-invalid' : ''),
            'id' => 'input-' . Str::slug($label),
            'name' => $model,
        ]) }}
    />

    {{-- Progress bar --}}
    <div class="mt-2" x-show="uploading">
        <div class="progress" style="height: 6px;">
            <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                x-bind:style="`width: ${progress}%;`"
                x-text="`${progress}%`"
            ></div>
        </div>
    </div>

    {{-- Error message --}}
    @if ($model)
        @error($model)
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
