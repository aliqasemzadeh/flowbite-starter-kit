<div>
    <div class="flex mb-2 space-x-2 rtl:space-x-reverse">
        @for ($i = 1; $i <= $digits; $i++)
            <div>
                <label for="code-{{ $i }}" class="sr-only">{{ $i }}{{ $i == 1 ? 'st' : ($i == 2 ? 'nd' : ($i == 3 ? 'rd' : 'th')) }} code</label>
                <input
                    type="text"
                    maxlength="1"
                    data-focus-input-init
                    @if ($i > 1) data-focus-input-prev="code-{{ $i - 1 }}" @endif
                    @if ($i < $digits) data-focus-input-next="code-{{ $i + 1 }}" @endif
                    id="code-{{ $i }}"
                    @if ($wireModel)
                        wire:model="{{ $wireModel }}.{{ $i - 1 }}"
                    @endif
                    class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error($wireModel . '.' . ($i - 1)) border-red-500 @enderror"
                    required
                />
            </div>
        @endfor
    </div>

    @if ($error)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $error }}</p>
    @endif

    @if ($helper)
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $helper }}</p>
    @endif
</div>
