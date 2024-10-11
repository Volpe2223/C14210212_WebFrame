<div class="page-content">
    <h1 class="post_title">Organizer</h1>

    <div>
        <form action="{{ url('add_Organizer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Organizer Name</label><br>
                <input type="text" name="name">
            </div>

            <div>
                <label>Facebook</label><br>
                <input type="text" name="facebook_link">
            </div>
            <div>
                <label>X</label><br>
                <input type="text" name="x_link">
            </div>

            <div>
                <label>Website</label><br>
                <input type="text" name="website_link">
            </div>
            
            <div>
                <label>About</label><br>
                <textarea name="description"></textarea>
            </div>

            <div>
                <input type="submit" value="Save" class="btn btn-primary">
                <input type="reset" value="Cancel" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
