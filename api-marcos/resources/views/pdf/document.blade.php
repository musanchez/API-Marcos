<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <!-- Incluyendo Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">{{ $title }}</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servants as $servant)
                    <tr>
                        <td>{{ $servant['id'] }}</td>
                        <td>{{ $servant['name'] }}:  {{ $servant['description'] }}</td>
                        <td>{{ $servant['class'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>