<x-layout>
	<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 85vh">
		<div class="d-flex gap-3 my-3">
			<h2>Aggiungi un articolo</h2>
			<a href="/articoli/create">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-plus-circle-fill text-danger" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
				</svg>
			</a>
		</div>
		<table class="table table-striped table-hover table-secondary table-borderless w-100 p-5">
			<thead class="table-dark m-1">
				<tr>
					<th scope="col">Cod.</th>
					<th scope="col">Descr.</th>
					<th scope="col">Unità di misura</th>
					<th scope="col">Q.tà iniziale</th>
					<th scope="col">Val.Iniziale</th>
					<th scope="col">Q.tà Carichi</th>
					<th scope="col">Val.Carichi</th>
					<th scope="col">Q.tà Scarichi</th>
					<th scope="col">Val.Scarichi</th>
					<th scope="col">IVA</th>
					<th scope="col">Prz.Vendita</th>
					<th scope="col">Ult.Costo</th>
					<th scope="col">Modifica</th>
					<th scope="col">Rimuovi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($articoli as $articolo)
				<tr>
					<td>{{$articolo->codice}}</td>
					<td>{{$articolo->descrizione}}</td>
					<td>{{$articolo->unitadimisura}}</td>
					<td>{{$articolo->qtainiziale}}</td>
					<td>{{$articolo->valiniziale}}</td>
					<td>{{$articolo->qtacarichi}}</td>
					<td>{{$articolo->valcarichi}}</td>
					<td>{{$articolo->qtascarichi}}</td>
					<td>{{$articolo->valscarichi}}</td>
					<td>{{$articolo->iva}}</td>
					<td>{{$articolo->przvendita}}</td>
					<td>{{$articolo->ultimoprezzo}}</td>
					<td>
						<a href="/articoli/{{$articolo->id}}/edit">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-pen-fill text-primary" viewBox="0 0 16 16">
								<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
							</svg>
						</a>
					</td>
					<td>
						<form method="POST" action="/articoli/{{$articolo->id}}/delete">
							@csrf
							@method('DELETE')
							<span class="bg-transparent border-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16">
									<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
								</svg>
							</span>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center mt-5">
			{{$articoli->links()}}
		</div>
	</div>
</x-layout>