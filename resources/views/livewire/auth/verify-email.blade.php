<div>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {{ __('Verify Email') }}
    </h1>
    <div class="mt-4 space-y-4 md:space-y-6">
        <p class="text-center text-gray-500 dark:text-gray-400">
            {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
        </p>

        <div class="flex flex-col items-center justify-between space-y-3">
            <x-button wire:click="sendVerification" full primary>
                {{ __('Resend verification email') }}
            </x-button>

            <a class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500 cursor-pointer" wire:click="logout">
                {{ __('Log out') }}
            </a>
        </div>
    </div>
</div>
