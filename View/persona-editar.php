<!DOCTYPE html>
<html lang="es">

<head>
    <title>Computación</title>

    <meta charset="utf-8" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>
    <?php include('View/navbar.php') ?>
    </br>
    </br>
    </br>
    <div class="container">
        <h1 class="page-header text-center title">
            <?php echo $alm->id != null ? $alm->id : 'New Register'; ?>
        </h1>
    
        <div>
            <a href="?c=Persona" class="btn btn-success">Back</a>
            <a class="active"><?php echo $alm->id != null ? $alm->id : 'Nuevo Registro'; ?></a>
        </div>
        </br>

        <form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data" id="for_reset">

            <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />

            <div class="form-group">
                <label>Full name/ Group Name</label>
                <input type="text" name="names" value="<?php echo $alm->names; ?>" class="form-control"
                    placeholder="Enter Full Name" data-validacion-tipo="requerido|min:3" />
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" value="<?php echo $alm->subject; ?>" class="form-control"
                    placeholder="Enter meeting subject" data-validacion-tipo="requerido|min:3" />
            </div>
            <div class="form-group">
                <label>Date appointment</label>
                <input type="date" name="date" value="<?php echo $alm->date; ?>" class="form-control"
                    placeholder="Choose date" data-validacion-tipo="requerido|min:3" />
            </div>
            <div class="form-group">
                <label>Time appointment</label>
                <input type="time" name="time" value="<?php echo $alm->time; ?>" class="form-control"
                    placeholder="Choose Time" data-validacion-tipo="requerido|min:3" />
            </div>
            <hr />

            <div class="text-right">
                <button type="submit" class="btn btn-success">Save</button>
                <input type="button" class="btn btn-success" value="Reset"
                    onclick="window.location.href='?c=Persona&a=Crud'">
            </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
        config = {
            minDate: "today",
            maxDate: new Date().fp_incr(14) // 14 days from now
        }
        flatpickr("input[type=date]", config)
        config2 = {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            minTime: "9:00",
            maxTime: "16:00"
        }
        flatpickr("input[type=time]", config2)
        </script>

        <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>