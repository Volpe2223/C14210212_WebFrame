<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
        .table_deg {
            width: 30%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page-content">
        @if($organizer)
        <h2>{{ $organizer->name }}</h2>

        <table class="table_deg">
            <tr>
                <th>Facebook</th>
                <th>{{ $organizer->facebook_link }}</th>
            </tr>

            <tr>
                <th>X</th>
                <th>{{ $organizer->x_link }}</th>
            </tr>

            <tr>
                <th>Website</th>
                <th>{{ $organizer->website_link }}</th>
            </tr>



        </table>

        <h3>About</h3>
        <label>{{ $organizer->description }}</label>
        @else
            <p>No organizer found.</p>
        @endif
    </div>
</body>
</html>
