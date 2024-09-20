@include('components.header.index')


<div class="bg-white shadow-md rounded-lg overflow-hidden mt-20 ml-6 mr-6">
    <div class="flex flex-row justify-between items-center mt-10">
        <h1 class="text-4xl font-bold p-4">
            Dados Extraídos <i class="fas fa-table ml-2"></i>
        </h1>
        <form action="{{route("search")}}" class="flex items-center  mr-10" method="post">
            @csrf
            @method("POST")
            <input type="text" name="search" class="border border-green-800 rounded p-2 placeholder-green-700"
                placeholder="Filtro dos registros" />
            <button type="submit" class="border border-green-500  text-green-800 rounded p-2 w-16"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <div class="p-4">
        <table class="min-w-full divide-y divide-gray-200 table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-gray-600">NOME</th>
                    <th class="px-4 py-2 text-left text-gray-600">CPF</th>
                    <th class="px-4 py-2 text-left text-gray-600">EMAIL</th>
                    <th class="px-4 py-2 text-left text-gray-600">TELEFONE</th>
                    <th class="px-4 py-2 text-left text-gray-600">NASCIMENTO</th>
                    <th class="px-4 py-2 text-left text-gray-600">GENERO</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($etlregistros as $etlregistross)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $etlregistross->nome }}</td>
                        <td class="px-4 py-2">{{ $etlregistross->cpf }}</td>
                        <td class="px-4 py-2">{{ $etlregistross->email }}</td>
                        <td class="px-4 py-2">{{ $etlregistross->telefone }}</td>
                        <td class="px-4 py-2">{{ date('d/m/Y', strtotime($etlregistross->dt_nascimento)) }}</td>
                        <td class="px-4 py-2">{{ $etlregistross->genero }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex items-center justify-center">
        <div>
            {{ $etlregistros }}
        </div>
    </div>
</div>

@include("components.AlertMessage.index")

@include('components.footer.index')
