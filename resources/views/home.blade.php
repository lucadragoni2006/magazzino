<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-center" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                Magazzino
                <i class="bi bi-house-fill align-text-bottom"></i>
            </a>
            <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-1 mx-auto">
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" href="#">Articoli</a>
                    </li>
                    <li class="nav-item mx-3" style="font-size: 1.25rem">
                        <a class="nav-link active" href="#">Movimenti</a>
                    </li>
                </ul>
                <form class="d-flex" data-bs-theme="light" role="search">
                    <input class="form-control me-2" type="search" placeholder="Ricerca" aria-label="Search">
                    <button class="btn btn-primary text-light" type="submit">Ricerca</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="images/magazzino.jpg" alt="immagine non disponibile" /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">Benvenuto nel magazzino</h1>
                <p>Questo sito web permette la gestione a 360 gradi del tuo magazzino, ti offre la possibilità di gestire e visualizzare ciascun movimento di merce effettuato ed inoltre consente di registrare qualsiasi articolo presente nel magazzino, in modo da tenere traccia delle scorte rimaste</p>
                <a class="btn btn-lg btn-success" href="#">Registra un articolo</a>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Articolo 1</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Altre Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Articolo 2</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Altre Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Articolo 3</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Altre Info</a></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center p-4" style="font-size: 1.25rem;">
        <span class="text-white">Tutti i diritti sono riservati. Copyright &copy</span>
    </footer>
</body>
</html>