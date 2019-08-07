@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Exportando un archivo Excel</strong></div>
				<div class="panel-body">
					Exportaremos un archivo excel :D con Laravel 5.0. Laravel Excel PHPEXCEL
				</div>
			</div>

			<form action="/export" method="GET">
				<button class="btn btn-success">
					Exportar Excel
				</button>
			</form>
		</div>
	</div>
</div>
@endsection
