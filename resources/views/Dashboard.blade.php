@include('components.header.index')

<div class="container mx-auto p-6 mt-20">
    <h1 class="text-6xl font-bold mb-6"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-4 rounded-lg shadow-green-800  shadow-2xl">
            <h2 class="font-semibold text-2xl"> <i class="fas fa-users"></i> Quantidades de Registros</h2>
            <p class="text-2xl">{{$countregisterall}}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-green-800 shadow-2xl">
            <h2 class="font-semibold text-2xl"> <i class="fas fa-hat-cowboy"></i> Homens</h2>
            <p class="text-2xl">{{$countMasculino}}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-green-800  shadow-2xl">
            <h2 class="font-semibold text-2xl"> <i class="fas fa-spa"></i> Mulheres</h2>
            <p class="text-2xl">{{$countFeminino}}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-green-800  shadow-2xl">
            <h2 class="font-semibold text-2xl">Outros</h2>
            <p class="text-2xl">{{$countoutros}}</p>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded-lg shadow-green-800 shadow-2xl">
            <h2 class="font-semibold mb-4">Porcentagem de Sexo Masculino</h2>
            <div class="w-full h-48 flex items-center justify-center">
                <div class="bg-blue-700 w-24 h-24 rounded-full flex items-center justify-center text-white">{{round($porcentomasculino,2)}}%</div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-green-800 shadow-2xl">
            <h2 class="font-semibold mb-4">Porcentagem de Sexo Feminino</h2>
            <div class="w-full h-48 flex items-center justify-center">
                <div class="bg-pink-600 w-24 h-24 rounded-full flex items-center justify-center text-white">{{round($porcentofeminino,2)}}%</div>
            </div>
        </div>
        
    </div>
</div>

@include('components.footer.index')
