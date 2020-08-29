@extends('_layouts.master')

@section('title', 'Propriedades')

@section('content')
    <properties-index inline-template>
        <div class="w-full lg:w-2/3 rounded overflow-hidden bg-white shadow-md mx-auto">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    Propriedades
                    <a href="{{ route('web.properties.create') }}"
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
                        <th class="px-4 py-2 bg-gray-200 pointer" @click="order('email')">E-mail</th>
                        <th class="px-4 py-2 bg-gray-200">Status</th>
                        <th class="px-4 py-2 bg-gray-200 pointer" @click="order('street')">Endereço</th>
                        <th class="px-4 py-2 bg-gray-200"></th>
                    </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                    <tr v-for="property in properties" class="hover:bg-gray-100 border-b border-gray-200 py-10">
                        <td class="px-4 py-4">@{{ property.email }}</td>
                        <td class="px-4 py-4" width="150">@{{ property.status }}</td>
                        <td class="px-4 py-4">@{{ property.address }}</td>
                        <td class="px-4 py-4 text-center">
                            <delete-link :id="property.id" @confirmed="deleteProperty"></delete-link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </properties-index>
@endsection
