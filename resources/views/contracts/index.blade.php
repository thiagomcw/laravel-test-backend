@extends('_layouts.master')

@section('title', 'Contratos')

@section('content')
    <contracts-index inline-template>
        <div class="w-full rounded overflow-hidden bg-white shadow-md mx-auto">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    Contratos
                    <a href="{{ route('web.contracts.create') }}"
                       class="bg-blue-500 text-white font-bold py-1 px-2 text-sm rounded float-right hover:bg-blue-700">
                        Adicionar
                    </a>
                </div>
                <hr>
            </div>

            <div class="px-6">
                @include('_layouts.alerts')
            </div>

            <div class="px-6 py-4">
                <table class="table-auto border-collapse w-full">
                    <thead>
                    <tr class="rounded-lg font-medium text-gray-700 text-left">
                        <th class="px-4 py-2 bg-gray-200">Contratante</th>
                        <th class="px-4 py-2 bg-gray-200" width="180">CPF/CNPJ</th>
                        <th class="px-4 py-2 bg-gray-200">E-mail</th>
                        <th class="px-4 py-2 bg-gray-200">Propriedade</th>
                        <th class="px-4 py-2 bg-gray-200"></th>
                    </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                    <tr v-for="contract in contracts" class="hover:bg-gray-100 border-b border-gray-200 py-10">
                        <td class="px-4 py-4">@{{ contract.contractor_name }}</td>
                        <td class="px-4 py-4">@{{ contract.contractor_document }}</td>
                        <td class="px-4 py-4">@{{ contract.contractor_email }}</td>
                        <td class="px-4 py-4">@{{ contract.property.address }}</td>
                        <td class="px-4 py-4 text-center">
                            <delete-link :id="contract.id" @confirmed="deleteContract"></delete-link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </contracts-index>
@endsection
