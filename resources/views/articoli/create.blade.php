<x-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="container align-itmes-center justify-content-center shadow p-4 rounded w-25">
            <div class="mb-5 text-center">
                <h2>Aggiungi un Articolo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" fill="currentColor" class="bi bi-cart2 " viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
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
                    <input type="number" class="form-control" id="IVA" placeholder="Quantità carichi">
                    <label for="IVA">Aliquota IVA</label>
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="prezzo-vendita" placeholder="Valore carichi">
                    <label for="prezzo-vendita">Prezzo Vendita</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="textarea" class="form-control" id="descrizione" placeholder="Descrizione">
                    <label for="descrizione">Breve Descrizione</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <button type="submit" class="btn btn-success btn-lg w-100">Aggiungi Articolo</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>