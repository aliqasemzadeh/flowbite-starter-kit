<div class="p-4 h-auto pt-10">
    <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ __('kit.profile') }}</h5>

        <form class="space-y-4 md:space-y-6" wire:submit="updateProfileInformation">

            <x-flowbite.input
                    required
                    wire:model="first_name"
                    label="{{ __('kit.first_name') }}"
                    placeholder="{{ __('kit.first_name') }}"
                />

                <x-flowbite.input
                    required
                    wire:model="last_name"
                    label="{{ __('kit.last_name') }}"
                    placeholder="{{ __('kit.last_name') }}"
                />

                <x-flowbite.input
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
        <x-button label="{{ __('kit.delete') }}"  data-modal-target="deleteAccountDialogMain" data-modal-show="deleteAccountDialogMain" aria-controls="deleteAccountDialogMain" negative />
        <x-flowbite.modal id="deleteAccountDialogMain">
            <x-slot name="header">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ __('kit.delete_account') }}
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteAccountDialogMain">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </x-slot>

            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <x-password
                        required
                        wire:model="password"
                        autocomplete="current-password"
                        label="{{ __('kit.password') }}"
                        placeholder="{{ __('kit.password') }}"
                    />
                </p>
            </div>

            <x-slot name="footer">
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <x-button flat label="{{ __('kit.cancel') }}" type="button" data-modal-hide="deleteAccountDialogMain" />
                    <x-button negative label="{{ __('kit.delete') }}" wire:click="deleteUser" />
                </div>
            </x-slot>
        </x-flowbite.modal>

    </div>

</div>
