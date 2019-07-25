<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .w3-lobster {
            font-family: "Lobster", serif;
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    <div class="jumbotron text-center ">
        <h2 class="w3-container w3-lobster"><a href="/employees">Employees </a> |
            <a href="/companies">Companies</a>

        </h2>

    </div>
    @yield('content')
   
</body>

</html>