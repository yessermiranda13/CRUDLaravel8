<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
                <a href="articulos/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 m-6  border border-blue-500 hover:border-transparent rounded">CREAR</a>
                            <!--TABLA CON TAILWIND-->
                <div class="my-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Código
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cantidad
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($articulos as $articulo)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $articulo->codigo }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $articulo->descripcion }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $articulo->cantidad }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $articulo->precio }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/articulos/{{ $articulo->id }}/edit" class="text-indigo-600 hover:text-indigo-900 mr-4"> Editar </a>
                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <!--FIN TABLA TAILWIND-->
            </div>
        </div>
    </div>

</x-app-layout>
