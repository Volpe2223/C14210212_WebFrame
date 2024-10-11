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

                <form action="{{ url('category/'.$category->id.'/update') }}" method="POST">
                    @csrf
                    <div class="form_group">
                        <label>Category Name</label><br>
                        <input type="text" name="name" value="{{ $category->name }}">
                    </div>

                    <div>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
            </form>
    </div>
</div>

