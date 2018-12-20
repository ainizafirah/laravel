<!doctype html>
<html>

<head>

	<title></title>

</head>
<body>
	<hl>create a model to store groceries </hl>

	<form method="POST" action="/tests">
		{{csrf_field()}}


		<div>
			<input type="text" name="title" placeholder="title">
		</div>
        
		<div>
	        <input type="text" name="price" placeholder="price">
		</div>
        
		<div>
	        <input type="text" name="imagePath" placeholder="imagePath">
		</div>

		<div>
	        <textarea name="description" placeholder="project description"></textarea>
		</div>

		<div>
			<button type="submit">Add grocery</button>
		</div>
	</form>

</body>
</html>
