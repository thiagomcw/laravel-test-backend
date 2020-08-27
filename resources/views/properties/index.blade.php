@extends('_layouts.master')

@section('title', 'Propriedades')

@section('content')

    <div class="w-full sm:w-2/3 rounded overflow-hidden bg-white shadow-md mx-auto">
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
                    <th class="px-4 py-2 bg-gray-200">Nome</th>
                    <th class="px-4 py-2 bg-gray-200">E-mail</th>
                    <th class="px-4 py-2 bg-gray-200 text-center">Plano</th>
                    <th class="px-4 py-2 bg-gray-200 text-center">Opções</th>
                </tr>
                </thead>
                <tbody class="text-sm font-normal text-gray-700">
                {{--                @foreach($users as $user)--}}
                {{--                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">--}}
                {{--                        <td class="px-4 py-4">{{ $user->name }}</td>--}}
                {{--                        <td class="px-4 py-4">{{ $user->email }}</td>--}}
                {{--                        <td class="px-4 py-4 text-center">{{ $user->plan_name }}</td>--}}
                {{--                        <td class="px-4 py-4 text-center">--}}
                {{--                            <edit-link url="{{ route('admin.users.edit', $user->getKey()) }}"></edit-link>--}}
                {{--                            <delete-link url="{{ route('admin.users.destroy', $user->getKey()) }}"--}}
                {{--                                         token="{{ csrf_token() }}"></delete-link>--}}
                {{--                        </td>--}}
                {{--                    </tr>--}}
                {{--                @endforeach--}}
                </tbody>
            </table>

            <div class="mt-6 mb-3">
                {{--                {!! $users->links() !!}--}}
            </div>
        </div>
    </div>

@endsection
