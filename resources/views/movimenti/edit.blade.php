<x-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh">
        <form action="/movimenti/{{$movimento->id}}" method="POST" class="container align-itmes-center justify-content-center shadow p-4 rounded w-25">
            @csrf
            @method('PUT')
            <div class="mb-5 text-center">
                <h2>Modifica Movimento</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-journal-text mt-1" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="cod" name="codice" placeholder="Codice" value="{{$movimento->codice}}">
                    <label for="cod">Codice Articolo</label>
                    @error('codice')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="quantita" name="qtamovimentata" placeholder="quantita" value="{{$movimento->qtamovimentata}}">
                    <label for="quantita">Q.tà Movimentata</label>
                    @error('qtamovimentata')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating-mb-3 ps-1">
                    <input type="text" class="form-control" name="descrizione" id="descr" placeholder="Descrizione" value="{{$descrizione}}" disabled>
                    <label for="descr"></label>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 ps-1">
                    <select class="form-select" aria-label="Default select example" name="causale">
                        <option selected disabled>Causale</option>
                        @foreach ($options as $option)
                            <option value="{{$option}}" {{($option == old('causale', $movimento->causale)) ? 'selected' : ''}}>{{$option}}</option>
                        @endforeach
                    </select>
                    @error('causale')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="date" id="data" class="form-control" name="datadocumento" value="{{$movimento->datadocumento}}">
                    <label for="data">Data Documento</label>
                    @error('datadocumento')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="documento" name="numdocumento" placeholder="numerodocumento" value="{{$movimento->numdocumento}}">
                    <label for="documento">Num. Documento</label>
                    @error('numdocumento')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="valore" name="valunitario" placeholder="val" value="{{$movimento->valunitario}}">
                    <label for="valore">Valore Unitario</label>
                    @error('valunitario')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1" name="sconto">
                    <input type="text" class="form-control" id="sconto" placeholder="scon" name="sconto" value="{{$movimento->sconto}}">
                    <label for="sconto">Sconto</label>
                    @error('sconto')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>  
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <button type="submit" class="btn btn-danger btn-lg w-100">Modifica</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>