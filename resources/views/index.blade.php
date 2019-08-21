@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de empresas</div>

                <div class="card-body">
					@if (\Session::has('success'))
						<div class="alert alert-success">
							<p>{{ \Session::get('success') }}</p>
						</div> <br>
						@endif
						<table class="table table-striped table-responsive">
							<thead>			
								<tr>				
									<th>#</th>
									<th>Empresa</th>
									<th>Sitio web</th>
									<th>correo</th>
									<th colspan="2">Action</th>
								</tr>
								<tbody>
									@foreach($empresas as $empresa)
									<tr>
										<td>{{ $empresa['id'] }}</td>
										<td>{{ $empresa['nombre'] }}</td>
										<td>{{ $empresa['sitioWeb']}}</td>
										<td>{{ $empresa['email']}}</td>
										<td>
											<a href="{{ action('EmpresaController@edit', $empresa['id'])}}" class="btn btn-success">editar</a>
											<form method="post" action="{{ action('EmpresaController@destroy', $empresa['id'])}}">
												@csrf
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger" type="submit">eliminar</button>
											</form>
											
										</td>
									</tr>
									@endforeach
								</tbody>
							</thead>
						</table>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection
