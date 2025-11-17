<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CDN global --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
    <style>
        header {
            background-color: green;
            text-align: center;
            padding: 10px;
        }
        footer {
            background-color: cyan;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        li {
            list-style-type: none;
        }
        h2 {
            font-weight: bold;
        }
    </style>
<body>
    <header></header>
    @yield('content') {{-- tempat halaman masuk di sini --}}

    <footer>Ini Footer</footer>
</body>

</html>