<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .table_deg {
            border: 2px solid black;
            width: 80%;
            text-align: center;
        }
        .icon {
            cursor: pointer;
            margin: 0 5px;
        }
        .edit-icon {
            color: yellow;
        }
        .delete-icon {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="page-content">
        <div>
            <h1 class="post_title">Organizer</h1>
            <ul>
                <li class="active"><a href="{{ url('create_organizer') }}">Create</a></li>
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
                <th>Organizer Name</th>
                <th>About</th>
                <th>Action</th>
            </tr>

            @foreach($organizers as $organizer)
            <tr>
                <td>{{ $organizer->id }}</td>
                <td><div class="subscribe_bt"><a href="{{ url('organizer/'.$organizer->id) }}">{{ $organizer->name }}</a></div></td>
                <td>{{ $organizer->description }}</td>
                <td>
                    <a href="{{ url('organizer/'.$organizer->id.'/edit') }}" class="icon edit-icon"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('organizer/'.$organizer->id.'/delete') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="icon delete-icon"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
