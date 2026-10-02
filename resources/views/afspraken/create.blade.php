<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak inplannen - FietsFix</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <main class="max-w-2xl mx-auto px-6 py-10">

        <div class="bg-white rounded-2xl shadow-md p-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                Afspraak inplannen 🚲
            </h1>

            <p class="text-gray-500 mb-8">
                Vul hieronder je gegevens in om een afspraak bij FietsFix te maken.
            </p>
            
            <form action="/afspraken" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="naam" class="block text-sm font-semibold text-gray-700 mb-1">
                        Naam
                    </label>
                    <input
                        type="text"
                        id="naam"
                        name="naam"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                               focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">
                        Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                               focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                    >
                </div>

                <div>
                    <label for="telefoonnummer" class="block text-sm font-semibold text-gray-700 mb-1">
                        Telefoonnummer
                    </label>
                    <input
                        type="text"
                        id="telefoonnummer"
                        name="telefoonnummer"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                               focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                    >
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="fietstype" class="block text-sm font-semibold text-gray-700 mb-1">
                            Fietstype
                        </label>
                        <input
                            type="text"
                            id="fietstype"
                            name="fietstype"
                            required
                            placeholder="Bijv. E-bike"
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                                   focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        >
                    </div>

                    <div>
                        <label for="fietsmerk" class="block text-sm font-semibold text-gray-700 mb-1">
                            Fietsmerk
                        </label>
                        <input
                            type="text"
                            id="fietsmerk"
                            name="fietsmerk"
                            required
                            placeholder="Bijv. Gazelle"
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                                   focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        >
                    </div>
                </div>

                <div>
                    <label for="probleem" class="block text-sm font-semibold text-gray-700 mb-1">
                        Probleem
                    </label>
                    <textarea
                        id="probleem"
                        name="probleem"
                        rows="4"
                        required
                        placeholder="Beschrijf wat er mis is met je fiets..."
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                               focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                    ></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="datum" class="block text-sm font-semibold text-gray-700 mb-1">
                            Datum
                        </label>
                        <input
                            type="date"
                            id="datum"
                            name="datum"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                                   focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        >
                    </div>

                    <div>
                        <label for="tijd" class="block text-sm font-semibold text-gray-700 mb-1">
                            Tijd
                        </label>
                        <input
                            type="time"
                            id="tijd"
                            name="tijd"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                                   focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        >
                    </div>
                </div>

                <button
                    type="submit"
                    class="w-full bg-green-600 text-white font-bold py-3 rounded-lg
                           hover:bg-green-700 transition shadow-sm"
                >
                    🚲 Afspraak inplannen
                </button>

            </form>
        </div>

    </main>

</body>
</html>