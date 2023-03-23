
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="jsquery.js"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <title>Show Data</title>
</head>
<body>

    @extends('layout.master')

    @section('content')

    <div class="wrappershowdata">
        <div class="form-box register">
            <div class="container">
                <a href="home">
                    <span class="icon-close">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </a>
                <div class="form-box register">
                    <h2>Hasil Prediksi</h2>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Tanggal</span>
                        <input name="hari2" type="text" class="form-control" />
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Prediksi</span>
                        <input name="hari2" type="text" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
