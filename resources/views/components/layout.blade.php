<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body class="mx-auto w-full h-full font-serif">
    <div>
        <x-navbar></x-navbar>
        <main>
            <div>{{ $slot }}</div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
