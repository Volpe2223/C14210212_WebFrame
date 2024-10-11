<div class="page-content">
    <h1 class="post_title">Event Category</h1>

    <div>
        <form action="{{ url('add_Event_Category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Category Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <input type="submit" value="Save" class="btn btn-primary">
                <input type="reset" value="Cancel" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
