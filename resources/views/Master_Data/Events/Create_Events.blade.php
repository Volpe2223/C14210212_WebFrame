<div class="page-content">
    <h1 class="post_title">Events</h1>

    <div>
        <form action="{{ url('add_Events') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Event Name</label><br>
                <input type="text" name="name">
            </div>

            <div>
                <label for="birthday">Date:</label><br>
                <input type="date" id="birthday" name="birthday">
            </div>

            <div>
                <label>Location</label><br>
                <input type="text" name="facebook_link">
            </div>
            <div>
                <label for="cars">Organizer</label><br>
                <select id="cars" name="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat" selected>Select Organizer ...</option>
                <option value="audi">Audi</option>
                </select>
            </div>

            <div>
                <label>Booking URL</label><br>
                <input type="text" name="website_link">
            </div>
            
            <div>
                <br>About</label><br>
                <textarea name="description"></textarea>
            </div>

            <div>
                <label>Tags</label><br>
                <input type="text" name="website_link">
            </div>

            <div>
                <input type="submit" value="Save" class="btn btn-primary">
                <input type="reset" value="Cancel" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
