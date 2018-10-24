<html>

<head>


</head>

<body>
<h1>Welcome, {{$name}} </h1>

@foreach($arrayTest as $key => $value)

    <li><b>{{$key}}</b> = {{$value}}</li>

@endforeach

</body>

</html>
