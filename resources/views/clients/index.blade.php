<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( 'resources/css/app.css', 'resources/js/app.js' )
</head>
<body>
    <h1 class="text-3xl font-bold mb-4">Liste des Clients</h1>

    @if(session('success'))
        <div class="text-green-500">{{ session('success') }}</div>
    @endif
    
    <table class="border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-200 px-4 py-2">Nom</th>
                <th class="border border-gray-200 px-4 py-2">Prénom</th>
                <th class="border border-gray-200 px-4 py-2">Adresse</th>
                <th class="border border-gray-200 px-4 py-2">Numéro de téléphone</th>
                <th class="border border-gray-200 px-4 py-2">Adresse e-mail</th>
                <th class="border border-gray-200 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td class="border border-gray-200 px-4 py-2">{{ $client->nom }}</td>
                <td class="border border-gray-200 px-4 py-2">{{ $client->prenom }}</td>
                <td class="border border-gray-200 px-4 py-2">{{ $client->adresse }}</td>
                <td class="border border-gray-200 px-4 py-2">{{ $client->numero_telephone }}</td>
                <td class="border border-gray-200 px-4 py-2">{{ $client->adresse_email }}</td>
                <td class="border border-gray-200 px-4 py-2">
                    <a href="{{ route('clients.edit', $client->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')" class="text-red-600 hover:underline">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('clients.create') }}" class="block mt-4 text-blue-600 hover:underline">Ajouter un Client</a>
    
        
</body>
</html>