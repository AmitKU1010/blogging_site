<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('/')}}/otp/verify/{{Auth::user()->id}}" class="card-body">
	<h1>Enter Otp</h1>
	<input type="text" name="otp">

<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>