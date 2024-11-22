<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invfest</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    {{-- Start Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logoatas.png" alt="" style="width: 5%">Web
                Title</a>
            <span class="navbar-text">
                <!-- Button trigger modal -->
                <a href="{{ '/loginn' }}"><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Login
                    </button></a>
                <!-- Modal -->
            </span>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Content --}}
    <div class="content">
        <div class="text-center">
            <h2>Get Started Here</h2>
            <a href="/dashboard">
                <button class="btn btn-dark">Click Here</button>
            </a>
        </div>
    </div>
    {{-- End Content --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
