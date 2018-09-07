<html>

<head>
</head>

<body>
    @if(isset($tasks))
    <h2>TASK DETAIL</h2>
        @foreach($tasks as $task)
            {{$task->id}}<br/>
            {{$task->body}}<br/>
            {{$task->created_at}}<br/>
        @endforeach
    @endif
</body>
</html>