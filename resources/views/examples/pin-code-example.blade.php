<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pin Code Example') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Basic Pin Code (6 digits)</h3>
                    <x-flowbite.pin-code />

                    <h3 class="text-lg font-medium mt-8 mb-4">Custom Pin Code (4 digits with helper text)</h3>
                    <x-flowbite.pin-code :digits="4" helper="Enter the 4-digit code sent to your phone" />

                    <h3 class="text-lg font-medium mt-8 mb-4">Pin Code with Error Message</h3>
                    <x-flowbite.pin-code error="Invalid pin code. Please try again." />

                    <h3 class="text-lg font-medium mt-8 mb-4">Livewire Pin Code Example</h3>
                    <livewire:examples.pin-code-demo />
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
