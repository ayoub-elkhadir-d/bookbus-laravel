<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bus Booking | Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
   
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 min-h-screen flex items-center justify-center">

    <!-- Card -->
    <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl w-full max-w-4xl p-10">

        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">Réservez votre voyage en bus</h1>
            <p class="text-gray-500 mt-2">Trouvez les meilleurs trajets au meilleur prix</p>
        </div>

        <!-- Search Engine -->
     <form method="GET" action="{{ route('search.results') }}"
      class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">

    <!-- From -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Départ</label>
        <select name="from_city" class="w-full rounded-xl border px-4 py-3 text-black">
            <option value="">Ville de départ</option>
            @foreach($segments as $segment)
                <option value="{{ $segment->departure_city }}">
                    {{ $segment->departure_city }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- To -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Destination</label>
        <select name="to_city" class="w-full rounded-xl border px-4 py-3 text-black">
            <option value="">Ville de destination</option>
            @foreach($segments as $segment)
                <option value="{{ $segment->arrival_city }}">
                    {{ $segment->arrival_city }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Date -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Date</label>
        <input type="date" name="date"
               class="w-full rounded-xl border px-4 py-3 text-black">
    </div>

    <button class="bg-indigo-600 text-white py-3 rounded-xl">
        Rechercher
    </button>
</form>


<hr class="my-10 border-gray-200">

@if(isset($results))
    <div class="mt-10">
        <h2 class="text-2xl font-bold mb-6">Résultats disponibles</h2>

        @forelse($results as $trip)
            <div class="p-5 mb-4 border rounded-xl shadow-sm">
                <div class="flex justify-between">
                    <div>
                        <strong>{{ $trip->departure_city }}</strong>
                        →
                        <strong>{{ $trip->arrival_city }}</strong>
                        <p class="text-sm text-gray-500">
                            Heure: {{ $trip->departure_time }}
                        </p>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-indigo-600">
                            {{ $trip->tarif }} MAD
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">Aucun trajet disponible</p>
        @endforelse
    </div>
@endif


    </div>

</body>
</html>
