<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hai ricevuto un nuovo messagio dal Blog: {{ config('app.name') }}
    <br>
    Email: {{ $email}}<br>
    Messaggio: {{ $content }}
</body>
</html>