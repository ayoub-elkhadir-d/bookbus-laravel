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
        <form class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">

            <!-- From -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Départ</label>
                <select name="from_segment" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    <option value="">Ville de départ</option>
                    @foreach($segments as $segment)
                        <option value="{{ $segment->id }}">{{ $segment->departure_city }}</option>
                    @endforeach
                </select>
            </div>

            <!-- To -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Destination</label>
                <select name="to_segment" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    <option value="">Ville de destination</option>
                    @foreach($segments as $segment)
                        <option value="{{ $segment->id }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-black
           focus:ring-2 focus:ring-indigo-500 focus:outline-none">{{ $segment->departure_city }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Date -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Date</label>
                <input type="date"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <!-- Button -->
            <div class="flex items-end">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 rounded-xl hover:scale-105 transition-transform duration-300 shadow-lg">
                    Rechercher
                </button>
            </div>

        </form>

        <!-- Features -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 text-center">
            <div class="p-5 rounded-2xl bg-gray-50">
                <div class="text-indigo-600 text-3xl mb-2">🚌</div>
                <h3 class="font-semibold text-gray-800">Bus modernes</h3>
                <p class="text-sm text-gray-500 mt-1">Confort et sécurité garantis</p>
            </div>
            <div class="p-5 rounded-2xl bg-gray-50">
                <div class="text-indigo-600 text-3xl mb-2">⏱️</div>
                <h3 class="font-semibold text-gray-800">Réservation rapide</h3>
                <p class="text-sm text-gray-500 mt-1">En moins d'une minute</p>
            </div>
            <div class="p-5 rounded-2xl bg-gray-50">
                <div class="text-indigo-600 text-3xl mb-2">💳</div>
                <h3 class="font-semibold text-gray-800">Paiement sécurisé</h3>
                <p class="text-sm text-gray-500 mt-1">100% fiable et protégé</p>
            </div>
        </div>

    </div>

</body>
</html>
