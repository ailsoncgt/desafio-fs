<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Fatura Simples</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<style>
		.container{
			margin-top: 150px;
		}
		.table{
			width: 100%;
		}
		.text-white{
			color: white;
		}
		#new-btn{
			float: right;
			margin-bottom: 15px;
			cursor: pointer;
		}
	</style>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<button type="button" class="btn btn-primary" id="new-btn">Novo Boleto</button>
					<table class="table table-striped">
					  	<thead>
					    	<tr>
							    <th scope="col">Venda</th>
							    <th scope="col">Cliente</th>
							    <th scope="col">Valor</th>
							    <th scope="col">Data vencimento</th>
							    <th scope="col">Link do boleto</th>
							    <th scope="col">Status</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					  		@foreach($list->data as $data)
						    	<tr>
						      		<th scope="row">{{ $data->id }}</th>
						      		<td>{{ $data->cliente->nome }}</td>
						      		<td>R$ {{ $data->valor_venda }}</td>
						      		<td>{{ $data->data_vencimento }}</td>
						      		<td>
						      			<a href="" target="_blank">link</a></td>
						      		<td><span class="badge badge-warning text-white">pendente</span></td>
						    	</tr>
					    	@endforeach
					  	</tbody>
					</table>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>