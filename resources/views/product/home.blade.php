<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)">All list
                </h2>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add New User</a>
            </div>
        </div>
        <br>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 mt-3">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Phone</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>

                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->age }}</td>
                                <td>{{ $product->email }}</td>
                                <td>{{ $product->city }}</td>
                                <td>{{ $product->phone }}</td>
                                <td><a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View</a>
                                </td>
                                <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td><a href="{{ route('product.destroy', $product->id) }}"
                                        class="btn btn-danger">Delete</a></td>

                            </tr>
                        @endforeach
                    </table>
                    <h3 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)">Design & Developed by
                        Aman Dev
                    </h3>
                </div>


            </div>
        </div>
    </div>



    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
