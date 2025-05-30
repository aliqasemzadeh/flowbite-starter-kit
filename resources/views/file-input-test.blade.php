<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('File Input Test') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Basic File Input</h3>
                    <x-flowbite.file-input
                        name="basic_file"
                        label="Basic File Upload"
                        helperText="SVG, PNG, JPG or GIF (MAX. 800x400px)."
                    />

                    <h3 class="text-lg font-medium mb-4 mt-8">File Input with Size Options</h3>
                    <div class="space-y-4">
                        <x-flowbite.file-input
                            name="small_file"
                            label="Small File Input"
                            size="sm"
                            helperText="Small size variant"
                        />

                        <x-flowbite.file-input
                            name="medium_file"
                            label="Medium File Input"
                            size="md"
                            helperText="Medium size variant (default)"
                        />

                        <x-flowbite.file-input
                            name="large_file"
                            label="Large File Input"
                            size="lg"
                            helperText="Large size variant"
                        />
                    </div>

                    <h3 class="text-lg font-medium mb-4 mt-8">File Input with Error</h3>
                    <x-flowbite.file-input
                        name="error_file"
                        label="File with Error"
                        error="This field is required."
                    />

                    <h3 class="text-lg font-medium mb-4 mt-8">File Input with Prefix and Suffix</h3>
                    <x-flowbite.file-input
                        name="prefix_suffix_file"
                        label="File with Prefix and Suffix"
                    >
                        <x-slot:prefix>
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                        </x-slot:prefix>
                        <x-slot:suffix>
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                        </x-slot:suffix>
                    </x-flowbite.file-input>

                    <h3 class="text-lg font-medium mb-4 mt-8">Multiple File Input with Accept Attribute</h3>
                    <x-flowbite.file-input
                        name="multiple_file"
                        label="Multiple Image Files"
                        multiple="true"
                        accept="image/*"
                        helperText="You can select multiple image files."
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
