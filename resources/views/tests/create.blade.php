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
			<input type="text" name="item" placeholder="item">
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
