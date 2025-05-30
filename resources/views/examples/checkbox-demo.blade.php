<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Checkbox Demo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-8">

                    <div>
                        <h3 class="text-lg font-medium mb-4">Default Checkboxes (Different Colors)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-flowbite.checkbox id="checkbox-blue" label="Blue Checkbox (Default)" color="blue" />
                            <x-flowbite.checkbox id="checkbox-red" label="Red Checkbox" color="red" />
                            <x-flowbite.checkbox id="checkbox-green" label="Green Checkbox" color="green" />
                            <x-flowbite.checkbox id="checkbox-yellow" label="Yellow Checkbox" color="yellow" />
                            <x-flowbite.checkbox id="checkbox-purple" label="Purple Checkbox" color="purple" />
                            <x-flowbite.checkbox id="checkbox-pink" label="Pink Checkbox" color="pink" />
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium mb-4">Checked Checkboxes</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-flowbite.checkbox id="checked-blue" label="Checked Blue" color="blue" checked />
                            <x-flowbite.checkbox id="checked-red" label="Checked Red" color="red" checked />
                            <x-flowbite.checkbox id="checked-green" label="Checked Green" color="green" checked />
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium mb-4">Disabled Checkboxes (Different Colors)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-flowbite.checkbox id="disabled-blue" label="Disabled Blue" color="blue" disabled />
                            <x-flowbite.checkbox id="disabled-red" label="Disabled Red" color="red" disabled />
                            <x-flowbite.checkbox id="disabled-green" label="Disabled Green" color="green" disabled />
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium mb-4">Disabled Checked Checkboxes</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-flowbite.checkbox id="disabled-checked-blue" label="Disabled Checked Blue" color="blue" disabled checked />
                            <x-flowbite.checkbox id="disabled-checked-red" label="Disabled Checked Red" color="red" disabled checked />
                            <x-flowbite.checkbox id="disabled-checked-green" label="Disabled Checked Green" color="green" disabled checked />
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium mb-4">With Custom Classes</h3>
                        <div class="grid grid-cols-1 gap-4">
                            <x-flowbite.checkbox
                                id="custom-class"
                                label="Custom Class Checkbox"
                                color="indigo"
                                class="h-6 w-6"
                                checked
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
