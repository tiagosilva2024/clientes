<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuários') }}
        </h2>
    </x-slot>  
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
            </div>

            <div class="p-6 text-gray-900 overflow-x-auto">

                <div class="p-2 bg-gray-100 rounded-lg mb-4">
                    {{ $users->Links() }}
                </div>

                <table class="table-auto w-full">
                    <thead class="text-left bg-gray-100">
                        <tr>
                            <th class="p-2 text-center">Nível</th>
                            <th class="p-4">Nome</th>
                            <th class="p-4">E-mail</th>
                            <th class="p-4">Data de cadastro</th>

                            @can('level')
                            <th class="text-center">Ações</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-100">
                                <td class="text-center">
                                    @if($user->level == 'admin')
                                        <i class="fas fa-user-tie"></i>
                                    @endif
                                </td>
                                <td class="p-2">{{ $user->name }}</td>
                                <td class="p-2">{{ $user->email }}</td>
                                <td class="p-2 text-sm">{{ $user->created_at }}</td>

                                @can('level')
                                <td class="p-2 text-center">
                                    <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                                </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    
</x-app-layout>
