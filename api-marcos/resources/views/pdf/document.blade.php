<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        /* Incluyendo Bootstrap en línea para que DomPDF lo procese */
        /* Esto es una parte esencial de Bootstrap CSS */
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        h1 {
            text-align: center;
            margin: 40px 0;
            font-size: 2.5rem;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $title }}</h1>
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
