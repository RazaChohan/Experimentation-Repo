
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF=8"> 
<title>Categories</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
<div class="container">
<h1>Categories and Subcategories , dropdown menu</h1>
	<div class="col-lg-4">
{{Form::open(array('url' => '', 'files'=>true))}}
		<div class="form_group">
		<label for="">Categories</label>
		<select class="form-control input-sm" name="">
			<option value=""></option>
		</select>
		</div>

		<div class="form_group">
		<label for="">Sub Categories</label>
		<select class="form-control input-sm" name="">
			<option value=""></option>
		</select>
		</div>
		{{Form::close()}}



	</div>
</div>

</body>

</html>