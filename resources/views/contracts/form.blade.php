@extends('_layouts.master')

@section('title', 'Adicionar Propriedade')

@section('content')

    <contracts-form old-contractor-type="{{ old('contractor_type') }}" inline-template>
        <div class="w-full sm:w-1/2 rounded overflow-hidden bg-white shadow-md mx-auto">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Adicionar contrato</div>
                <hr>
            </div>

            <div class="px-6 py-4">
                <form action="{{ route('web.contracts.store') }}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label class="default" for="property_id">
                            Propriedade
                        </label>
                        <div class="default-custom-select">
                            <select id="property_id" name="property_id" required>
                                <option></option>
                                @foreach($properties as $property)
                                    <option value="{{ $property->getKey() }}" {{ $property->getKey() == old('property_id') ? 'selected="selected"' : '' }}>
                                        {{ $property->address }}
                                    </option>
                                @endforeach
                            </select>
                            <div><i class="fas fa-angle-down"></i></div>
                        </div>
                        @include('_layouts.form-error', ['field' => 'property_id'])
                    </div>

                    <div class="mb-4">
                        <label class="default" for="contractor_type">
                            Tipo de Contratante
                        </label>
                        <div class="default-custom-select">
                            <select id="contractor_type" name="contractor_type" v-model="contractorType" required>
                                <option></option>
                                @foreach($contractorTypes as $key => $value)
                                    <option value="{{ $key }}">
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            <div><i class="fas fa-angle-down"></i></div>
                        </div>
                        @include('_layouts.form-error', ['field' => 'contractor_type'])
                    </div>

                    <div class="mb-4" v-if="contractorType">
                        <label class="default" for="contractor_document">
                            @{{ documentLabel }}:
                        </label>
                        <input id="contractor_document" name="contractor_document" type="text"
                               value="{{ old('contractor_document') }}" class="default" v-mask="documentMask" required>
                        @include('_layouts.form-error', ['field' => 'contractor_document'])
                    </div>

                    <div class="mb-4">
                        <label class="default" for="contractor_email">
                            E-mail:
                        </label>
                        <input id="contractor_email" name="contractor_email" type="email"
                               value="{{ old('contractor_email') }}" class="default" required>
                        @include('_layouts.form-error', ['field' => 'contractor_email'])
                    </div>

                    <div class="mb-4">
                        <label class="default" for="contractor_name">
                            Nome:
                        </label>
                        <input id="contractor_name" name="contractor_name" type="text"
                               value="{{ old('contractor_name') }}" class="default" required>
                        @include('_layouts.form-error', ['field' => 'contractor_name'])
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
    </contracts-form>

@endsection
