<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Contatos') }}
            </h2>

            <a href="{{ route('contacts.create') }}">
                <x-secondary-button>{{ __('Adicionar contato') }}</x-secondary-button>
            </a>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                                <tr>
                                    <th scope="col" class="px-6 py-4">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Contato
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $contact->name }}
                                    </th>
                                    <th class="px-6 py-4">
                                        {{ $contact->email }}
                                    </th>
                                    <th class="px-6 py-4">
                                        {{ $contact->contact }}
                                    </th>
                                    <th class="px-6 py-4">
                                        <a href="{{ route('contacts.show', $contact->id) }}">
                                            <x-secondary-button>{{ __('Details') }}</x-secondary-button>
                                        </a>
                                        <a href="{{ route('contacts.edit', $contact->id) }}">
                                            <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                        </a>

                                        <a href="#" 
                                        x-data="{ 
                                                open: false,
                                                confirmDelete() {
                                                    this.$refs.deleteForm.submit()
                                                }
                                            }"
                                        @click.prevent="confirmDelete"
                                        >
                                            <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                            
                                            <form x-ref="deleteForm" action="{{ route('contacts.delete', $contact->id) }}" method="POST" class="hidden">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </a>

                                    </th>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>