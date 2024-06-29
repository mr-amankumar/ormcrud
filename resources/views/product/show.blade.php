<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)">Single User Data
        </h2>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id:</th>
                        <td>{{ $products->id }}</td>
                    </tr>
                    <tr>
                        <th>Name :</th>
                        <td>{{ $products->name }}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td>{{ $products->email }}</td>
                    </tr>

                    <tr>
                        <th>Age :</th>
                        <td>{{ $products->age }}</td>
                    </tr>
                    <tr>
                        <th>City:</th>
                        <td>{{ $products->city }}</td>
                    </tr>

                    <tr>
                        <th>Phone:</th>
                        <td>{{ $products->phone }}</td>
                    </tr>
                </table>

            </div>
        </div>
        <h3 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)" class="mt-3">Design & Developed
            by
            Aman Dev
        </h3>
    </div>

</body>

</html>
