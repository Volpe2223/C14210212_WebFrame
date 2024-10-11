<!DOCTYPE html>
<html lang="en">
   <head>
    <style type="text/css">
        
    .table_deg
    {
        border: 2px solid black;
        width: 80%;
        text-align: center;
    }
    .icon 
    {
        cursor: pointer;
        margin: 0 5px;
    }
    .edit-icon 
    {
        color: yellow;
    }
    .delete-icon
    {
        color: red;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   </head>
   <body>
        <div class="page-content">
            <div>
                <h1 class="post_title">Event Category</h1>
                <ul>
                    <li class="active"><a href="{{url('create_kategori_events')}}">Create</a></li>
                    </ul>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table_deg">
                <tr>
                    <th>No</th>

                    <th>Event Category Name</th>

                    <th>Action</th>
                </tr>

                <tr>
                    @foreach($category_name as $category_name)
                    <td>{{$category_name->id}}</td>
                    <td>{{$category_name->name}}</td>

                    <td>
                        <a href="{{ url('category/'.$category_name->id.'/edit') }}" class="icon edit-icon"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ url('category/'.$category_name->id.'/delete') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="icon delete-icon"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>

   </body>
</html>

