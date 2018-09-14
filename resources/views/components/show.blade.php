<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">Tasks Form</h3>
    @foreach($tasks as $task)
        <div class="form-group"> 
            <div class="row">
                <div class="col-md-10">
                    <h2>{{$task->title}}</h2>
                    <p> {{$task->content}}</p>
                    <p> {{$task->created_at->toFormattedDateString()}}</p>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger"><a href="/delete_post/{{$task->id}}" style="color:white";>Delete</a></button>
                </div>
            </div>
            <hr>    
        </div>
    @endforeach
    <button class="btn btn-primary" value="Add Task"><a href="{{url('/')}}" style="color:white";>Add Task </a></button>
</div>
<br>