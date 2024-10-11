<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .form_group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="page-content">
        <h1>Edit Organizer</h1>


        
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('organizer/'.$organizer->id.'/update') }}" method="POST">
                    @csrf
                    <div class="form_group">
                        <label>Organizer Name</label><br>
                        <input type="text" name="name" value="{{ $organizer->name }}">
                    </div>

                    <div class="form_group">
                        <label>Facebook</label><br>
                        <input type="text" name="facebook_link" value="{{ $organizer->facebook_link }}">
                    </div>

                    <div class="form_group">
                        <label>X</label><br>
                        <input type="text" name="x_link" value="{{ $organizer->x_link }}">
                    </div>

                    <div class="form_group">
                        <label>Website</label><br>
                        <input type="text" name="website_link" value="{{ $organizer->website_link }}">
                    </div>

                    <div class="form_group">
                        <label>About</label><br>
                        <input type="text" name="description" value="{{ $organizer->description }}">
                    </div>

                    <div>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
            </form>
    </div>
</div>

