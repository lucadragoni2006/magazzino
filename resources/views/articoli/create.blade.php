<x-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh">
        <form method="POST" action="/articoli/store" class="container align-itmes-center justify-content-center shadow p-4 rounded w-25">
            @csrf
            <div class="mb-5 text-center">
                <h2>Aggiungi un Articolo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" fill="currentColor" class="bi bi-cart2 " viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="cod" placeholder="Codice" name="codice" value="{{old('codice')}}">
                    <label for="cod">Codice</label>
                    @error('codice')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="udm" placeholder="Unità di misura" name="unitadimisura" value="{{old('unitadimisura')}}">
                    <label for="udm">Unità di Misura</label>
                    @error('unitadimisura')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="quantitaIniziale" placeholder="Quantità iniziale" name="qtainiziale" value="{{old('qtainiziale')}}" disabled>
                    <label for="quantitaIniziale">Quantità Iniziale</label>
                    @error('qtainiziale')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="valoreIniziale" placeholder="Valore iniziale" name="valiniziale" value="{{old('valiniziale')}}" disabled>
                    <label for="valoreIniziale">Valore Iniziale</label>
                    @error('valiniziale')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="quantitaCarichi" placeholder="Quantità carichi" name="qtacarichi" value="{{old('qtacarichi')}}" disabled>
                    <label for="quantitaCarichi">Quantità Carichi</label>
                    @error('qtacarichi')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="valoreCarichi" placeholder="Valore carichi" name="valcarichi" value="{{old('valcarichi')}}" disabled>
                    <label for="valoreCarichi">Valore Carichi</label>
                    @error('valcarichi')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="number" class="form-control" id="quantitaScarichi" placeholder="Quantità scarichi" name="qtascarichi" value="{{old('qtascarichi')}}" disabled>
                    <label for="quantitaScarichi">Quantità Scarichi</label>
                    @error('qtascarichi')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="valoreScarichi" placeholder="Valore scarichi" name="valscarichi" value="{{old('valscarichi')}}" disabled>
                    <label for="valoreScarichi">Valore Scarichi</label>
                    @error('valscarichi')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="IVA" placeholder="Quantità carichi" name="iva" value="{{old('iva')}}">
                    <label for="IVA">Aliquota IVA</label>
                    @error('iva')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="prezzo-vendita" placeholder="Valore carichi" name="przvendita" value="{{old('przvendita')}}">
                    <label for="prezzo-vendita">Prezzo Vendita</label>
                    @error('przvendita')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3 ps-1">
                    <input type="text" class="form-control" id="Descrizione" placeholder="Descrizione" name="descrizione" value="{{old('descrizione')}}">
                    <label for="Descrizione">Breve Descrizione</label>
                    @error('descrizione')
                        <p class="text-danger" style="font-size: 0.75rem">{{$message}}</p>
                    @enderror
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