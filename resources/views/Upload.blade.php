@include("components.header.index")
 <div class="flex flex-col items-center pt-28 bg-green-700 w-full mt-56 mx-auto max-w-lg rounded-lg shadow-lg p-6">
    <div class="flex flex-col items-center mb-4">
        <h1 class="text-xl font-bold text-white">Upload Excel</h1>
        <img src="../public/img/excel.png" class="w-56 h-56 mt-2" />
    </div>
    <div class="w-full">
        <form action="{{ route('uploadfile') }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="upload" class="block text-white mb-2">Upload:</label>
                <input type="file" class="form-control w-full border border-gray-300 rounded-md p-2" id="upload" name="upload" required>
            </div>
            <button type="submit" class="w-full bg-green-800 text-white font-semibold py-2 rounded hover:bg-green-600 transition duration-300" id="btn-carregar">Carregar</button>
        </form>
    </div>
</div>

<div class="fixed bottom-4 right-10 mb-0 animate__animated animate__bounceInUp animate__delay-1s">
    <a href="{{ asset('excel_modelo/Registros.xlsx') }}" download>
        <div class="button-float bg-green-500 rounded-full p-6 shadow-lg hover:bg-green-400 transition duration-300">
            <span class="text-white"><i class="fas fa-download"></i></span>
        </div>
    </a>
    <span class="text-green-950 block text-center mt-2">Modelo</span>
</div>

@include("components.footer.index")