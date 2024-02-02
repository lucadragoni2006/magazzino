<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        table {
            border-collapse: separate;
            border-spacing: 0 2px;
        }
        svg:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-center" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                Magazzino
                <i class="bi bi-house-fill align-text-bottom"></i>
            </a>
            <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-1 mx-auto">
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" href="/articoli">Articoli</a>
                    </li>
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" href="/movimenti">Movimenti</a>
                    </li>
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" href="/logout">
                            Logout
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-box-arrow-right mt-0" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <form action="" class="d-flex" data-bs-theme="light" role="search">
                    <input class="form-control me-2" type="search" placeholder="Ricerca" aria-label="Search" name="search">
                    <button class="btn btn-primary text-light" type="submit">Ricerca</button>
                </form>
            </div>
        </div>
    </nav>
    
    {{$slot}}
        
    <footer class="bg-dark text-center p-4" style="font-size: 1.25rem;">
        <span class="text-white">Tutti i diritti sono riservati. Copyright &copy</span>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>