
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
		<select class="form-control input-sm" name="category" id="category">
			@foreach($categories as $category)
			<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>
		</div>

		<div class="form_group">
		<label for="">Sub Categories</label>
		<select class="form-control input-sm" name="subcategory" id="subcategory" visibility="hidden">
			<option value=""></option>
		</select>
		</div>
		{{Form::close()}}



	</div>
</div>
<script>
	$('#category').on('change',function(e)
	{
		console.log(e);

		var cat_id=e.target.value;

		$.get('/ajax-subcat?cat_id=' + cat_id, function(data){
			$('#subcategory').empty();
			document.getElementById("subcategory").style.visibility="show";
			$.each(data, function(index, subcatObj){
				$('#subcategory').append('<option value="'+subcatObj.id +'">'+subcatObj.name+'</option>');
			});
		});
	});
</script
</body>

</html>