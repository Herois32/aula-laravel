<!DOCTYPE html>
<html>
<head>
	<title>{{ $titulo or 'Painel Curso' }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/painel/css/style.css') }}">
</head>
<body>
	<div class="container">

	@yield('conteudo')

    </div>

</body>
</html>