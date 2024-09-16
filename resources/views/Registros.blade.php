<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uplaod Excel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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
                        <a class="nav-link" href="{{ route('upload') }}">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registros') }}">Registros</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="card">
        <h1>Cadastros <i class="fas fa-table"></i><span></span></h1>
            <div class="card-body">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>EMAIL</th>
                        <th>TELEFONE</th>
                        <th>NASCIMENTO</th>
                        <th>GENERO</th>
                        <th>ACÕES</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($etlregistros as $etlregistross)
                    <tr>
                        <td>{{$etlregistross->nome}}</td>
                        <td>{{$etlregistross->cpf}}</td>
                        <td>{{$etlregistross->email}}</td>
                        <td>{{$etlregistross->telefone}}</td>
                        <td>{{date("d/m/Y",strtotime($etlregistross->dt_nascimento))}}</td>
                        <td>{{$etlregistross->genero}}</td>
                        <td>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="card-footer"> {{$etlregistros->links()}}</div>
           
        </div>
    </main>
</body>
</html>

<script>
Alert("Ok","#fff")
function Alert(msg,cor) {
    Toastify({
  text: msg,
    style: {
    background: `{#16423C}`,
  },
  offset: {
    x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
    y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
  },
}).showToast();
}
</script>
