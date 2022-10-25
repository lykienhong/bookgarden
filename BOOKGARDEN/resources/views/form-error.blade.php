<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<!-- xu ly hien thong bao loi -->
	@if($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach($errors->all() as $error)
	                <li>{{$error}}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	@if(\Session::get('success'))
	    <div class="alert alert-success">
	        <p>{{\Session::get('success')}}</p>
	    </div>
	@endif
</body>
</html>