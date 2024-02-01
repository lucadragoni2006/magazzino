<x-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form action="/movimenti/store" method="POST" class="d-flex align-itmes-center justify-content-center flex-column shadow p-4 rounded" style="width: 400px;">
            @csrf
            <div class="mb-5 text-center">
                <h2>Aggiungi Movimento</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-journal-text mt-1" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cod" name="codice">
                <label for="cod">Codice Articolo</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" name="causale">
                <option selected disabled>Causale</option>
                <option value="0">Saldo Iniziale</option>
                <option value="1">Acquisto</option>
                <option value="2">Vendita</option>
                <option value="3">Reso Cliente</option>
                <option value="4">Reso Fornitore</option>
            </select>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="documento" name="numdocumento">
                <label for="documento">Numero Documento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" id="data" class="form-control" name="datadocumento">
                <label for="data">Data Documento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="quantita" name="qtamovimentata">
                <label for="quantita">Quantità da Movimentare</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="valore" name="valunitario">
                <label for="valore">Valore Unitario</label>
            </div>
            <div class="form-floating mb-3" name="sconto">
                <input type="text" class="form-control" id="sconto">
                <label for="sconto">Sconto</label>
            </div>
            <button type="submit" class="btn btn-danger btn-lg">Aggiungi</button>
        </form>
    </div>
</x-layout>