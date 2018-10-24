<html>

<head>


</head>

<body>
@foreach($tasks as $task)

    <li><a href="<?= url('/') ?>/task/{{$task->id}}">{{$task->body}}</a></li>

@endforeach

</body>

</html>
