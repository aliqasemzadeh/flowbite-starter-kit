<div>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {{ __('kit.register_create_account') }}
    </h1>
    <form class="space-y-4 md:space-y-6" wire:submit="register">
        <x-input
            required
            type="email"
            wire:model="email"
            label="{{ __('kit.email') }}"
            placeholder="{{ __('kit.email') }}"
        />

        <div class="flex flex-row space-x-2">
            <x-input
                required
                wire:model="first_name"
                label="{{ __('kit.first_name') }}"
                placeholder="{{ __('kit.first_name') }}"
            />
            <x-input
                required
                wire:model="last_name"
                label="{{ __('kit.last_name') }}"
                placeholder="{{ __('kit.last_name') }}"
            />
        </div>
        <div class="flex flex-row space-x-2">
            <x-password
                required
                wire:model="password"
                label="{{ __('kit.password') }}"
                placeholder="{{ __('kit.password') }}"
            />

            <x-password
                required
                wire:model="password_confirmation"
                label="{{ __('kit.password_confirmation') }}"
                placeholder="{{ __('kit.password_confirmation') }}"
            />
        </div>

        <x-button full primary type="submit" label="{{ __('kit.register') }}"/>
        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            {{ __('kit.register_already_registered') }} <a href="{{ route('guest.auth.login') }}"
                                                           class="font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('kit.login') }}</a>
        </p>
    </form>
</div>
