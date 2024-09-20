<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uplaod Excel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header>
        <nav class="bg-green-700 w-full h-14 shadow-green-800 shadow-xl">
            <div>
                <ul class="list-none flex flex-row items-center justify-start text-white space-x-6 pl-6 pt-2">
                    <li>
                        <a class="text-4xl" href="#"><i class="fas fa-file-excel"></i></a>
                    </li>
                    <li>
                        <a class="hover:text-green-100 transition delay-75" href="{{ route('upload') }}"> <i class="fas fa-upload"></i> Upload</a>
                    </li>
                    <li>
                        <a class="hover:text-green-100 transition delay-75" href="{{ route('registros') }}"><i class="fas fa-user"></i> Registros</a>
                    </li>
                    <li>
                        <a class="hover:text-green-100 transition delay-75" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
