@php
    // Set size classes based on position
    $sizeClass = in_array($position ?? 'left', ['left', 'right'])
        ? "w-" . ($size ?? '80')
        : "h-" . ($size ?? '80');

    // Set height/width based on position
    $dimensionClass = in_array($position ?? 'left', ['left', 'right'])
        ? 'h-screen'
        : 'w-screen';
@endphp

<div data-drawer-placement="{{ $position ?? 'left' }}" id="{{ $id ?? 'drawer-example' }}" class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800 {{ $sizeClass }} {{ $dimensionClass }}" tabindex="-1" aria-labelledby="{{ $id ?? 'drawer-example' }}-label">
    <h5 id="{{ $id ?? 'drawer-example' }}-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>{{ $title ?? 'Info' }}</h5>
    @if($showCloseButton ?? true)
    <button type="button" data-drawer-hide="{{ $id ?? 'drawer-example' }}" aria-controls="{{ $id ?? 'drawer-example' }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    @endif

    {{ $slot }}
</div>
