<div>
    <div class="mb-4">
        <x-flowbite.pin-code
            :digits="4"
            wireModel="pinCode"
            :error="$error"
            helper="Enter the 4-digit pin code (hint: try 1234)"
        />
    </div>

    @if ($message)
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
            {{ $message }}
        </div>
    @endif

    <button
        wire:click="validatePin"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
    >
        Validate Pin
    </button>
</div>
