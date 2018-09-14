<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
    Tasks Form
    </h3>
    <form action="/add_post" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="usr">Title:</label>
            <input type="text" class="form-control" id="usr" name="title" >
        </div>
        <div class="form-group">
            <label for="pwd">Content:</label>
            <textarea class="form-control" id="pwd" name="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
    <button class="btn btn-success"><a href="/show_post" style="color:white;">Show Posts</a></button>
</div>