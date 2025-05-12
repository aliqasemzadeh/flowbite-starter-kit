<div>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {{ __('kit.confirm_password') }}
    </h1>
    <p class="text-sm font-light text-gray-500 dark:text-gray-400 mb-4">
        {{ __('kit.confirm_password_message') }}
    </p>
    <form class="space-y-4 md:space-y-6" wire:submit="confirmPassword">
        <x-password
            required
            wire:model="password"
            autocomplete="current-password"
            label="{{ __('kit.password') }}"
            placeholder="{{ __('kit.password') }}"
        />

        <x-button full primary type="submit" label="{{ __('kit.confirm_password') }}" />
    </form>
</div>
