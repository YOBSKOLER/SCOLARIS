<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-700 p-6 max-w-xl mx-auto text-white">
    @include('partials.header')

    <main>
        {{ $slot }}
    </main>
</body>

</html>
