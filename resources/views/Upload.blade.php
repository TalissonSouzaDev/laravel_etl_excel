@include("components.header.index")
        <div class="card">
            <div class="card-header">
                <h1>Upload Excel</h1>
                <img src="{{ asset('img/excel.png') }}" />
            </div>
            <div class="card-body">
                <form action="{{route("uploadfile")}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method("POST")
                    <div class="mb-3 mt-3">
                        <label for="uname" class="form-label">Upload:</label>
                        <input type="file" class="form-control" id="upload" name="upload" required>
                    </div>
                    <button type="submit" class="btn btn-success" id="btn-carregar">Carregar</button>
                </form>
            </div>
        </div>

        <div class="button-bottom animate__animated animate__bounceInUp animate__delay-1s">
            <a href="{{ asset('excel_modelo/Registros.xlsx') }}" download>
                <div class="button-float">
                    <span><i class="fas fa-download"></i></span>
                </div>
            </a>
            <span>Modelo</span>
        </div>
@include("components.footer.index")