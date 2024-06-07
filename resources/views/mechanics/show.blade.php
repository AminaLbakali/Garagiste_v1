<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Mechanic Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $mechanic->name }}</td>
                </tr>
                <tr>
                    <th>Specialization</th>
                    <td>{{ $mechanic->specialization }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('mechanics.index') }}" class="btn btn-secondary">Back to Mechanics</a>
    </div>
</body>
</html>
 

