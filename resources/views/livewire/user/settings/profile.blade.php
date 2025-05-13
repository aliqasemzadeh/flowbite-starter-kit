<div class="p-4 h-auto pt-10">
    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ __('kit.profile') }}</h5>

        <form class="space-y-4 md:space-y-6" wire:submit="updateProfileInformation">

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

                <x-input
                    required
                    type="email"
                    wire:model="email"
                    label="{{ __('kit.email_address') }}"
                    placeholder="{{ __('kit.email') }}"
                />

                <x-button full primary type="submit" label="{{ __('kit.update') }}"/>
        </form>
    </div>
</div>
