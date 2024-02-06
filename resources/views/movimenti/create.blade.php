<x-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh">
        <form action="/movimenti/store" method="POST" class="container align-itmes-center justify-content-center shadow p-4 rounded w-25">
            @csrf
            <div class="mb-5 text-center">
                <h2>Aggiungi Movimento</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-journal-text mt-1" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="cod" name="codice" placeholder="Codice" value="{{old('codice')}}">
                    <label for="cod">Codice Articolo</label>
                    @error('codice')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="quantita" name="qtamovimentata" placeholder="quantita" value="{{old('qtamovimentata')}}">
                    <label for="quantita">Q.tà Movimentata</label>
                    @error('qtamovimentata')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating-mb-3 ps-1">
                    <input type="text" class="form-control" name="descrizione" id="descr" placeholder="Descrizione" disabled>
                    <label for="descr"></label>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 ps-1">
                    <select class="form-select" aria-label="Default select example" name="causale">
                        <option selected disabled>Causale</option>
                        <option value="0">Saldo Iniziale</option>
                        <option value="1">Acquisto</option>
                        <option value="2">Vendita</option>
                        <option value="3">Reso Cliente</option>
                        <option value="4">Reso Fornitore</option>
                    </select>
                    @error('causale')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="date" id="data" class="form-control" name="datadocumento" value="{{old('datadocumento')}}">
                    <label for="data">Data Documento</label>
                    @error('datadocumento')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="documento" name="numdocumento" placeholder="numerodocumento" value="{{old('numdocumento')}}">
                    <label for="documento">Num. Documento</label>
                    @error('numdocumento')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="valore" name="valunitario" placeholder="val" value="{{old('valunitario')}}">
                    <label for="valore">Valore Unitario</label>
                    @error('valunitario')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1" name="sconto">
                    <input type="text" class="form-control" id="sconto" placeholder="scon" name="sconto" value="{{old('sconto')}}">
                    <label for="sconto">Sconto</label>
                    @error('sconto')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <button type="submit" class="btn btn-danger btn-lg w-100">Aggiungi</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>