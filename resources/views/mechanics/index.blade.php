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
        <h1>Mechanics</h1>
        <a href="{{ route('mechanics.create') }}" class="btn btn-primary mb-3">Add Mechanic</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mechanics as $mechanic)
                    <tr>
                        <td>{{ $mechanic->name }}</td>
                        <td>{{ $mechanic->specialization }}</td>
                        <td>
                            <a href="{{ route('mechanics.show', $mechanic->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('mechanics.edit', $mechanic->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('mechanics.destroy', $mechanic->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
