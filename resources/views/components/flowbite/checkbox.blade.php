<div class="flex items-center">
    <input
        type="checkbox"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @if($checked) checked @endif
        @if($disabled) disabled @endif
        class="w-4 h-4 bg-gray-100 border-gray-300 rounded-sm focus:ring-2 dark:bg-gray-700 dark:border-gray-600
            {{ $class }}
            @if(!$disabled)
                text-{{ $color }}-600
                focus:ring-{{ $color }}-500
                dark:focus:ring-{{ $color }}-600
            @else
                text-gray-400
                cursor-not-allowed
                opacity-70
            @endif
            dark:ring-offset-gray-800"
    >
    <label for="{{ $id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 @if($disabled) opacity-70 cursor-not-allowed @endif">
        {{ $label }}
    </label>
</div>
