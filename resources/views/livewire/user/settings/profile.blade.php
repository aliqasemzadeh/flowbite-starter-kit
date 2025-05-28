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


                <x-button primary type="submit" label="{{ __('kit.update') }}"/>
        </form>
    </div>

    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mt-6">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ __('kit.delete_account') }}</h5>
        <x-button label="{{ __('kit.delete') }}" x-on:click="$openModal('deleteAccountDialogMain')" negative />
        <x-modal name="deleteAccountDialogMain" bordered>
            <form wire:submit="deleteUser" class="space-y-6">
                <x-card title="{{ __('kit.delete_account') }}" class="w-full">
                        <x-password
                            required
                            wire:model="password"
                            autocomplete="current-password"
                            label="{{ __('kit.password') }}"
                            placeholder="{{ __('kit.password') }}"
                        />

                        <x-slot name="footer" class="flex justify-end gap-x-4">
                            <x-button flat label="{{ __('kit.cancel') }}" type="submit" />

                            <x-button negative label="{{ __('kit.delete') }}" wire:click="deleteAccount" />
                        </x-slot>
                </x-card>
            </form>
        </x-modal>
    </div>

</div>
