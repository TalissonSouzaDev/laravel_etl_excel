<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uplaod Excel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-file-excel"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('upload')}}">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("registros")}}">Registros</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
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
            <a href="{{ asset('img/excel.png') }}" download>
                <div class="button-float">
                    <span><i class="fas fa-download"></i></span>
                </div>
            </a>
            <span>Modelo</span>
        </div>

    </main>
</body>

</html>
