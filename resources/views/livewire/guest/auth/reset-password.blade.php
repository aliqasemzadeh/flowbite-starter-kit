<div>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {{ __('kit.reset_password') }}
    </h1>
    <form class="space-y-4 md:space-y-6" wire:submit="resetPassword">
        <x-input
            required
            type="email"
            wire:model="email"
            label="{{ __('kit.email_address') }}"
            placeholder="{{ __('kit.email') }}"
        />
        <x-password
            required
            wire:model="password"
            autocomplete="new-password"
            label="{{ __('kit.password') }}"
            placeholder="{{ __('kit.password') }}"
        />
        <x-password
            required
            autocomplete="new-password"
            wire:model="password_confirmation"
            label="{{ __('kit.confirm_password') }}"
            placeholder="{{ __('kit.confirm_password') }}"
        />

        <x-button full primary type="submit" label="{{ __('kit.reset_password') }}" />
    </form>
</div>
