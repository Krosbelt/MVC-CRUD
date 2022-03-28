<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment App!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body class="bg-light bg-gradient">

    <div class="container d-flex justify-content-center align-items-center vh-100 ">
        <div class="row">
            <div class="co-lg-12 md-12 ">
                <h1 class="text-center title fw-bold">Appointment App!</h1>
                <br />
                <br />
                <br />
                <br />
                <img width="600" height="900" class="img-fluid" src="assets/img/home.png" alt="Photo Home" ;>
                <br />
                <br />

                <div class="d-flex justify-content-center mt-3 gap-5">
                    <!-- Button Add Appointment -->
                    <a type="button" class="btn btn-success fw-bold"  href="?c=Persona&a=Crud" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-calendar" viewBox="0 0 16 16">
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        Add Apointment
                    </a>
                    <!-- Sign In -->
                    <a type="button" class="btn btn-success fw-bold" href="?c=Persona&a=Citas" >
                        Administrador
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>