<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                    
                    @if(session('msg'))
                    <p class="bg-gray-500 p-2 rounded text-center text-white mb-4">{{ session('msg') }}</p>
                    @endif
                                    
                    <form action="{{ route('cliente.store') }}" method="post">
                        @csrf

                        <fieldset class="border-2 rounded p-6">
                            <legend>Preencha todos os campos</legend>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="bg-gray-50 p-4 rounded overflow-hidden mb-3">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="w-full rounded" required autofocus>
                            </div>

                            <div class="bg-gray-50 p-4 rounded overflow-hidden mb-3">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-50 p-4 rounded overflow-hidden mb-3">
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" id="telefone" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-50 p-4 rounded overflow-hidden mb-3">
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-50 p-4 rounded overflow-hidden mb-3">
                                <label for="tel_comercial">Tel. Comercial</label>
                                <input type="tel" name="tel_comercial" id="tel_comercial" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-50 p-4 rounded overflow-hidden">
                                <input type="submit" value="Cadastrar" class="bg-blue-500 p-2 hover:bg-blue-700 px-2 text-white font-semibold font-roboto transform hover:scale-105 rounded">
                                <input type="reset" value="Limpar" class="bg-red-500 p-2  hover:bg-red-700 px-5 text-white font-semibold transform hover:scale-105 rounded">
                                
                            </div>

                        </fieldset>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
