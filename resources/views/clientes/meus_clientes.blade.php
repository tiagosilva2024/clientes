<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá, <strong>{{ Auth::user()->name }}!</strong></p>
                </div>

                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="table-auto min-w-full">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="p-2 px-4">Nome</th>
                                    <th class="p-2">Telefone</th>
                                    <th class="p-2">Email</th>                                    
                                    <th class="text-center">Mais Detalhes</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr class="hover:bg-gray-100">
                                        <td class="p-2 px-4">{{ $cliente->nome }}</td>
                                        <td class="p-2">{{ $cliente->telefone }}</td>
                                        <td class="p-2">{{ $cliente->email }}</td>                                        
                                        <td class="text-center p-4"><a href="{{ route('cliente.show', $cliente->id) }}"><i class="fas fa-eye"></i></a></td>
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