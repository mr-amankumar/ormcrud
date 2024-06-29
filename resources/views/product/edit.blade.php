<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <body>

        <div class="container">
            <form action="{{ route('products.update', $products->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h2 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)">Crud Application
                            ORM
                        </h2>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                    </div>
                    <div class="col-md-4">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" value="{{ $products->age }}">
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="{{ $products->city }}">
                    </div>
                    <div class="col-md-4">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" value="{{ $products->email }}">
                    </div>
                    <div class="col-md-2"></div>
                </div>


                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <label for="city">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{ $products->phone }}">
                    </div>
                    <div class="col-md-4 mt-4">
                        <input type="submit" class="btn btn-primary" value="Update Product">
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h4 style="text-align: center;color:yellow;background-color:rgb(107, 93, 121)">Developed &
                            Design by
                            Aman Developer</h4>

                    </div>

                </div>

            </form>
        </div>
    </body>
</body>

</html>
