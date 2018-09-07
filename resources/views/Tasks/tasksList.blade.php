<html>

<head>
</head>

<body>
    @if(isset($tasks))
    <h2>TASKS</h2>
        @foreach($tasks as $task)
           <a href="{{url('tasks/'.$task->id)}}" > {{$task->body}}</a> <br/>
        @endforeach
    @endif
</body>
</html>