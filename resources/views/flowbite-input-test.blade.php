<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowbite Input Component Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Flowbite Input Component Test</h1>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Basic Input</h2>
            <x-flowbite.input
                label="Username"
                placeholder="Enter your username"
                name="username"
                helperText="Your unique username for the platform"
            />
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Input Sizes</h2>
            <x-flowbite.input
                label="Small Input"
                placeholder="Small input"
                size="sm"
                class="mb-4"
            />
            <x-flowbite.input
                label="Medium Input (Default)"
                placeholder="Medium input"
                size="md"
                class="mb-4"
            />
            <x-flowbite.input
                label="Large Input"
                placeholder="Large input"
                size="lg"
            />
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Input States</h2>
            <x-flowbite.input
                label="Disabled Input"
                placeholder="This input is disabled"
                disabled
                class="mb-4"
            />
            <x-flowbite.input
                label="Readonly Input"
                placeholder="This input is readonly"
                value="Readonly value"
                readonly
                class="mb-4"
            />
            <x-flowbite.input
                label="Input with Error"
                placeholder="Enter value"
                error="This field is required"
            />
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Input with Prefix and Suffix</h2>
            <x-flowbite.input
                label="Price"
                placeholder="0.00"
                type="number"
                class="mb-4"
            >
                <x-slot name="prefix">
                    <span class="text-gray-500 dark:text-gray-400">$</span>
                </x-slot>
            </x-flowbite.input>

            <x-flowbite.input
                label="Email"
                placeholder="your-email"
                type="text"
            >
                <x-slot name="suffix">
                    <span class="text-gray-500 dark:text-gray-400">@example.com</span>
                </x-slot>
            </x-flowbite.input>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Input Types</h2>
            <x-flowbite.input
                label="Text Input"
                placeholder="Enter text"
                type="text"
                class="mb-4"
            />
            <x-flowbite.input
                label="Email Input"
                placeholder="Enter email"
                type="email"
                class="mb-4"
            />
            <x-flowbite.input
                label="Password Input"
                placeholder="Enter password"
                type="password"
                class="mb-4"
            />
            <x-flowbite.input
                label="Number Input"
                placeholder="Enter number"
                type="number"
            />
        </div>
    </div>
</body>
</html>
