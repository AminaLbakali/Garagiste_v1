<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( 'resources/css/app.css' ,'resources/js/app.js' )
</head>
<body>

    <body class="bg-gray-100">
        <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Modifier Client</h1>
    
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom" value="{{ $client->nom }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
    
                <div class="mb-4">
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" value="{{ $client->prenom }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
    
                <div class="mb-4">
                    <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Adresse" value="{{ $client->adresse }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
    
                <div class="mb-4">
                    <label for="numero_telephone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                    <input type="text" name="numero_telephone" id="numero_telephone" placeholder="Numéro de téléphone" value="{{ $client->numero_telephone }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
    
                <div class="mb-4">
                    <label for="adresse_email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                    <input type="email" name="adresse_email" id="adresse_email" placeholder="Adresse e-mail" value="{{ $client->adresse_email }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
    
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Enregistrer
                </button>
            </form>
        </div>

</body>
</html>