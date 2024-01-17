<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisions</title>
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <livewire:people-manager />
    </div>
    
    @vite(['resources/js/app.js'])
    @livewireScripts
</body>
</html>