<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css"> <!-- Pieraksta - / - pirms style.css, lai tas sāktos no sākuma un darbotos arī show.blade.php -->
    <title>{{ $title }}</title>
</head>
<body>
    {{ $slot }}
</body>
</html>