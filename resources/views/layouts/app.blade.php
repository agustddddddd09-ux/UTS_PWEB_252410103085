<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Taskly</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
        }

        .container {
            background-color: white;
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
        }

        h1 {
            color: #4f46e5;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        ul {
    display: block;
    width: fit-content;
    text-align: left;
    padding-left: 25px;
    margin: 10px auto 20px;
}

li {
    margin-bottom: 5px;
}

.container a {
    display: block;
    width: fit-content;
    margin: 15px auto 0;
}
    </style>
</head>

<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
