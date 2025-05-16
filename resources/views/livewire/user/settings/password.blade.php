<div class="p-4 h-auto pt-10">
    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ __('kit.update_password') }}</h5>

        <form class="space-y-4 md:space-y-6" wire:submit="updatePassword">

            <x-password
                required
                wire:model="password"
                autocomplete="current-password"
                label="{{ __('kit.password') }}"
                placeholder="{{ __('kit.password') }}"
            />

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

            <x-button primary type="submit" label="{{ __('kit.update') }}"/>
        </form>
    </div>
</div>
