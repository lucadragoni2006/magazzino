<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="container align-itmes-center justify-content-center shadow p-4 rounded gap-3 w-50">
        <div class="mb-5 text-center">
            <h2>Crea un Articolo</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="60" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
              </svg>
        </div>
        <div class="row">
            <div class="col form-floating mb-3 ps-1">
                <input type="text" class="form-control" id="cod" placeholder="Codice">
                <label for="cod">Codice</label>
            </div>
            <div class="col form-floating mb-3 ps-1">
                <input type="text" class="form-control" id="udm" placeholder="Unità di misura">
                <label for="udm">Unità di Misura</label>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="quantitaIniziale" placeholder="Quantità iniziale">
                <label for="quantitaIniziale">Quantità Iniziale</label>
            </div>
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="valoreIniziale" placeholder="Valore iniziale">
                <label for="valoreIniziale">Valore Iniziale</label>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="quantitaScarichi" placeholder="Quantità scarichi">
                <label for="quantitaScarichi">Quantità Scarichi</label>
            </div>
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="valoreScarichi" placeholder="Valore scarichi">
                <label for="valoreScarichi">Valore Scarichi</label>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="quantitaCarichi" placeholder="Quantità carichi">
                <label for="quantitaCarichi">Quantità Carichi</label>
            </div>
            <div class="col form-floating mb-3 ps-1">
                <input type="number" class="form-control" id="valoreCarichi" placeholder="Valore carichi">
                <label for="valoreCarichi">Valore Carichi</label>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating mb-3 ps-1">
                <input type="textarea" class="form-control" id="descrizione" placeholder="Descrizione">
                <label for="descrizione">Breve Descrizione</label>
            </div>
        </div>
       {{--  <button type="submit" class="btn btn-primary btn-lg">Submit</button> --}}
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>