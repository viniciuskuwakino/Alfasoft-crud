<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Contatos') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-xl">

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Adicionar contato') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Informe os dados necessários para adicionar um contato.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('contacts.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                    
                            <div>
                                <x-input-label for="contact_name" :value="__('Nome')" />
                                <x-text-input id="contact_name" name="name" type="text" class="mt-1 block w-full" required autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                    
                            <div>
                                <x-input-label for="contact_number" :value="__('Contato')" />
                                <x-text-input id="contact_number" name="contact" type="text" class="mt-1 block w-full" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Adicionar') }}</x-primary-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


