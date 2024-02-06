<x-layout>
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 85vh">
		<div class="d-flex gap-3 my-3">
			<h2>Aggiungi un movimento</h2>
			<a href="/movimenti/create">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-plus-circle-fill text-danger" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
				</svg>
			</a>
		</div>
		<table class="table table-striped table-hover table-secondary table-borderless w-100 p-5">
			<thead class="table-dark m-1">
				<tr>
					<th scope="col">Cod.</th>
					<th scope="col">Causale</th>
					<th scope="col">Num. Documento</th>
					<th scope="col">Data Documento</th>
					<th scope="col">Q.tà movimentata</th>
					<th scope="col">Val. Unitario</th>
					<th scope="col">Sconto</th>
					<th scope="col">Modifica</th>
					<th scope="col">Rimuovi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($movimenti as $movimento)
				<tr>
					<td>{{$movimento->codice}}</td>
					<td>{{$movimento->causale}}</td>
					<td>{{$movimento->numdocumento}}</td>
					<td>{{$movimento->datadocumento}}</td>
					<td>{{$movimento->qtamovimentata}}</td>
					<td>{{$movimento->valunitario}}</td>
					<td>{{$movimento->sconto}}</td>
					<td>
						<a href="/movimenti/{{$movimento->id}}/edit">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-pen-fill text-primary" viewBox="0 0 16 16">
								<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
							</svg>
						</a>
					</td>
					<td>
						<form action="/movimenti/{{$movimento->id}}/delete" method="POST">
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
			{{$movimenti->links()}}
		</div>
	</div>
</x-layout>