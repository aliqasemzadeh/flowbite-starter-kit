@props(['header', 'footer'])

<!-- Main modal -->
<div id="{{ $id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-h-full {{
        match($size) {
            'sm' => 'max-w-sm',
            'md' => 'max-w-md',
            'lg' => 'max-w-lg',
            'xlg' => 'max-w-xl',
            'full' => 'max-w-full',
            default => 'max-w-md'
        }
    }}">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            {{ $header }}
            <!-- Modal body -->
            {{ $slot }}
            <!-- Modal footer -->
            {{ $footer }}
        </div>
    </div>
</div>
