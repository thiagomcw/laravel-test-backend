@extends('_layouts.master')

@section('title', 'Adicionar Propriedade')

@section('content')

    <div class="w-full sm:w-1/2 rounded overflow-hidden bg-white shadow-md mx-auto">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Editar Usuário</div>
            <hr>
        </div>

        <div class="px-6 py-4">
            <form action="{{ route('web.properties.store') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label class="default" for="email">
                        E-mail do Proprietário:
                    </label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="default" required>
                </div>

                <div class="mb-4">
                    <label class="default" for="street">
                        Endereço:
                    </label>
                    <input id="street" name="street" type="text" value="{{ old('street') }}" class="default" required>
                </div>

                <div class="mb-4 w-1/3 inline-block">
                    <label class="default" for="number">
                        Número:
                    </label>
                    <input id="number" name="number" type="text" value="{{ old('number') }}" class="default" required>
                </div>

                <div class="mb-4 w-1/3 inline-block float-right">
                    <label class="default" for="complement">
                        Complemento:
                    </label>
                    <input id="complement" name="complement" type="text" value="{{ old('complement') }}"
                           class="default">
                </div>

                <div class="mb-4">
                    <label class="default" for="neighborhood">
                        Bairro:
                    </label>
                    <input id="neighborhood" name="neighborhood" type="text" value="{{ old('neighborhood') }}"
                           class="default" required>
                </div>

                <div class="mb-4">
                    <label class="default" for="city">
                        Cidade:
                    </label>
                    <input id="city" name="city" type="text" value="{{ old('city') }}" class="default" required>
                </div>

                <div class="mb-4 w-1/3">
                    <label class="default" for="plan_id">
                        Estado
                    </label>
                    <div class="default-custom-select">
                        <select id="plan_id" name="plan_id" required>
                            <option></option>
                            @foreach($states as $state)
                                <option value="{{ $state }}">
                                    {{ $state }}
                                </option>
                            @endforeach
                        </select>
                        <div>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <button class="default-submit" type="submit">Salvar</button>
                    <a class="default-back" href="{{ url()->previous() }}">
                        Voltar
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
