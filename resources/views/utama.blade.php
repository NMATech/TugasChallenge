<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: 'Nunito', 'sans-serif';
        }

        @media (min-width: 992px){
            .fixed-bottom-lg {
                position: fixed;
                bottom: 0;
                width: 100%;
            }
        }
    </style>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,400&family=Nunito:wght@200&display=swap" rel="stylesheet">

    {{-- Linked to CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Linked to JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar bg-dark">
        <div class="d-flex flex-row w-100">
            <div class="d-flex container-fluid w-50 justify-content-start align-items-center">
                <a class="navbar-brand text-white ps-5" href="#">Nadindra MA</a>
            </div>
            <ul class="nav d-flex justify-content-center w-50 w-sm-60 gap-4 pe-10">
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Education</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Experiment</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Hobbies</a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Navbar End --}}

    @yield('content')

    <!-- Footer -->
    <footer class="fixed-bottom-lg bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#">Nadindra Maulana Aziz</a>
        </div>
        <!-- Copyright -->
    </footer>
    {{-- Footer End --}}
</body>
</html>