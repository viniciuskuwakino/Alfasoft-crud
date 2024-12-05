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
                                {{ __('Detalhes do contato') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Detalhes do contato especificado.') }}
                            </p>
                        </header>

                        <div class="mt-6 space-y-6 mb-6">
                            <div>
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $contact->name)" readonly />
                            </div>
                    
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $contact->email)" readonly />
                            </div>
                    
                            <div>
                                <x-input-label for="contact" :value="__('Contato')" />
                                <x-text-input id="contact" name="contact" type="text" class="mt-1 block w-full" :value="old('contact', $contact->contact)" readonly />
                            </div>

                            <div>
                                <x-input-label for="created_at" :value="__('Data de criação')" />
                                <x-text-input id="created_at" name="created_at" type="text" class="mt-1 block w-full" :value="old('created_at', $contact->created_at)" readonly />
                            </div>

                            <div>
                                <x-input-label for="updated_at" :value="__('Data da última atualização')" />
                                <x-text-input id="updated_at" name="updated_at" type="text" class="mt-1 block w-full" :value="old('updated_at', $contact->updated_at)" readonly />
                            </div>
                        </div>
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


