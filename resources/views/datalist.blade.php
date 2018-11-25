<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/fontawesome/css/fontawesome.min.css">
	</head>
	<body style="margin: 7%">
		<div class="container">
			@if (session('status'))
			<div class="alert alert-success" align="center">
				<b>
				{{ session('status') }}
				</b>
			</div>
			@endif
			<br />
			<a href="{{ route('addForm')}}" class="btn btn-primary" style="margin-bottom: 10px">Add </a>
			@php
			$file_path = public_path(). '/contact_data.csv';
			$myfile = fopen($file_path , "r") or die("Unable to open file!");
			$csvdata = array();
			while(!feof($myfile)) {
			$csvdata[] = fgets($myfile);
			}
			fclose($myfile);
			@endphp
			<table class="table">
				@foreach($csvdata as $data)
				@php $newArr = explode(",", $data);  @endphp
				<tr>
					@foreach($newArr as $newdata)
					<th>{{ $newdata }}</th>
					@endforeach
				</tr>
				@endforeach
			</table>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="public/js/bootstrap.min.js"></script>
		</div>
	</body>
	</html>