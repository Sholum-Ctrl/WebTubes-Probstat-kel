
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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <title>Show Data</title>

    {{-- Data Tables --}}
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
    {{-- ending datatables --}}

</head>
<body>

    @extends('layout.master')

    @section('content')

    <div class="wrappershowdataset">
        <div class="form-box register">
            <div class="container">
                <a href="home">
                    <span class="icon-close">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </a>
                <div class="form-box">
                    <h2>DataSet</h2>
                    <div class="input-box">
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Punjab</th>
                                    <th>Haryana</th>
                                    <th>Rajasthan</th>
                                    <th>Delhi</th>
                                    <th>UP</th>
                                    <th>Uttarakha</th>
                                    <th>HP</th>
                                    {{-- <th>Pondy</th>
                                    <th>Chandigarh</th>
                                    <th>Chattisgarh</th>
                                    <th>Gujarat</th>
                                    <th>MP</th>
                                    <th>Maharashtra</th>
                                    <th>Goa</th>
                                    <th>DNH</th>
                                    <th>Andhra Pradesh</th>
                                    <th>Telangana</th>
                                    <th>Karnataka</th>
                                    <th>Kerala</th>
                                    <th>Tamil Nadu</th>
                                    <th>Pondy</th>
                                    <th>Bihar</th>
                                    <th>Jharkhand</th>
                                    <th>Odisha</th>
                                    <th>West Bengal</th>
                                    <th>Sikkim</th>
                                    <th>Arunachal</th>
                                    <th>Assam</th>
                                    <th>Manipur</th>
                                    <th>Meghalaya</th>
                                    <th>Mizoram</th>
                                    <th>Nagaland</th>
                                    <th>Tripura</th> --}}
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Time</th>
                                    <th>Punjab</th>
                                    <th>Haryana</th>
                                    <th>Rajasthan</th>
                                    <th>Delhi</th>
                                    <th>UP</th>
                                    <th>Uttarakha</th>
                                    <th>HP</th>
                                    {{-- <th>Pondy</th>
                                    <th>Chandigarh</th>
                                    <th>Chattisgarh</th>
                                    <th>Gujarat</th>
                                    <th>MP</th>
                                    <th>Maharashtra</th>
                                    <th>Goa</th>
                                    <th>DNH</th>
                                    <th>Andhra Pradesh</th>
                                    <th>Telangana</th>
                                    <th>Karnataka</th>
                                    <th>Kerala</th>
                                    <th>Tamil Nadu</th>
                                    <th>Pondy</th>
                                    <th>Bihar</th>
                                    <th>Jharkhand</th>
                                    <th>Odisha</th>
                                    <th>West Bengal</th>
                                    <th>Sikkim</th>
                                    <th>Arunachal</th>
                                    <th>Assam</th>
                                    <th>Manipur</th>
                                    <th>Meghalaya</th>
                                    <th>Mizoram</th>
                                    <th>Nagaland</th>
                                    <th>Tripura</th> --}}
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($dataset as $item)
                                <tr>
                                    <td>{{ $item->Time }}</td>
                                    <td>{{ $item->Punjab }}</td>
                                    <td>{{ $item->Haryana }}</td>
                                    <td>{{ $item->Rajasthan }}</td>
                                    <td>{{ $item->Delhi }}</td>
                                    <td>{{ $item->UP }}</td>
                                    <td>{{ $item->Uttarakha }}</td>
                                    <td>{{ $item->HP }}</td>
                                    {{-- <td>{{ $item->Pondy }}</td>
                                    <td>{{ $item->Chandigarh }}</td>
                                    <td>{{ $item->Chattisgarh }}</td>
                                    <td>{{ $item->Gujarat }}</td>
                                    <td>{{ $item->MP }}</td>
                                    <td>{{ $item->Maharashtra }}</td>
                                    <td>{{ $item->Goa }}</td>
                                    <td>{{ $item->DNH }}</td>
                                    <td>{{ $item->Andhra_Pradesh }}</td>
                                    <td>{{ $item->Telangana }}</td>
                                    <td>{{ $item->Karnataka }}</td>
                                    <td>{{ $item->Kerala }}</td>
                                    <td>{{ $item->Tamil_Nadu }}</td>
                                    <td>{{ $item->Pondy }}</td>
                                    <td>{{ $item->Bihar }}</td>
                                    <td>{{ $item->Jharkhand }}</td>
                                    <td>{{ $item->Odisha }}</td>
                                    <td>{{ $item->West_Bengal }}</td>
                                    <td>{{ $item->Sikkim }}</td>
                                    <td>{{ $item->Arunachal }}</td>
                                    <td>{{ $item->Assam }}</td>
                                    <td>{{ $item->Manipur }}</td>
                                    <td>{{ $item->Meghalaya }}</td>
                                    <td>{{ $item->Mizoram }}</td>
                                    <td>{{ $item->Nagaland }}</td>
                                    <td>{{ $item->Tripura }}</td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
