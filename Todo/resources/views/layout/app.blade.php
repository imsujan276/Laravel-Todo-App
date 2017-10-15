<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo List</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
		<div class="container">
			<div class="row">
				@section('body')
					@show
			</div>
		</div>

		<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>