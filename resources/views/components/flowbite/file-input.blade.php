@props([
    'id' => '',
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'label' => 'Upload file',
    'size' => 'md',
    'disabled' => false,
    'readonly' => false,
    'error' => null,
    'modelName' => null,
    'helperText' => null,
    'class' => '',
    'multiple' => false,
    'accept' => ''
])

@php
    // Generate a unique ID if not provided
    $inputId = $id ?: 'file-input-' . uniqid();

    // Determine error state
    $hasModelError = false;
    $modelErrorMessage = null;

    if ($modelName && isset($errors) && $errors->has($modelName)) {
        $hasModelError = true;
        $modelErrorMessage = $errors->first($modelName);
    }

    $hasError = $error || $hasModelError;
    $errorMessage = $error ?: $modelErrorMessage;

    // Base classes
    $baseClasses = "block w-full text-gray-900 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 border rounded-lg";

    // Size classes
    $sizeClasses = match($size) {
        'sm' => 'text-xs',
        'md' => 'text-sm',
        'lg' => 'text-base',
        default => 'text-sm'
    };

    // State classes
    $stateClasses = $hasError
        ? "border-red-500 focus:ring-red-500 focus:border-red-500 dark:border-red-500 dark:focus:ring-red-500 dark:focus:border-red-500"
        : "border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500";
@endphp

<div class="mb-6">
    @if($label)
        <label for="{{ $inputId }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    @endif

    <div class="relative">
        @if(isset($prefix))
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                {{ $prefix }}
            </div>
        @endif

        <input
            type="file"
            id="{{ $inputId }}"
            name="{{ $name }}"
            @if($multiple) multiple @endif
            @if($accept) accept="{{ $accept }}" @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            {{ $attributes->whereStartsWith('wire:') }}
            class="{{ $baseClasses }} {{ $sizeClasses }} {{ $stateClasses }} {{ isset($prefix) ? 'ps-10' : '' }} {{ isset($suffix) ? 'pe-10' : '' }} {{ $class }}"
        >

        @if(isset($suffix))
            <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                {{ $suffix }}
            </div>
        @endif
    </div>

    @if($hasError)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errorMessage }}</p>
    @elseif($helperText)
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $helperText }}</p>
    @endif
</div>
