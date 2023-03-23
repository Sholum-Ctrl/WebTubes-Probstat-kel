
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <script src="jquery-3.6.3.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <script src="jsquery.js"></script>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <title>Document</title>
    </head>
    <body>
        @extends('layout.master')

        @section('content')

      <div class="container-xxl">
        <div class="#">
            <div class="row row-home">
                <div class="col-xxl-3 col-text">
                    <h1>The World</h1>
                    <hr>
                    <h1>Electrical Energy Consumption Data In india : What to Look for?</h1>
                </div>
                <div class="col-xxl-6 col-img ">
                    <div class="card">
                        <img src="/Image/fre-sonneveld-q6n8nIrDQHE-unsplash.jpg" class="img-fluid" alt="...">
                        <div class="img-title">
                            <h3>Energy Distribution</h3>
                            <p>Using High-Tension Pole</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-text-1 ">
                        <div class="card-text">
                            <h2>About</h2>
                            <hr>
                            <p>Excessive use of energy refers to using more energy than is necessary
                                for a given task or activity. This can lead to environmental problems,
                                such as increased greenhouse gas emissions and climate change, as well
                                as economic issues, such as higher energy bills and decreased energy
                                security.
                            </p>
                        </div>
                </div>
            </div>
            <div class="row row-content">
                <div class="col-xxl-3">
                    <button type="button" class="btn1 btn-secondary">About Dataset>></button>
                    <div class="text-head">See the DataSet</div>
                    <hr>
                    <div class="text-body">Text about Dataset</div>
                </div>
                <div class="col-xxl-3">
                    <button type="button" class="btn2 btn-secondary">Add some data>></button>
                    <div class="text-head">Enter data Into the Database</div>
                    <hr>
                    <div class="text-body">Text For if u want to add some data</div>
                </div>
                <div class="col-xxl-3">
                    <button type="button" class="btn3 btn-secondary">Other Menu>></button>
                    <div class="text-head">Next Menu</div>
                    <hr>
                    <div class="text-body">Text about Other menu</div>
                </div>
                <div class="col-xxl-3">
                    <button type="button" class="btn4 btn-secondary">See all Member>></button>
                    <div class="text-head">Our Member</div>
                    <hr>
                    <div class="text-body">Section that explains about our Member</div>
                </div>
            </div>
        </div>
        </div>

        @endsection
    </body>
</html>
