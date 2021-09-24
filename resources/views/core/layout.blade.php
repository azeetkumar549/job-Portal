<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Portal - seek your way</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Jobs hi Jobs</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('recruitment')}}" class="nav-link">Recruitments</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @section('content')
            @show
    </div>

</body>
</html>
